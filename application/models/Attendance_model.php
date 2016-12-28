<?php
class Attendance_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function insert_attendance()
        {
            $date = $_POST['atd_date'];
            $attendance = $_POST['atd'];
            foreach ($attendance as $eid => $sts) {
                $data= array(
                    'emp_id' => $eid ,
                    'atd_status' => $sts ,
                    'atd_date' => $date
                    );
                $this->db->insert('attendance', $data);
            }
            return true;
        }
        private function getNextId()
        {
            $query = $this->db->query("SELECT AUTO_INCREMENT as 'eid' FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'test' AND TABLE_NAME = 'employee'");
            return $query->row_array();
        }
        public function edit_attendance()
        {
            $eid = $_POST['eid'];
            $data = array(
                'emp_name' => $_POST['name'],
                'emp_nick' => $_POST['nick_name'],
                'emp_cnic' => $_POST['cnic'],
                'emp_salary' => $_POST['salary'],
                'emp_contact_num' => $_POST['contact'],
                'emp_address' => $_POST['address'],
                'emp_hiredate' => $_POST['hiredate']
                );
            $this->db->where('emp_id', $eid);
            $this->db->update('employee', $data);
            return true;
        }
        public function suspend_employee($eid)
        {
            $data = array(
                'emp_status' => 0
                );
            $this->db->where('emp_id', $eid);
            $this->db->update('employee', $data);
        }
        public function unsuspend_employee()
        {
            $eid = $_POST['eid'];
            $data = array(
                'emp_status' => 1
                );
            $this->db->where('emp_id', $eid);
            $this->db->update('employee', $data);
        }
}