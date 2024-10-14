<?php

namespace App\Console\Commands;

use DateTimeImmutable;
use Illuminate\Console\Command;
use Metroapps\Ldbsvws\Api\Class20220120Api;

class GetBoard extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-board {crs}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the departure board from a station';

    /**
     * Execute the console command.
     */
    public function handle(Class20220120Api $api)
    {
        return $api->call20220120GetDepartureBoardByCRS(
            $this->argument('crs'),
            (new DateTimeImmutable())->format('yyyyMMddTHHmmss')
        );
    }
}
