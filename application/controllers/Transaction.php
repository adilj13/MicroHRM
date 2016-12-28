<?php
class Transaction extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('transaction_model');
                $this->load->model('employee_model');
                $this->load->helper('url');
        }
        public function index()
        {
                $data['success']=false;
        	$data['transaction'] = $this->transaction_model->get_trans();
        	$data['title'] = 'Transaction\'s Records';
                $this->load->view('header_view', $data);
        	$this->load->view('transaction/transaction_view', $data);
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
                $data['title'] = 'Process Transaction';
                $this->load->view('header_view', $data);
                $this->load->view('transaction/process_transaction', $data);
                $this->load->view('footer_view', $data);
        }
        public function intrans()
        {
                $this->transaction_model->insert_trans();
                $data['success']=true;
                $data['transaction'] = $this->transaction_model->get_trans();
                $data['title'] = 'Transaction\'s Records';
                $this->load->view('header_view', $data);
                $this->load->view('transaction/transaction_view', $data);
                $this->load->view('footer_view', $data);
        }
        public function delete($trid)
        {
                $this->transaction_model->remove_trans($trid);
                $data['success']=true;
                $data['title'] = 'Process Transaction';
                $data['transaction'] = $this->transaction_model->get_trans();
                $this->load->view('header_view', $data);
                $this->load->view('transaction/transaction_view', $data);
                $this->load->view('footer_view', $data);
        }
        public function edit($trid=FALSE)
        {
                if (!$trid) {
                        show_404();
                }
                $t_data = $this->transaction_model->get_single_trans($trid);
                if (isset($t_data)) {
                        $data['transaction']=$t_data;
                        $data['employee']=$this->employee_model->get_employee();
                }
                else{
                        show_404();
                }
                $data['title'] ="Edit Transaction";
                $this->load->view('header_view', $data);
                $this->load->view('transaction/edit_trans_view', $data);
                $this->load->view('footer_view', $data);
        }
        public function ed_trans()
        {
                if ($this->transaction_model->edit_transaction()) {
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