<?php

class Kategori extends CI_Controller
{
    public function cake()
    {
        $data['cake'] = $this->model_kategori->data_cake()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('cake', $data);
        $this->load->view('templates/footer');
    }
    public function party_cake()
    {
        $data['party_cake'] = $this->model_kategori->data_party_cake()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('party_cake', $data);
        $this->load->view('templates/footer');
    }
    public function dessert()
    {
        $data['dessert'] = $this->model_kategori->data_dessert()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dessert', $data);
        $this->load->view('templates/footer');
    }
}
