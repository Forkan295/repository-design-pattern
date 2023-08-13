<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Service\ReadData;
use App\Service\ReadDataContract;
use App\Service\ReadFile;
use App\Service\ReadFileContract;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function (ReadFile $file) {

    function getData(ReadFileContract $contract)
    {
        $obj = new stdClass();
        $obj->ext = 'jpg';
        return $contract->getExt($obj);
    }

    function getSize(ReadFileContract $contract)
    {
        $obj = new stdClass();
        $obj->size = 4;
        $obj->sizeType = 'mb';
        return $contract->getSize($obj) . '-' . $contract->getSizeDetails($obj);
    }

    $ext = getData($file);
    $size = getSize($file);
    dd($ext, $size);

    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/test', function () {
    $user = resolve(\App\Repositories\UserRepository\UserRepository::class)->update(1,['asdf']);
    $product = resolve(\App\Repositories\ProductRepository\ProductRepository::class)->update(1,['asdf']);
    dd($user,$product);
})->name('profile.edit');

Route::get('/product', [ProductController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
