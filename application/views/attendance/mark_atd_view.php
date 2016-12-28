                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                          <h2><?php echo $title; ?></h2>
                          <form class="form-horizontal" action="<?php echo base_url(); ?>attendance/in_atd" role="form" method="post">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="atd_date">Date:</label>
                              <div class="col-sm-10">
                                <input type="text" id ="atd_date" name="atd_date" class="datepicker" data-date-format="yyyy/mm/dd" value="<?php echo date('Y/m/d');?>">
                              </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Employee ID: </th>
                                        <th>Employee Name: </th>
                                        <th>Attendance: </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($employee as $emp_item): ?>                           
                                    <tr>
                                        <td><?php echo $emp_item['emp_id']; ?></td>
                                        <td><?php echo $emp_item['emp_name'];  ?></td>
                                        <td>
                                          <input type="radio" name="atd[<?php echo $emp_item['emp_id']; ?>]" value="P" checked>P
                                          <input type="radio" name="atd[<?php echo $emp_item['emp_id']; ?>]" value="A" >A
                                          <input type="radio" name="atd[<?php echo $emp_item['emp_id']; ?>]" value="L" >L
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                              </table>
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                  <button type="reset" class="btn btn-default">Clear</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>