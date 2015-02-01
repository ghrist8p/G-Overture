<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Conversations extends CI_Model {

    // The data comes from http://www.quotery.com/top-100-funny-quotes-of-all-time/?PageSpeed=noscript
    var $data = array(
        array( 'topic' => 'new term'
             , 'conversation' => array( 'f201501051230' => 'Oh no school'
                                      , 't201501051235' => 'yeah it sucks' ) )
      , array( 'topic' => 'new term'
             , 'conversation' => array( 'f201501051230' => 'Oh no school'
                                      , 't201501051235' => 'yeah it sucks' ) )
    );

    // Constructor
    public function __construct() {
        parent::__construct();
    }

    // retrieve all of the quotes
    public function all() {
        return $this->data;
    }

    // retrieve the first quote
    public function first() {
        return $this->data[0];
    }

    // retrieve the last quote
    public function last() {
        $index = count($this->data) - 1;
        return $this->data[$index];
    }

}

