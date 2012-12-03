<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
    function __construct($access_level = access_levels::user, $exceptions = array())
    {      
        // Call parent controller constructor
        parent::__construct();

        // Initialise global data for views
        $this->data = array();

        $this->data['title'] = '';
        $this->data['description'] = '';
    }
}