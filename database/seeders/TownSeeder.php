<?php

namespace Database\Seeders;

use App\Models\Town;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TownSeeder extends Seeder
{
    public function run(): void
    {
        $towns = [
            ['name' => 'Mongkol Borei', 'state_id' => 1],
            ['name' => 'O\'Chrov (Ou Chrov)', 'state_id' => 1],
            ['name' => 'Phnum Srok', 'state_id' => 1],
            ['name' => 'Preah Netr Preah', 'state_id' => 1],
            ['name' => 'Serei Saophoan Municipality', 'state_id' => 1],
            ['name' => 'Malai Municipality', 'state_id' => 1],
            ['name' => 'Poipet Municipality', 'state_id' => 1],
            ['name' => 'Banan', 'state_id' => 2],
            ['name' => 'Battambang Municipality', 'state_id' => 2],
            ['name' => 'Bavel', 'state_id' => 2],
            ['name' => 'Moung Ruessei', 'state_id' => 2],
            ['name' => 'Ratanak Mondol', 'state_id' => 2],
            ['name' => 'Rotanak Mondol', 'state_id' => 2],
            ['name' => 'Sampov Loun', 'state_id' => 2],
            ['name' => 'Sangkae', 'state_id' => 2],
            ['name' => 'Thma Koul', 'state_id' => 2],
            ['name' => 'Batheay', 'state_id' => 3],
            ['name' => 'Chamkar Leu', 'state_id' => 3],
            ['name' => 'Cheung Prey', 'state_id' => 3],
            ['name' => 'Kampong Cham Municipality', 'state_id' => 3],
            ['name' => 'Kampong Siem', 'state_id' => 3],
            ['name' => 'Kang Meas', 'state_id' => 3],
            ['name' => 'Koh Sotin', 'state_id' => 3],
            ['name' => 'Prey Chhor', 'state_id' => 3],
            ['name' => 'Srei Santhor', 'state_id' => 3],
            ['name' => 'Baribour', 'state_id' => 4],
            ['name' => 'Chol Kiri', 'state_id' => 4],
            ['name' => 'Kampong Chhnang Municipality', 'state_id' => 4],
            ['name' => 'Kampong Leaeng', 'state_id' => 4],
            ['name' => 'Rolea B\'ier', 'state_id' => 4],
            ['name' => 'Chbar Mon Municipality', 'state_id' => 5],
            ['name' => 'Kong Pisei', 'state_id' => 5],
            ['name' => 'Aoral', 'state_id' => 5],
            ['name' => 'Phnom Sruoch', 'state_id' => 5],
            ['name' => 'Samraong Tong', 'state_id' => 5],
            ['name' => 'Thpong', 'state_id' => 5],
            ['name' => 'Baray', 'state_id' => 6],
            ['name' => 'Kampong Svay', 'state_id' => 6],
            ['name' => 'Kampong Thom Municipality (Stueng Saen)', 'state_id' => 6],
            ['name' => 'Prasat Balangk', 'state_id' => 6],
            ['name' => 'Prasat Sambour', 'state_id' => 6],
            ['name' => 'Santuk', 'state_id' => 6],
            ['name' => 'Stoung', 'state_id' => 6],
            ['name' => 'Angkor Chey', 'state_id' => 7],
            ['name' => 'Chhuk', 'state_id' => 7],
            ['name' => 'Damnak Chang\'aeur', 'state_id' => 7],
            ['name' => 'Kampong Trach', 'state_id' => 7],
            ['name' => 'Kampot Municipality', 'state_id' => 7],
            ['name' => 'Teuk Chhou', 'state_id' => 7],
            ['name' => 'kandal', 'state_id' => 8],
            ['name' => 'kandal steung', 'state_id' => 8],
            ['name' => 'kien svay', 'state_id' => 8],
            ['name' => 'khsach kandal', 'state_id' => 8],
            ['name' => 'kaoh thom', 'state_id' => 8],
            ['name' => 'leuk daek', 'state_id' => 8],
            ['name' => 'lvea Aem', 'state_id' => 8],
            ['name' => 'Mukh kampul', 'state_id' => 8],
            ['name' => 'Angk Snuol', 'state_id' => 8],
            ['name' => 'ponhea lueeu', 'state_id' => 8],
            ['name' => "S'ang", 'state_id' => 8],
            ['name' => 'Ta kmau Municipality', 'state_id' => 8],
            ['name' => 'Kep Municipality', 'state_id' => 9],
            ['name' => 'Botum Sakor', 'state_id' => 10],
            ['name' => 'Koh Kong Municipality (Khemara Phoumin)', 'state_id' => 10],
            ['name' => 'Mondol Seima', 'state_id' => 10],
            ['name' => 'Smach Mean Chey', 'state_id' => 10],
            ['name' => 'Chitr Borie', 'state_id' => 11],
            ['name' => 'Kratié Municipality', 'state_id' => 11],
            ['name' => 'Preaek Prasab', 'state_id' => 11],
            ['name' => 'Sambour', 'state_id' => 11],
            ['name' => 'Kaev Seima', 'state_id' => 12],
            ['name' => 'O\'Raing', 'state_id' => 12],
            ['name' => 'Pech Chreada', 'state_id' => 12],
            ['name' => 'Saen Monourom Municipality', 'state_id' => 12],
            ['name' => 'Anlong Veng', 'state_id' => 13],
            ['name' => 'Banteay Ampil', 'state_id' => 13],
            ['name' => 'Chongkal', 'state_id' => 13],
            ['name' => 'Samraong Municipality', 'state_id' => 13],
            ['name' => 'Pailin Municipality', 'state_id' => 14],
            ['name' => 'Chamkar Mon', 'state_id' => 15],
            ['name' => 'Dangkao', 'state_id' => 15],
            ['name' => 'Doun Penh', 'state_id' => 15],
            ['name' => 'Meanchey', 'state_id' => 15],
            ['name' => 'Prampi Makara', 'state_id' => 15],
            ['name' => 'Russey Keo', 'state_id' => 15],
            ['name' => 'Sen Sok', 'state_id' => 15],
            ['name' => 'Tuol Kork', 'state_id' => 15],
            ['name' => 'Chey Saen', 'state_id' => 16],
            ['name' => 'Chhaeb', 'state_id' => 16],
            ['name' => 'Kulen', 'state_id' => 16],
            ['name' => 'Rovieng', 'state_id' => 16],
            ['name' => 'Tbeng Meanchey Municipality', 'state_id' => 16],
            ['name' => 'Bakan', 'state_id' => 17],
            ['name' => 'Kandieng', 'state_id' => 17],
            ['name' => 'Krakor', 'state_id' => 17],
            ['name' => 'Phnum Kravanh', 'state_id' => 17],
            ['name' => 'Pursat Municipality', 'state_id' => 17],
            ['name' => 'Kamchay Mear', 'state_id' => 18],
            ['name' => 'Kampong Leav', 'state_id' => 18],
            ['name' => 'Kampong Trabek', 'state_id' => 18],
            ['name' => 'Mesang', 'state_id' => 18],
            ['name' => 'Peam Chor', 'state_id' => 18],
            ['name' => 'Preah Sdach', 'state_id' => 18],
            ['name' => 'Prey Veng Municipality', 'state_id' => 18],
            ['name' => 'Andoung Meas', 'state_id' => 19],
            ['name' => 'Banlung Municipality', 'state_id' => 19],
            ['name' => 'Bar Kaev', 'state_id' => 19],
            ['name' => 'Lumphat', 'state_id' => 19],
            ['name' => 'Ou Chum', 'state_id' => 19],
            ['name' => 'Angkor Chum', 'state_id' => 20],
            ['name' => 'Banteay Srei', 'state_id' => 20],
            ['name' => 'Chi Kraeng', 'state_id' => 20],
            ['name' => 'Kralanh', 'state_id' => 20],
            ['name' => 'Puok', 'state_id' => 20],
            ['name' => 'Prasat Bakong', 'state_id' => 20],
            ['name' => 'Siem Reap Municipality', 'state_id' => 20],
            ['name' => 'Srei Snam', 'state_id' => 20],
            ['name' => 'Kampong Seila', 'state_id' => 21],
            ['name' => 'Prey Nob', 'state_id' => 21],
            ['name' => 'Preah Sihanouk Municipality', 'state_id' => 21],
            ['name' => 'Koh Rong Municipality', 'state_id' => 21],
            ['name' => 'Stueng Hav (Sihanoukville)', 'state_id' => 21],
            ['name' => 'Siem Bouk', 'state_id' => 22],
            ['name' => 'Siem Pang', 'state_id' => 22],
            ['name' => 'Stueng Treng Municipality', 'state_id' => 22],
            ['name' => 'Chantrea', 'state_id' => 23],
            ['name' => 'Krong Bavet Municipality (Bavet)', 'state_id' => 23],
            ['name' => 'Romeas Hek', 'state_id' => 23],
            ['name' => 'Svay Rieng Municipality', 'state_id' => 23],
            ['name' => 'Angkor Borei', 'state_id' => 24],
            ['name' => 'Bati', 'state_id' => 24],
            ['name' => 'Doun Kaev Municipality', 'state_id' => 24],
            ['name' => 'Prey Kabbas', 'state_id' => 24],
            ['name' => 'Samraong', 'state_id' => 24],
            ['name' => 'Traing', 'state_id' => 24],
            ['name' => 'Dambae', 'state_id' => 25],
            ['name' => 'Krouch Chhmar', 'state_id' => 25],
            ['name' => 'Memot', 'state_id' => 25],
            ['name' => 'Ou Reang Ov', 'state_id' => 25],
            ['name' => 'Ponhea Kraek', 'state_id' => 25],
            ['name' => 'Tboung Khmum Municipality', 'state_id' => 25],
        ];

        foreach ($towns as $town) {
            Town::create($town);
        }
    }
}
