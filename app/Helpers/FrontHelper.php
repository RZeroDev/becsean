<?php

namespace App\Helpers;

use App;
use App\Models\Actuality;
use App\Models\Image;
use App\Models\Phone;
use App\Models\Setting;
use App\Models\Email;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Hero;
use App\Models\AboutHome;
use App\Models\ServieHome;
use App\Models\AboutPolitique;
use App\Models\AuthorSection;
use App\Models\DescriptionFooter;
use App\Models\WorkArea;
use App\Models\ActualitiesPage;
use App\Models\Cgu;
use App\Models\legalPage;
use App\Models\SectionStatus;
use App\Models\ServicePage;
use App\Models\Project;
use App\Models\Product;
use App\Models\ProductCategorie;
use App\Models\ProjectCategorie;
// use App\Helpers\FrontHelper;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


class FrontHelper
{
	public static function getAppName()
    {
        return config('name', 'Bescean');
    }

    public static function getEnvFolder()
    {
        $folder = null;
        if(!App::environment('local')) {
            $folder = 'public/';
        }
        return $folder;
    }

    public static function getFormattedPrice($price)
    {
        $price = floatval($price);
        return number_format($price, 0, '.', ' ');
    }

    public static function allGalleries()
    {
        if (Route::currentRouteName() != 'galleries')
        {
            $galleries = Image::orderBy('created_at', 'desc')->where('room_id', null)->paginate(8);
        }
        else
        {
            $galleries = Image::orderBy('created_at', 'desc')->where('room_id', null)->paginate(12);
        }
        return $galleries;
    }

    public static function allRooms()
    {
        if (Route::currentRouteName() != 'rooms')
        {
            $rooms = Room::orderBy('created_at', 'desc')->paginate(6);
        }
        else
        {
            $rooms = Room::orderBy('created_at', 'desc')->paginate(9);
        }
        return $rooms;
    }

    public static function getSettings()
    {
        $setting = Setting::orderBy('created_at', 'desc')->first();
        return $setting;
    }

    public static function allProductCategorie() {
        $productCategorie = ProductCategorie::all();
        return $productCategorie;
    }

    public static function allProduct() {
        $product = Product::all();
        return $product;
    }

    public static function allProductCat($categorieId) {
        $products = Product::where('product_categorie_id', $categorieId)->get();
        return $products;
    }

    public static function allProjectCategorie() {
        $projectCategorie = ProjectCategorie::all();
        return $projectCategorie;
    }

    public static function allProject() {
        $project = Project::all();
        return $project;
    }

    public static function allProjectCat($categorieId) {
        $projects = Project::where('project_categorie_id', $categorieId)->get();
        return $projects;
    }

    public static function allActualities()
    {
        if (Route::currentRouteName() != 'news')
        {
            $actualities = Actuality::orderBy('created_at', 'desc')->paginate(3);
        }
        else
        {
            $actualities = Actuality::orderBy('created_at', 'desc')->paginate(6);
        }
        return $actualities;
    }

    public static function dateInFrench($date) {
        $dateArray = explode($date, " ");
        return $dateArray[0];
    }

    public static function getSetting()
    {
        $setting = Setting::where('id', 1)->first();
        return $setting;
    }

    public static function getServieHome()
    {
        $servieHome = ServieHome::where('id', 1)->first();
        return $servieHome;
    }

    public static function getAuthorSection()
    {
        $authorSection = AuthorSection::where('id', 1)->first();
        return $authorSection;
    }

    public static function getProcessWork()
    {
        $workArea = WorkArea::all();
        return $workArea;
    }

    public static function getSectionStatus()
    {
        $sectionStatus = SectionStatus::first();
        return $sectionStatus;
    }

    public static function getCguPage()
    {
        $cgu = Cgu::first();
        return $cgu;
    }

    public static function getLegalPage()
    {
        $legal = legalPage::first();
        return $legal;
    }

    public static function getIconShape($number)
    {
        $link = asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/icon-shape-'.$number.'.png');
        return $link;
    }

    public static function getAboutPolitique()
    {
        $aboutPolitique = AboutPolitique::where('id', 1)->first();
        return $aboutPolitique;
    }

    public static function getActualityPage()
    {
        $actualityPage = ActualitiesPage::where('id', 1)->first();
        return $actualityPage;
    }

    public static function getServicePage()
    {
        $servicePage = ServicePage::where('id', 1)->first();
        return $servicePage;
    }

    public static function getDescriptionFooter()
    {
        $descriptionFooter = DescriptionFooter::where('id', 1)->first();
        return $descriptionFooter;
    }

    public static function getAboutHome()
    {
        $aboutHome = AboutHome::where('id', 1)->first();
        return $aboutHome;
    }

    public static function getHero()
    {
        $hero = Hero::where('id', 1)->first();
        return $hero;
    }

    public static function getPhones()
    {
        $phones = Phone::all();
        return $phones;
    }

    public static function getPhone()
    {
        $phone = Phone::where('id', 1)->first();
        return $phone->name;
    }

    public static function getEmail()
    {
        $email = Email::where('id', 1)->first();
        return $email->name;
    }

    public static function getEmails()
    {
        $emails = Email::all();
        return $emails;
    }

    public static function allServicesForFooter()
    {

        $services = Service::all();
        return $services;
    }

    public static function allActuForFooter()
    {

        $actu = Actuality::paginate(3);
        return $actu;
    }

    public static function allServices()
    {
        if (Route::currentRouteName() != 'services')
        {
            $services = Service::orderBy('created_at', 'asc')->paginate(3);
        }
        else
        {
            $services = Service::orderBy('created_at', 'asc')->paginate(9);
        }
        return $services;
    }

    public static function allTestimonials()
    {
        $testimonials = Testimonial::inRandomOrder()->limit(8)->get();
        return $testimonials;
    }

    public static function allPartners()
    {
        $partners = Partner::inRandomOrder()->limit(10)->get();
        return $partners;
    }

    public static function getAllServicesWS(Service $currentService)
    {
        // $services = Service::paginate(3)->filter(function ($serv) use ($currentService) {
        //     return $serv->id != $currentService->id;
        // });
        $services = Service::where('id', '!=', $currentService->id)->paginate(3);
        return $services;
    }

    public static function getAllActualitiesWA(Actuality $currentActuality)
    {
        // $services = Service::paginate(3)->filter(function ($serv) use ($currentService) {
        //     return $serv->id != $currentService->id;
        // });
        $actualities = Actuality::where('id', '!=', $currentActuality->id)->paginate(3);
        return $actualities;
    }
}

?>
