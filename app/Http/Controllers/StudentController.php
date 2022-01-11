<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\ExtensionElement;

class StudentController extends Controller
{
    // ShowStudent
    public function ShowStudent()
    {
        $data = DB::table('students')
            ->join('student_details', 'students.id', '=', 'student_details.student_id')
            ->where('status', 1)->orderBy('id','desc')
            ->get();

        $department = DB::table('department')
            ->where('status', 1)
            ->get();

        return view('/student', compact('department', 'data'));
    }

    // SelectDepartmrnt
    public function SelectDepartmrnt()
    {
        $department = DB::table('department')
            ->where('status', 1)
            ->get();

        return view('/add_student', compact('department'));
    }

    // AddNewStudent
    public function AddNewStudent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'roll' => 'required',
            'reg' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'session' => 'required',
        ]);

        $roll = $request->input('roll');

        $student = array(
            'name' => $request->input('name'),
            'roll' => $request->input('roll'),
            'reg' => $request->input('reg'),
            'department' => $request->input('department'),
            'semester' => $request->input('semester'),
            'shift' => $request->input('shift'),
        );

        DB::table('students')
            ->insert($student);

        $std_id = DB::table('students')
            ->where('roll', $roll)
            ->get();

        $Student_id = $std_id['0']->id;

        $file = $request->file('photo');
        $img_ext = $file->guessExtension();
        $image = date('Y-m-d-h-i-s') . '.' . $img_ext;
        $file->storeAs('public/student', $image);


        $student_details = array(
            'student_id' => $Student_id,
            'father' => $request->input('father'),
            'mother' => $request->input('mother'),
            'session' => $request->input('session'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'photo' => $image,
        );

        DB::table('student_details')
            ->insert($student_details);

        $request->session()->flash('success_msg', 'Student Add Successfull');

        return redirect('/student');
    }

    // UpdateStudent
    public function UpdateStudent(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'roll' => 'required',
            'reg' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'session' => 'required',
        ]);


        $student = array(
            'name' => $request->input('name'),
            'roll' => $request->input('roll'),
            'reg' => $request->input('reg'),
            'department' => $request->input('department'),
            'semester' => $request->input('semester'),
            'shift' => $request->input('shift'),
        );

        DB::table('students')
            ->where('id', $id)
            ->update($student);


        if ($request->file('photo')) {

            $file = $request->file('photo');
            $img_ext = $file->guessExtension();
            $image = date('Y-m-d-h-i-s') . '.' . $img_ext;
            $file->storeAs('public/student', $image);

            $student_details = array(
                'father' => $request->input('father'),
                'mother' => $request->input('mother'),
                'session' => $request->input('session'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'photo' => $image
            );
        } else {
            $student_details = array(
                'father' => $request->input('father'),
                'mother' => $request->input('mother'),
                'session' => $request->input('session'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address')
            );
        }

        DB::table('student_details')
            ->where('student_id', $id)
            ->update($student_details);

        $request->session()->flash('success_msg', 'Student Update Successfull');

        return redirect('/student');
    }

    // DeleteStudent
    public function DeleteStudent($id)
    {
        $student = array(
            'status' => '0',
        );
        DB::table('students')
            ->where('id', $id)
            ->update($student);

        session()->flash('success_msg', 'One Item Move To Trash');

        return redirect('/student');
    }

    // StudentTrash
    public function StudentTrash()
    {
        $data = DB::table('students')
            ->join('student_details', 'students.id', '=', 'student_details.student_id')
            ->where('status', 0)
            ->get();
        return view('/student_trash', compact('data'));
    }

    // StudentTrashUpdate
    public function StudentTrashUpdate($id)
    {
        $student = array(
            'status' => '1',
        );
        DB::table('students')
            ->where('id', $id)
            ->update($student);
            session()->flash('success_msg', 'One Item Undo Successfull');
        return redirect('/student/trash');
    }

    // StudentTrashDelete
    public function StudentTrashDelete($id)
    {
        DB::table('students')
            ->where('id', $id)
            ->delete();
            session()->flash('success_msg', 'Permanent Delete Successfull');
        return redirect('/student/trash');
    }
}
