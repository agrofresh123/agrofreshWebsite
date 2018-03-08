<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{
    private $heading;
    public function __construct()
    {
        parent::__construct();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        // $this->load->model('category_model');
        // $this->heading = 'Category';
    }

    public function footerform()
    {
        $data 	                       = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
        $master_email['email'] = $this->input->post('femail');
        $master_email['ip']    = $this->input->ip_address();
        $this->form_validation->set_rules('femail', 'Email', 'trim|xss_clean|valid_email|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run()) {
            $status = $this->sendmail($master_email, 'subscriber', 'footer');
            $status = $this->sendtouser($master_email['email'], 'thankyou');
            if ($status==true) {
                $data['Response-Status']   = true;
                $data['Response-Validate'] = true;
                $data['Response-Message']  = 's';
            } else {
                $data['Response-Status']   = false;
                $data['Response-Validate'] = true;
                $data['Response-Message']  = 'f';
            }
        } else {
            foreach ($this->input->post() as $key => $value) {
                $data['Response-Message'][$key] = form_error($key);
            }
            $data['Response-data']  = validation_errors();
        }
        echo json_encode($data);
    }
    public function contactform()
    {
        $data 	                  = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
        $master_email['name']     = $this->input->post('name');
        $master_email['email']    = $this->input->post('email');
        $master_email['contactno']= $this->input->post('contactno');
        $master_email['subject']  = $this->input->post('subject');
        $master_email['message']  = $this->input->post('message');
        $master_email['ip']       = $this->input->ip_address();
        $this->form_validation->set_rules('name', 'Name', 'trim|xss_clean|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email|required');
        $this->form_validation->set_rules('contactno', 'Mobile Number', 'trim|xss_clean|numeric|callback_checkmobile|required');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|xss_clean|required');
        $this->form_validation->set_rules('message', 'message', 'trim|xss_clean|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run()) {
            $status = $this->sendmail($master_email, 'subscriber', 'Contact Form');
            $status = $this->sendtouser($master_email['email'], 'thankyou', 'Contact Form');
            if ($status==true) {
                $data['Response-Status']   = true;
                $data['Response-Validate'] = true;
                $data['Response-Message']  = 's';
            } else {
                $data['Response-Status']   = false;
                $data['Response-Validate'] = true;
                $data['Response-Message']  = 'f';
            }
        } else {
            foreach ($this->input->post() as $key => $value) {
                $data['Response-Message'][$key] = form_error($key);
            }
            $data['Response-data']  = validation_errors();
        }
        echo json_encode($data);
    }
    public function enquiryform()
    {
        $data 	                  = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
        $master_email['name']     = $this->input->post('appointment_name');
        $master_email['email']    = $this->input->post('appointment_email');
        $master_email['subject']  = $this->input->post('appointment_reason');
        $master_email['message']  = $this->input->post('appointment_message');
        $master_email['ip']       = $this->input->ip_address();
        $this->form_validation->set_rules('appointment_name', 'Name', 'trim|xss_clean|required');
        $this->form_validation->set_rules('appointment_email', 'Email', 'trim|xss_clean|valid_email|required');
        $this->form_validation->set_rules('appointment_reason', 'Enquiry', 'trim|xss_clean|required');
        $this->form_validation->set_rules('appointment_message', 'message', 'trim|xss_clean|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run()) {
            $status = $this->sendmail($master_email, 'enquiry', 'Enquiry Form');
            $status = $this->sendtouser($master_email['email'], 'thankyou', 'Enquiry Form');
            if ($status==true) {
                $data['Response-Status']   = true;
                $data['Response-Validate'] = true;
                $data['Response-Message']  = 's';
            } else {
                $data['Response-Status']   = false;
                $data['Response-Validate'] = true;
                $data['Response-Message']  = 'f';
            }
        } else {
            foreach ($this->input->post() as $key => $value) {
                $data['Response-Message'][$key] = form_error($key);
            }
            $data['Response-data']  = validation_errors();
        }
        echo json_encode($data);
    }
    public function footerenquiryform()
    {
        $data 	                  = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
        $master_email['name']     = $this->input->post('foname');
        $master_email['contact']    = $this->input->post('contact');
        $master_email['message']  = $this->input->post('fomessage');
        $master_email['ip']       = $this->input->ip_address();
        $this->form_validation->set_rules('foname', 'Name', 'trim|xss_clean|required');
        $this->form_validation->set_rules('contact', 'Contact Number', 'trim|xss_clean|numeric|required');
        $this->form_validation->set_rules('fomessage', 'Message', 'trim|xss_clean|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run()) {
            $status = $this->sendmail($master_email, 'footerenquiry', 'Footer Enquiry Form');
            // $status = $this->sendtouser($master_email['email'], 'thankyou', 'Footer Enquiry Form');
            if ($status==true) {
                $data['Response-Status']   = true;
                $data['Response-Validate'] = true;
                $data['Response-Message']  = 's';
            } else {
                $data['Response-Status']   = false;
                $data['Response-Validate'] = true;
                $data['Response-Message']  = 'f';
            }
        } else {
            foreach ($this->input->post() as $key => $value) {
                $data['Response-Message'][$key] = form_error($key);
            }
            $data['Response-data']  = validation_errors();
        }
        echo json_encode($data);
    }

    public function sendmail($master_user, $emailer, $subject)
    {
        $config = array(
           'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'freshagroindia@gmail.com',
			'smtp_pass' => 'tax@12345',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
        );
		/*
		 $config = array(
            'protocol' => 'sendmail',
            'smtp_host' => 'mail.whatsdesign.in',
            'smtp_port' => 25,
            'smtp_user' => 'no-reply@whatsdesign.in',
            'smtp_pass' => 'pranav*407',
            'smtp_timeout' => '4',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );*/
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('freshagroindia@gmail.com', 'freshagroindia');
        $this->email->to('freshagroindia@gmail.com');
        $this->email->subject($subject);
        $body = $this->load->view('front/emailer/'.$emailer, $master_user, true);
        $this->email->message($body);
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');
        return $tst = $this->email->send();
    }
    public function sendtouser($email, $emailer, $subject)
    {
        $config = array(
          'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'freshagroindia@gmail.com',
			'smtp_pass' => 'tax@12345',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
      );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('freshagroindia@gmail.com', 'freshagroindia');
        $this->email->to($email);
        $this->email->subject($subject);
        $body = $this->load->view('front/emailer/'.$emailer, '', true);
        $this->email->message($body);
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');
        return $tst = $this->email->send();
    }
    public function checkmobile($str)
    {
        if (1 !== preg_match("/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/", $str)) {
            $this->form_validation->set_message('checkmobile', 'The %s field is not valid! It must start with 789');
            return false;
        } else {
            return true;
        }
    }
}
