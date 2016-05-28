<?php

namespace App\Libraries;
use Session;
class Template
{
    protected static $message = array();
    
    /**
     * Sets a status message (for displaying small success/error messages).
     *
     * This function is used in place of the session->flashdata function to allow
     * the message to show up without requiring a page refresh.
     *
     * @param string $message The text of the message.
     * @param string $type    The type of message, usually added as the value of
     * the class attribute on the message's container.
     *
     * @return void
     */
    public static function set_message($message = '', $type = 'info')
    {
        if (empty($message)) return;

        $messages = self::_get_saved_message();         
        $messages[] = array('type' => $type, 'message' => $message);
        
        Session::set('messages', $messages);
        Session::save();
    }

    /**
     * Displays a status message (small success/error messages).
     *
     * If data exists in 'message' session flashdata, that will override any other
     * messages. Renders the message based on the template provided in the config
     * file ('template.message_template').
     *
     * @param string $message A string to be the message. (Optional) If included, will override any other messages in the system.
     * @param string $type    The class to attached to the div. (i.e. 'information', 'attention', 'error', 'success')
     *
     * @return string A string with the results of inserting the message into the message template.
     */
    public static function get_messages()
    {
        $messages = Session::has('messages') ? Session::get('messages') : array();
        if(!is_array($messages)) $messages = array();
        
        Session::set('messages', array());
        
        return $messages;
    }
    
    /**
    * truncate registered messages
    * 
    */
    public static function truncate_message()
    {
        Session::set('messages', array());
        Session::save();
        
        return true;
    }
    
    protected static function _get_saved_message()
    {
        $messages = Session::has('messages') ? Session::get('messages') : array();
        if(!is_array($messages)) $messages = array();
        
        return $messages;
    }
}