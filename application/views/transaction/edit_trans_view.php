<div class="container">
  <form class="form-horizontal" action="<?php echo base_url(); ?>transaction/ed_trans" role="form" method="post">
    <input type="hidden" name="trid" value="<?php echo $transaction['trans_id']; ?>">
        <div class="form-group">
      <label for="eid" class="col-sm-2">Select Employee (select one):</label>
      <select class="form-control col-sm-10" name="eid">
        <?php foreach ($employee as $employee_item): ?>
        <option value="<?php echo $employee_item['emp_id']; ?>" <?php if ($employee_item['emp_id']==$transaction['emp_id']) {echo "selected";} ?>><?php echo $employee_item['emp_name']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="amount">Amount:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" value="<?php echo $transaction['trans_amount']; ?>" id ="amount" name="amount" placeholder="Enter Proposed amount of transaction" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="date">Date:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $transaction['trans_date']; ?>" id ="date" name="date" placeholder="Enter Hire Date of transaction" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-default">Clear</button>
      </div>
    </div>
  </form>
</div>