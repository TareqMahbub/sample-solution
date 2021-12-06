<?php

namespace App\Console\Commands;

use App\CaseAlternator;
use Illuminate\Console\Command;

class MakeAlternate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:alternate-case {input_text}';

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
    public function handle(): int
    {
        $input_text = $this->argument('input_text');

        $this->info(CaseAlternator::alternate($input_text));

        return Command::SUCCESS;
    }
}
