<div class="container">
  <form class="form-horizontal" action="<?php echo base_url(); ?>employee/ed_emp" role="form" method="post">
    <input type="hidden" name="eid" value="<?php echo $employee['emp_id']; ?>">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $employee['emp_name']; ?>" id ="name" name="name" placeholder="Enter Name of Employee" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cnic">CNIC Number:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" value="<?php echo $employee['emp_cnic']; ?>" id ="cnic" name="cnic" placeholder="Enter CNIC Number of Employee">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contact">Contact Number:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" value="<?php echo $employee['emp_contact_num']; ?>" id ="contact" name="contact" placeholder="Enter Contact No. of Employee" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nick_name">Nick Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $employee['emp_nick']; ?>" id ="nick_name" name="nick_name" placeholder="Enter Nickname of Employee (Name will be confidential)">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $employee['emp_address']; ?>" id ="address" name="address" placeholder="Enter Address of Employee" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="salary">Salary:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" value="<?php echo $employee['emp_salary']; ?>" id ="salary" name="salary" placeholder="Enter Proposed Salary of Employee" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="hiredate">HireDate:</label>
      <div class="col-sm-10">
        <!--<input type="text" class="form-control" value="<?php //echo $employee['emp_hiredate']; ?>" id ="hiredate" name="hiredate" placeholder="Enter Hire Date of Employee" required>
      -->
      <input type="text" value="<?php echo $employee['emp_hiredate']; ?>" id ="hiredate" name="hiredate" class="datepicker" data-date-format="yyyy/mm/dd">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-default">Clear</button>
      </div>
    </div>
  </form>
</div>