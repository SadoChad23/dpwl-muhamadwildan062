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
                return new $modelname();    
            }
        };
    }
}
?>