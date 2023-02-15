<?php

namespace Pathcoder4408\Barcoder\Commands;

use Illuminate\Console\Command;

class BarcoderCommand extends Command
{
    public $signature = 'barcoder';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
