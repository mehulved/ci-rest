<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Example extends REST_Controller
{
	function index_get()
    {
        $this->load->driver('cache', array('adaptor', 'memcached'));
        $this->cache->memcached->save('foo', 'bar', 86400);
        $this->response('Response.');
    }
}
