<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class Repository extends GeneratorCommand
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
    protected $description = 'Create a new model repository';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    protected $type = 'Repository';

    protected function replaceClass($stub, $name)
    {
      
        $stub = parent::replaceClass($stub, $name);
       
        return str_replace('{{Name}}', $this->argument('name'), $stub);
    }

    protected function getStub()
    {
        return base_path('stubs\repository.stub');
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Repositories';
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
}
