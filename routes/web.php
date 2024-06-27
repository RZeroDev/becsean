<?php

use App\Http\Controllers\AboutHomeController;
use App\Http\Controllers\AboutPolitiqueController;
use App\Http\Controllers\ActualitiesPageController;
use App\Http\Controllers\ActualityController;
use App\Http\Controllers\AuthorSectionController;
use App\Http\Controllers\AutomatingController;
use App\Http\Controllers\CguController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DescriptionFooterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PacomController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UnderServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\LinkedinController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\LegalPageController;
use App\Http\Controllers\SectionStatusController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\ServieHomeController;
use App\Http\Controllers\TestimonialHomeController;
use App\Http\Controllers\WorkAreaController;
use App\Models\AboutPolitique;
use App\Models\DescriptionFooter;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//LinkedIn area
Route::get('/linkedin/callback', [LinkedinController::class, 'linkedinCallback'])->name('linkedin.callback');
Route::get('/linkedin/get-id', [LinkedinController::class, 'getLinkedinId'])->name('linkedin.getPageId');
// Route::get('/linkedin/share-article', [MainController::class, 'shareLinkedinArticle'])->name('linkedin.share');

Route::get('/', function () {
    return view('front.pages.index');
})->name('index');

Route::get('/a-propos', [PacomController::class, 'about'])->name('about');
Route::get('/cgu', [PacomController::class, 'cgu'])->name('cgu');
Route::get('/mentions-legales', [PacomController::class, 'mentionsLegales'])->name('mentionsLegales');

Route::get('/nous-contacter', [PacomController::class, 'contact'])->name('contact');
Route::post('/nous-contacter/send', [PacomController::class, 'sendContact'])->name('contact.send');


Route::get('/nos-actualites', [PacomController::class, 'actualities'])->name('news');
Route::get('/actualite/{actuality:slug}', [PacomController::class, 'singleActuality'])->name('actuality.single');

Route::get('/nos-services', [PacomController::class, 'services'])->name('services');
Route::get('/service/{service:slug}', [PacomController::class, 'singleService'])->name('service.single');

Route::get('/nos-projets', [PacomController::class, 'projects'])->name('projects');
Route::get('/project', [PacomController::class, 'singleproject'])->name('project.single');

Route::get('/nos-produits', [PacomController::class, 'produits'])->name('produits');
Route::get('/produit', [PacomController::class, 'singleProduit'])->name('produit.single');

Route::get('/nos-blogs', [PacomController::class, 'blogs'])->name('blogs');
Route::get('/blog', [PacomController::class, 'singleblog'])->name('blog.single');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile/{user}', [DashboardController::class, 'update1'])->name('profile.update1');

    Route::resource('services', ServiceController::class)->parameters([
        'services' => 'service:slug',
    ]);

    Route::resource('underServices', UnderServiceController::class)->parameters([
        'underServices' => 'underService:slug',
    ]);

    Route::resource('phones', PhoneController::class)->parameters([
        'phones' => 'phone:slug',
    ]);
    Route::resource('emails', EmailController::class)->parameters([
        'emails' => 'email:name',
    ]);

    //actualities
    Route::resource('actualities', ActualityController::class)->parameters([
        'actualities' => 'actuality:slug',
    ]);
    Route::get('/actualities/status/{slug}', [ActualityController::class, 'status'])->name('actualities.status');

    //testimonials
    Route::resource('testimonials', TestimonialController::class)->parameters([
        'testimonials' => 'testimonial:slug',
    ]);
    Route::get('/testimonials/status/{slug}', [TestimonialController::class, 'status'])->name('testimonials.status');
    //settings
    Route::resource('settings', SettingController::class);

    Route::resource('automatings', AutomatingController::class);

    Route::resource('seos', SeoController::class);

    Route::resource('heros', HeroController::class);

    Route::resource('servieHomes', ServieHomeController::class);
    Route::resource('aboutHomes', AboutHomeController::class);
    Route::resource('testimonialHomes', TestimonialHomeController::class);
    Route::resource('authorSections', AuthorSectionController::class);
    Route::resource('workAreas', WorkAreaController::class);
    Route::resource('descriptionFooters', DescriptionFooterController::class);
    Route::resource('aboutPolitiques', AboutPolitiqueController::class);
    Route::resource('servicePages', ServicePageController::class);
    Route::resource('actualitiesPages', ActualitiesPageController::class);
    Route::resource('cguPages', CguController::class);
    Route::resource('legalPages', LegalPageController::class);
    Route::resource('sectionStatus', SectionStatusController::class);
    Route::get('/service-page', [ServicePageController::class, 'index1'])->name('servicesPage.index1');
    Route::get('/actualities-page', [ActualitiesPageController::class, 'index1'])->name('actualitiesPage.index1');
    Route::get('/analytics', [SettingController::class, 'analytics'])->name('analytics1');
    Route::put('/analytics/{setting}', [SettingController::class, 'analytics_update'])->name('analytics');

    //partners
    Route::resource('partners', PartnerController::class)->parameters([
        'partners' => 'partner:slug',
    ]);
     //users
     Route::resource('users', UserController::class)->parameters([
        'users' => 'user:slug',
    ]);
    Route::get('/users/status/{email}', [UserController::class, 'status'])->name('users.status');

});

require __DIR__.'/auth.php';
