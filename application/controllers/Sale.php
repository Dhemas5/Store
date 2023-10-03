<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sale extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_already_login();
        $this->load->model('sale_m');
    }

    public function index()
    {
        $this->load->model('member_m');
        $member = $this->member_m->get()->result();
        $data = array(
            'member' => $member,
            'invoice' => $this->sale_m->invoice_no(),
        );
        $this->template->load('template', 'transaksi/sale/sale_form', $data);
    }
}
