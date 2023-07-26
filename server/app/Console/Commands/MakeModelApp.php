<?php
 
namespace App\Console\Commands;
 
use Illuminate\Console\Command;
use App\Console\GenerateFileByStubTrait;
 
class MakeModelApp extends Command
{
    use GenerateFileByStubTrait;

    private $stub = "model-app";

    protected $signature = 'app:model {domain} {class}';
    protected $description = 'Create model for application';

    public function handle(): void
    {
        $this->generateFile();
    }
}