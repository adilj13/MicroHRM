<?php
class Transaction_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_trans($eid = FALSE,$month=FALSE)
        {
            if ($eid === FALSE || $month===FALSE)
            {
                $query = $this->db->query("SELECT * FROM transaction t,employee e WHERE t.emp_id = e.emp_id");
                return $query->result_array();
            }
            $query = $this->db->query("SELECT * FROM transaction WHERE emp_id = $eid AND MONTH(trans_date)= $month");
            return $query->result_array();
        }
        public function get_single_trans($trid = FALSE)
        {
                $query = $this->db->query("SELECT * FROM transaction t,employee e WHERE t.emp_id = e.emp_id AND t.trans_id=$trid");
                return $query->row_array();
        }
        public function calculate_monthly($eid = FALSE, $month=FALSE)
        {
            if ($eid === FALSE)
            {
                $query = $this->db->get('transaction');
                return $query->result_array();
            }
            $this->db->select('trans_amount');
            $query = $this->db->query("SELECT * FROM transaction WHERE emp_id = $eid AND MONTH(trans_date)= $month");

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
                'trans_amount' => $_POST['amount'],
                'trans_date'=> date('Y-m-d')
                );
            $this->db->insert('transaction', $data);
        }
        public function remove_trans($trid)
        {
            $this->db->query("DELETE FROM transaction WHERE trans_id = $trid");
        }
        public function edit_transaction()
        {
            $trid = $_POST['trid'];
            $data = array(
                'emp_id' => $_POST['eid'],
                'trans_date' => $_POST['amount'],
                'trans_amount' => $_POST['date']
                );
            $this->db->where('trans_id', $trid);
            $this->db->update('transaction', $data);
            return true;
        }
}