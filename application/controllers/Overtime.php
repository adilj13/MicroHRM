<?php
class Overtime extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('employee_model');
                $this->load->helper('url');
        }
        public function index()
        {
        	$data['employee'] = $this->employee_model->get_employee();
        	$data['title'] = 'Employee\'s Records';
                $this->load->view('header_view', $data);
        	$this->load->view('employee_view', $data);
                $this->load->view('footer_view', $data);
        }
        public function detail($eid=FALSE)
        {
                if (!$eid) {
                        show_404();
                }
        	$data['employee'] = $this->employee_model->get_employee($eid);
                $data['transaction'] = $this->employee_model->get_trans($eid,date('m'));
                $data['mon_total'] = $this->employee_model->calculate_monthly($eid,date('m'));
        	$data['title'] = $data['employee']['name'];
                $this->load->view('header_view', $data);
        	$this->load->view('employee_detail', $data);
                $this->load->view('footer_view', $data);
        }
        public function process()
        {
                $data['employee'] = $this->employee_model->get_employee();
                $data['title'] = 'Employee\'s Records';
                $this->load->view('header_view', $data);
                $this->load->view('process_transaction', $data);
                $this->load->view('footer_view', $data);
        }
        public function intrans()
        {
                $this->employee_model->insert_trans();
                $data['employee'] = $this->employee_model->get_employee();
                $data['title'] = 'Employee\'s Records';
                $this->load->view('header_view', $data);
                $this->load->view('employee_view', $data);
                $this->load->view('footer_view', $data);
        }
}