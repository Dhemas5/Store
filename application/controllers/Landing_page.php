<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing_page extends CI_Controller
{
    public function index()
    {
        $this->load->view('landing_page');
    }
}
