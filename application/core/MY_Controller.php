<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Application extends CI_Controller {
    
    /**
     * $data is an array to hold view template parameters in.
     */
    protected $data = array();

    /**
     * Constructor for Application.
     */
    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['title'] = 'Georgi Hristov';
        $this->data['pagebody'] = 'home';
        $this->load->library('parser');
    }

    /**
     * Render this page
     */
    function render() {
        
        $this->data['menubar'] = $this->parser->parse('_menubar', $this->config->item('menu_choices'),true);
        // Load the page content
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);

        // Render the Page
        $this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }

}