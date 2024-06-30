<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use App\Models\Actuality;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Project;
use App\Models\ProjectCategorie;
use App\Models\ProductCategorie;
use App\Models\ActualitiesCategorie;
use App\Mail\receiveContactMail;
use App\Mail\sendContactMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use App\Http\Requests\ContactStoreRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\IpUtils;
use Illuminate\Validation\ValidationException;

class PacomController extends Controller
{
    public function about()
    {
        $title = "Qui sommes-nous";
        $page = "Environ";
        return view('front.pages.about', compact('title', 'page'));
    }

    public function cgu()
    {
        return view('front.pages.cgu');
    }

    public function mentionsLegales()
    {
        return view('front.pages.mentions-legales');
    }

    public function contact()
    {
        $title = "Contactez-nous";
        $page = "Contact";
        return view('front.pages.contact', compact('title', 'page'));
    }

    public function actualities(ActualitiesCategorie $newCategorie)
    {
        if ($newCategorie->id != null) {
            $title = $newCategorie->name;
            $page = "Actualité";
            $param = true;
            return view('front.pages.actualities.index', compact('title', 'page', 'param', 'newCategorie'));
        } else {
            $title = "Nos actualité";
            $page = "Actualité";
            $param = false;
            return view('front.pages.actualities.index', compact('title', 'page', 'param'));
        }


    }

    public function singleActuality(Actuality $actuality)
    {
        $title = $actuality->title;
        $page = "Actualité";
        return view('front.pages.actualities.single', compact('actuality','title', 'page'));
    }

    public function services()
    {
        $title = "Nos services";
        $page = "Services";
        return view('front.pages.services.index', compact('title', 'page'));
    }

    public function singleService(Service $service)
    {
        $title = "Détails du service";
        $page = "Service";
        return view('front.pages.services.single', compact('service', 'title', 'page'));
    }

    public function projects(ProjectCategorie $projectCategorie)
    {
        if ($projectCategorie->id != null) {
            $title = $projectCategorie->name;
            $page = "Projets";
            $param = true;
            return view('front.pages.projects.index', compact('title', 'page', 'param', 'projectCategorie'));
        } else {
            $title = "Nos projets";
            $page = "Projets";
            $param = false;
            return view('front.pages.projects.index', compact('title', 'page', 'param'));
        }


    }

    public function singleProject(Project $project)
    {
        $title = $project->title;
        $page = "Projet";
        return view('front.pages.projects.single', compact('project', 'title', 'page'));
    }

    public function produits(ProductCategorie $productCategorie)
    {
        if ($productCategorie->id != null) {
            $title = $productCategorie->name;
            $page = "Produits";
            $param = true;
            return view('front.pages.produits.index', compact('title', 'page', 'param', 'productCategorie'));
        } else {
            $title = "Nos produits";
            $page = "Produits";
            $param = false;
            return view('front.pages.produits.index', compact('title', 'page', 'param'));
        }


    }

    public function singleProduit(Product $product)
    {
        $title = $product->title;
        $page = "Produit";
        return view('front.pages.produits.single', compact('product', 'title', 'page'));
    }

    // public function singleProduit(Product $product)
    // {
    //     dd('ee');
    //     $title = "Détails du produit";
    //     $page = $product->title;
    //     return view('front.pages.produits.single', compact('title', 'page', 'product'));
    // }

    public function blogs()
    {
        $title = "Blog";
        $page = "Blogs";
        return view('front.pages.blogs.index', compact('title', 'page'));
    }

    public function singleBlog()
    {
        $title = "Détails du blog";
        $page = "Blog";
        return view('front.pages.blogs.single', compact('title', 'page'));
    }

    public function sendContact(ContactStoreRequest $request): RedirectResponse
    {
        try {
            $rules = [
                'fullname' => ['required', 'string'],
                'email' => ['required', 'email'],
                'phone' => ['required'],
                // 'subject' => ['required', 'string'],
                'message' => ['required', 'string'],
                // 'g-recaptcha-response' => ['required'],
            ];
            // $this->validate($request, $rules, ['g-recaptcha-response' => "Veuillez compléter le reCAPTCHA pour continuer."]);
            // dd('ici');
            // $recaptcha = $request->input('g-recaptcha-response');
            // $secret = config('services.recaptcha.secret');

            // Log::info('reCAPTCHA secret', ['secret' => $secret]);

            // $response = Http::post('https://www.google.com/recaptcha/api/siteverify', [
            //     'secret' => $secret,
            //     'response' => $recaptcha,
            //     'remoteip' => $request->ip(),
            // ]);

            // $result = $response->json();

            // Log::info('reCAPTCHA Response', [
            //     'response' => $result,
            //     'request_ip' => $request->ip(),
            //     'secret' => $secret,
            //     'recaptcha_response' => $recaptcha,
            // ]);

            $data = $request->only(['fullname', 'email', 'phone', 'message']);
            $contact = Contact::create($data);

            $admins = User::whereHas('roles', function ($query) {
                $query->where('name', 'admin');
            })->get();

            foreach ($admins as $admin) {
                Mail::to($admin->email)->send(new ReceiveContactMail($data));
            }

            Mail::to($data['email'])->send(new SendContactMail($data));
            // toastr()->success('Message envoyé avec succès !');
            return Redirect::to(URL::previous() . "#contact")->with('success', 'Message envoyé avec succès');
        } catch (ValidationException $e) {
            toastr()->danger('Vérifier les information soumis !');
            return Redirect::to(URL::previous() . "#contact")->withErrors($e->errors())->withInput();
        }
    }
}
