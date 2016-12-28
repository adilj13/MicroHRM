            <div class="container">
                 <div class="row">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img src="<?php echo base_url(); ?>img/employee/profile.jpg" class="img-thumbnail" align="center" alt="<?php echo $employee['emp_name']; ?>" width="304" height="236">
                        </div>
                    </div>
                    <div class="col-sm-8">
                            <h1><?php echo $employee['emp_name']; ?></h1>
                            <table class="table table-striped">
                                    <tr>
                                        <th>Employee ID: </th>
                                        <th><?php echo $employee['emp_id']; ?></th>
                                    </tr>                            
                                    <tr>
                                        <td>Monthly Salary: </td>
                                        <td>Rs. <?php echo $employee['emp_salary']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>CNIC: </td>
                                        <td><?php echo $employee['emp_cnic']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Hiring Date: </td>
                                        <td><?php echo $employee['emp_hiredate']; ?></td>
                                    </tr>
                            </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                            <h2>Monthly Details: </h2>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Transaction ID: </th>
                                        <th>Day</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($transaction as $trans_item): ?>                           
                                    <tr>
                                        <td><?php echo $trans_item['trans_id']; ?></td>
                                        <td><?php echo date('l', strtotime($trans_item['trans_time']));  ?></td>
                                        <td><?php echo date('M j Y g:i A', strtotime($trans_item['trans_time']));  ?></td>
                                        <td>Rs. <?php echo $trans_item['trans_amount']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-4">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>Monthly Total: </th>
                                        <th>Rs. <?php echo($mon_total); ?></th>
                                    </tr>                            
                                    <tr>
                                        <td>Monthly Salary: </td>
                                        <td>Rs. <?php echo $employee['emp_salary']; ?></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total Balance: </th>
                                        <th>Rs. <?php echo $employee['emp_salary']-$mon_total; ?></th>
                                    </tr>
                                </tfoot>
                            </table>
                    </div>
                </div>
            </div>