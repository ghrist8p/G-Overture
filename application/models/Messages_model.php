<?php


class Messages_model extends CI_Model {
    
    var $notes = array( array( 'id' => '1'
                             , 'author' => 'Georgi Hristov'
                             , 'dateSent' => '2015 Feb 15 14:30'
                             , 'message' => 'I\'m leaving a message.' )
                      , array( 'id' => '2'
                             , 'author' => 'Georgi Hristov'
                             , 'dateSent' => '2015 Feb 15 14:30'
                             , 'message' => 'I\'m leaving a message.' )
                       , array( 'id' => '3'
                             , 'author' => 'Georgi Hristov'
                             , 'dateSent' => '2015 Feb 15 14:30'
                             , 'message' => 'I\'m leaving a message.' ) );
    
    var $conversations = array( array( 'id' => '1'
                                     , 'topic' => 'communication'
                                     , 'status' => 'closed'
                                     , 'conversation' => array( array( 'type' => 'incoming'
                                                                     , 'author' => 'Bob'
                                                                     , 'dateSent' => '2015 Feb 15 14:30'
                                                                     , 'message' => 'back' )
                                                              , array( 'type' => 'outgoing'
                                                                     , 'author' => 'Georgi'
                                                                     , 'dateSent' => '2015 Feb 15 14:30'
                                                                     , 'message' => 'and fourth' )
                                                              , array( 'type' => 'incoming'
                                                                     , 'author' => 'Bob'
                                                                     , 'dateSent' => '2015 Feb 15 14:30'
                                                                     , 'message' => 'conversation' )
                                                              , array( 'type' => 'outgoing'
                                                                     , 'author' => 'Georgi'
                                                                     , 'dateSent' => '2015 Feb 15 14:30'
                                                                     , 'message' => 'that me' )
                                                              , array( 'type' => 'incoming'
                                                                     , 'author' => 'Bob'
                                                                     , 'dateSent' => '2015 Feb 15 14:30'
                                                                     , 'message' => 'and this user' )
                                                              , array( 'type' => 'outgoing'
                                                                     , 'author' => 'Georgi'
                                                                     , 'dateSent' => '2015 Feb 15 14:30'
                                                                     , 'message' => 'have had' ) ) )
    );
    
    // Constructor
    public function __construct() {
        parent::__construct();
    }
    
    // retrieve all of the quotes
    public function allNotes() {
        return $this->notes;
    }

    // retrieve all of the quotes
    public function allConversations() {
        return $this->conversations;
    }
}
