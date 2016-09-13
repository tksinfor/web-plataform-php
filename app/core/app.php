 <?php

Class App
{

    protected $controller = "home";
    protected $method = "index";
    protected $param = [];

    public function __construct()
    {
        if (!(isset($url[0]) && isset($url[1]) && isset($url[2]))) {
            include "app/controllers/home.php";
            return;
        }

        $url = self::parseURL($_GET["url"]);

        if (file_exists("app/controllers/" . $url[0] . ".php")) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once "app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;
        if(isset($url[1]) && method_exists($this->controller, $url[1])){
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->param = $url ? array_values($url) : [];

        //print_r($this->param);
        call_user_func_array([$this->controller, $this->method], $this->param);
    }

    private function parseURL($url)
    {
        return explode("/", filter_var(rtrim($url), FILTER_SANITIZE_URL));
    }
}
