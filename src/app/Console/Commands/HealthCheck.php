<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HealthCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'health_check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For ECS Health Check';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo 'hello world!';
        return 0;
    }
}