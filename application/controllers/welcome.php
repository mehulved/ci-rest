<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function cache()
	{
		$this->load->driver('cache',array('adaptor' => 'memcached'));
        $this->cache->memcached->save('foo', 'bar', 86400);
        var_dump('Response');
    }
    
    function nocache()
	{
        var_dump('Response');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
