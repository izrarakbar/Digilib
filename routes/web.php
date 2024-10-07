<?php

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('home');

    Route::resource('user', \App\Http\Controllers\UserController::class)
        ->except(['show', 'edit', 'create'])
        ->middleware(['role:admin']);

    Route::get('profile', [\App\Http\Controllers\PageController::class, 'profile'])
        ->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\PageController::class, 'profileUpdate'])
        ->name('profile.update');
    Route::put('profile/deactivate', [\App\Http\Controllers\PageController::class, 'deactivate'])
        ->name('profile.deactivate')
        ->middleware(['role:staff']);

    Route::get('settings', [\App\Http\Controllers\PageController::class, 'settings'])
        ->name('settings.show')
        ->middleware(['role:admin']);
    Route::put('settings', [\App\Http\Controllers\PageController::class, 'settingsUpdate'])
        ->name('settings.update')
        ->middleware(['role:admin']);

    Route::delete('attachment', [\App\Http\Controllers\PageController::class, 'removeAttachment'])
        ->name('attachment.destroy');

    Route::prefix('transaction')->as('transaction.')->group(function () {
        Route::resource('incoming', \App\Http\Controllers\IncomingLetterController::class);
        Route::resource('outgoing', \App\Http\Controllers\OutgoingLetterController::class);
        Route::resource('perdir', \App\Http\Controllers\PerdirLetterController::class);
        Route::resource('kpts', \App\Http\Controllers\KptsLetterController::class);
        Route::resource('pemberitahuan', \App\Http\Controllers\PemberitahuanLetterController::class);
        Route::resource('pakta', \App\Http\Controllers\PaktaLetterController::class);
        Route::resource('notulen', \App\Http\Controllers\NotulenLetterController::class);
        Route::resource('{letter}/disposition', \App\Http\Controllers\DispositionController::class)->except(['show']);
    });

    Route::prefix('agenda')->as('agenda.')->group(function () {
        Route::get('incoming', [\App\Http\Controllers\IncomingLetterController::class, 'agenda'])->name('incoming');
        Route::get('incoming/print', [\App\Http\Controllers\IncomingLetterController::class, 'print'])->name('incoming.print');
        Route::get('outgoing', [\App\Http\Controllers\OutgoingLetterController::class, 'agenda'])->name('outgoing');
        Route::get('outgoing/print', [\App\Http\Controllers\OutgoingLetterController::class, 'print'])->name('outgoing.print');

        Route::get('perdir', [\App\Http\Controllers\PerdirLetterController::class, 'agenda'])->name('perdir');
        Route::get('perdir/print', [\App\Http\Controllers\perdirLetterController::class, 'print'])->name('perdir.print');

        Route::get('kpts', [\App\Http\Controllers\KptsLetterController::class, 'agenda'])->name('kpts');
        Route::get('kpts/print', [\App\Http\Controllers\KptsLetterController::class, 'print'])->name('kpts.print');

        Route::get('pemberitahuan', [\App\Http\Controllers\PemberitahuanLetterController::class, 'agenda'])->name('pemberitahuan');
        Route::get('pemberitahuan/print', [\App\Http\Controllers\PemberitahuanLetterController::class, 'print'])->name('pemberitahuan.print');

        Route::get('pakta', [\App\Http\Controllers\PaktaLetterController::class, 'agenda'])->name('pakta');
        Route::get('pakta/print', [\App\Http\Controllers\PaktaLetterController::class, 'print'])->name('pakta.print');

        Route::get('notulen', [\App\Http\Controllers\NotulenLetterController::class, 'agenda'])->name('notulen');
        Route::get('notulen/print', [\App\Http\Controllers\NotulenLetterController::class, 'print'])->name('notulen.print');
    });

    Route::prefix('gallery')->as('gallery.')->group(function () {
        Route::get('incoming', [\App\Http\Controllers\LetterGalleryController::class, 'incoming'])->name('incoming');
        Route::get('outgoing', [\App\Http\Controllers\LetterGalleryController::class, 'outgoing'])->name('outgoing');
        Route::get('perdir', [\App\Http\Controllers\LetterGalleryController::class, 'perdir'])->name('perdir');
        Route::get('kpts', [\App\Http\Controllers\LetterGalleryController::class, 'kpts'])->name('kpts');
        Route::get('pemberitahuan', [\App\Http\Controllers\LetterGalleryController::class, 'pemberitahuan'])->name('pemberitahuan');
        Route::get('pakta', [\App\Http\Controllers\LetterGalleryController::class, 'pakta'])->name('pakta');
        Route::get('notulen', [\App\Http\Controllers\LetterGalleryController::class, 'notulen'])->name('notulen');
    });

    Route::prefix('reference')->as('reference.')->middleware(['role:admin'])->group(function () {
        Route::resource('classification', \App\Http\Controllers\ClassificationController::class)->except(['show', 'create', 'edit']);
        Route::resource('status', \App\Http\Controllers\LetterStatusController::class)->except(['show', 'create', 'edit']);
    });

});
