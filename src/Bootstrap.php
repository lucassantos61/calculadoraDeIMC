<?php
namespace lucassantos;

class Bootstrap 
{
    private $view;
    public function __construct($view)
    {
        $fileView = "./public/".$view.".php";
        if(file_exists($fileView)){
            $this->view = file_get_contents($fileView);
        }

    }

    public function renderView(array $data)
    {
        foreach($data as $key => $value){
            $this->view = str_replace('{'.$key.'}', $value, $this->view);
        }
        return $this->view;
    }
}