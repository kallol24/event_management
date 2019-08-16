<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","25");

class Landing_page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Event_model');
        $this->load->library('form_validation');
        $this->load->library('Ciqrcode');
    }

    public function index()
    {
        $data['view'] = 'landing_page';
        $this->load->view('include', $data);
    }

    public function register()
    {
        $id = $this->uri->segment(3);
        $data['view'] = 'registration';
        $this->load->view('include', $data);
    }

    public function confirm(){
        echo "<script>alert('Booking Confirmed'); window.location='index';</script>";

    }
    public function add_details()
    {
        if (isset($_POST['cancel'])){
            redirect(base_url('landing_page'));
        }
        else if (isset($_POST['submit'])) {

            $this->load->library('form_validation');
            $this->form_validation->set_rules('customer_name', 'Customer Name', 'trim|required');
            $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|regex_match[/^[0-9]{10}$/]');
            $this->form_validation->set_rules('email', 'Email Id', 'trim|required|valid_email');

            if ($this->form_validation->run()) {
                $data=array(
                    'customer_name' => $this->input->post('customer_name'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'booking_num' => $this->input->post('booking_num'),
                    'event' => $this->input->post('event_name'),
                    'amount' => $this->input->post('amount')
                );
                $result = $this->Event_model->add_data($data);

                if($result) {
                    $id=$result['id'];
                    $filename= $result['id'].'.png';
                    $content = "Name: ".$result['customer_name']."\nPhone: ".$result['phone']."\nEmail: ".$result['email']."\nQuantity: ".$result['booking_num']."\nEvent: ".$result['event'];
                    $this->qrcode($content,$filename,$id);
                    redirect(base_url('landing_page/confirm'));
                }
            }
            else{
                $data['view'] = 'registration';
                $this->load->view('include', $data);
            }
        }
    }

    public function qrcode($content,$filename,$id){
        header("Content-Type: image/png");
        $params['size'] = 7;
        $params['data'] = $content;
        $params['savename'] = FCPATH.'/uploads/qrcode/'.$filename;
        $this->ciqrcode->generate($params);
        $data = array(
            'qr' => '/uploads/qrcode/'.$filename,
        );
        $this->Event_model->update_qr($id,$data);

    }

    function send_email(){

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 25,
            'smtp_user' => 'kallolmedhi24@gmail.com',
            'smtp_pass' => '',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");

        $this->email->from('kallolmedhi24@gmail.com', 'Kallol');
        $this->email->to('kallolx@gmail.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();
    }


}