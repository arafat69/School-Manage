<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\ExtensionElement;

class TeacherController extends Controller
{
    // ShowTeacher
    public function ShowTeacher()
    {

        $data = DB::table('teachers')
            ->where('status', 1)->orderBy('id','desc')
            ->get();

        $department = DB::table('department')
            ->where('status', 1)
            ->get();

        return view('/teacher', compact('data', 'department'));
    }

    // SelectDepartmrnt
    public function SelectDepartment()
    {
        $department = DB::table('department')
            ->where('status', 1)
            ->get();

        return view('/add_teacher', compact('department'));
    }

    // AddNewTeacher
    public function AddNewTeacher(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'qualification' => 'required',
            'phone' => 'required'
        ]);

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $img_ext = $file->guessExtension();
            $image = date('Y-m-d-h-i-s') . '.' . $img_ext;
            $file->storeAs('public/teacher', $image);

            $student = array(
                'name' => $request->input('name'),
                'qualification' => $request->input('qualification'),
                'department' => $request->input('department'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'photo' => $image,
            );
        } else {
            $student = array(
                'name' => $request->input('name'),
                'qualification' => $request->input('qualification'),
                'department' => $request->input('department'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address')
            );
        }
        DB::table('teachers')
            ->insert($student);

        $request->session()->flash('success_msg', 'New Teacher Add Successfull');

        return redirect('/teacher');
    }

    // UpdateTeacher
    public function UpdateTeacher(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'qualification' => 'required',
            'phone' => 'required'
        ]);

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $img_ext = $file->guessExtension();
            $image = date('Y-m-d-h-i-s') . '.' . $img_ext;
            $file->storeAs('public/teacher', $image);

            $student = array(
                'name' => $request->input('name'),
                'qualification' => $request->input('qualification'),
                'department' => $request->input('department'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'photo' => $image,
            );
        } else {
            $student = array(
                'name' => $request->input('name'),
                'qualification' => $request->input('qualification'),
                'department' => $request->input('department'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address')
            );
        }

        DB::table('teachers')
            ->where('id', $id)
            ->update($student);

        $request->session()->flash('success_msg', 'Teacher Update Successfull');

        return redirect('/teacher');
    }

    // DeleteTeacher
    public function DeleteTeacher($id)
    {
        $teacher = array(
            'status' => '0',
        );
        DB::table('teachers')
            ->where('id', $id)
            ->update($teacher);

        session()->flash('success_msg', 'One Item Move To Trash');

        return redirect('/teacher');
    }

    // TeachertTrash
    public function TeachertTrash()
    {
        $data = DB::table('teachers')
            ->where('status', 0)
            ->get();
        return view('/teacher_trash', compact('data'));
    }

    // TeacherTrashUpdate
    public function TeacherTrashUpdate($id)
    {
        $student = array(
            'status' => '1',
        );
        DB::table('teachers')
            ->where('id', $id)
            ->update($student);
        session()->flash('success_msg', 'Teacher Undo Successfull');
        return redirect('/teacher/trash');
    }

    // TeacherTrashDelete
    public function TeacherTrashDelete($id)
    {
        DB::table('teachers')
            ->where('id', $id)
            ->delete();
        session()->flash('success_msg', 'Permanent Delete Successfull');
        return redirect('/student/trash');
    }
}
