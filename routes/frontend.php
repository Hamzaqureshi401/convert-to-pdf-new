<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});
// Route::get('/wordTopdf', function () {
//     return view('frontend.pdftool.wordTopdf');
// })->name('frontend.pdftool.wordtopdf');

// Route::get('/pngtopdf', function () {
//     return view('frontend.pdftool.pngtopdf');
// })->name('frontend.pdftool.pngtopdf');

// Route::get('/jpgtopdf', function () {
//     return view('frontend.pdftool.jpgtopdf');
// })->name('frontend.pdftool.jpgtopdf');

// Route::get('/giftopdf', function () {
//     return view('frontend.pdftool.giftopdf');
// })->name('frontend.pdftool.giftopdf');

// Route::get('/htmltopdf', function () {
//     return view('frontend.pdftool.htmltopdf');
// })->name('frontend.pdftool.htmltopdf');

// Route::get('/ppttopdf', function () {
//     return view('frontend.pdftool.ppttopdf');
// })->name('frontend.pdftool.ppttopdf');

// Route::get('contact', function (){
//     return view('frontend.contact');
// })->name('frontend.contact');

// Route::get('pdf', function (){
//     return view('pdf');
// })->name('pdf');