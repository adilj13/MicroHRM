<div class="container">
  <form class="form-horizontal" action="<?php echo base_url(); ?>employee/unsusemp" role="form" method="post">
    <div class="form-group">
      <label for="eid" class="col-sm-2">Select list (select one):</label>
      <select class="form-control col-sm-10" name="eid">
        <?php foreach ($employee as $employee_item): ?>
        <option value="<?php echo $employee_item['emp_id']; ?>"><?php echo $employee_item['emp_name']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Unsuspend</button>
      </div>
    </div>
  </form>
</div>