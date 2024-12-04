<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Console\Commands;

use GoetasWebservices\XML\XSDReader\Exception\IOException;
use Illuminate\Console\Command;
use Katalam\OpenImmo\Services\DtoGenerator;

class Generate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Will generate DTO classes from the given XSD file.';

    /**
     * Execute the console command.
     *
     * @throws IOException
     */
    public function handle(): void
    {
        if (app()->isProduction()) {
            $this->error('This command is not allowed in production environment. Use it only for development purposes.');

            return;
        }

        $apiGenerator = new DtoGenerator;
        $apiGenerator->generate(storage_path('app/OpenImmo/openimmo_127c.xsd'));
    }
}
