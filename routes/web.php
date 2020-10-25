<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Frontant'], function () {
   //frontant
   Route::get('/', 'HomeController@index')->name('index');
   Route::get('/contact-us', 'ContactController@index')->name('contact');
   Route::get('/about-us', 'AboutController@index')->name('about');
   Route::get('/faq-us', 'FaqController@index')->name('faq.page');
   Route::get('/team-volunteers', 'TeamController@index')->name('team.page');
   Route::get('/photo-gallery', 'PhotoController@index')->name('photo.gallery.page');
   Route::get('/founder-message', 'FounderController@index')->name('founder.page');
   Route::get('/volunteer', 'VolunteerController@index')->name('volunteer.page');
   Route::get('/update', 'UpdateController@index')->name('update.page');
   Route::get('/event-us', 'NoticeController@index')->name('event.page');
   Route::get('/donate-us', 'DonateController@index')->name('donate.page');
   
   
   
   
   
   
   
   
   
   
   
   
   
   Route::post('/contact-save', 'ContactController@store')->name('contact.store');
   Route::get('/video-gallery', 'VideoController@index')->name('video.gallery.page');
   
  
   Route::get('/speech', 'SpeechController@index')->name('speech.page');
   Route::get('/general-member', 'GeneralMemberController@index')->name('general.member.page');
   Route::get('/lifetime-member', 'LifetimeMemberController@index')->name('lifetime.member.page');
   Route::get('/advisor-committe', 'AdvisorCommitteController@index')->name('advisor.committe.page');
   Route::get('/executive-committe', 'ExecutiveCommitteController@index')->name('executive.committe.page');

});

Route::get('site-register', 'SiteAuthController@siteRegister');
Route::post('site-register', 'SiteAuthController@siteRegisterPost');


//login credential for user
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');



Route::group(['namespace' => 'Backend', 'middleware' => ['auth']], function () {



   Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
   Route::get('/website-contact-request-list', 'HomeController@contact')->name('contact.index');
   //slider crude
   Route::get('/slider-setup', 'SliderController@index')->name('slider.page');
   Route::get('/slider-add', 'SliderController@create')->name('slider.add');
   Route::post('/slider-store', 'SliderController@store')->name('slider.store');
   Route::get('/slider-edit/{id}', 'SliderController@edit')->name('slider.edit');
   Route::post('/slider-edit/{id}', 'SliderController@update')->name('slider.update');
   Route::delete('/slider-delete/{id}', 'SliderController@destroy')->name('slider.destroy');
   //mission update
   Route::get('/mission-info', 'MissionVissionController@index')->name('mission.index');
   Route::get('/mission-edit/{id}', 'MissionVissionController@edit')->name('mission.edit');
   Route::post('/mission-edit/{id}', 'MissionVissionController@update')->name('mission.update');
   //history update
   Route::get('/history-info', 'HistoryController@index')->name('history.index');
   Route::get('/history-edit/{id}', 'HistoryController@edit')->name('history.edit');
   Route::post('/history-edit/{id}', 'HistoryController@update')->name('history.update');
   //historical update
   Route::get('/history-place-info', 'HistoricalPlaceController@index')->name('historical.place.index');
   Route::get('/history-place-add', 'HistoricalPlaceController@create')->name('historical.place.create');
   Route::post('/history-place-store', 'HistoricalPlaceController@store')->name('historical.place.store');
   Route::get('/history-place-edit/{id}', 'HistoricalPlaceController@edit')->name('historical.place.edit');
   Route::post('/history-place-edit/{id}', 'HistoricalPlaceController@update')->name('historical.place.update');
   Route::delete('/history-place-delete/{id}', 'HistoricalPlaceController@destroy')->name('historical.place.destroy');

   //eminent pleople
   Route::get('/eminent-people-info', 'EminentController@index')->name('eminent.people.index');
   Route::get('/eminent-people-add', 'EminentController@create')->name('eminent.people.create');
   Route::post('/eminent-people-store', 'EminentController@store')->name('eminent.people.store');
   Route::get('/eminent-people-edit/{id}', 'EminentController@edit')->name('eminent.people.edit');
   Route::post('/eminent-people-edit/{id}', 'EminentController@update')->name('eminent.people.update');
   Route::delete('/eminent-people-delete/{id}', 'EminentController@destroy')->name('eminent.people.destroy');
   //Notice 
   Route::get('/notice-info', 'NoticeController@index')->name('notice.index');
   Route::get('/notice-add', 'NoticeController@create')->name('notice.create');
   Route::post('/notice-store', 'NoticeController@store')->name('notice.store');
   Route::get('/notice-edit/{id}', 'NoticeController@edit')->name('notice.edit');
   Route::post('/notice-edit/{id}', 'NoticeController@update')->name('notice.update');
   Route::delete('/notice-delete/{id}', 'NoticeController@destroy')->name('notice.destroy');

   //Update
   Route::get('/update-info', 'UpdateController@index')->name('update.index');
   Route::get('/update-add', 'UpdateController@create')->name('update.create');
   Route::post('/update-store', 'UpdateController@store')->name('update.store');
   Route::get('/update-edit/{id}', 'UpdateController@edit')->name('update.edit');
   Route::post('/update-edit/{id}', 'UpdateController@update')->name('update.update');
   Route::delete('/update-delete/{id}', 'UpdateController@destroy')->name('update.destroy'); 
   //speech
   Route::get('/speech-info', 'SpeechController@index')->name('speech.index');
   Route::get('/speech-add', 'SpeechController@create')->name('speech.create');
   Route::post('/speech-store', 'SpeechController@store')->name('speech.store');
   Route::get('/speech-edit/{id}', 'SpeechController@edit')->name('speech.edit');
   Route::post('/speech-edit/{id}', 'SpeechController@update')->name('speech.update');
   Route::delete('/speech-delete/{id}', 'SpeechController@destroy')->name('speech.destroy');
   //Photo
   Route::get('/photo-info', 'PhotoController@index')->name('photo.index');
   Route::get('/photo-add', 'PhotoController@create')->name('photo.create');
   Route::post('/photo-store', 'PhotoController@store')->name('photo.store');
   Route::get('/photo-edit/{id}', 'PhotoController@edit')->name('photo.edit');
   Route::post('/photo-edit/{id}', 'PhotoController@update')->name('photo.update');
   Route::delete('/photo-delete/{id}', 'PhotoController@destroy')->name('photo.destroy');
   //Photo
   Route::get('/video-info', 'VideoController@index')->name('video.index');
   Route::get('/video-add', 'VideoController@create')->name('video.create');
   Route::post('/video-store', 'VideoController@store')->name('video.store');
   Route::get('/video-edit/{id}', 'VideoController@edit')->name('video.edit');
   Route::post('/video-edit/{id}', 'VideoController@update')->name('video.update');
   Route::delete('/video-delete/{id}', 'VideoController@destroy')->name('video.destroy');
   //member
   Route::get('/member-info', 'MemberController@index')->name('member.index');
   Route::get('/member-add', 'MemberController@create')->name('member.create');
   Route::post('/member-store', 'MemberController@store')->name('member.store');
   Route::get('/member-edit/{id}', 'MemberController@edit')->name('member.edit');
   Route::post('/member-edit/{id}', 'MemberController@update')->name('member.update');
   Route::delete('/member-delete/{id}', 'MemberController@destroy')->name('member.destroy');
   //User
   Route::get('/user-info', 'UserController@index')->name('user.index');
   Route::get('/user-add', 'UserController@create')->name('user.create');
   Route::post('/user-store', 'UserController@store')->name('user.store');
   Route::get('/user-edit/{id}', 'UserController@edit')->name('user.edit');
   Route::post('/user-edit/{id}', 'UserController@update')->name('user.update');
   Route::delete('/user-delete/{id}', 'UserController@destroy')->name('user.destroy');
   //Executive Committe
   Route::get('/executive-committee-info', 'CommitteController@index')->name('executive.committee.index');
   Route::get('/executive-committee-add', 'CommitteController@create')->name('executive.committee.create');
   Route::post('/executive-committee-store', 'CommitteController@store')->name('executive.committee.store');
   Route::get('/executive-committee-edit/{id}', 'CommitteController@edit')->name('executive.committee.edit');
   Route::post('/executive-committee-edit/{id}', 'CommitteController@update')->name('executive.committee.update');
   Route::delete('/executive-committee-delete/{id}', 'CommitteController@destroy')->name('executive.committee.destroy');
   //Adviser Committe
   Route::get('/adviser-committee-info', 'AdviserController@index')->name('adviser.committee.index');
   Route::get('/adviser-committee-add', 'AdviserController@create')->name('adviser.committee.create');
   Route::post('/adviser-committee-store', 'AdviserController@store')->name('adviser.committee.store');
   Route::get('/adviser-committee-edit/{id}', 'AdviserController@edit')->name('adviser.committee.edit');
   Route::post('/adviser-committee-edit/{id}', 'AdviserController@update')->name('adviser.committee.update');
   Route::delete('/adviser-committee-delete/{id}', 'AdviserController@destroy')->name('adviser.committee.destroy');
});
