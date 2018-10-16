<?php
declare(strict_types=1);

namespace App\Console\Commands\Client;

use Illuminate\Console\Command;

/**
 * Class Create
 *
 * Make a client from the command line
 *
 * @package App\Console\Commands\Client
 */
class Create extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'client:create {name : The Name of the client} {domain : The Domain of the client}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a client for the application from the command line';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        return true;
    }
}
