<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {

	var $CI;

	public function __construct($params = array())
	{
		// Set the super object to a local variable for use later
		$this->CI =& get_instance();
	}

    public function render($template_path, $data)
    {
        $reqHeaders = apache_request_headers();

        if(isset($reqHeaders['X-Pjax']))
        {
            $this->CI->load->view($template_path, $data);
        }
        else
        {
            $data['content'] = $this->CI->load->view($template_path, $data, true);
            
            // Load content into main template
            $this->CI->load->view('layouts/template', $data);
        }
    }

}

/* End of file template.php */