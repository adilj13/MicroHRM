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
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($transaction as $trans_item): ?>
                          <tr>
                            <td><?php echo $trans_item['trans_id']; ?></td>
                            <td><?php echo $trans_item['emp_name']; ?></td>
                            <td><?php echo date('F j, Y', strtotime($trans_item['trans_date']));  ?></td>
                            <td>Rs. <?php echo $trans_item['trans_amount']; ?></td>
                            <td>
                              <button onclick="parent.location='<?php echo base_url(); ?>transaction/delete/<?php echo $trans_item['trans_id']; ?>'" type="button" class="btn btn-danger">Remove</button>
                              <button onclick="parent.location='<?php echo base_url(); ?>transaction/edit/<?php echo $trans_item['trans_id']; ?>'" type="button" class="btn btn-primary">Edit</button>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>