<?php

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
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});
//Route::get('/','controllerhomepage@Viewdesign');

Route::get('/domestic', function () {
    return view('domestic');
});

Route::get('/international',function (){
    return view('international');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/category_add', function () {
    return view('category_add');
});
Route::post('categorysavedata',"categorycontroller@category_add")->name('categorysaveData');
Route::get('/category_show','categorycontroller@category_show');
Route::get('/category_delete/{cat_id}','categorycontroller@category_delete')->name('deletepost');
Route::get('/category_update/{cat_id}','categorycontroller@category_update')->name('updatepost');
Route::post('/category_save-update-data','categorycontroller@category_saveupdated')->name('saveupdatedpost');

//country
Route::get('/country_add', function () {
    return view('country_add');
});
Route::post('countrysave',"countrycontroller@country_add")->name('countrysave');
Route::get('/country_show','countrycontroller@country_show');
Route::get('/country_delete/{id}','countrycontroller@country_delete')->name('countrydeletepost');
Route::get('/country_update/{id}','countrycontroller@countryupdate')->name('countryupdatepost');
Route::post('/country_save-update-data','countrycontroller@countrysaveupdated')->name('countrysaveupdatedpost');

//user
Route::get('/usertable_add', function () {
    return view('usertable_add');
});
Route::post('usersave',"usercontroller@user_add")->name('usersave');
Route::get('/usertable_show','usercontroller@user_show');
Route::get('/user_delete/{id}','usercontroller@user_delete')->name('userdeletepost');
Route::get('/usertable_update/{id}','usercontroller@userupdate')->name('userupdatepost');
Route::post('/usertable_save-update-data','usercontroller@usersaveupdated')->name('usersaveupdatedpost');

//package
Route::get('/package_add', function () {
    return view('package_add');
});
Route::post('packagesave',"packagecontroller@package_add")->name('packagesave');
Route::get('/package_show','packagecontroller@package_show');
Route::get('/package_delete/{id}','packagecontroller@package_delete')->name('packagedeletepost');
Route::get('/package_update/{id}','packagecontroller@packageupdate')->name('packageupdatepost');
Route::post('/package_save-update-data','packagecontroller@packagesaveupdated')->name('packagesaveupdatedpost');


//feedback
Route::get('/feedback_add', function () {
    return view('feedback_add');
});
Route::post('feedbackesave',"feedbackcontroller@feedback_add")->name('feedbacksave');
Route::get('/feedback_show','feedbackcontroller@feedback_show');
Route::get('/feedback_delete/{id}','feedbackcontroller@feedback_delete')->name('feedbackdeletepost');
Route::get('/feedback_update/{id}','feedbackcontroller@feedbackupdate')->name('feedbackupdatepost');
Route::post('/feedback_save-update-data','feedbackcontroller@feedbacksaveupdated')->name('feedbacksaveupdatedpost');

//inquiry
Route::get('/inquiry_add', function () {
    return view('inquiry_add');
});
Route::post('inquirysave',"inquirycontroller@inquiry_add")->name('inquirysave');
Route::get('/inquiry_show','inquirycontroller@inquiry_show');
Route::get('/inquiry_delete/{id}','inquirycontroller@inquiry_delete')->name('inquirydeletepost');
Route::get('/inquiry_update/{id}','inquirycontroller@inquiryupdate')->name('inquiryupdatepost');
Route::post('/inquiry_save-update-data','inquirycontroller@inquirysaveupdated')->name('inquirysaveupdatedpost');
//payment
Route::get('/payment_add', function () {
    return view('payment_add');
});
Route::post('paymentsave',"paymentcontroller@payment_add")->name('paymentsave');
Route::get('/payment_show','paymentcontroller@payment_show');
Route::get('/payment_delete/{id}','paymentcontroller@payment_delete')->name('paymentdeletepost');
Route::get('/payment_update/{id}','paymentcontroller@paymentupdate')->name('paymentupdatepost');
Route::post('/payment_save-update-data','paymentcontroller@paymentsaveupdated')->name('paymentsaveupdatedpost');


Route::get('/city_add', function () {
    return view('city_add');
})->name('cityAddForm');

Route::post('citysave',"citycontroller@city_add")->name('citysave');
Route::get('/city_show','citycontroller@cityshow');
Route::get('/city_delete/{c_id}','citycontroller@city_delete')->name('citydeletepost');
Route::get('/cityupdate/{c_id}','citycontroller@cityupdate')->name('cityupdatepost');
Route::post('/city_save-update-data','citycontroller@citysaveupdated')->name('citysaveupdatedpost');


Route::get('/booking_add', function () {
    return view('booking_add');
})->name('bookingAddForm');
Route::post('bookingsave',"bookingcontroller@booking_add")->name('bookingsave');
Route::get('/booking_show','bookingcontroller@bookingshow');
Route::get('/booking_delete/{id}','bookingcontroller@booking_delete')->name('bookingdeletepost');
Route::get('/bookingupdate/{id}','bookingcontroller@bookingupdate')->name('bookingupdatepost');
Route::post('/booking_save-update-data','bookingcontroller@bookingsaveupdated')->name('bookingsaveupdatedpost');


Route::get('/hotel_add', function () {
    return view('hotel_add');
})->name('hotelAddForm');
Route::post('hotelsave',"hotelcontroller@hotel_add")->name('hotelsave');
Route::get('/hotel_show','hotelcontroller@hotel_show');
Route::get('/hotel_delete/{id}','hotelcontroller@hotel_delete')->name('hoteldeletepost');
Route::get('/hotelupdate/{id}','hotelcontroller@hotelupdate')->name('hotelupdatepost');
Route::post('/hotel_save-update-data','hotelcontroller@hotelsaveupdated')->name('hotelsaveupdatedpost');

Route::get('/register', function() 
{
    return view('register');
});
Route::post('save-data',"registercontroller@register_add")->name('saveData');
Route::get('/register_show','registercontroller@register_show');
Route::get('/delete/{id}','registercontroller@delete')->name('deletepost');
Route::get('/update/{id}','registercontroller@update')->name('updatepost');
Route::get('/save-update-data/{id}','registercontroller@saveupdated')->name('saveupdatedpost');

Route::get('/forgot-password', function() {
    return view('forgot-password');
});

Route::get('/login', function() {
    return view('login');
});
Route::post('/login','rootcontroller@attemptLogin')->name('attemptLogin');

Route::get('/logout',"registercontroller@logout")->name('Logout');