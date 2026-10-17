<?php
class controller
{
    public function __construct()
    {
        $this->session = new session ();
        $this->load = new class {
            public function view($viewname, $data = [])
            {
                if (!empty($data)) extract($data);
                include './view/' . $viewname . ".php";
            }
            public function model($modelname)
            {
                require_once './model/' . $modelname . '.php';

                $modelName = basename($modelname);

                return new $modelName();
            }

            public function post($key = null)
            {
                if ($key === null) {
                    return $_POST;
                }
                return $_POST[$key] ?? null;
            }

            public function get($key = null)
            {
                if ($key === null) {
                    return $_GET;
                }
                return $_GET[$key] ?? null;
            }
        };
    }
}
?>