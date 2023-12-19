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
            $eventStartDate = null;
    $eventEndDate = null;
            if (is_array($day)) {
                $events[] = [
                    'event_title' => $fake->sentence(3),
                    'event_start_date' => $today->addDays($day[0])->format('Y-m-d'),
                    'event_end_date' => $today->addDays($day[1])->format('Y-m-d'),
                    'event_start_time' => '08:00:00', // Tambahkan nilai start time yang sesuai
        'event_end_time' => '17:00:00',
                    'event_description' => $fake->randomElement(['success', 'danger', 'warning', 'info']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            } else {
                $eventStartDate = $today->addDays($day)->format('Y-m-d');
                $eventEndDate = $eventStartDate;
            }
            $event_start_date = $event_start_date ?? now()->format('Y-m-d');
            $eventEndDate = $eventEndDate ?? now()->format('Y-m-d');
            $events[] = [
                'event_title' => $fake->sentence(3),
                'event_start_date' => $event_start_date,
                'event_end_date' => $eventEndDate,
                'event_start_time' => '08:00:00', // Tambahkan nilai start time yang sesuai
        'event_end_time' => '17:00:00',
                'event_description' => $fake->randomElement(['success', 'danger', 'warning', 'info']),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        Event::insert($events);
    }
}
