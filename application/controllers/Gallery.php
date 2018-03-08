<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    public function index()
    {
        $page_data['heading']    = 'Agro Fresh Foods Enterprises | Gallery';
        $page_data['page_title'] = ':: Agro Fresh Foods Enterprises | Gallery ::';
        $page_data['pagename'] 	 = 'gallery';
        $page_data['bodyclass']  = 'inner-pg';
        $this->load->view('front/home', $page_data);
    }
}
