                  <div class="container">
                    <?php if ($success) {?>
                      <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Operation Successful.
                      </div>
                    <?php } ?>
                    <div class="table-responsive">
                      <table id="empList" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Salary</th>
                            <th></th>
                            <th>Payment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($employee as $employee_item): ?>
                          <tr>
                            <td><?php echo $employee_item['emp_id']; ?></td>
                            <td><?php echo $employee_item['emp_name']; ?></td>
                            <td>Rs. <?php echo $employee_item['emp_salary']; ?></td>
                            <td><button onclick="parent.location='<?php echo base_url(); ?>employee/detail/<?php echo $employee_item['emp_id']; ?>'" type="button" class="btn btn-info btn-block">Detail</button></td>
                            <td>Rs. <?php echo $employee_item['emp_salary']; ?></td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>