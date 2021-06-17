<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class AwaitingDisbursement extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'awaiting:disbursement';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process loans in awaiting Disbursement';

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
        Http::post('https: //testapi.creditwallet.ng/api/v2/test/awaitingdisbursement', []);
        return 0;
    }
}
