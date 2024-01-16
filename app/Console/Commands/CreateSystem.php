<?php

namespace App\Console\Commands;

use App\Models\System;
use Illuminate\Console\Command;

class CreateSystem extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-system';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new system record';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('What is the name of the system?');

        $system = new System();
        $system->name = $name;
        $system->save();

        $this->info("The system '$name' was created and its id is: $system->id!");
    }
}
