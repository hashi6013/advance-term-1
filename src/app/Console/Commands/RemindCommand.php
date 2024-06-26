<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\Reservation;
use App\Mail\RemindMail;
use App\Models\User;

class RemindCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remind_mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '予約日7:00にユーザーにメール送信';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $startOfDay = strtotime('today');
        $endOfDay = strtotime('tomorrow') - 1;
        $reservations = Reservation::with('user')->whereBetween('reserve_date', [date('Y-m-d H:i:s', $startOfDay), date('Y-m-d H:i:s', $endOfDay)])->get();

        foreach($reservations as $reservation) {
            $user = $reservation->user;
            $email = $user->email;
            Mail::to($email)->send(new RemindMail($reservation));
        }
    }
}
