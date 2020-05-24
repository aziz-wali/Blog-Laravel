<?php

use Illuminate\Support\Facades\Route;
use  App\Post;
use App\Mail\TestEmail;
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



//Auth::routes();
Auth::routes(['verify'=>true]);
Route::get('/mylogin','SiteController@mylogin')->name('mylogin');
Route::post('/check','SiteController@check')->name('check');
Route::get('/home', 'HomeController@index')->name('home');
//POsts Routes
Route::group(['prefix'=>'user','middleware'=>'auth'],function(){


//Route::get('/createProfile','ProfilsController@create')->name('createProfile');



Route::get('/post/create','PostController@create')->name('post.create');
Route::post('/post/store','PostController@store')->name('post.store');
Route::get('/post','PostController@index')->name('post');
Route::get('/post/edit/{id}','PostController@edit')->name('post.edit');
Route::post('/post/update/{id}','PostController@update')->name('post.update');
Route::get('/post/delete/{id}','PostController@destroy')->name('post.delete');
// Categories route'
Route::get('/categories/create','CategoriesController@create')->name('categories.create');


Route::post('/categories/store','CategoriesController@store')->name('categories.store');
Route::get('/categories/index','CategoriesController@index')->name('categories.index');
Route::get('/categories/edit/{id}','CategoriesController@edit')->name('categories.edit');
Route::post('/categories/update/{id}','CategoriesController@update')->name('categories.update');
Route::get('/categories/delete/{id}','CategoriesController@destroy')->name('categories.delete');
//Tags routes 
Route::get('/tags','TagsController@index')->name('tags');
Route::get('/tags/create','TagsController@create')->name('tags.create');
Route::post('/tags/store','TagsController@store')->name('tags.store');
Route::get('/tags/edit/{id}','TagsController@edit')->name('tags.edit');
Route::post('/tags/update/{id}','TagsController@update')->name('tags.update');
Route::get('/tags/delete/{id}','TagsController@destroy')->name('tags.delete');

// Users Route
Route::get('/users','UsersController@index')->name('users');
Route::get('/users/create','UsersController@create')->name('users.create');
Route::post('/users/store','UsersController@store')->name('users.store');
Route::get('/users/edit/{id}','UsersController@edit')->name('users.edit');
Route::post('/users/update/{id}','UsersController@update')->name('users.update');
Route::get('/users/delete/{id}','UsersController@destroy')->name('users.delete');

Route::get('/users/admin/{id}','UsersController@admin')->name('users.admin');

//Settings Routes 
Route::get('/setting','SettingController@index')->name('setting');
Route::post('/setting/update','SettingController@update')->name('setting.update');
 
//Route::get('/', function () { return view('index');});




Route::get('/profile','ProfilsController@index')->name('profile.index');
Route::post('/profile/update/{id}','ProfilsController@update')->name('profile.update');

Route::get('/search','SiteController@search')->name('search');
});
Route::get('/testmail',function(){
        $data = ['message' => 'This is a test! hallo aziz'];

        Mail::to('aziz.waly6@gmail.com')->send(new TestEmail($data));
        return back();
});
Route::get('/','SiteController@index')->name('index');
Route::get('/{slug}','SiteController@singlePage')->name('single');
Route::get('/category/{id}','SiteController@category')->name('category');
Route::get('/tags/{id}','SiteController@tags')->name('showtags');

// Route::get('/search','SiteController@search')->name('search');


/*Route::get('/results', function () {
        $post = App\Post::where('title', 'like' ,  '%' . request('search') . '%' )->get();
        return view('results.results')
        ->with('posts' , $post ) 
        ->with('title' ,  'Result : '. request('search') )
        ->with('settings',  App\Setting::first() )
        ->with('blog_name' , App\Setting::first()->blog_name)
        ->with('categories' , App\Category::take(5)->get() )   
        ->with('query' , request('search') )   ;
        
    }) ;*/

    Route::get('/testmail',function(){

    $data = ['message' => 'This is a test!'];

    Mail::to('kuw2304@gmail.com')->send(new TestEmail($data));
    return back();

    });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
