<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Meetings_model extends CI_Model {
    
    var $data = array( array( 'id' => '1'
                            , 'personMet' => 'Georgi Hristov'
                            , 'dateMeeting' => '2015 Feb 15 14:30'
                            , 'meetingLoc' =>'BCIT SW1'
                            , 'status' => 'confirmed' )
                     , array( 'id' => '2'
                            , 'personMet' => 'Georgi Hristov'
                            , 'dateMeeting' => '2015 Feb 15 14:30'
                            , 'meetingLoc'=>'BCIT SW1'
                            , 'status' => 'pending' )
                     , array( 'id' => '2'
                            , 'personMet' => 'Georgi Hristov'
                            , 'dateMeeting' => '2015 Feb 15 14:30'
                            , 'meetingLoc'=>'BCIT SW1'
                            , 'status' => 'rejected' ) );
    
    // Constructor
    public function __construct() {
        parent::__construct();
    }
    
    // retrieve all of the quotes
    public function all() {
        return $this->data;
    }
}
