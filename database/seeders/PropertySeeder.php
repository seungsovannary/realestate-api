<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run()
    {
        $properties = [
            [
                'user_id' => 1,
                'category_id' => 1,
                'type' => 'sell',
                'name' => 'Luxury Villa',
                'description' => 'A beautiful luxury villa with a sea view.',
                'image' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/307381810.jpg?k=5aa5b09faa405a122bc69de6f6952c8b6b423b414f2e2cb90d408fa3420d56e7&o=&hp=1',
                'status' => 'approved',
                'price' => 500000.00,
                'address' => '123',
                'street' => 'Beachside Drive',
                'village_id' => 1,
                'town_id' => 2,
                'state_id' => 1,
                'size' => 3000,
                'latitude' => 10.762622,
                'longitude' => 106.660172,
                'is_featured' => true,
            ],
            [
                'user_id' => 2,
                'category_id' => 2,
                'type' => 'rent',
                'name' => 'City Apartment',
                'description' => 'A modern apartment in the heart of the city.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsa2A0q4J7gXIh-r0edb38txrmT_8lN1OnBw&s',
                'status' => 'pending',
                'price' => 1500.00,
                'address' => '456 ',
                'street' => 'Downtown Ave',
                'village_id' => 1,
                'town_id' => 2,
                'state_id' => 1,
                'size' => 900,
                'latitude' => 40.712776,
                'longitude' => -74.005974,
                'is_featured' => false,
            ],
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}
