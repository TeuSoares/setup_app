<?php
 
namespace App\Console\Commands;
 
use Illuminate\Console\Command;
use App\Console\GenerateFileByStubTrait;
 
class MakeControllerApp extends Command
{
    use GenerateFileByStubTrait;

    private $stub = "controller-app";

    protected $signature = 'app:controller {domain} {class}';
    protected $description = 'Create controller for application';

    public function handle(): void
    {
        $this->generateFile();
    }
}