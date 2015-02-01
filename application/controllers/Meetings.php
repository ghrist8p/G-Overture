<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Meetings extends Application {
    
    function __construct() {
        parent::__construct();
    }
    
    /**
     * Index Page for this controller.
     */
    function index()
    {
        $this->data['title'] = 'Meetings';
        $this->data['pagebody'] = 'meetings';
        $this->render();
    }
}