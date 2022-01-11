<?php $page = 'student' ?>

@extends('master')
@section('content')
    <div class="page-title">
          <h3>Students</h3>
        </div>

        <div class="add-section my-2">
          <a href="{{ url('/add-student') }}" class="btn btn-primary"><i class="bi bi-person-plus btn-icon"></i> Add New Student</a>
          <button class="btn btn-success" onclick="myprintelement()">
            <i class="bi bi-printer btn-icon"></i> Print
          </button>
          <a href="{{ url('/student/trash') }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Trash</a>
        </div>

        <div class="table-responsive" id="printelement">
          <table id="myTable" class="table table-bordered table-striped">
            <thead class="table-success">
              <tr>
                <th class="text-center">No</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Department</th>
                <th class="text-center">Photo</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                @foreach ($data as $student)

              <tr>
                <td class="text-center">{{ $i }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->roll }}</td>
                <td>{{ $student->department }}</td>
                <td class="text-center">
                    <img src="{{ asset('storage/student/'.$student->photo) }}" width="42" height="42">
                </td>
                <td>
                  <button type="button" class="btn btn-sm btn-primary my-1" title="View" data-bs-toggle="modal"
                    data-bs-target="#studentView{{ $student->id }}">
                    <i class="bi bi-zoom-in icon icon-left"></i>
                  </button>
                  @if (session('Admin_Login_id'))
                  <button data-bs-toggle="modal" data-bs-target="#StudentEdit{{ $student->id }}" class="btn btn-sm btn-info my-1"
                    title="Edit">
                    <i class="bi bi-pencil-square icon icon-left"></i>
                  </button>
                  <a href="{{ url('/student_delete/'.$student->id) }}" class="btn btn-danger btn-sm my-1" onclick="return confirm('Are You Sure! Delete This..')"
                    title="Delete">
                    <i class="bi bi-trash-fill icon icon-left"></i>
                  </a>
                  @else
                  <small>No Action</small>
                  @endif
                </td>
              </tr>
              <!-- Student Details View -->
              <div class="modal fade" id="studentView{{ $student->id }}">
                <div class="modal-dialog modal-dialog-centered modal-fullscreen" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-primary">
                      <h5 class="modal-title text-white">Student Details</h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" id="detailsprint{{ $student->id }}">

                      <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ asset('storage/student/'.$student->photo) }}" alt="Admin" class="rounded-circle" width="150" height="150">
                                <div class="mt-3">
                                  <h4>{{ $student->name}}</h4>
                                  <p class="text-secondary mb-1">{{ $student->department.' '.$student->semester.' '.'Semester' }}</p>
                                  <button class="btn btn-primary">Follow</button>
                                  <button class="btn btn-outline-primary">Message</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card mt-3">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                <circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                <a href="#" class="text-secondary">Website link</a>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="bi bi-whatsapp" style="margin-left: 6px; color:#00cfdd"></i> Whatsapp</h6>
                                <a href="#" class="text-secondary">Whatsapp link</a>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                                <a href="#" class="text-secondary">Twitter link</a>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                <a href="#" class="text-secondary">Instagram link</a>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                <a href="#" class="text-secondary">FaceBook link</a>
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
                                <div class="col-sm-9 text-secondary"> {{ $student->name}}</div>
                              </div>
                              <hr class="my-2">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Father Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary"> {{ $student->father}}</div>
                              </div>
                              <hr class="my-2">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Mother Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary"> {{ $student->mother}}</div>
                              </div>
                              <hr class="my-2">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Roll Number</h6>
                                </div>
                                <div class="col-sm-9 text-secondary"> {{ $student->roll}} </div>
                              </div>
                              <hr class="my-2">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Registration</h6>
                                </div>
                                <div class="col-sm-9 text-secondary"> {{ $student->reg}}</div>
                              </div>
                              <hr class="my-2">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Department</h6>
                                </div>
                                <div class="col-sm-9 text-secondary"> {{ $student->department}}</div>
                              </div>
                              <hr class="my-2">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Semester & Shift</h6>
                                </div>
                                <div class="col-sm-9 text-secondary"> {{ $student->semester.' - '.$student->shift}} </div>
                              </div>
                              <hr class="my-2">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Session</h6>
                                </div>
                                <div class="col-sm-9 text-secondary"> {{ $student->session}} </div>
                              </div>
                              <hr class="my-2">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary"> {{ $student->phone}}</div>
                              </div>
                              <hr class="my-2">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary"> {{ $student->email}}</div>
                              </div>
                              <hr class="my-2">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">{{ $student->address}}</div>
                              </div>
                              <hr class="my-2">
                            </div>
                          </div>

                          <div class="row gutters-sm">
                            <div class="col-sm-12 mb-3">
                              <div class="card h-100">
                                <div class="card-body">
                                  <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i> Status</h6>
                                  <small>Regular</small>
                                  <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary" onclick="detailsprint({{ $student->id }})">
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

              <!-- edit student -->
              <div class="modal fade" id="StudentEdit{{ $student->id}}">
                <div class="modal-dialog modal-dialog-centered modal-fullscreen" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-success">
                      <h5 class="modal-title text-white"><i class="bi bi-pencil"></i> Edit Student</h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{ url('/student_edit/'.$student->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Student Name</label>
                              <input type="text" class="form-control" name="name" value="{{ $student->name}}">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="border-1">
                              <img src="{{ asset('storage/student/'.$student->photo) }}" width="50" height="50" id="output">
                              <input type="file" name="photo" id="image" accept="image/*" onchange="loadFile(event)">
                              <label for="image" class="btn btn-sm btn-primary mt-1">Change Photo</label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Father Name</label>
                              <input type="text" class="form-control" name="father" value="{{ $student->father}}">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Mother Name</label>
                              <input type="text" class="form-control" name="mother" value="{{ $student->mother}}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Roll Number</label>
                              <input type="text" class="form-control" name="roll" value="{{ $student->roll}}">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Reg Number</label>
                              <input type="text" class="form-control" name="reg" value="{{ $student->reg }}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Select Department</label>
                              <select name="department" class="form-select">
                                @foreach ($department as $departments)
                                <option value="{{ $departments->name }}"
                                    @if ($departments->name == $student->department)
                                    selected
                                   @endif>{{ $departments->name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Select Semester</label>
                              <select name="semester" class="choices form-select">
                                <option selected value="{{ $student->semester }}">{{ $student->semester }}</option>
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                                <option value="3rd">3rd</option>
                                <option value="4th">4th</option>
                                <option value="5th">5th</option>
                                <option value="6th">6th</option>
                                <option value="7th">7th</option>
                                <option value="8th">8th</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Select Shift</label>
                              <select name="shift" class="form-select">
                                <option selected value="{{ $student->shift }}">{{ $student->shift }}</option>
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Session</label>
                              <input type="text" name="session" class="form-control" value="{{ $student->session }}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Email</label>
                              <input type="email" name="email" class="form-control" value="{{ $student->email }}">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="" class="fw-bold">Phone Number</label>
                              <input type="number" name="phone" class="form-control" value="{{ $student->phone }}">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="" class="fw-bold">Address</label>
                          <input type="text" name="address" class="form-control" value="{{ $student->address }}">
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
              <?php $i++?>
              @endforeach

            </tbody>
          </table>
        </div>
    @stop
