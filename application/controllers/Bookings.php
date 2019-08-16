<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Event_model');
    }

    public function index()
    {
        $data['details']=$this->Event_model->view_bookings();
        $data['view'] = 'view_bookings';
        $this->load->view('admin/layout', $data);
    }

    public function view_qr(){
        $id=$this->uri->segment(3);
        $data['result']=$this->Event_model->fetch_qr($id);
        $this->load->view('view_qr',$data);
    }
}