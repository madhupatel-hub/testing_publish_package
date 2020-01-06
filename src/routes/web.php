
<?php
Route::group(['namespace' => 'Bigcommerce\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('showtest', 'BigcommerceController@showText');
    Route::get('getcatapi', 'BigcommerceController@getCatApi');
});
