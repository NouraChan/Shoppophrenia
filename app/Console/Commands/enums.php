<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class enums extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:enum {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Enum file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $directory = app_path("/Enums/$name.php");

        if (file_exists($directory)){
            $this->error('this Enum already exists.');
            return true;
        }
        $content = <<<PHP
        <?php

        namespace App\Enums;


        enum $name : string {

          case //uppercaserole = 'lowercaserole';

        }

        
        PHP;

        file_put_contents($directory, $content);

        $this->info('New Enum has been created successfully.');
    }
    }

