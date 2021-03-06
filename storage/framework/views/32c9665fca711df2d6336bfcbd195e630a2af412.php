<?php $page = 'teacher' ?>


<?php $__env->startSection('content'); ?>
        <div class="page-title">
          <h3>Teachers</h3>
        </div>

        <div class="add-section my-2">
          <a href="add-teacher" class="btn btn-primary"><i class="bi bi-person-plus btn-icon"></i> Add New Teacher</a>
          <button class="btn btn-success" onclick="myprintelement()">
            <i class="bi bi-printer btn-icon"></i> Print
          </button>
        </div>

        <div class="table-responsive" id="printelement">
          <table id="myTable" class="table table-bordered table-striped">
            <thead class="table-success">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Qualification</th>
                <th>Department</th>
                <th>Phone</th>
                <th>Photo</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>Shahadat Hossain</td>
                <td>Chief Instructor</td>
                <td>Computer</td>
                <td>01789012345</td>
                <td>
                  <img src="assets/images/avatar/avatar-s-14.png" width="50" height="50">
                </td>
                <td>
                  <button type="button" class="btn btn-sm btn-primary my-1" title="View" data-bs-toggle="modal"
                    data-bs-target="#studentView">
                    <i class="bi bi-zoom-in icon icon-left"></i>
                  </button>
                  <?php if(session('Admin_Login_id')): ?>
                  <button data-bs-toggle="modal" data-bs-target="#StudentEdit" class="btn btn-sm btn-info my-1"
                    title="Edit">
                    <i class="bi bi-pencil-square icon icon-left"></i>
                  </button>
                  <a href="#" class="btn btn-danger btn-sm my-1"
                    onclick="return confirm('Are You Sure! Delete This..')" title="Delete">
                    <i class="bi bi-trash-fill icon icon-left"></i>
                  </a>
                  <?php else: ?>
                  <small>No Action</small>
                  <?php endif; ?>
                </td>
              </tr>
              <!-- Teacher Details View -->
              <div class="modal fade" id="studentView">
                <div class="modal-dialog modal-dialog-centered modal-fullscreen" role="document">
                  <div class="modal-content" >
                    <div class="modal-header bg-primary">
                      <h5 class="modal-title text-white">Teacher Details</h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" id="detailsprint">

                    <div class="row gutters-sm">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                              <div class="mt-3">
                                <h4>John Doe</h4>
                                <p class="text-secondary mb-1">Full Stack Developer</p>
                                <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                <button class="btn btn-primary">Follow</button>
                                <button class="btn btn-outline-primary">Message</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card mt-3">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                              <span class="text-secondary">https://bootdey.com</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                              <span class="text-secondary">bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                              <span class="text-secondary">@bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                              <span class="text-secondary">bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                              <span class="text-secondary">bootdey</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="card mb-3">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                Kenneth Valdez
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                fip@jukmuh.al
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                (239) 816-9029
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Mobile</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                (320) 380-4539
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                Bay Area, San Francisco, CA
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-12">
                                <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row gutters-sm">
                          <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                              <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                <small>Web Design</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Website Markup</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>One Page</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Mobile Template</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Backend API</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                              <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                <small>Web Design</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Website Markup</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>One Page</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Mobile Template</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Backend API</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    </div>

                    <div class="modal-footer">
                      <button class="btn btn-primary" onclick="detailsprint()">
                        <i class="bi bi-printer btn-icon"></i> Print
                      </button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x btn-icon"></i> Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              </div>

              <!-- edit Teacher -->
              <div class="modal fade" id="StudentEdit">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-success">
                      <h5 class="modal-title text-white"><i class="bi bi-pencil"></i> Edit Teacher</h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="">
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Teacher Name</label>
                              <input type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="border-1">
                              <img src="assets/images/avatar/avatar-s-1.png" width="50" height="50" id="output">
                              <input type="file" name="photo" id="image" accept="image/*" onchange="loadFile(event)">
                              <label for="image" class="btn btn-sm btn-primary mt-1">Change Photo</label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Qualification</label>
                              <input type="text" class="form-control" name="qualification" value="">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Select Department</label>
                              <select name="department" class="choices form-select">
                                <option value="Computer">Computer</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Civil">Civil</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Email</label>
                              <input type="email" name="email" class="form-control"
                                placeholder="Email Address (option)">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Phone Number</label>
                              <input type="number" name="phone" class="form-control"
                                placeholder="Phone Number (option)">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="" class="fw-bold">Address</label>
                          <input type="text" name="address" class="form-control" placeholder="Address (option)">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </tbody>
          </table>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\schoolmanagement\resources\views/teacher.blade.php ENDPATH**/ ?>