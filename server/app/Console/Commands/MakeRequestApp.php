<?php
 
namespace App\Console\Commands;
 
use Illuminate\Console\Command;
use App\Console\GenerateFileByStubTrait;
 
class MakeRequestApp extends Command
{
    use GenerateFileByStubTrait;

    private $stub = "request-app";

    protected $signature = 'app:request {domain} {class}';
    protected $description = 'Create request for application';

    public function handle(): void
    {
        $this->generateFile();
    }
}