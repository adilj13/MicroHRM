<?php
class Employee extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('employee_model');
                $this->load->model('transaction_model');
                $this->load->helper('url');
        }
        public function index()
        {
                $data['success']=false;
        	$data['employee'] = $this->employee_model->get_employee();
        	$data['title'] = 'Employee\'s Records';
                $this->load->view('header_view', $data);
        	$this->load->view('employee/employee_view', $data);
                $this->load->view('footer_view', $data);
        }
        public function detail($eid=FALSE)
        {
                if (!$eid) {
                        show_404();
                }
        	$e_data = $this->employee_model->get_employee($eid);
                if (isset($e_data)) {
                        $data['employee']=$e_data;
                }
                else{
                        show_404();
                }
                //$data['transaction'] = $this->transaction_model->get_trans($eid,date('m'));
                //$data['mon_total'] = $this->transaction_model->calculate_monthly($eid,date('m'));
        	$data['title'] = $data['employee']['emp_name'];
                $this->load->view('header_view', $data);
        	$this->load->view('employee/employee_detail', $data);
                $this->load->view('footer_view', $data);
        }
        public function in_emp()
        {
                if ($this->employee_model->insert_employee()) {
                        $data['success']=true;
                }
                else{
                        $data['success']=false;
                }
                $data['employee'] = $this->employee_model->get_employee();
                $data['title'] = 'Employee\'s Records';
                $this->load->view('header_view', $data);
                $this->load->view('employee/employee_view', $data);
                $this->load->view('footer_view', $data);
        }
        public function ed_emp()
        {
                if ($this->employee_model->edit_employee()) {
                        $data['success']=true;
                }
                else{
                        $data['success']=false;
                }
                $data['employee'] = $this->employee_model->get_employee();
                $data['title'] = 'Employee\'s Records';
                $this->load->view('header_view', $data);
                $this->load->view('employee/employee_view', $data);
                $this->load->view('footer_view', $data);
        }
        public function add()
        {
                $data['title'] = 'Add Employee';
                $this->load->view('header_view', $data);
                $this->load->view('employee/add_emp_view', $data);
                $this->load->view('footer_view', $data);

        }
        public function edit($eid=FALSE)
        {
                if (!$eid) {
                        show_404();
                }
                $e_data = $this->employee_model->get_employee($eid);
                if (isset($e_data)) {
                        $data['employee']=$e_data;
                }
                else{
                        show_404();
                }
                //$data['transaction'] = $this->transaction_model->get_trans($eid,date('m'));
                //$data['mon_total'] = $this->transaction_model->calculate_monthly($eid,date('m'));
                $data['title'] = $data['employee']['emp_name'];
                $this->load->view('header_view', $data);
                $this->load->view('employee/edit_emp_view', $data);
                $this->load->view('footer_view', $data);
        }
        public function suspend($eid=FALSE)
        {
                if (!$eid) {
                        show_404();
                }
                $this->employee_model->suspend_employee($eid);
                redirect('employee');
        }
        public function unsuspend()
        {
                $data['title'] = 'Unsuspend Employee';
                $data['employee'] = $this->employee_model->get_employee(FALSE,0);
                $this->load->view('header_view', $data);
                $this->load->view('employee/unsus_emp', $data);
                $this->load->view('footer_view', $data);
        }
        public function unsusemp()
        {
                if ($this->employee_model->unsuspend_employee()) {
                        $data['success']=true;
                }
                else{
                        $data['success']=false;
                }
                $data['employee'] = $this->employee_model->get_employee();
                $data['title'] = 'Employee\'s Records';
                $this->load->view('header_view', $data);
                $this->load->view('employee/employee_view', $data);
                $this->load->view('footer_view', $data);
        }
}