<?php

use App\Http\Controllers\mainController;
use App\Http\Controllers\PriceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::get('/', function () {
            return view('welcome');
        })->name('home');



        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });


        route::get('new-offer', function () {
            return view('new_offer');
        })->name('offer_new');

        route::get('inquiry-offer', function () {
            return view('inquiry_offer');
        })->name('offer_inquiry');


        // New Extend Visit Visa Insurance routes
        route::get('get-beneficiaries-data', [mainController::class, 'getBeneficiariesData'])->name('getBeneficiariesData');
        route::post('summary/{offer}', [mainController::class, 'createSummary'])->name('summary');

        // Retrieve Policy Or Quotation

        route::post('offer_list', [mainController::class, 'getOfferList'])->name('offer_list');
        route::get('document_data/{offer}', [mainController::class, 'getDocumentData'])->name('document_data');

        require __DIR__ . '/auth.php';


        //admin route
        route::middleware('auth')->group(function () {
            route::get('edit_price/{price}', [PriceController::class, 'editPrice'])->name('editPrice');
            route::post('update_price/{price}', [PriceController::class, 'updatePrice'])->name('updatePrice');

            route::get('all_Insurance_documents', [mainController::class, 'getInsuranceDocuments'])->name('all_Insurance_documents');
            route::get('edit_document_status/{offer}', [mainController::class, 'editDocumentsStatus'])->name('editDocumentsStatus');
            route::post('update_documents_status/{offer}', [mainController::class, 'updateDocumentsStatus'])->name('updateDocumentsStatus');
        });
    }
);
