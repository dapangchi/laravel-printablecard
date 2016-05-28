<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\OrderItem;
use Log;

class CompleteJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'complete:job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Complete the jobs after 10 days that item is shipped';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //$time = date('Y-m-d H:i:s', strtotime('-10 days'));
        $time = date('Y-m-d H:i:s', strtotime('-10 minutes'));
        
        $items = OrderItem::where('job_status', JOB_SHIPPED)
            ->where('job_tracking_date', '>=', $time)
            ->get();
        foreach($items as $item)
        {
            $item->saveAsCompleted();    
        }
        
        Log::info(sprintf('%s jobs are completed at %s', $items->count(), date('Y-m-d H:i:s')));
    }
}