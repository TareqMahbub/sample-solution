<?php

namespace App\Console\Commands;

use App\CaseAlternator;
use App\CsvMaker;
use Illuminate\Console\Command;

class MakeCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:csv {input_text}';

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

        try {
            CsvMaker::make($input_text);
            $this->info('CSV created!');
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }

        return Command::SUCCESS;
    }
}
