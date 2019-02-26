<?php

namespace App\Console\Commands;

use App\Sell;
use Illuminate\Console\Command;
use DB;

class TotalPay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdatePay:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will update total money received weekly';

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
     * @return mixed
     */
    public function handle()
    {
        $sm = "";
        $sell = DB::table('sells')->orderBy('created_at', 'desc');
        $sm = $sell->sum('paid');
        $sell = new Sell();
        $sell = DB::table('sells')->update(['result' => $sm]);
       // $sell->update(['result' => $sm]);
        return $this->info('Achieved');

        /*foreach ($sell as $se){

            $sm = $se->sum('paid');
            return $this->info('Achieved');
        }*/

    }
}
