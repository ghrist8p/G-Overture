<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Messages extends Application {
    
    function __construct() {
        parent::__construct();
        $this->data['additionalJavaScript'] = '/assets/js/messages.js';
        $this->load->model('messages_model');
    }
    
    /**
     * Index Page for this controller.
     */
    function index()
    {
        $this->data['title'] = 'Messages';
        $this->data['pagebody'] = 'messages';
        
        $this->data['notes'] = $this->messages_model->allNotes();
        $this->data['conversations'] = $this->messages_model->allConversations();
        
        $this->render();
    }
}