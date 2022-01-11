
<?php $page = 'teacher' ?>

@extends('master')
@section('content')
    <div class="page-title">
        <h3>Teacher Trash View</h3>
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
                    <th>Department</th>
                    <th>Qualification</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
            </thead>
            <tbody>
                <?php $i=1;?>
                @foreach ($data as $teacher)
                <tr>
                    <td class="text-center">{{ $i }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->department }}</td>
                <td>{{ $teacher->qualification }}</td>
                <td>
                  <img src="{{ asset('storage/teacher/'.$teacher->photo) }}" width="50" height="50">
                </td>
                    <td>
                      @if (session('Admin_Login_id'))
                      <a href="{{url('/teacher_delete_undo/'.$teacher->id)}}" class="btn btn-info btn-sm my-1"
                        title="Undo"><i class="bi bi-arrow-return-left icon icon-left"></i>
                   </a>
                      <a href="{{ url('/teacher_delete_permanent/'.$teacher->id) }}" class="btn btn-danger btn-sm my-1" onclick="return confirm('Are You Sure! Delete This..')"
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
