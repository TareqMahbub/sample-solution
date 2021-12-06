<?php

namespace App\Console\Commands;

use App\UppercaseMaker;
use Illuminate\Console\Command;

class MakeUpper extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:upper {input_text}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $input_text = $this->argument('input_text');

        $this->info(UppercaseMaker::make($input_text));

        return Command::SUCCESS;
    }
}
