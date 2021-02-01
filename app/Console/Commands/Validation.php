<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class Validation extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:validation {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new validation class';

    protected $type = 'Validation';

    protected function replaceClass($stub, $name)
    {
        
        $stub = parent::replaceClass($stub, $name);
       
        return str_replace('{{Name}}', $this->argument('name'), $stub);
    }

    protected function getStub()
    {
        return base_path('stubs\validation.stub');
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Validations';
    }
  
}
