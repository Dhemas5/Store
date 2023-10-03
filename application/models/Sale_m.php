<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sale_m extends CI_Model
{

    public function invoice_no()
    {
        // Mengambil tanggal dalam format yymmdd
        $date = date('ymd');

        // Membuat query SQL untuk mencari invoice terbaru
        $sql = "SELECT MAX(MID(invoice, 9, 4)) AS invoice_no FROM t_sale WHERE MID(invoice, 3, 6) = ?";
        $query = $this->db->query($sql, [$date]);

        // Memeriksa apakah query berhasil dieksekusi
        if ($query === false) {
            // Handle kesalahan query
            return "Error: " . $this->db->error(); // Gantilah dengan cara penanganan kesalahan yang sesuai
        }

        // Memeriksa apakah ada hasil dari query
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int)$row->invoice_no) + 1;
            $no = sprintf("%04d", $n); // Memastikan nomor faktur selalu 4 digit
        } else {
            $no = "0001";
        }

        // Membuat nomor faktur baru
        $invoice = "MP" . $date . $no;

        return $invoice;
    }
}
