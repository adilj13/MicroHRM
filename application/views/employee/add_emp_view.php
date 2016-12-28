<div class="container">
  <form class="form-horizontal" action="<?php echo base_url(); ?>employee/in_emp" role="form" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id ="name" name="name" placeholder="Enter Name of Employee" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cnic">CNIC Number:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id ="cnic" name="cnic" placeholder="Enter CNIC Number of Employee">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contact">Contact Number:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id ="contact" name="contact" placeholder="Enter Contact No. of Employee" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nick_name">Nick Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id ="nick_name" name="nick_name" placeholder="Enter Nickname of Employee (Name will be confidential)">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id ="address" name="address" placeholder="Enter Address of Employee" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="salary">Salary:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id ="salary" name="salary" placeholder="Enter Proposed Salary of Employee" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="hiredate">HireDate:</label>
      <div class="col-sm-10">
        <input type="text" id ="hiredate" name="hiredate" class="datepicker" data-date-format="yyyy/mm/dd" placeholder="Enter Date of Hiring">
      </div>
    </div>
    <!--<div class="form-group">
      <label class="control-label col-sm-2" for="avatar">Avatar:</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id ="avatar" name="avatar" placeholder="Upload Avatar of Employee">
      </div>
    </div>-->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Add</button>
        <button type="reset" class="btn btn-default">Clear</button>
      </div>
    </div>
  </form>
</div>