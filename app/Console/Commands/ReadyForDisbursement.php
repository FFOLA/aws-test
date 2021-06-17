<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ReadyForDisbursement extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'readyfor:disbursement';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Processes loans in ready for disbursement';

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
        Http::post('https: //testapi.creditwallet.ng/api/v2/test/readyfordisbursement', []);

        return 0;
    }
}
