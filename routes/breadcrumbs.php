<?php // routes/breadcrumbs.php

use App\Models\SomeModel;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Tableau de bord
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Tableau de bord', route('dashboard'));
});
// Breadcrumbs::for('contacts', function (BreadcrumbTrail $trail) {
//     $trail->push('Contact', route('contactBack'));
// });
Breadcrumbs::for('subcription', function (BreadcrumbTrail $trail) {
    $trail->push('Souscription', route('subcription'));
});
// Tableau de bord
Breadcrumbs::for('profile.edit', function (BreadcrumbTrail $trail) {
    $trail->push('Profil', route('profile.edit'));
});

Breadcrumbs::macro('resource', function (string $name, string $title) {
    // Tableau de bord > [Name]
    Breadcrumbs::for("{$name}.index", function (BreadcrumbTrail $trail) use ($name, $title) {
        $trail->parent('dashboard');
        $trail->push($title, route("{$name}.index"));
    });

    // Tableau de bord > [Name] > New
    Breadcrumbs::for("{$name}.create", function (BreadcrumbTrail $trail) use ($name) {
        $trail->parent("{$name}.index");
        $trail->push('Ajouter', route("{$name}.create"));
    });

    // Tableau de bord > [Name] > Name 123
    Breadcrumbs::for("{$name}.show", function (BreadcrumbTrail $trail, $title) use ($name) {
        $trail->parent("{$name}.index");
        $trail->push($title, route("{$name}.show", $title));
    });

    // Tableau de bord > [Name] > Name 123 > Edit
    Breadcrumbs::for("{$name}.edit", function (BreadcrumbTrail $trail, $title) use ($name) {
        $trail->parent("{$name}.show", $title);
        $trail->push('Modifier', route("{$name}.edit", $title));
    });
});

Breadcrumbs::resource('partners', 'Partenaires');
Breadcrumbs::resource('services', 'Services');
Breadcrumbs::resource('projects', 'Projets');
Breadcrumbs::resource('products', 'Produits');
Breadcrumbs::resource('underServices', 'Sous Services');
Breadcrumbs::resource('testimonials', 'Témoignages');
Breadcrumbs::resource('actualities', 'Actualités');
Breadcrumbs::resource('users', 'Utilisateurs');
Breadcrumbs::resource('phones', 'Téléphones');
Breadcrumbs::resource('emails', 'Emails');
Breadcrumbs::resource('contacts', 'Contacts');
Breadcrumbs::resource('settings', 'Paramètre');
Breadcrumbs::resource('automatings', 'Automations');
Breadcrumbs::resource('seos', 'Seo');
Breadcrumbs::resource('heros', 'Héro');
Breadcrumbs::resource('servieHomes', 'Accueile Service');
Breadcrumbs::resource('aboutHomes', 'Accueile A Propos');
Breadcrumbs::resource('testimonialHomes', 'Accueile témoignage');
Breadcrumbs::resource('authorSections', 'Acueill auteur');
Breadcrumbs::resource('workAreas', 'Acueill processus de travaill');
Breadcrumbs::resource('descriptionFooters', 'Accueil pied de page');
Breadcrumbs::resource('aboutPolitiques', 'Page à propos');
Breadcrumbs::resource('servicePages', 'Page services');
Breadcrumbs::resource('actualitiesPages', 'Page Actualité');
Breadcrumbs::resource('cguPages', 'Page CGU');
Breadcrumbs::resource('legalPages', 'Page Mention Légal');
Breadcrumbs::resource('sectionStatus', 'Gestion des sections');