
<?php $page = 'department' ?>

@extends('master')
@section('content')
    <div class="page-title">
        <h3>Department Trash View</h3>
    </div>

    <div class="add-section my-2">
        <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Go Back</a>
    </div>


    <div class="table-responsive" id="printelement">
        <table id="myTable" class="table table-bordered table-striped">
            <thead class="table-success">
                <tr>
                    <th class="text-center">No</th>
                    <th>Department Name</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;?>
                @foreach ($data as $department)
                <tr>
                    <td class="text-center">{{ $i }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->date }}</td>
                    <td>
                        @if (session('Admin_Login_id'))
                        <a href="{{url('/department_delete_undo/'.$department->id)}}" class="btn btn-info btn-sm my-1"
                             title="Undo"><i class="bi bi-arrow-return-left icon icon-left"></i>
                        </a>
                        <a href="{{url('/department_delete_parmanent/'.$department->id)}}" class="btn btn-danger btn-sm my-1"
                            onclick="return confirm('Are You Sure! Delete Parmanent')" title="Delete">
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
