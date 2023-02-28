<?php

namespace Pathcoder4408\Barcodes\Commands;

use Illuminate\Console\Command;

class BarcodesCommand extends Command
{
    public $signature = 'barcodes';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
