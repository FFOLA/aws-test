<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->command('awaiting:disbursement')->everyFiveMinutes()->withoutOverlapping()->appendOutputTo(storage_path("logs/cron.log"));
        // $schedule->command('readyfordeduction')->everyFiveMinutes()->withoutOverlapping()->appendOutputTo(storage_path("logs/cron.log"));
        // $schedule->command('readyfor:disbursement')->everyFiveMinutes()->withoutOverlapping()->appendOutputTo(storage_path("logs/cron.log"));
        // $schedule->command('deduction:setup-awaiting')->everyFiveMinutes()->withoutOverlapping()->appendOutputTo(storage_path("logs/cron.log"));
        // $schedule->command('rsp:repayment')->everyFiveMinutes()->withoutOverlapping()->appendOutputTo(storage_path("logs/cron.log"));
        // $schedule->command('test:name')->everyMinute()->withoutOverlapping()->appendOutputTo(storage_path("logs/cron.log"));

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
