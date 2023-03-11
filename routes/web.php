<?php

use App\Http\Controllers\Auth\ApiLoginController;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
use App\Http\Livewire\ShowPosts;
use App\Models\Asset\AssetCategory;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => '', 'namespace' => "Livewire"], function () {
    Route::get('/', "ShowPosts");
    Route::get('/login', "Login");
    Route::get('/register', "Register");
});

Route::group( ['prefix'=>'','namespace' => "Controllers" ],function(){
    Route::get('/website','WebsiteController@website');
});

Route::get('/admin', function () {
    return view('backend.dashboard');
})->name('admin');

Route::get('/test', function () {
    // return view('test');
    // dd(request()->getClientIp());
    $user = \App\Models\User::find(1);
    dd(
        $user->roles()->get()->toArray(),
        $user->permissions()->get()->toArray(),
    );
});
Route::get('/dump_data_test',function () {
    $category = [
        [
            'id' => 1,
            'title' => 'Connectivity',
            'parent' => 0,
            'childrens' => [
                [
                    'title' => 'Internet & modem',
                    'parent' => 1,
                    'children' => [

                    ],
                ],
                [
                    'title' => 'Router',
                    'parent' => 1,
                    'children' => [

                    ],
                ],
            ]
        ],

        [
            'id' => 2,
            'title' => 'Computer & Accessories',
            'parent' => 0,
            'childrens' => [
                [
                    'title' => 'PC',
                    'parent' => 2,
                    'children' => [

                    ],
                ],
                [
                    'title' => 'Motherboard',
                    'parent' => 2,
                    'children' => [

                    ],
                ],
                [
                    'title' => 'Processor',
                    'parent' => 2,
                    'children' => [
                        
                    ],
                ],
            ]
        ],

        [
            'id' => 3,
            'title' => 'Funriture',
            'parent' => 0,
            'childrens' => [
                [
                    'title' => 'Chair',
                    'parent' => 3,
                    'children' => [

                    ],
                ],
                [
                    'title' => 'Table',
                    'parent' => 3,
                    'children' => [

                    ],
                ],
                [
                    'title' => 'Bench',
                    'parent' => 3,
                    'children' => [
                        
                    ],
                ],
            ]
        ],
    ];

    AssetCategory::truncate();
    foreach ($category as $category_name => $sub_categories) {
        
        $asset_category = new AssetCategory;
        $asset_category->title = $sub_categories['title'];
        $asset_category->parent = 0;
        $asset_category->save();
        if(count($sub_categories['childrens']) > 1) {
            foreach ($sub_categories['childrens'] as $sub_category_name) {
                $asset_sub_category = new AssetCategory;
                $asset_sub_category->title = $sub_category_name['title'];
                $asset_sub_category->parent = $asset_category['id'];
                $asset_sub_category->save();
            }
        }
    }
});

Route::get('/data-reload', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--seed' => true]);
    \Illuminate\Support\Facades\Artisan::call('migrate', ['--path' => 'vendor/laravel/passport/database/migrations', '--force' => true]);
    \Illuminate\Support\Facades\Artisan::call('passport:install');
    return redirect()->back();
});


