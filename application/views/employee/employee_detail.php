            <div class="container">
                 <div class="row">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img src="<?php echo base_url(); ?><?php echo $employee['emp_avatar']; ?>" class="img-thumbnail" align="center" alt="<?php echo $employee['emp_name']; ?>">
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
                                        <td>Contact Number: </td>
                                        <td><?php echo $employee['emp_contact_num']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Address: </td>
                                        <td><?php echo $employee['emp_address']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Hiring Date: </td>
                                        <td><?php echo date('F j, Y', strtotime($employee['emp_hiredate']));  ?></td>
                                    </tr>
                            </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <button onclick="parent.location='<?php echo base_url(); ?>employee/suspend/<?php echo $employee['emp_id']; ?>'" type="button" class="btn btn-info btn-block">Suspend <?php echo $employee['emp_name']; ?></button>
                    </div>
                    <div class="col-sm-6">
                        <button onclick="parent.location='<?php echo base_url(); ?>employee/edit/<?php echo $employee['emp_id']; ?>'" type="button" class="btn btn-info btn-block">Edit Details</button>
                    </div>
                </div>
            </div>