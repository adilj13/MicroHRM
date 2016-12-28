<?php
class Overtime_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_employee($eid = FALSE)
        {
        	if ($eid === FALSE)
        	{
                $query = $this->db->get('employeeData');
                return $query->result_array();
            }
            $query = $this->db->get_where('employeeData', array('id' => $eid));
            return $query->row_array();
        }
        public function get_trans($eid = FALSE,$month=FALSE)
        {
            if ($eid === FALSE || $month===FALSE)
            {
                $query = $this->db->get('transaction');
                return $query->result_array();
            }
           
            $query = $this->db->query("SELECT * FROM transaction WHERE emp_id = $eid AND MONTH(trans_time)= $month");
            return $query->result_array();
        }
        public function calculate_monthly($eid = FALSE, $month=FALSE)
        {
            if ($eid === FALSE)
            {
                $query = $this->db->get('transaction');
                return $query->result_array();
            }
            $this->db->select('trans_amount');
            $query = $this->db->query("SELECT * FROM transaction WHERE emp_id = $eid AND MONTH(trans_time)= $month");

            $trans_list = $query->result_array();
            $total_trans=0;
            foreach ($trans_list as $transac)
            {
                $total_trans=$total_trans+$transac['trans_amount'];
            }
            return $total_trans;
        }
        public function insert_trans()
        {
            $data = array(
                'emp_id' => $_POST['eid'],
                'trans_amount' => $_POST['amount']
                );
            $this->db->insert('transaction', $data);
        }
}