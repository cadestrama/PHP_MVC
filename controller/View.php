<?php
declare(strict_types=1);


class View{



    private function __construct(protected String $path, protected String $name)
    {
        $this->$path = $path;
        $this->name = $name;
    }

    public static function setView(String $viewPath, String $viewName): View{
       return new static($viewPath, $viewName);
    }

    public function render(Array $data){

        $data = $data;
        $viewpath = $this->path . $this->name;
        if(file_exists($viewpath)){
           include($viewpath);     
        }
    }
}