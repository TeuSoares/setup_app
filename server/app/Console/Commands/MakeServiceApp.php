<?php
 
namespace App\Console\Commands;
 
use Illuminate\Console\Command;
use App\Console\GenerateFileByStubTrait;
 
class MakeServiceApp extends Command
{
    use GenerateFileByStubTrait;

    private $stub = "service-app";

    protected $signature = 'app:service {domain} {class}';
    protected $description = 'Create service for application';

    public function handle(): void
    {
        $this->generateFile();
    }
}