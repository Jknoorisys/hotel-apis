<?php

use App\Http\Controllers\api\hotel_beds\BookingController;
use App\Http\Controllers\api\hotel_beds\ContentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['localization'])->group(function () {

    // Hotel Beds APIs By Javeriya Kauser
    Route::prefix('hotel-api')->group(function () {
        // AVAILABILITY
        Route::post('hotels' , [BookingController::class, 'hotels']);

        // CHECK RATE
        Route::post('checkrates' , [BookingController::class, 'checkrates']);

        // BOOKING
        Route::post('bookings' , [BookingController::class, 'bookings']);

        // POST BOOKING
        Route::get('booking-list' , [BookingController::class, 'bookingList']);
        Route::get('booking-details' , [BookingController::class, 'bookingDetails']);
        Route::post('booking-change' , [BookingController::class, 'bookingChange']);
        Route::delete('booking-cancel' , [BookingController::class, 'bookingCancel']);
        Route::post('reconfirmations' , [BookingController::class, 'bookingReconfirmation']);
    });

    Route::prefix('hotel-content-api')->group(function () {
        // HOTELS
        Route::get('hotels' , [ContentController::class, 'hotels']);
        Route::get('hotel-details' , [ContentController::class, 'hotelDetails']);

        // LOCATIONS
        Route::get('countries' , [ContentController::class, 'countries']);
        Route::get('destinations' , [ContentController::class, 'destinations']);

        // TYPES
        Route::get('accommodations' , [ContentController::class, 'accommodations']);
        Route::get('boards' , [ContentController::class, 'boards']);
        Route::get('categories' , [ContentController::class, 'categories']);
        Route::get('chains' , [ContentController::class, 'chains']);
        Route::get('currencies' , [ContentController::class, 'currencies']);
        Route::get('facilities' , [ContentController::class, 'facilities']);
        Route::get('facilitygroups' , [ContentController::class, 'facilitygroups']);
        Route::get('facilitytypologies' , [ContentController::class, 'facilitytypologies']);
        Route::get('issues' , [ContentController::class, 'issues']);
        Route::get('languages' , [ContentController::class, 'languages']);
        Route::get('promotions' , [ContentController::class, 'promotions']);
        Route::get('rooms' , [ContentController::class, 'rooms']);
        Route::get('segments' , [ContentController::class, 'segments']);
        Route::get('terminals' , [ContentController::class, 'terminals']);
        Route::get('imagetypes' , [ContentController::class, 'imagetypes']);
        Route::get('groupcategories' , [ContentController::class, 'groupcategories']);
        Route::get('ratecomments' , [ContentController::class, 'ratecomments']);
        Route::get('ratecommentdetails' , [ContentController::class, 'ratecommentdetails']);
    });
});
