<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class repository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a repository files';

    /**
     * Execute the console command.
     */
    public function handle()
    { 
        $name = $this->argument('name');
        $directory = app_path("/Repository/$name.php");

        if (file_exists($directory)){
            $this->error('this Repository already exists.');
            return null;
        }

        $interfacename = 'I' . $name;

        $interfacedirectory = app_path("/Repository/Interface/$interfacename.php");

        if (file_exists($interfacedirectory)){
            $this->error('this Interface files already exist.');
            return null;
        }


        $content = <<<PHP
        <?php

        namespace App\Repository;
        use App\Repository\Interface\ $interfacename;

        class $name implements $interfacename {

    
        }

        
        PHP;

        $interfacecontent =<<<PHP
        <?php

        namespace App\Repository\Interface;
       

        interface $interfacename {

    
        }

        
        PHP;

        file_put_contents($directory, $content);
        file_put_contents($interfacedirectory, $interfacecontent);

        $this->info('New Repository and Interface have been created successfully.');
    }
}



