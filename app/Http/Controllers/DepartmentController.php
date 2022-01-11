<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LengthException;

class DepartmentController extends Controller
{
    // ShowDepartment
    public function ShowDepartment()
    {
        $data = DB::table('department')
            ->where('status', 1)->orderBy('id', 'DESC')
            ->get();
        return view('/department', compact('data'));
    }

    // EditDepartment
    function EditDepartment(Request $request, $id)
    {
        $request->validate([
            'department' => 'required',
        ]);
        $data = array(
            'name' => $request->input('department')
        );
        DB::table('department')
            ->where('id', $id)
            ->update($data);

        $request->session()->flash('success_msg', 'Update SuccessFull');

        return redirect('/department');
    }

    // AddDepartment
    function AddDepartment(Request $request)
    {
        $request->validate([
            'department' => 'required',
        ]);
        $data = array(
            'name' => $request->input('department'),
            'date' => date('Y-m-d h:i:s'),
        );
        DB::table('department')
            ->insert($data);

        $request->session()->flash('success_msg', 'New Department Add SuccessFull');

        return redirect('/department');
    }

    // DeleteDepartment
    function DeleteDepartment(Request $request, $id)
    {

        $update = array(
            'status' => '0'
        );
        DB::table('department')
            ->where('id', $id)
            ->update($update);

        $request->session()->flash('success_msg', 'One Item Move TO Trash');

        return redirect('/department');
    }

    // DepartmentTrash
    function DepartmentTrash()
    {
        $data = DB::table('department')
            ->where('status', 0)
            ->get();
        return view('/department_trash', compact('data'));
    }

    // PermanentDeleteDepartment
    function PermanentDeleteDepartment($id)
    {
        DB::table('department')
            ->where('id', $id)
            ->delete();
        $data = DB::table('department')
            ->where('status', 0)
            ->get();
        session()->flash('success_msg', 'Delete Successfull');
        return view('/department_trash', compact('data'));
    }

    // UndoDeleteDepartment
    function UndoDeleteDepartment($id)
    {
        $update = array(
            'status' => '1'
        );
        DB::table('department')
            ->where('id', $id)
            ->update($update);
        $data = DB::table('department')
            ->where('status', 0)
            ->get();
        session()->flash('success_msg', 'Department Undo Successfull');
        return view('/department_trash', compact('data'));
    }
}
