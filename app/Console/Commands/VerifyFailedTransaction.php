<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\WalletController;

class VerifyFailedTransaction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:verify-failed-transaction';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $controller = new WalletController();
        $controller->checkFailed();
    }
}
