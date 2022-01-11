
<?php $page = 'student' ?>

@extends('master')
@section('content')
    <div class="page-title">
        <h3>Student Trash View</h3>
    </div>

    <div class="add-section my-2">
        <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Go Back</a>
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
                <?php $i=1;?>
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
                      @if (session('Admin_Login_id'))
                      <a href="{{url('/student_delete_undo/'.$student->id)}}" class="btn btn-info btn-sm my-1"
                        title="Undo"><i class="bi bi-arrow-return-left icon icon-left"></i>
                   </a>
                      <a href="{{ url('/student_delete_permanent/'.$student->id) }}" class="btn btn-danger btn-sm my-1" onclick="return confirm('Are You Sure! Delete This..')"
                        title="Delete">
                        <i class="bi bi-trash-fill icon icon-left"></i>
                      </a>
                      @else
                      <small>No Action</small>
                      @endif
                    </td>
                  </tr>

                <?php $i++;?>
                @endforeach


            </tbody>
        </table>
    </div>
@stop
