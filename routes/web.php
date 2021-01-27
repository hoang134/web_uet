<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/',function () {
    return view('dashboard');
});

Route::get('login','App\Http\Controllers\Home\LoginController@getLogin');
Route::post('login','App\Http\Controllers\Home\LoginController@login')->name('login');
Route::get('logout','App\Http\Controllers\Home\LoginController@logout')->name('logout');


//Xử lý đăng ký tài khoản
Route::get('register','App\Http\Controllers\Home\LoginController@register')->name('register');
Route::post('verify-register','App\Http\Controllers\Student\MailController@sendEmail')->name('register.verify');
Route::get('/verify','App\Http\Controllers\Student\MailController@verifyUser')->name('register.verify.user');

//Thông tin về trung tâm
Route::get('cet-home','App\Http\Controllers\Home\CetInfomationController@cet_infomation_home')->name('cet.home');
Route::get('cet-infomation-cocau','App\Http\Controllers\Home\CetInfomationController@cet_infomation_cocau')->name('cet.cocau');
Route::get('cet-infomation-chucnang','App\Http\Controllers\Home\CetInfomationController@cet_infomation_chucnang')->name('cet.chucnang');

//Thông tin về các kỳ thi,sự kiện
Route::get('cet-notification-events','App\Http\Controllers\Home\CetNotificationController@cet_notification_events')->name('cet.notification.event');
Route::get('cet-notification-exams','App\Http\Controllers\Home\CetNotificationController@cet_notification_exams')->name('cet.notification.exam');
Route::get('cet-notification-exam-detail/{Makythi}','App\Http\Controllers\Home\CetNotificationController@cet_notification_exam_detail')->name('cet.notification.exam.detail');

//
Route::get('home','App\Http\Controllers\Home\HomeController@index')->name('home');
Route::get('home/question','App\Http\Controllers\Home\HomeController@question')->name('home.question');

Route::prefix('student')->middleware('CheckLogin')->group(function (){
    Route::post('question','App\Http\Controllers\Student\StudentController@createQuestion');
    Route::get('my/question','App\Http\Controllers\Student\StudentController@myQuestion')->name('student.my.question');
    Route::get('service','App\Http\Controllers\Student\ServiceController@index')->name('student.service');

    Route::get('chose/service','App\Http\Controllers\Student\ServiceController@service');

    Route::get('messenger','App\Http\Controllers\Student\MessengerController@messenger');
    Route::post('reply/messenger','App\Http\Controllers\Student\MessengerController@replyMessenger');
});


// Route::prefix('admin')->middleware('CheckLogin')->middleware('auth:admin')->group(function () {
//Route::get('question','App\Http\Controllers\Admin\QuestionController@index')->name('admin.question');
//     Route::post('question/reply/{id}','App\Http\Controllers\Admin\QuestionController@questionReply');
//     Route::get('question/get/reply/{id}','App\Http\Controllers\Admin\QuestionController@getQuestionReply');
//     Route::get('create/question','App\Http\Controllers\Admin\QuestionController@createQuestion')->name('question.create');
//     Route::post('save/question','App\Http\Controllers\Admin\QuestionController@saveQuestion')->name('question.save');
//     Route::get('change/type/question/{id}','App\Http\Controllers\Admin\QuestionController@changeTypeQuestion')->name('question.change.type');
//     Route::post('edit/question/{id}','App\Http\Controllers\Admin\QuestionController@editQuestion')->name('question.edit');

//     Route::get('messengers','App\Http\Controllers\Admin\MessengerController@index');
//     Route::get('detail/messengers/{id}','App\Http\Controllers\Admin\MessengerController@detailMesenger');
//     Route::post('reply/messenger/{id}','App\Http\Controllers\Admin\MessengerController@replyMessenger');

//     Route::get('service','App\Http\Controllers\Admin\ServiceController@index');
//     Route::get('create/service','App\Http\Controllers\Admin\ServiceController@createService');
//     Route::post('save/service','App\Http\Controllers\Admin\ServiceController@saveService');
//     Route::get('config/service','App\Http\Controllers\Admin\ServiceController@Configservice');

//     Route::get('/edit-infomation','App\Http\Controllers\Admin\InfomationController@edit_infomation')->name('edit.infomation');
//     Route::get('/edit-infomation-cocau','App\Http\Controllers\Admin\InfomationController@edit_infomation_cocau')->name('edit.infomation.cocau');
//     Route::get('/edit-infomation-chucnang','App\Http\Controllers\Admin\InfomationController@edit_infomation_chucnang')->name('edit.infomation.chucnang');
//     Route::get('/edit-infomation-logo','App\Http\Controllers\Admin\InfomationController@edit_infomation_logo')->name('edit.logo');
//     Route::post('/save-infomation','App\Http\Controllers\Admin\InfomationController@save_infomation')->name('save.infomation');

// });
