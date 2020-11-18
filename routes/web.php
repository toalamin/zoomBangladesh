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
   Route::post('/volunteer-save', 'VolunteerController@store')->name('volunteer.store');
   Route::get('/update', 'UpdateController@index')->name('update.page');
   Route::get('/update/details/{id}', 'UpdateController@details')->name('update.details');
   Route::get('/event-us', 'NoticeController@index')->name('event.page');
   Route::get('/project-category-us', 'ProjectCategoryController@index')->name('project.category.page');
   Route::get('/donate-us', 'DonateController@index')->name('donate.page');
   Route::post('/donate-save', 'DonateController@store')->name('donate.store');
   Route::get('/fundaises-event', 'FundraisedController@index')->name('fundraised.page');
   Route::get('/sponsor-a-child', 'SponsorChildController@index')->name('sponsorchild.page');

   Route::post('/contact-save', 'ContactController@store')->name('contact.store');
   Route::get('/video-gallery', 'VideoController@index')->name('video.gallery.page');


   Route::get('/speech', 'SpeechController@index')->name('speech.page');
   Route::get('/general-member', 'GeneralMemberController@index')->name('general.member.page');
   Route::get('/lifetime-member', 'LifetimeMemberController@index')->name('lifetime.member.page');
   Route::get('/advisor-committe', 'AdvisorCommitteController@index')->name('advisor.committe.page');
   Route::get('/executive-committe', 'ExecutiveCommitteController@index')->name('executive.committe.page');

   //User
   Route::get('/volunteer-info', 'VolunteerController@index')->name('volunteer.index');
   Route::get('/volunteer-add', 'VolunteerController@create')->name('volunteer.create');
   Route::post('/volunteer-store', 'VolunteerController@store')->name('volunteer.store');
   Route::get('/volunteer-edit/{id}', 'VolunteerController@edit')->name('volunteer.edit');
   Route::post('/volunteer-edit/{id}', 'VolunteerController@update')->name('volunteer.update');
   Route::delete('/volunteer-delete/{id}', 'VolunteerController@destroy')->name('volunteer.destroy');
});





Route::get('site-register', 'SiteAuthController@siteRegister');
Route::post('site-register', 'SiteAuthController@siteRegisterPost');


//login credential for user
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');



Route::group(['namespace' => 'Backend', 'middleware' => ['auth']], function () {

   Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
   Route::get('/systemConfig', 'HomeController@systemConfig')->name('index.systemConfig');
   Route::get('/systemConfig-Edit/{id}', 'HomeController@systemConfigEdit')->name('editSystemConfig');
   Route::post('/systemConfig-update/{id}', 'HomeController@systemConfigUpdate')->name('updateSystemConfig');
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

   //Notice 
   Route::get('/notice-info', 'NoticeController@index')->name('notice.index');
   Route::get('/notice-add', 'NoticeController@create')->name('notice.create');
   Route::post('/notice-store', 'NoticeController@store')->name('notice.store');
   Route::get('/notice-edit/{id}', 'NoticeController@edit')->name('notice.edit');
   Route::post('/notice-edit/{id}', 'NoticeController@update')->name('notice.update');
   Route::delete('/notice-delete/{id}', 'NoticeController@destroy')->name('notice.destroy');
   //help us 
   Route::get('/how-can-help-info', 'HowCanHelpController@index')->name('help.index');
   Route::get('/how-can-help-add', 'HowCanHelpController@create')->name('help.create');
   Route::post('/how-can-help-store', 'HowCanHelpController@store')->name('help.store');
   Route::get('/how-can-help-edit/{id}', 'HowCanHelpController@edit')->name('help.edit');
   Route::post('/how-can-help-edit/{id}', 'HowCanHelpController@update')->name('help.update');
   Route::delete('/how-can-help-delete/{id}', 'HowCanHelpController@destroy')->name('help.destroy');

   //Update
   Route::get('/update-info', 'UpdateController@index')->name('update.index');
   Route::get('/update-add', 'UpdateController@create')->name('update.create');
   Route::post('/update-store', 'UpdateController@store')->name('update.store');
   Route::get('/update-edit/{id}', 'UpdateController@edit')->name('update.edit');
   Route::post('/update-edit/{id}', 'UpdateController@update')->name('update.update');
   Route::delete('/update-delete/{id}', 'UpdateController@destroy')->name('update.destroy');
   //Photo
   Route::get('/photo-info', 'PhotoController@index')->name('photo.index');
   Route::get('/photo-add', 'PhotoController@create')->name('photo.create');
   Route::post('/photo-store', 'PhotoController@store')->name('photo.store');
   Route::get('/photo-edit/{id}', 'PhotoController@edit')->name('photo.edit');
   Route::post('/photo-edit/{id}', 'PhotoController@update')->name('photo.update');
   Route::delete('/photo-delete/{id}', 'PhotoController@destroy')->name('photo.destroy');

   //Photo
   Route::get('/account-info', 'AccountController@index')->name('account.index');
   Route::get('/account-add', 'AccountController@create')->name('account.create');
   Route::post('/account-store', 'AccountController@store')->name('account.store');
   Route::get('/account-edit/{id}', 'AccountController@edit')->name('account.edit');
   Route::post('/account-edit/{id}', 'AccountController@update')->name('account.update');
   Route::delete('/account-delete/{id}', 'AccountController@destroy')->name('account.destroy');
   //Photo
   Route::get('/people-info', 'PeopleSayController@index')->name('people.index');
   Route::get('/people-add', 'PeopleSayController@create')->name('people.create');
   Route::post('/people-store', 'PeopleSayController@store')->name('people.store');
   Route::get('/people-edit/{id}', 'PeopleSayController@edit')->name('people.edit');
   Route::post('/people-edit/{id}', 'PeopleSayController@update')->name('people.update');
   Route::delete('/people-delete/{id}', 'PeopleSayController@destroy')->name('people.destroy');
   //sponsor
   Route::get('/sponsor-info', 'SponsoorsController@index')->name('sponsor.index');
   Route::get('/sponsor-add', 'SponsoorsController@create')->name('sponsor.create');
   Route::post('/sponsor-store', 'SponsoorsController@store')->name('sponsor.store');
   Route::get('/sponsor-edit/{id}', 'SponsoorsController@edit')->name('sponsor.edit');
   Route::post('/sponsor-edit/{id}', 'SponsoorsController@update')->name('sponsor.update');
   Route::delete('/sponsor-delete/{id}', 'SponsoorsController@destroy')->name('sponsor.destroy');
   //FAQ
   Route::get('/faq-info', 'FaqController@index')->name('faq.index');
   Route::get('/faq-add', 'FaqController@create')->name('faq.create');
   Route::post('/faq-store', 'FaqController@store')->name('faq.store');
   Route::get('/faq-edit/{id}', 'FaqController@edit')->name('faq.edit');
   Route::post('/faq-edit/{id}', 'FaqController@update')->name('faq.update');
   Route::delete('/faq-delete/{id}', 'FaqController@destroy')->name('faq.destroy');

   //video
   Route::get('/video-info', 'VideoController@index')->name('video.index');
   Route::get('/video-add', 'VideoController@create')->name('video.create');
   Route::post('/video-store', 'VideoController@store')->name('video.store');
   Route::get('/video-edit/{id}', 'VideoController@edit')->name('video.edit');
   Route::post('/video-edit/{id}', 'VideoController@update')->name('video.update');
   Route::delete('/video-delete/{id}', 'VideoController@destroy')->name('video.destroy');

   //Header Image
   Route::get('/header-info', 'HeaderImageController@index')->name('header.index');
   Route::get('/header-add', 'HeaderImageController@create')->name('header.create');
   Route::post('/header-store', 'HeaderImageController@store')->name('header.store');
   Route::get('/header-edit/{id}', 'HeaderImageController@edit')->name('header.edit');
   Route::post('/header-edit/{id}', 'HeaderImageController@update')->name('header.update');
   Route::delete('/header-delete/{id}', 'HeaderImageController@destroy')->name('header.destroy');

   //Header Image
   Route::get('/legality-info', 'LegalityController@index')->name('legality.index');
   Route::get('/legality-add', 'LegalityController@create')->name('legality.create');
   Route::post('/legality-store', 'LegalityController@store')->name('legality.store');
   Route::get('/legality-edit/{id}', 'LegalityController@edit')->name('legality.edit');
   Route::post('/legality-edit/{id}', 'LegalityController@update')->name('legality.update');
   Route::delete('/legality-delete/{id}', 'LegalityController@destroy')->name('legality.destroy');


   //Gallery Category
   Route::get('/gallery-category-info', 'GalleryCategoryController@index')->name('gallery.index');
   Route::get('/gallery-category-add', 'GalleryCategoryController@create')->name('gallery.create');
   Route::post('/gallery-category-store', 'GalleryCategoryController@store')->name('gallery.store');
   Route::get('/gallery-category-edit/{id}', 'GalleryCategoryController@edit')->name('gallery.edit');
   Route::post('/gallery-category-edit/{id}', 'GalleryCategoryController@update')->name('gallery.update');
   Route::delete('/gallery-category-delete/{id}', 'GalleryCategoryController@destroy')->name('gallery.destroy');


   //Team Category
   Route::get('/team-category-info', 'TeamCategoryController@index')->name('team.index');
   Route::get('/team-category-add', 'TeamCategoryController@create')->name('team.create');
   Route::post('/team-category-store', 'TeamCategoryController@store')->name('team.store');
   Route::get('/team-category-edit/{id}', 'TeamCategoryController@edit')->name('team.edit');
   Route::post('/team-category-edit/{id}', 'TeamCategoryController@update')->name('team.update');
   Route::delete('/team-category-delete/{id}', 'TeamCategoryController@destroy')->name('team.destroy');
   //Current Donation Controller
   Route::get('/current-donation-info', 'CurrentDonationController@index')->name('current.index');
   Route::get('/current-donation-add', 'CurrentDonationController@create')->name('current.create');
   Route::post('/current-donation-store', 'CurrentDonationController@store')->name('current.store');
   Route::get('/current-donation-edit/{id}', 'CurrentDonationController@edit')->name('current.edit');
   Route::post('/current-donation-edit/{id}', 'CurrentDonationController@update')->name('current.update');
   Route::delete('/current-donation-delete/{id}', 'CurrentDonationController@destroy')->name('current.destroy');
   Route::get('/donationList', 'CurrentDonationController@donationList')->name('donation.list');

   //Current Donation Controller
   Route::get('/child-sponsoor-info', 'SponsoorChildController@index')->name('child.index');
   Route::get('/child-sponsoor-add', 'SponsoorChildController@create')->name('child.create');
   Route::post('/child-sponsoor-store', 'SponsoorChildController@store')->name('child.store');
   Route::get('/child-sponsoor-edit/{id}', 'SponsoorChildController@edit')->name('child.edit');
   Route::post('/child-sponsoor-edit/{id}', 'SponsoorChildController@update')->name('child.update');
   Route::delete('/child-sponsoor-delete/{id}', 'SponsoorChildController@destroy')->name('child.destroy');

   Route::get('/child-featured-info', 'SponsoorChildController@featuredList')->name('featured.index');
   Route::get('/child-featured-edit/{id}', 'SponsoorChildController@featuredEdit')->name('featured.edit');
   Route::post('/child-featured-edit/{id}', 'SponsoorChildController@featuredUpdate')->name('featured.update');



   //Team 
   Route::get('/team-info', 'TeamController@index')->name('teamm.index');
   Route::get('/team-add', 'TeamController@create')->name('teamm.create');
   Route::post('/team-store', 'TeamController@store')->name('teamm.store');
   Route::get('/team-edit/{id}', 'TeamController@edit')->name('teamm.edit');
   Route::post('/team-edit/{id}', 'TeamController@update')->name('teamm.update');
   Route::delete('/team-delete/{id}', 'TeamController@destroy')->name('teamm.destroy');
   //Team 
   Route::get('/fundraise-info', 'FundraiseController@index')->name('fundraise.index');
   Route::get('/fundraise-add', 'FundraiseController@create')->name('fundraise.create');
   Route::post('/fundraise-store', 'FundraiseController@store')->name('fundraise.store');
   Route::get('/fundraise-edit/{id}', 'FundraiseController@edit')->name('fundraise.edit');
   Route::post('/fundraise-edit/{id}', 'FundraiseController@update')->name('fundraise.update');
   Route::delete('/fundraise-delete/{id}', 'FundraiseController@destroy')->name('fundraise.destroy');
   //Project Category
   Route::get('/project-category-info', 'ProjectCategoryController@index')->name('projectCategory.index');
   Route::get('/project-category-add', 'ProjectCategoryController@create')->name('projectCategory.create');
   Route::post('/project-category-store', 'ProjectCategoryController@store')->name('projectCategory.store');
   Route::get('/project-category-edit/{id}', 'ProjectCategoryController@edit')->name('projectCategory.edit');
   Route::post('/project-category-edit/{id}', 'ProjectCategoryController@update')->name('projectCategory.update');
   Route::delete('/project-category-delete/{id}', 'ProjectCategoryController@destroy')->name('projectCategory.destroy');

   //Project 
   Route::get('/project-info', 'ProjectController@index')->name('project.index');
   Route::get('/project-add', 'ProjectController@create')->name('project.create');
   Route::post('/project-store', 'ProjectController@store')->name('project.store');
   Route::get('/project-edit/{id}', 'ProjectController@edit')->name('project.edit');
   Route::post('/project-edit/{id}', 'ProjectController@update')->name('project.update');
   Route::delete('/project-delete/{id}', 'ProjectController@destroy')->name('project.destroy');

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
   //Monthly Employee
   Route::get('/monthly-employee-info', 'MonthlyEmployeeController@index')->name('monthly.index');
   Route::get('/monthly-employee-add', 'MonthlyEmployeeController@create')->name('monthly.create');
   Route::post('/monthly-employee-store', 'MonthlyEmployeeController@store')->name('monthly.store');
   Route::get('/monthly-employee-edit/{id}', 'MonthlyEmployeeController@edit')->name('monthly.edit');
   Route::post('/monthly-employee-edit/{id}', 'MonthlyEmployeeController@update')->name('monthly.update');
   Route::delete('/monthly-employee-delete/{id}', 'MonthlyEmployeeController@destroy')->name('monthly.destroy');




   
});
