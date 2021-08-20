<?php

namespace App;
use App\Exceptions\ViewNotFoundException;

class View
{


    public function __construct(
        protected string $view,
        protected array $params = [])
    {
    }

    public function render()
    {
        $viewPath = VIEW_PATH . '/' . $this->view . '.php';

        if(!file_exists($viewPath)) {
            throw new ViewNotFoundException();
        }
        ob_start();

        include $viewPath;

        return (string) ob_get_clean();
    }
    public static function  make(string $view, array $params = []) {

        return new static($view,$params);

    }
    public function __get(string $name)
    {
        return $this -> params[$name]?? null;
    }
}