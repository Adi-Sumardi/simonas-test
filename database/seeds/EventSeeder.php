<?php

use App\Event;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $days = [[1,3], 5, 6, 9, [12,15]];
        $fake = FakerFactory::create('id');
        $today = now();

        $events = [];

        foreach ($days as $day) {
            if (is_array($day)) {
                $events[] = [
                    'title' => $fake->sentence(3),
                    'start_date' => $today->addDays($day[0])->format('Y-m-d'),
                    'end_date' => $today->addDays($day[1])->format('Y-m-d'),
                    'category' => $fake->randomElement(['success', 'danger', 'warning', 'info']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            } else {
                $events[] = [
                    'title' => $fake->sentence(3),
                    'start_date' => $today->addDays($day)->format('Y-m-d'),
                    'end_date' => $today->addDays($day)->format('Y-m-d'),
                    'category' => $fake->randomElement(['success', 'danger', 'warning', 'info']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        Event::insert($events);
    }
}
