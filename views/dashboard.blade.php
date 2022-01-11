<?php $page = 'dashboard' ?>

     @extends('master')

        @section('content')

          <div class="page-title">
            <h3>Dashboard</h3>
          </div>

          <div class="row">

            <div class="col-sm-4">
              <div class="card text-purple">
                <h4 class="card-title bg-purple p-3 text-white rounded-3">Student</h4>
                <div class="px-3">
                  <div class="row">
                    <div class="col-6">
                      <i class="bi-people text-purple" style="font-size: 38px; width: auto; height: auto"></i>
                    </div>
                    <div class="col-6 text-center">
                      <p class="mb-0 pb-0" style="font-size: 30px">{{$totalstudent}}</p>
                      <span class="" style="font-size: 12px">Total</span>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0">
                  <a href="{{ url('/student') }}" class="text-white d-block p-2">View Student <i class="bi bi-box-arrow-in-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card text-primary">
                <h4 class="card-title bg-primary p-3 text-white rounded-3">Teacher</h4>
                <div class="px-3">
                  <div class="row">
                    <div class="col-6">
                      <i class="bi bi-person-lines-fill" style="font-size: 38px; width: auto; height: auto"></i>
                    </div>
                    <div class="col-6 text-center">
                      <p class="mb-0 pb-0" style="font-size: 30px">{{$totalteacher}}</p>
                      <span class="" style="font-size: 12px">Total</span>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0">
                  <a href="{{ url('/teacher') }}" class="text-white d-block p-2">View Teacher <i class="bi bi-box-arrow-in-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card text-success">
                <h4 class="card-title bg-success p-3 text-white rounded-3">Department</h4>
                <div class="px-3">
                  <div class="row">
                    <div class="col-6">
                      <i class="bi bi-house" style="font-size: 38px; width: auto; height: auto"></i>
                    </div>
                    <div class="col-6 text-center">
                      <p class="mb-0 pb-0" style="font-size: 30px">{{$totaldepartment}}</p>
                      <span class="" style="font-size: 12px">Total</span>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0">
                  <a href="{{ url('/department') }}" class="text-white d-block p-2">View Department <i class="bi bi-box-arrow-in-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card text-info">
                <h4 class="card-title bg-info p-3 text-white rounded-3">Result</h4>
                <div class="px-3">
                  <div class="row">
                    <div class="col-6">
                      <i class="bi bi-file-text" style="font-size: 38px; width: auto; height: auto"></i>
                    </div>
                    <div class="col-6 text-center">
                      <p class="mb-0 pb-0" style="font-size: 30px">320</p>
                      <span class="" style="font-size: 12px">Total</span>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0">
                  <a href="#" class="text-white d-block p-2">View Result <i class="bi bi-box-arrow-in-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card text-warning">
                <h4 class="card-title bg-warning p-3 text-white rounded-3">Book List</h4>
                <div class="px-3">
                  <div class="row">
                    <div class="col-6">
                      <i class="bi bi-book-half" style="font-size: 38px; width: auto; height: auto"></i>
                    </div>
                    <div class="col-6 text-center">
                      <p class="mb-0 pb-0" style="font-size: 30px">320</p>
                      <span class="" style="font-size: 12px">Total</span>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0">
                  <a href="#" class="text-white d-block p-2">View Book List <i class="bi bi-box-arrow-in-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card text-secondary">
                <h4 class="card-title bg-secondary p-3 text-white rounded-3">Notice</h4>
                <div class="px-3">
                  <div class="row">
                    <div class="col-6">
                      <i class=" bi bi-bell" style="font-size: 38px; width: auto; height: auto"></i>
                    </div>
                    <div class="col-6 text-center">
                      <p class="mb-0 pb-0" style="font-size: 30px">320</p>
                      <span class="" style="font-size: 12px">Total</span>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0">
                  <a href="#" class="text-white d-block p-2">View Notice <i class="bi bi-box-arrow-in-right"></i></a>
                </div>
              </div>
            </div>

          </div>

        @stop




