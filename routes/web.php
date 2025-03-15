<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/challenge', [GreetingController::class, 'index']);


Route::get('/models', function () {
   //1. Using raw SQL query
   $students = DB::select('select * from students');
   //dd($students);

    //2. Using Query Builder
   $students = DB::table('students')->select(['nom', 'mailing'])->whereNotNull('mailing')->orderBy('nom')->get();
  // dd($students);

    //3. Using Eloquent ORM
   //students = Student::select(['nom', 'mailing', 'status'])->whereNotNull('mailing')->get();
    //dd($students);
    $students   = new student();
    $students->nom = 'Adele';
    $students->mailing = 'adel@example.com';
    $students->status = 'desactive';
    $students->save();
});
