<?php

namespace Respins\BasicSpins\Commands;

use Illuminate\Console\Command;

class BasicSpinsCommand extends Command
{
    public $signature = 'basic-spins';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
