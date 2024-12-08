<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



/*EX1 24/11/24 */
Route::get("/homepage", function () {
    return "<h1>This is home page</h1>";
});


/*EX2 24/11/24 */
Route::get("/blog/{id}", function ($id) {
    return "<h1>This is blog page : {$id} </h1>";
});


/*EX3 24/11/24 */
Route::get("/blog/{id}/edit", function ($id) {
    return "<h1>This is blog page : {$id} for edit</h1>";
});


/*EX4 24/11/24 */
Route::get("/product/{a}/{b}/{c}", function ($a, $b, $c) {
    return "<h1>This is product page </h1><div>{$a} , {$b}, {$c}</div>";
});


/*EX5 24/11/24 */
Route::get("/category/{a?}", function ($a = "mobile") {
    return "<h1>This is category page : {$a} </h1>";
});


/*EX6 24/11/24 */
Route::get("/myorder/create", function () {
    return "<h1>This is order form page : " . request("username") . "</h1>";
});



/*Route + View 24/11/24 */
Route::get("/hello", function () {
    return view("hello");
});



/*Route + View + Data 24/11/24 */
Route::get('/greeting', function () {

    $name = 'จีจี้';
    $last_name = 'มีหนวด';

    return view('greeting', compact('name', 'last_name'));
});




/*Route + View + Data + Bootstrap 24/11/24 */
Route::get('/bootstrap-example', function () {
    return view('bootstrap-example');
});

/*Quiz1 24/11/24*/
Route::get("/gallery", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    $god = "https://www.blackoutx.com/wp-content/uploads/2021/04/Thor.jpg";
    $spider = "https://icdn5.digitaltrends.com/image/spiderman-far-from-home-poster-2-720x720.jpg";

    return view("test/index", compact("ant", "bird", "cat", "god", "spider"));
});



/*Quiz2  24/11/24*/
Route::get("/gallery/ant", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    return view("test/ant", compact("ant"));
});

Route::get("/gallery/bird", function () {
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
    return view("test/bird", compact("bird"));
});

Route::get("/gallery/cat", function () {
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    return view("test/cat", compact("cat"));
});





/*01/12/24  Laravel 11 - Template Engine x Bootstrap */
Route::get("/teacher" , function (){
	return view("teacher");
});

Route::get("/student" , function (){
	return view("student");
});

Route::get("/theme" , function (){
	return view("theme");
});



// Route Template Component //
Route::get("/teacher", function () {
    return view("teacher");
});
Route::get("/student", function () {
    return view("student");
});



//Use Beautiful free Theme : Active Bootstrap //
Route::get('/active/index', function () {
    return view('active/index');
})->name('index');



// Quiz 2- Use Beautiful free Theme : Active Bootstrap 01/12/24//
Route::get('/active/about', function () {
    return view('active/about');
})->name('about');
Route::get('/active/services', function () {
    return view('active/services');
})->name('services');
Route::get('/active/portfolio', function () {
    return view('active/portfolio');
})->name('portfolio');
Route::get('/active/team', function () {
    return view('active/team');
})->name('team');
Route::get('/active/blog', function () {
    return view('active/blog');
})->name('blog');
Route::get('/active/contact', function () {
    return view('active/contact');
})->name('contact');