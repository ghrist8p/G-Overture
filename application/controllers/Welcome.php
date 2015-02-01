<?php
/**
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

    
    function __construct() {
        parent::__construct();
    }
    
    /**
     * Index Page for this controller.
     */
    function index()
    {
        $this->render();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */