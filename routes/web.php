<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [DashboardController::class,'DashboardView']);

Route::get('/logout', function () {
    session()->forget(['Admin_Login_id','Admin_Login_name']);
    session()->flash('success_msg','You Are Now Visitor');
    return redirect('/dashboard');
});

Route::get('/student', [StudentController::class,'ShowStudent']);
Route::get('/add-student', [StudentController::class,'SelectDepartmrnt']);
Route::post('/add_new_student', [StudentController::class,'AddNewStudent']);
Route::post('/student_edit/{id}', [StudentController::class,'UpdateStudent']);
Route::get('/student_delete/{id}', [StudentController::class,'DeleteStudent']);
Route::get('/student/trash', [StudentController::class,'StudentTrash']);
Route::get('/student_delete_undo/{id}', [StudentController::class,'StudentTrashUpdate']);
Route::get('/student_delete_permanent/{id}', [StudentController::class,'StudentTrashDelete']);

Route::get('/teacher',[TeacherController::class,'ShowTeacher']);
Route::get('/add-teacher',[TeacherController::class,'SelectDepartment']);
Route::post('/add_new_teacher', [TeacherController::class,'AddNewTeacher']);
Route::post('/teacher_edit/{id}', [TeacherController::class,'UpdateTeacher']);
Route::get('/teacher_delete/{id}', [TeacherController::class,'DeleteTeacher']);
Route::get('/teacher/trash', [TeacherController::class,'TeachertTrash']);
Route::get('/teacher_delete_undo/{id}', [TeacherController::class,'TeacherTrashUpdate']);
Route::get('/teacher_delete_permanent/{id}', [TeacherController::class,'TeacherTrashDelete']);

Route::get('/department', [DepartmentController::class,'ShowDepartment']);
Route::get('/department/trash', [DepartmentController::class,'DepartmentTrash']);
Route::post('/department_add', [DepartmentController::class,'AddDepartment']);
Route::post('/department_edit/{id}', [DepartmentController::class,'EditDepartment']);
Route::get('/department_delete/{id}', [DepartmentController::class,'DeleteDepartment']);
Route::get('/department_delete_parmanent/{id}', [DepartmentController::class,'PermanentDeleteDepartment']);
Route::get('/department_delete_undo/{id}', [DepartmentController::class,'UndoDeleteDepartment']);

Route::middleware('admin_auth')->group(function(){
    Route::view('/login', 'login');
    Route::post('/login_submit', [adminController::class,'userLogin']);
    });
