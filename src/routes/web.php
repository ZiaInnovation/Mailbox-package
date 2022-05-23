<?php

use App\Http\Livewire\Reset;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

use Ziainnovation\Mailbox\Http\Controllers\MailController;

Route::middleware('auth')->group(function(){

    Route::get('/mails',[MailController::class,'index'])->name('mails.index');
    Route::get('inbox',[MailController::class,'index'])->name('mails.index');
    Route::get('sent',[MailController::class,'sent'])->name('mails.sent');
    Route::get('stared',[MailController::class,'stared'])->name('mails.stared');
    Route::get('snoozed',[MailController::class,'snoozed'])->name('mails.snoozed');
    Route::get('important',[MailController::class,'important'])->name('mails.important');
    Route::get('spam',[MailController::class,'spam'])->name('mails.spam');
    Route::get('trashed',[MailController::class,'trashed'])->name('mails.trashed');
    Route::get('mail/{id}',[MailController::class,'show'])->name('mails.show');
    Route::post('send',[MailController::class,'send'])->name('mails.send');

    Route::get('create',[MailController::class,'create'])->name('mail.create');
});


