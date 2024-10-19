<?php

Route::get('/', function () {
	return redirect('/home');
});

Route::get('siteinfo', 'HomeController@getSiteInfo')->name('getsiteinfo');
Route::get('headermenu', 'HomeController@getHeaderMenu')->name('getheadermenu');
Route::get('footermenu', 'HomeController@getFooterMenu')->name('getfootermenu');
// Form Results
Route::get('/thankyou', 'FormResultController@thankyou')->name('thankyou');
Route::get('/error/{error}', 'FormResultController@error')->name('error');
Route::get('/admin/home', function () {
	if (session('status')) {
		return redirect()->route('admin.home')->with('status', session('status'));
	}

	return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'backend', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Template
    Route::delete('templates/destroy', 'TemplateController@massDestroy')->name('templates.massDestroy');
    Route::post('templates/parse-csv-import', 'TemplateController@parseCsvImport')->name('templates.parseCsvImport');
    Route::post('templates/process-csv-import', 'TemplateController@processCsvImport')->name('templates.processCsvImport');
    Route::resource('templates', 'TemplateController');

    // Page
    Route::delete('pages/destroy', 'PageController@massDestroy')->name('pages.massDestroy');
    Route::resource('pages', 'PageController');
	Route::get('pages/duplicate/{page}', 'PageController@duplicate')->name('pages.duplicate');

    // Section
    Route::delete('sections/destroy', 'SectionController@massDestroy')->name('sections.massDestroy');
    Route::resource('sections', 'SectionController');
	Route::get('sections/duplicate/{section}', 'SectionController@duplicate')->name('sections.duplicate');

    // Value
    Route::delete('values/destroy', 'ValueController@massDestroy')->name('values.massDestroy');
    Route::post('values/media', 'ValueController@storeMedia')->name('values.storeMedia');
    Route::post('values/ckmedia', 'ValueController@storeCKEditorImages')->name('values.storeCKEditorImages');
    Route::resource('values', 'ValueController');

    // Site Info
    Route::post('site-infos/media', 'SiteInfoController@storeMedia')->name('site-infos.storeMedia');
    Route::post('site-infos/ckmedia', 'SiteInfoController@storeCKEditorImages')->name('site-infos.storeCKEditorImages');
    Route::resource('site-infos', 'SiteInfoController', ['except' => ['destroy']]);

    // Config Values
    Route::delete('config-values/destroy', 'ConfigValuesController@massDestroy')->name('config-values.massDestroy');
    Route::resource('config-values', 'ConfigValuesController');

    // Dropdown
    Route::delete('dropdowns/destroy', 'DropdownController@massDestroy')->name('dropdowns.massDestroy');
    Route::post('dropdowns/parse-csv-import', 'DropdownController@parseCsvImport')->name('dropdowns.parseCsvImport');
    Route::post('dropdowns/process-csv-import', 'DropdownController@processCsvImport')->name('dropdowns.processCsvImport');
    Route::resource('dropdowns', 'DropdownController');

    // Site
    Route::delete('sites/destroy', 'SiteController@massDestroy')->name('sites.massDestroy');
    Route::resource('sites', 'SiteController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Change Log
    Route::delete('change-logs/destroy', 'ChangeLogController@massDestroy')->name('change-logs.massDestroy');
    Route::resource('change-logs', 'ChangeLogController');

    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
	Route::get('/{slug}', ['uses' => 'HomeController@getPageSections'])->name('page');
});
Route::get('/{slug}', ['uses' => 'HomeController@getPageSections'])->name('page');

