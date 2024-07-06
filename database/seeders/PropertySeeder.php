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
                'type' => 'sale',
                'name' => 'Luxury Villa',
                'description' => 'A beautiful luxury villa with a sea view.',
                'image' => 'https=>//cf.bstatic.com/xdata/images/hotel/max1024x768/367980480.jpg?k=5ef459e33492388e26ef9e9b7839f2891fc67e19898ecd9f4815151fa927e92e&o=&hp=1',
                'status' => 'approved',
                'price' => 500000.00,
                'address' => '123',
                'street' => 'Beachside Drive',
                'village_name' => "",
                'town_name' => "",
                'state_name' => "",
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
                'image' => 'https=>//static01.nyt.com/images/2022/09/23/realestate/23BIGTOWERS-NEW-02/23BIGTOWERS-NEW-02-mobileMasterAt3x.jpg',
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
            ], [
                'user_id' => 2,
                'category_id' => 6,
                'type' => 'sale',
                'name' => 'Jungle Oasis Retreat',
                'description' => 'Secluded luxury villa nestled amidst lush Cambodian jungle. Enjoy the sounds of nature, a private pool, and easy access to nearby temples and ruins.',
                'image' => 'https=>//soulseedmedia.com/wp-content/uploads/2023/06/128af530-9976-485f-b861-dff17d0383bc.jpeg',
                'status' => 'approved',
                'price' => 900000.00,
                'address' => '23',
                'street' => 'Jungle Path Lane',
                'village_name' => "",
                'town_name' => 'Siem Reap',
                'state_name' => "",
                'size' => 2800,
                'latitude' => 13.685000,
                'longitude' => 100.333333,
                'is_featured' => false,
            ], [
                'user_id' => 2,
                'category_id' => 6,
                'type' => 'sale',
                'name' => 'Riverside Retreat',
                'description' => 'Elegant villa with stunning views of the Mekong River. Relax by the pool, explore the vibrant city life nearby, or embark on a river cruise adventure.',
                'image' => 'Riverside Retreat',
                'status' => 'approved',
                'price' => 1800000.00,
                'address' => '56',
                'street' => 'Riverside Boulevard',
                'village_name' => "Phnom Penh Thmey",
                'town_name' => 'Phnom Penh',
                'state_name' => "",
                'size' => 4200,
                'latitude' => 11.566667,
                'longitude' => 104.900000,
                'is_featured' => true,
            ], [
                'user_id' => 2,
                'category_id' => 6,
                'type' => 'sale',
                'name' => 'Cambodian Coastal Getaway',
                'description' => 'https=>//encrypted-tbn0.gstatic.com/images?q=tbn=>ANd9GcR7U4IhDKhzLNuqLUQdR_XkzTfvn21FsKcrqtmT70Bnru4tVL9ugbSi7kB6gxOE',
                'image' => 'COASTAL_VILLA.JPG',
                'status' => 'approved',
                'price' => 2500000.00,
                'address' => 'N/A',
                'street' => 'N/A',
                'village_name' => "Sihanoukville",
                'town_name' => 'Sihanoukville',
                'state_name' => "",
                'size' => 3500,
                'latitude' => 11.890000,
                'longitude' => 103.580000,
                'is_featured' => true,
            ], [
                'user_id' => 2,
                'category_id' => 1,
                'type' => 'sale',
                'name' => 'Khmer-Style Lakeside Villa',
                'description' => 'Immerse yourself in Cambodian culture with this unique villa featuring traditional Khmer architecture. Enjoy stunning lake views, a private pool, and a tranquil atmosphere.',
                'image' => 'https=>//encrypted-tbn0.gstatic.com/images?q=tbn=>ANd9GcSvn4312606PbcDsUo52Jsp7ZdnILBe4Wk-AA&s',
                'status' => 'approved',
                'price' => 1200000.00,
                'address' => '42',
                'street' => 'Lakeside Lane',
                'village_name' => "",
                'town_name' => 'Kampong Cham',
                'state_name' => "",
                'size' => 2500,
                'latitude' => 12.170000,
                'longitude' => 105.380000,
                'is_featured' => false,
            ], [
                'user_id' => 2,
                'category_id' => 6,
                'type' => 'sale',
                'name' => 'Colonial Charm Villa',
                'description' => 'Step back in time with this beautifully restored colonial villa in the heart of Phnom Penh. Featuring high ceilings, original hardwood floors, and a private courtyard, this villa offers a unique blend of history and luxury.',
                'image' => 'https=>//aparnakaushik.com/images/exhibition/5a22e9aaece73faa581142aba492f05c.jpg',
                'status' => 'approved',
                'price' => 1500000.00,
                'address' => '111',
                'street' => 'Street 178',
                'village_name' => "",
                'town_name' => 'Phnom Penh',
                'state_name' => "",
                'size' => 3200,
                'latitude' => 11.560000,
                'longitude' => 104.910000,
                'is_featured' => false,
            ], [
                'user_id' => 1,
                'category_id' => 3,
                'type' => 'sale',
                'name' => 'Rice Paddy Land (Takeo Province)',
                'description' => 'Large plot of fertile rice paddy land, ideal for agricultural investment.',
                'image' => 'https=>//cdn.britannica.com/94/126694-050-B600BD67/Paddy-fields-Inawashiro-Lake-Fukushima-prefecture-Japan.jpg',
                'status' => 'approved',
                'price' => 30000.00,  // Price per square meter (adjust based on location)
                'address' => 'National Road 6A',
                'street' => '',
                'village_name' => '',
                'town_name' => '',
                'state_name' => 'Takeo',
                'size' => 100000,  // Square meters (adjust based on actual size)
                'latitude' => 10.823056,
                'longitude' => 104.770556,
                'is_featured' => false,
            ], [
                'user_id' => 1,
                'category_id' => 1,  // Apartment category
                'type' => 'sale',
                'name' => 'Modern Condo in BKK1',
                'description' => 'Sleek and stylish apartment in Phnom Penh\'s trendy BKK1 district.',
                'image' => 'https=>//images.khmer24.co/24-05-01/modern-condo-in-bkk1-977239171455310396201628-c.jpg',
                'status' => 'approved',
                'price' => 250000.00,  // Adjust price based on size and location
                'address' => 'Street 311',
                'street' => '',
                'village_name' => '',
                'town_name' => 'Phnom Penh',
                'state_name' => '',
                'size' => 80,  // Square meters (adjust based on actual size)
                'latitude' => 11.560000,
                'longitude' => 104.910000,  // Placeholder, replace with actual coordinates
                'is_featured' => false
            ], [
                'user_id' => 1,
                'category_id' => 1,
                'type' => 'sale',
                'name' => 'Luxury Apartment',
                'description' => 'A modern apartment with city views.',
                'image' => 'https=>//www.apartments.com/blog/sites/default/files/styles/large/public/image/2023-06/the-huntley-atlanta-ga-luxury-apartment-view.jpg?itok=l26TswZZ',
                'status' => 'approved',
                'price' => 300000.00,
                'address' => '456',
                'street' => 'City Center Street',
                'village_name' => "",
                'town_name' => "",
                'state_name' => "",
                'size' => 1500,
                'latitude' => 11.573627,
                'longitude' => 104.921453,
                'is_featured' => false,
            ], [
                'user_id' => 1,
                'category_id' => 2,
                'type' => 'sale',
                'name' => 'Modern Condo',
                'description' => 'A stylish condo unit with great amenities.',
                'image' => 'https=>//www.decorilla.com/online-decorating/wp-content/uploads/2022/12/Modern-condo-decorating-ideas-AD.jpg',
                'status' => 'approved',
                'price' => 400000.00,
                'address' => '789',
                'street' => 'Condo Avenue',
                'village_name' => "",
                'town_name' => "",
                'state_name' => "",
                'size' => 2000,
                'latitude' => 11.558654,
                'longitude' => 104.913485,
                'is_featured' => false,
            ],
            [
                'user_id' => 1,
                'category_id' => 3,
                'type' => 'sale',
                'name' => 'Luxury Hotel',
                'description' => 'A luxurious hotel overlooking the river.',
                'image' => 'https=>//encrypted-tbn1.gstatic.com/images?q=tbn=>ANd9GcQWSESQmfNTgf2Pp9O7prY0qgJ8CHf2VY9fbMha1tZRWcf6ViuQPIBOopPsrfM_',
                'status' => 'approved',
                'price' => 1000000.00,
                'address' => '987',
                'street' => 'Riverside Road',
                'village_name' => "",
                'town_name' => "",
                'state_name' => "",
                'size' => 5000,
                'latitude' => 11.578324,
                'longitude' => 104.928749,
                'is_featured' => true,
            ],
            [
                'user_id' => 1,
                'category_id' => 4,
                'type' => 'sale',
                'name' => 'Large Land Parcel',
                'description' => 'A spacious land suitable for development.',
                'image' => 'https=>//encrypted-tbn0.gstatic.com/images?q=tbn=>ANd9GcRHjNLPovhnBORCAkwmzFn3khUkOSmlxdYh0g&s',
                'status' => 'approved',
                'price' => 200000.00,
                'address' => '654',
                'street' => 'Development Road',
                'village_name' => "",
                'town_name' => "",
                'state_name' => "",
                'size' => 10000,
                'latitude' => 11.635292,
                'longitude' => 104.875805,
                'is_featured' => false,
            ],
            [
                'user_id' => 1,
                'category_id' => 5,
                'type' => 'sale',
                'name' => 'Grand Manor House',
                'description' => 'A magnificent manor with lush gardens.',
                'image' => 'Grand Manor House',
                'status' => 'approved',
                'price' => 1500000.00,
                'address' => '321',
                'street' => 'Gardenia Lane',
                'village_name' => "",
                'town_name' => "",
                'state_name' => "",
                'size' => 8000,
                'latitude' => 11.520961,
                'longitude' => 104.927842,
                'is_featured' => true,
            ],
            [
                'user_id' => 1,
                'category_id' => 6,
                'type' => 'sale',
                'name' => 'Cozy Room Rental',
                'description' => 'A comfortable room for short-term stays.',
                'image' => 'https=>//a0.muscache.com/im/pictures/99079b82-7b19-422f-bd85-ca4aae77db09.jpg?im_w=720',
                'status' => 'approved',
                'price' => 500.00,
                'address' => '159',
                'street' => 'Tranquil Lane',
                'village_name' => "",
                'town_name' => "",
                'state_name' => "",
                'size' => 200,
                'latitude' => 11.593733,
                'longitude' => 104.937415,
                'is_featured' => false,
            ],
            [
                'user_id' => 1,
                'category_id' => 7,
                'type' => 'sale',
                'name' => 'Beachfront Villa',
                'description' => 'A stunning villa located by the beach.',
                'image' => 'https://conradproperties-1f861.kxcdn.com/uploads/properties/1996/beachfront-villas-for-sale-in-phuket-87195984.jpg',
                'status' => 'approved',
                'price' => 800000.00,
                'address' => '246',
                'street' => 'Seaside Drive',
                'village_name' => "",
                'town_name' => "",
                'state_name' => "",
                'size' => 4000,
                'latitude' => 11.490930,
                'longitude' => 104.981326,
                'is_featured' => true,
            ],
            [
                'user_id' => 2,
                'category_id' => 2,  // Apartment category
                'type' => 'sale',
                'name' => 'Sleek City Living',
                'description' => 'Live in the heart of Phnom Penh in this modern high-rise apartment. Enjoy stunning city views from the balcony, a rooftop pool, and 24/7 security.',
                'image' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/532778701.jpg?k=234daa41f9d7cb8be37b11794f5b215ba4d346550cb730138a8c7392782591d6&o=&hp=1',
                'status' => 'approved',
                'price' => 250000.00,
                'address' => 'Street 130, Phnom Penh',
                'street' => '130',
                'village_name' => "",
                'town_name' => "Phnom Penh",
                'state_name' => "",
                'size' => 80,
                'latitude' => 11.565433,
                'longitude' => 104.900000,
                'is_featured' => true  // Mark this listing as featured
            ], [
                'user_id' => 3,
                'category_id' => 3,  // Condo category
                'type' => 'rent',
                'name' => 'Tranquil Riverside Retreat',
                'description' => 'Relax and unwind in this spacious condo overlooking the Siem Reap River. Enjoy a private balcony, access to a swimming pool and gym, and a short walk to the vibrant Pub Street.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBr8j0OS7_7GFsKLOpPPQqgMjVPkmw4p6kkg&s',
                'status' => 'approved',
                'price' => 1500.00,  // Monthly rent
                'address' => 'Wat Bo Village, Siem Reap',
                'street' => '',
                'village_name' => "Wat Bo",
                'town_name' => "Siem Reap",
                'state_name' => "",
                'size' => 120,
                'latitude' => 13.357222,
                'longitude' => 103.866667,
                'is_featured' => false,
            ],
            [
                'user_id' => 4,
                'category_id' => 5,  // Manor category
                'type' => 'sale',
                'name' => 'A Touch of History',
                'description' => 'Own a piece of Cambodian history with this beautifully restored colonial-era manor house in Battambang. The property boasts original architectural details, a lush garden, and a central location.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBr8j0OS7_7GFsKLOpPPQqgMjVPkmw4p6kkg&sG',
                'status' => 'approved',
                'price' => 800000.00,
                'address' => 'Street 2.5, Battambang',
                'street' => '2.5',
                'village_name' => "",
                'town_name' => "Battambang",
                'state_name' => "",
                'size' => 300,
                'latitude' => 12.633333,
                'longitude' => 103.150000,
                'is_featured' => false
            ],
            [
                'user_id' => 1,
                'category_id' => 6,  // Room category (assuming guesthouse rooms fall under this)
                'type' => 'rent',
                'name' => 'Simple Comfort in the City',
                'description' => 'A clean and comfortable room in a friendly guesthouse located in the heart of Phnom Penh. Perfect for budget-conscious travelers who want a central location.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBr8j0OS7_7GFsKLOpPPQqgMjVPkmw4p6kkg&s',
                'status' => 'approved',
                'price' => 20.00,  // Daily rent
                'address' => 'Street 178, Phnom Penh',
                'street' => '178',
                'village_name' => "",
                'town_name' => "Phnom Penh",
                'state_name' => "",
                'size' => 25,
                'latitude' => 12.633333,
                'longitude' => 103.150000,
            ],
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}
