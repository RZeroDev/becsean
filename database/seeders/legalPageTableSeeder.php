<?php

namespace Database\Seeders;

use App\Models\legalPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class legalPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        legalPage::create([
            'description'=>' <h3 class="h5">Informations obligatoires</h3>
            <p>
                Responsable de la rédaction du site : Olivier Benghezal
                SASU au capital social  56 000 €
                Siège social : 6 rue Musset 75016, Paris
                R.C.S Paris 491 184 453 – SIRET N°491 184 453 – TVA européenne Fr 84491184453 – CODE NAF 7311Z
            </p>
            <h3 class="h5">Hébergement</h3>
            <p>
                Infomaniak Network SA <br>
                Rue Eugène Marziano 25 <br>
                1227 Les Acacias (GE) <br> <br>

                Les Acacias, Genève, Suisse <br>
                Registre du commerce du canton de Genève CH-660.0.059.996-1 Numéro IDE CHE-103.167.648 Numéro TVA CHE-103.167.648
            </p>

            <h3 class="h5">Respecter le droit à l’image</h3>
            <p>
                Toute personne, quelle que soit sa notoriété, dispose d’un droit exclusif sur son image et sur l’utilisation qui en est faite. Elle peut donc s’opposer à sa reproduction et à sa diffusion. Parce que l’image d’une personne est une donnée à caractère personnel, les principes de la loi “informatique et libertés” s’appliquent. La diffusion à partir d’un site web, par exemple, de l’image ou de la vidéo d’une personne doit se faire dans le respect des principes protecteurs de la loi du 6 janvier 1978 modifiée. Ces principes rejoignent les garanties issues du droit à l’image. (CNIL) <br> <br>
            </p>'
        ]);
    }
}
