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
//FrontEnd Start
Route::post('language/change', 'Frontend\LanguageController@change');
Route::get('/contact', 'Frontend\ContactController@index');
Route::post('/contact', 'Frontend\ContactController@contact');
Route::get('/blog', 'Frontend\BlogController@index');
Route::get('/blog/{slug}', 'Frontend\BlogController@single_blog');
Route::get('/blogs/{slug}', 'Frontend\BlogController@cat_blog');

Route::get('', 'Frontend\HomeController@index');
Route::get('gallery', 'Frontend\GalleryController@index');

Route::get('test', 'Frontend\CmsController@test');

/* Route::get('/', 'Frontend\HomeController@index');
  Route::get('/home', 'Frontend\HomeController@index');
  Route::get('/dataset', 'Frontend\DatasetController@index');
  Route::get('/dataset/{id}', 'Frontend\DatasetController@datasetdetails');

  //Data page Start
  Route::get('/data', 'Frontend\HomeController@index');
  //Data page End
  // User Routes Start
  Route::get('/login', 'Frontend\UserController@login');
  Route::post('/login', 'Frontend\UserController@user');
  Route::get('/register', 'Frontend\UserController@register');
  Route::any('register/add', 'Frontend\UserController@add_user');
  Route::get('profile', 'Frontend\UserController@profile');
  // User Routes End
  //FrontEnd End
  Route::get('news', 'Frontend\NewsController@index');

  Route::get('reports', 'Frontend\ReportsController@index');

  Route::get('news/{id}', 'Frontend\NewsController@news_info');
  Route::get('/logout', function(){
  Auth::logout();
  return Redirect::to('/');
  }); */
// BackEnd Start
Route::group(['prefix' => ADMIN], function() {
    Route::get('/', function() {
        return view('Admin.login');
    });

    Route::get('/login', function() {

        return view('Admin.login');
    });
    Route::post('/login', 'Admin\AdminController@login');
    Route::get('/dashboard', 'Admin\DashboardController@index');

//     User Routes Start
    Route::get('/user', 'Admin\UserController@index');
    Route::post('/user/add', 'Admin\UserController@add');
    Route::post('/user/edit', 'Admin\UserController@edit');
    Route::post('/user/update', 'Admin\UserController@update');
    Route::post('/user/delete', 'Admin\UserController@delete');
    Route::post('/user/gettable', 'Admin\UserController@user_data_table');
//     User Routes End
//     CMS Routes Start
    Route::get('cms', 'Admin\CmsController@index');
    Route::get('cms/index', 'Admin\CmsController@index');
    Route::any('cms/add', 'Admin\CmsController@add');
    Route::any('cms/list', 'Admin\CmsController@cms_list');
    Route::any('cms/getdata', 'Admin\CmsController@cms_data_table');
    Route::any('cms/delete', 'Admin\CmsController@delete');
    Route::any('cms/edit/{id}', 'Admin\CmsController@edit');
    Route::any('cms/slug', 'Admin\CmsController@check_slug');
//     CMS Routes End
//     Media Upload
    Route::get('media', 'Admin\MediaController@index');
        Route::get('media/add', 'Admin\MediaController@add');
        Route::any('media/get_category_data', 'Admin\MediaController@get_category_data');
        Route::any('media/addrecord', 'Admin\MediaController@addrecord');
        Route::any('media/edit', 'Admin\MediaController@editmedia');
        Route::any('media/delete', 'Admin\MediaController@deleterecord');

        Route::get('upload-media', 'Admin\UploadmediaController@index');

        Route::any('upload-media/upload', 'Admin\UploadmediaController@upload');
        Route::any('upload-media/videoupload', 'Admin\UploadmediaController@videoupload');
        Route::any('upload-media/getdatatabel', 'Admin\UploadmediaController@getdatatable');
        Route::any('upload-media/delete_media', 'Admin\UploadmediaController@delete_media');
    // End Media
//     Brand Routes Start
    Route::get('brand', 'Admin\BrandController@index');
    Route::get('brand/index', 'Admin\BrandController@index');
    Route::any('brand/add', 'Admin\BrandController@add');
    Route::any('brand/list', 'Admin\BrandController@brand_list');
    Route::any('brand/getdata', 'Admin\BrandController@brand_data_table');
    Route::any('brand/delete', 'Admin\BrandController@delete');
    Route::any('brand/edit/{id}', 'Admin\BrandController@edit');
    Route::any('brand/slug', 'Admin\BrandController@check_slug');
//     Brand Routes End
//     news Routes Start
    Route::get('news', 'Admin\NewsController@index');
    Route::get('news/index', 'Admin\NewsController@index');
    Route::any('news/add', 'Admin\NewsController@add');
    Route::any('news/list', 'Admin\NewsController@news_list');
    Route::any('news/getdata', 'Admin\NewsController@news_data_table');
    Route::any('news/delete', 'Admin\NewsController@delete');
    Route::any('news/edit/{id}', 'Admin\NewsController@edit');
    Route::any('news/slug', 'Admin\NewsController@check_slug');
//     news Routes End
//     category Routes Start
    Route::get('/category', 'Admin\CategoryController@index');
    Route::post('/category/add', 'Admin\CategoryController@add');
    Route::post('/category/edit', 'Admin\CategoryController@edit');
    Route::post('/category/update', 'Admin\CategoryController@update');
    Route::post('/category/delete', 'Admin\CategoryController@delete');
    Route::post('/category/gettable', 'Admin\CategoryController@category_data_table');
//     category Routes End
//     
//     sub category Routes Start
    Route::get('/subcategory', 'Admin\SubcategoryController@index');
    Route::post('/subcategory/add', 'Admin\SubcategoryController@add');
    Route::post('/subcategory/edit', 'Admin\SubcategoryController@edit');
    Route::post('/subcategory/update', 'Admin\SubcategoryController@update');
    Route::post('/subcategory/delete', 'Admin\SubcategoryController@delete');
    Route::post('/subcategory/gettable', 'Admin\SubcategoryController@subcategory_data_table');
//     sub category Routes End
//     CMS Routes Start
    Route::get('reports', 'Admin\ReportsController@index');
    Route::get('reports/index', 'Admin\ReportsController@index');
    Route::any('reports/add', 'Admin\ReportsController@add');
    Route::any('reports/list', 'Admin\ReportsController@reports_list');
    Route::any('reports/getdata', 'Admin\ReportsController@reports_data_table');
    Route::any('reports/delete', 'Admin\ReportsController@delete');
    Route::any('reports/edit/{id}', 'Admin\ReportsController@edit');

    // Testimonial start
    // 
    Route::get('testimonial', 'Admin\TestimonialController@index');
    Route::any('testimonial/addrecord', 'Admin\TestimonialController@addrecord');
    Route::any('testimonial/getdata', 'Admin\TestimonialController@anydata')->name('testimonial/getdata');
    Route::any('testimonial/delete', 'Admin\TestimonialController@deleterecord');
    Route::any('testimonial/edit', 'Admin\TestimonialController@edittestimonial');
    // Testimonial End
//    Route::any('reports/slug', 'Admin\ReportsController@check_slug');
//     CMS Routes End    
//     Infographics Routes Start
    Route::get('infographics', 'Admin\InfographicsController@index');
    Route::get('infographics/index', 'Admin\InfographicsController@index');
    Route::any('infographics/add', 'Admin\InfographicsController@add');
    Route::any('infographics/list', 'Admin\InfographicsController@news_list');
    Route::any('infographics/getdata', 'Admin\InfographicsController@infographics_data_table');
    Route::any('infographics/delete', 'Admin\InfographicsController@delete');
    Route::any('infographics/edit/{id}', 'Admin\InfographicsController@edit');
//     Infographics Routes End
//     
//     Dataset Routes Start
    Route::get('dataset', 'Admin\DatasetController@index');
    Route::get('dataset/index', 'Admin\DatasetController@index');
    Route::any('dataset/add', 'Admin\DatasetController@add');
    Route::any('dataset/list', 'Admin\DatasetController@reports_list');
    Route::any('dataset/getdata', 'Admin\DatasetController@dataset_data_table');
    Route::any('dataset/delete', 'Admin\DatasetController@delete');
    Route::any('dataset/edit/{id}', 'Admin\DatasetController@edit');
//    Route::any('reports/slug', 'Admin\ReportsController@check_slug');
//    
//    
//    
    // Advance Custom Filds Section Routes Start
    Route::get('advancesettings', 'Admin\AdvancesettingController@index');
    Route::post('advancesettings/store', 'Admin\AdvancesettingController@store');
    Route::any('advancesettings/getdata', 'Admin\AdvancesettingController@getdatatable')->name('advancesettings/getdata');
    Route::post('advancesettings/delete', 'Admin\AdvancesettingController@destroy');
    Route::post('advancesettings/edit', 'Admin\AdvancesettingController@edit');

    // Advance Custom Filds Section Routes End
    // Banner Section Routes Start
    Route::get('/banner', 'Admin\BannerController@index');
    Route::post('/banner/add', 'Admin\BannerController@add');
    Route::post('/banner/edit', 'Admin\BannerController@edit');
    Route::post('/banner/update', 'Admin\BannerController@update');
    Route::post('/banner/delete', 'Admin\BannerController@delete');
    Route::post('/banner/getdata', 'Admin\BannerController@data_table');

    // Banner Section Routes End
    // language section Start
    Route::get('/language', 'Admin\LanguageController@index');
    Route::post('/language/add', 'Admin\LanguageController@add');
    Route::post('/language/edit', 'Admin\LanguageController@edit');
    Route::post('/language/update', 'Admin\LanguageController@update');
    Route::post('/language/delete', 'Admin\LanguageController@delete');
    Route::post('/language/getdata', 'Admin\LanguageController@data_table');
    Route::post('/language/change', 'Admin\LanguageController@change');

    // language section End
    // blog section Start
    Route::get('blog', 'Admin\BlogController@index');
    Route::get('blog/index', 'Admin\BlogController@index');
    Route::any('blog/add', 'Admin\BlogController@add');
    Route::any('blog/list', 'Admin\BlogController@brand_list');
    Route::any('blog/getdata', 'Admin\BlogController@data_table');
    Route::any('blog/delete', 'Admin\BlogController@delete');
    Route::any('blog/edit/{id}', 'Admin\BlogController@edit');
    Route::any('blog/slug', 'Admin\BlogController@check_slug');
    // blog section End
    // contact us section start
    Route::get('contact', 'Admin\ContactController@index');
    Route::any('contact/addrecord', 'Admin\ContactController@addrecord');
    Route::any('contact/getdata', 'Admin\ContactController@anydata')->name('contact/getdata');
    Route::any('contact/delete', 'Admin\ContactController@deleterecord');
    Route::any('contact/edit', 'Admin\ContactController@editcontact_us');
    Route::any('contact/email', 'Admin\ContactController@email_reply');
    Route::any('contact/email_send', 'Admin\ContactController@email');

    // contact us section end
//     CMS Routes End    

    Route::get('/logout', function() {

        Auth::logout();
        return Redirect::to(ADMIN);
    });
});
// BackEnd End
//we have to put this at bottom
Route::get('{slug}', [
    'uses' => 'Frontend\CmsController@index'
])->where('slug', '([A-Za-z0-9\-\/]+)');
//we have to put this at bottom