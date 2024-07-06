<?php

namespace App\Http\Controllers;

use App\Mail\NewPropertyNotification;
use App\Mail\PropertyStatusUpdateNotification;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

class PropertyController extends BaseController
{

    public function getList(Request $request)
    {
        $query = Property::with(["user", "category", "village", "town", "state"]);

        // Filter by status
        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        // Search term filter
        if ($searchTerm = $request->input('search')) {
            $query->where(function ($q) use ($searchTerm) {
                $q->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('address', 'like', '%' . $searchTerm . '%')
                    ->orWhere('street', 'like', '%' . $searchTerm . '%')
                    ->orWhere('village_name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('town_name', 'like', '%' . $searchTerm . '%');
            });
        }

        // Filter by type
        if ($type = $request->input('type')) {
            $query->where('type', $type);
        }

        // Filter by category_id
        if ($category_id = $request->input('category_id')) {
            $query->where('category_id', $category_id);
        }

        // Filter by state_name
        if ($state_name = $request->input('state_name')) {
            $query->where('state_name', $state_name);
        }

        // Filter by price range
        if ($min_price = $request->input('min_price')) {
            $query->where('price', '>=', $min_price);
        }
        if ($max_price = $request->input('max_price')) {
            $query->where('price', '<=', $max_price);
        }

        // Filter by size range
        if ($min_size = $request->input('min_size')) {
            $query->where('size', '>=', $min_size);
        }
        if ($max_size = $request->input('max_size')) {
            $query->where('size', '<=', $max_size);
        }

        $properties = $query->latest()->get();

        return response()->json($properties);
    }


    public function get($id)
    {
        $property = Property::with(["user", "category", "village", "town", "state"])->find($id);

        if (!$property) {
            return response()->json(['error' => 'Property not found'], 404);
        }

        return response()->json($property);
    }

    public function delete($id)
    {
        $property = Property::findOrFail($id);

        if (!$property) {
            return response()->json(['error' => 'Property not found'], 404);
        }

        $property->delete();

        return response()->json(
            [
                'success' => true
            ]
        );
    }

    public function update($id, Request $request)
    {
        $data = $request->all();

        // Handle image URL if provided
        if ($imageUrl = $request->get("image_url")) {
            $data["image"] = $imageUrl;
        }

        // Handle base64 image if provided
        if ($image64 = $request->get("image")) {
            $extension = explode('/', explode(':', substr($image64, 0, strpos($image64, ';')))[1])[1];   // .jpg .png .pdf
            $replace = substr($image64, 0, strpos($image64, ',') + 1);
            $image = str_replace($replace, '', $image64);
            $image = str_replace(' ', '+', $image);
            $imageName = Str::random(10) . '.' . $extension;

            Storage::disk('public')->put($imageName, base64_decode($image));
            $data["image"] = Storage::disk("public")->url($imageName);
        }

        $property = Property::findOrFail($id);


        // Check if the user updating is the property owner or an admin
        $user = Auth::user();
        if ($user->id == $property->user_id || $user->role_id == 1) {
            $oldStatus = $property->status;
            $newStatus = $data['status'] ?? $oldStatus;

            $property->update($data);
            $property->save();

            // Get the admin's email dynamically
            $adminEmail = User::where('role_id', 1)->value('email');

            // Get the property owner's email
            $propertyOwnerEmail = $property->user->email;

            // Send email notification only if the property owner is not the updater
            if ($user->id != $property->user_id && $propertyOwnerEmail) {
                config(['mail.from.address' => $adminEmail]);
                // Determine notification type based on status change
                if ($oldStatus != $newStatus) {
                    if ($newStatus == 'approved') {
                        Mail::to($propertyOwnerEmail)->send(new PropertyStatusUpdateNotification($property, 'approved'));
                    } elseif ($newStatus == 'unapproved') {
                        Mail::to($propertyOwnerEmail)->send(new PropertyStatusUpdateNotification($property, 'unapproved'));
                    }
                }
            }
        } else {
            // If the user is not the property owner or an admin, deny update (or handle as needed)
            return response()->json([
                'error' => 'Unauthorized to update property status.',
            ], 403);
        }

        return response()->json($property);
    }
    public function create(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'type' => 'required|in:sale,rent,booking',
            'status' => 'required|in:pending,approved,unapproved',
            'address' => 'nullable',
            'image' => 'nullable',
            'street' => 'nullable',
            'village_name' => 'nullable',
            'town_name' => 'nullable',
            'state_name' => 'nullable',
            'size' => 'nullable|integer',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'is_featured' => 'sometimes|boolean',
        ]);

        // Gather all request data
        $data = $request->all();
        $data["user_id"] = Auth::user()->id;

        // // Handle image URL if provided
        // if ($imageUrl = $request->get("image_url")) {
        //     $data["image"] = $imageUrl;
        // }

        // if ($image64 = $request->get("image")) {
        //     // Extract image extension
        //     $extension = explode('/', explode(':', substr($image64, 0, strpos($image64, ';')))[1])[1]; // .jpg, .png, etc.
        //     // Remove the base64 part before the comma
        //     $replace = substr($image64, 0, strpos($image64, ',') + 1);
        //     $image = str_replace($replace, '', $image64);
        //     $image = str_replace(' ', '+', $image);
        //     // Generate a random name for the image
        //     $imageName = Str::random(10) . '.' . $extension;

        //     // Store the image
        //     Storage::disk('public')->put($imageName, base64_decode($image));
        //     // Get the URL of the stored image
        //     $data["image"] = Storage::disk('public')->url($imageName); // or asset($imageName)
        // }

        // Create the Property record
        $property = Property::create($data);

        // Get the admin's email dynamically
        $adminEmail = User::where('role_id', 1)->value('email');

        // Get the user's email who created the property
        $userEmail = Auth::user()->email;

        // Ensure admin email is fetched before attempting to send email
        if ($adminEmail && $userEmail) {
            // Set the FROM address dynamically
            config(['mail.from.address' => $userEmail]);
            // Send email notification to admin
            Mail::to($adminEmail)->send(new NewPropertyNotification($property));
        } else {
            // Handle case where admin email or user email is not found
        }
        // Return a JSON response
        return response()->json([
            'data' => $property,
            'success' => true
        ]);
    }
}
