<?php

namespace App\Console;

use Illuminate\Filesystem\Filesystem;

trait GenerateFileByStubTrait
{
    public function __construct(
        protected Filesystem $files
    )
    {
        parent::__construct();
    }

    /** 
     * Retorna o caminho do arquivo stub
     * @return string 
    */ 
    public function getStubPath()
    { 
        return __DIR__ . "/../../stubs/{$this->stub}.stub";
    }

    /** 
     * Mapear as variáveis ​​stub presentes em stub para seu valor 
     * @return array 
    */ 
    public function getStubVariables() 
    { 
        return [ 
            'DOMAIN' => $this->argument('domain'),
            'CLASS_NAME' => $this->argument('class'),
        ]; 
    }

    /** 
     * Obtém o caminho do stub e as variáveis ​​do stub 
     * @return bool|mixed|string
    */ 
    public function getSourceFile() 
    { 
        return $this->getStubContents($this->getStubPath(), $this->getStubVariables()); 
    }

    /** 
     * Substitua as variáveis ​​stub (chave) pelo valor desejado 
     * @param $stub 
     * @param array $stubVariables 
     * @return bool|mixed|string
    */ 
    public function getStubContents($stub , $stubVariables = [] ) 
    { 
        $contents = file_get_contents($stub);

        foreach ($stubVariables as $search => $replace)
        {
            $contents = str_replace('$'.$search.'$' , $replace, $contents);
        }
    
        return $contents;
    }

    /** 
     * Obter o caminho completo da classe de geração.
     * @return string 
    */ 
    public function getSourceFilePath()
    {
        return "domain/Models/{$this->argument('domain')}/{$this->argument('class')}.php";
    }

    /** 
     * Construa o diretório para a classe.
     * @param   string $path 
     * @return string 
    */ 
    public function makeDirectory($path)
    {
        if (!$this->files->isDirectory($path)) {
            $this->files->makeDirectory($path, 0777, true, true);
        }

        return $path;
    }

    public function generateFile(): void
    {
        $path = $this->getSourceFilePath();

        $this->makeDirectory(dirname($path));
    
        $contents = $this->getSourceFile();
    
        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            $this->info("Created {$this->argument('class')} in namespace Domain/Models/{$this->argument('domain')}");
        } else {
            $this->info("File: {$path} already exits");
        }
    }
}