<?php

use Illuminate\Support\Facades\Route;
use App\Models\Students;

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
    return view("welcome");
});
Route::get('/insert', function () {
    DB::insert('insert into posts(Name, Date_of_birth, GPA, advisor) values(?,?,?)',["Kuyanish","21-02-2002",3.5,"Marzhan Bekbalovna"]);
});

Route::get('/select', function () {
   // return view("welcome");
    $students=DB::select('select * from posts where id=?');
    foreach ($students as $student) {
    	# code...
    	echo $student->ID;
    	echo $student->Name;
    	echo $student->Date_of_birth;
    	echo $student->GPA;
    	echo $student->advisor;
    	echo "<br>";
    }
});

Route::get('/update', function () {
    $updated=DB::update('update posts set name = "Daryn" where id=?'[2]);
    return $updated;
});

Route::get('/delete', function () {
    $deleted=DB::delete('delete from students where id=?',[2]);
    return $deleted;
});

Route::get('/find', function () {
	$students=Student::find(2);
	return $students->name;
});


Route::get('/insert2', function () {
    $student = new Post;
    $student->Name="Miras";
    $student->Date_of_birth="29-12-2001";
    $student->GPA=3.0;
    $student->advisor="Zhangir Rayev";
    $student->save();
});

Route::get('/update', function () {
	//$post = new Post;
    $student = Student::find(2);
    $student->Name="Aybek";
    $student->Date_of_birth="20-10-2002";
    $student->GPA=3.2;
    $student->advisor="Zhangir Rayev";
    $student->save();
});