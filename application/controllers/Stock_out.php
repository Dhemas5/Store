<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock_out extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_already_login();
        $this->load->model(['item_m', 'supplier_m', 'stock_m_out']);
    }

    public function stock_out_data()
    {
        $data['row'] = $this->stock_m->get_stock_out()->result();
        $this->template->load('template', 'transaksi/stock_out/stock_out_data', $data);
    }

    public function add_stock_out()
    {
        $item = $this->item_m->get()->result();
        $supplier = $this->supplier_m->get()->result();
        $data = ['item' => $item, 'supplier' => $supplier];
        $this->template->load('template', 'transaksi/stock_out/stock_out_form', $data);
    }

    public function stock_out_del()
    {
        $stock_id = $this->uri->segment(4);
        $item_id = $this->uri->segment(5);
        $qty = $this->stock_m->get($stock_id)->row()->qty;
        $data = ['qty' => $qty, 'item_id' => $item_id];
        $this->item_m->update_stock_in($data);
        $this->stock_m->del($stock_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Stock-Out Berhasil Dihapus');
        }
        redirect('index.php/stock/out');
    }

    public function process()
    {
        if (isset($_POST['out_add'])) {
            $post = $this->input->post(null, TRUE);
            $this->stock_m->add_stock_out($post);
            $this->item_m->update_stock_out($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Stock-Out Berhasil Disimpan');
            }
            redirect('index.php/stock/out');
        }
    }
}
