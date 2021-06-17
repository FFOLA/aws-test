<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class RSPRepayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rsp:repayment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'pushes rsp repayments to loandisk';

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
        Http::post('https: //api.creditwallet.ng/Creditwallet/public/api/test/loan', []);

        return 0;
    }
}
