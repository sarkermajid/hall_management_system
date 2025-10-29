<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Carbon\Carbon;

class RemoveExpiredRoomAllocations extends Command
{

    protected $signature = 'rooms:remove-expired';
    protected $description = 'Command description';

    public function handle()
    {
        $expiredUsers = User::whereNotNull('room_id')
            ->where('room_allocated_at', '<', Carbon::now()->subHours(72))
            // ->where('room_allocated_at', '<', Carbon::now()->subMinutes(2))
            ->get();

        foreach ($expiredUsers as $user) {
            $room = $user->room;

            if ($room) {
                $room->available_seats += 1;
                $room->save();
            }

            $user->room_id = null;
            $user->status = 0;
            $user->room_allocated_at = null;
            $user->save();
        }

        $this->info(count($expiredUsers) . ' room allocations removed.');
    }
}
