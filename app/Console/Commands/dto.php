<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class dto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:dto {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a DTO file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $directory = app_path("/DTO/$name.php");

        if (file_exists($directory)){
            $this->error('this DTO already exists.');
            return true;
        }
        $content = <<<PHP
        <?php

        namespace App\DTO;

        use Spatie\LaravelData\Data;

        class $name extends Data {

            public function __construct()
            {

            }

        }

        
        PHP;

        file_put_contents($directory, $content);

        $this->info('New DTO has been created successfully.');
    }
}
