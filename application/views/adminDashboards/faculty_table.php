 <div class="card-body">
                                                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>First Name</th>
                                                                        <th>Middle Name</th>
                                                                        <th>Last Name</th>
                                                                        <th>Position</th>
                                                                        <th>Department Code</th>
                                                                        <th>Contact</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                   <?php
                                                                    if ($data!=NULL) {
                                                                      foreach ($data as $row) {
                                                                        ?>
                                                                          <tr>
                                                                            <td><center><?php echo $row->profId; ?></center></td>
                                                                            <td><center><?php echo $row->fname; ?></center></td>
                                                                            <td><center><?php echo $row->mname; ?></center></td>
                                                                            <td><center><?php echo $row->lname; ?></center></td>
                                                                            <td><center><?php echo $row->position; ?></center></td>
                                                                            <td><center><?php echo $row->depName; ?></center></td>
                                                                            <td><center><?php echo $row->contact; ?></center></td>
                                                                            <td><center>
                                                                                <a href="" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                                                <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                                            </center></td>
                                                                          </tr>
                                                                        <?php
                                                                      }
                                                                    }
                                                                  ?>
                                                                </tbody>
                                                            </table>
                                                        </div>