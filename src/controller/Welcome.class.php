<?php
use libs\system\Controller;

class Welcome extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    //methode ou url
    public function index()
    {
        //view
        return $this->view->load("welcome/index");
    }
}
 