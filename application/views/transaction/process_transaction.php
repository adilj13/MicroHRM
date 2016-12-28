<div class="container">
  <form class="form-horizontal" action="<?php echo base_url(); ?>transaction/intrans" role="form" method="post">
    <div class="form-group">
      <label for="eid" class="col-sm-2">Select list (select one):</label>
      <select class="form-control col-sm-10" name="eid">
        <?php foreach ($employee as $employee_item): ?>
        <option value="<?php echo $employee_item['emp_id']; ?>"><?php echo $employee_item['emp_name']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="amount">Transaction Amount:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id ="amount" name="amount" placeholder="Enter Amount in Rupees.">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>