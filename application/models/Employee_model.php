<?php
class Employee_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_employee($eid = FALSE,$status=1)
        {
            if ($status === 0)
            {
                $this->db->order_by("emp_name", "asc");
                $query = $this->db->get_where('employee', array('emp_status' => 0));
                return $query->result_array();
            }
        	if ($eid === FALSE)
        	{
                $this->db->order_by("emp_name", "asc");
                $query = $this->db->get_where('employee', array('emp_status' => 1));
                return $query->result_array();
            }
            $query = $this->db->get_where('employee', array('emp_id' => $eid,'emp_status' => 1));

            return $query->row_array();
        }
        public function insert_employee()
        {
            /*$allowedExts = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["avatar"]["name"]);
            $extension = end($temp);
            $targetDir= "img/employee/";
            $avatar;
            if ((($_FILES["avatar"]["type"] == "image/gif")
                || ($_FILES["avatar"]["type"] == "image/jpeg")
                || ($_FILES["avatar"]["type"] == "image/jpg")
                || ($_FILES["avatar"]["type"] == "image/pjpeg")
                || ($_FILES["avatar"]["type"] == "image/x-png")
                || ($_FILES["avatar"]["type"] == "image/png"))
                && ($_FILES["avatar"]["size"] < 100000)
                && in_array($extension, $allowedExts))
            {
                if ($_FILES["avatar"]["error"] > 0)
                {
                    return false;
                }
                else 
                {
                    $name=$this->getNextId();
                    $newfilename = $name['eid'] . '.' . $extension;
                    move_uploaded_file($_FILES["avatar"]["tmp_name"], $targetDir . $newfilename);
                    $avatar=$targetDir . $newfilename;
                }
            }
            else
            {
                return false;
            }*/
            $data = array(
                'emp_name' => $_POST['name'],
                'emp_nick' => $_POST['nick_name'],
                'emp_cnic' => $_POST['cnic'],
                'emp_salary' => $_POST['salary'],
                'emp_hiredate' => $_POST['hiredate'],
                'emp_contact_num' => $_POST['contact'],
                'emp_address' => $_POST['address']
                );
            $this->db->insert('employee', $data);
            return true;
        }
        private function getNextId()
        {
            $query = $this->db->query("SELECT AUTO_INCREMENT as 'eid' FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'test' AND TABLE_NAME = 'employee'");
            return $query->row_array();
        }
        public function edit_employee()
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