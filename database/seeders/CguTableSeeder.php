<?php

namespace Database\Seeders;

use App\Models\Cgu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CguTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cgu::create([
            'description'=>'
            <h3 class="h5 mt-3 mb-3">ARTICLE 1 : Objet</h3>
            <p class="text-justify">
                Les présentes « conditions générales d’utilisation » ont pour objet l’encadrement juridique des
                modalités de mise à disposition des services du site Askano et leur
                utilisation par « l’Utilisateur ». <br>
                Les conditions générales d’utilisation doivent être acceptées par tout Utilisateur souhaitant
                accéder au site. Elles constituent le contrat entre le site et l’Utilisateur. L’accès au site
                par l’Utilisateur signifie son acceptation des présentes conditions générales d’utilisation.
                <br>
                Éventuellement :
            </p>
            <div class="integration-feature-inf">
                <ul class="content-list list-unstyled">
                    <li class="text-justify">
                        En cas de non-acceptation des conditions générales d’utilisation stipulées dans le
                        présent contrat, l’Utilisateur se doit de renoncer à l’accès des services proposés par
                        le site.
                    </li>
                    <li class="text-justify">
                        Askano se réserve le droit de modifier unilatéralement et à
                        tout moment le contenu des présentes conditions générales d’utilisation.
                    </li>
                </ul>
            </div>
            <h3 class="h5 mt-3 mb-3">ARTICLE 2 : Mentions légales</h3>
            <p class="text-justify">
                L’édition du site Askano est assurée par la Société SASU Pacifico
                Communication au capital de 56 000 € dont le siège social est situé au 6 rue Musset 75016 Paris.
                <br>
                Le Directeur de la publication est Monsieur Benghezal Olivier. <br>
                L’hébergeur du site Askano est la Société OVH au capital de 10 069 020
                € dont le siège social est situé au 2 rue Kellermann – 59100 Roubaix. <br>
            </p>
            <h3 class="h5 mt-3 mb-3">ARTICLE 3 : Définitions</h3>
            <p class="text-justify">
                La présente clause a pour objet de définir les différents termes essentiels du contrat : <br>
            </p>

            <div class="integration-feature-info mt-1">
                <ul class="content-list list-unstyled">
                    <li class="text-justify">
                        Utilisateur : ce terme désigne toute personne qui utilise le site ou l’un des services
                        proposés par le site.
                    </li>
                    <li class="text-justify">
                        Contenu utilisateur : ce sont les données transmises par l’Utilisateur au sein du site.
                    </li>
                    <li class="text-justify">
                        Membre : l’Utilisateur devient membre lorsqu’il est identifié sur le site.
                    </li>
                    <li class="text-justify">
                        Identifiant et mot de passe : c’est l’ensemble des informations nécessaires à
                        l’identification d’un Utilisateur sur le site. L’identifiant et le mot de passe
                        permettent à l’Utilisateur d’accéder à des services réservés aux membres du site. Le mot
                        de passe est confidentiel.
                    </li>
                </ul>
            </div>

            <h3 class="h5 mt-3 mb-3">ARTICLE 4 : Accès aux services</h3>
            <p class="text-justify">
                Le site permet à l’Utilisateur un accès gratuit aux services suivants : <br>
            </p>

            <div class="integration-feature-info mt-1">
                <ul class="content-list list-unstyled">
                    <li class="text-justify">
                        [articles d’information] ;
                    </li>
                    <li class="text-justify">
                        [annonces classées] ;
                    </li>
                    <li class="text-justify">
                        [mise en relation de personnes] ;
                    </li>
                    <li class="text-justify">
                        [publication de commentaires / d’œuvres personnelles] ;
                    </li>
                    <li class="text-justify">
                        […].
                    </li>
                </ul>
            </div>

            <p class="text-justify">
                Le site est accessible gratuitement en tout lieu à tout Utilisateur ayant un accès à Internet.
                Tous les frais supportés par l’Utilisateur pour accéder au service (matériel informatique,
                logiciels, connexion Internet, etc.) sont à sa charge. <br>

                Selon le cas : <br>

                L’Utilisateur non membre n’a pas accès aux services réservés aux membres. Pour cela, il doit
                s’identifier à l’aide de son identifiant et de son mot de passe. <br>

                Le site met en œuvre tous les moyens mis à sa disposition pour assurer un accès de qualité à ses
                services. L’obligation étant de moyens, le site ne s’engage pas à atteindre ce résultat. <br>

                Tout événement dû à un cas de force majeure ayant pour conséquence un dysfonctionnement du
                réseau ou du serveur n’engage pas la responsabilité de Askano <br>

                L’accès aux services du site peut à tout moment faire l’objet d’une interruption, d’une
                suspension, d’une modification sans préavis pour une maintenance ou pour tout autre cas.
                L’Utilisateur s’oblige à ne réclamer aucune indemnisation suite à l’interruption, à la
                suspension ou à la modification du présent contrat. <br>

                L’Utilisateur a la possibilité de contacter le site par messagerie électronique à l’adresse
                contact@askano.fr <br>
            </p>

            <h3 class="h5 mt-3 mb-3">ARTICLE 5 : Propriété intellectuelle</h3>
            <p class="text-justify">
                Les marques, logos, signes et tout autre contenu du site font l’objet d’une protection par le
                Code de la propriété intellectuelle et plus particulièrement par le droit d’auteur. <br>

                L’Utilisateur sollicite l’autorisation préalable du site pour toute reproduction, publication,
                copie des différents contenus. <br>

                L’Utilisateur s’engage à une utilisation des contenus du site dans un cadre strictement privé.
                Une utilisation des contenus à des fins commerciales est strictement interdite. <br>

                Tout contenu mis en ligne par l’Utilisateur est de sa seule responsabilité. L’Utilisateur
                s’engage à ne pas mettre en ligne de contenus pouvant porter atteinte aux intérêts de tierces
                personnes. Tout recours en justice engagé par un tiers lésé contre le site sera pris en charge
                par l’Utilisateur. <br>

                Le contenu de l’Utilisateur peut être à tout moment et pour n’importe quelle raison supprimé ou
                modifié par le site. L’Utilisateur ne reçoit aucune justification et notification préalablement
                à la suppression ou à la modification du contenu Utilisateur. <br>
            </p>
            <h3 class="h5 mt-3 mb-3">ARTICLE 6 : Données personnelles</h3>
            <p class="text-justify">
                Les informations demandées à l’inscription au site sont nécessaires et obligatoires pour la
                création du compte de l’Utilisateur. En particulier, l’adresse électronique pourra être utilisée
                par le site pour l’administration, la gestion et l’animation du service. <br>

                Le site assure à l’Utilisateur une collecte et un traitement d’informations personnelles dans le
                respect de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à
                l’informatique, aux fichiers et aux libertés. Le site est déclaré à la CNIL sous le numéro
                [numéro]. <br>

                En vertu des articles 39 et 40 de la loi en date du 6 janvier 1978, l’Utilisateur dispose d’un
                droit d’accès, de rectification, de suppression et d’opposition de ses données personnelles.
                L’Utilisateur exerce ce droit via : <br>
            </p>

            <div class="integration-feature-info mt-1">
                <ul class="content-list list-unstyled">
                    <li>
                        son espace personnel ;
                    </li>
                    <li>
                        un formulaire de contact ;
                    </li>
                    <li>
                        par mail à contact@askano.fr;
                    </li>
                    <li>
                        par voie postale au 6 rue Musset 75016, Paris.
                    </li>
                </ul>
            </div>

            <h3 class="h5 mt-3 mb-3">ARTICLE 7 : Responsabilité et force majeure</h3>
            <p class="text-justify">
                Les sources des informations diffusées sur le site sont réputées fiables. Toutefois, le site se
                réserve la faculté d’une non-garantie de la fiabilité des sources. Les informations données sur
                le site le sont à titre purement informatif. Ainsi, l’Utilisateur assume seul l’entière
                responsabilité de l’utilisation des informations et contenus du présent site. <br>

                L’Utilisateur s’assure de garder son mot de passe secret. Toute divulgation du mot de passe,
                quelle que soit sa forme, est interdite. <br>

                L’Utilisateur assume les risques liés à l’utilisation de son identifiant et mot de passe. Le
                site décline toute responsabilité. <br>

                Tout usage du service par l’Utilisateur ayant directement ou indirectement pour conséquence des
                dommages doit faire l’objet d’une indemnisation au profit du site. <br>

                Une garantie optimale de la sécurité et de la confidentialité des données transmises n’est pas
                assurée par le site. Toutefois, le site s’engage à mettre en œuvre tous les moyens nécessaires
                afin de garantir au mieux la sécurité et la confidentialité des données. <br>

                La responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible
                et insurmontable d’un tiers. <br>
            </p>
            <h3 class="h5 mt-3 mb-3">ARTICLE 8 : Liens hypertextes</h3>
            <p class="text-justify">
                De nombreux liens hypertextes sortants sont présents sur le site, cependant les pages web où
                mènent ces liens n’engagent en rien la responsabilité de Askano qui n’a
                pas le contrôle de ces liens. <br>

                L’Utilisateur s’interdit donc à engager la responsabilité du site concernant le contenu et les
                ressources relatives à ces liens hypertextes sortants. <br>
            </p>

            <h3 class="h5 mt-3 mb-3">ARTICLE 9 : Évolution du contrat</h3>
            <p class="text-justify">
                Le site se réserve à tout moment le droit de modifier les clauses stipulées dans le présent
                contrat.
            </p>

            <h3 class="h5 mt-3 mb-3">ARTICLE 10 : Durée</h3>
            <p class="text-justify">
                La durée du présent contrat est indéterminée. Le contrat produit ses effets à l’égard de
                l’Utilisateur à compter de l’utilisation du service.
            </p>

            <h3 class="h5 mt-3 mb-3">ARTICLE 11 : Droit applicable et juridiction compétente</h3>
            <p class="text-justify">
                La législation française s’applique au présent contrat. En cas d’absence de résolution amiable
                d’un litige né entre les parties, seul le tribunal de Paris sont compétents. <br>

                Éventuellement
            </p>

            <h3 class="h5 mt-3 mb-3">ARTICLE 12 : Publication par l’Utilisateur</h3>
            <p class="text-justify">
                Le site permet aux membres de publier des commentaires <br>

                Dans ses publications, le membre s’engage à respecter les règles de la Netiquette et les règles
                de droit en vigueur. <br>

                Le site exerce une modération apriori sur les publications et se réserve le droit de refuser
                leur mise en ligne, sans avoir à s’en justifier auprès du membre. <br>

                Le membre reste titulaire de l’intégralité de ses droits de propriété intellectuelle. Mais en
                publiant une publication sur le site, il cède à la société éditrice le droit non exclusif et
                gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sa publication,
                directement ou par un tiers autorisé, dans le monde entier, sur tout support (numérique ou
                physique), pour la durée de la propriété intellectuelle. Le Membre cède notamment le droit
                d’utiliser sa publication sur internet et sur les réseaux de téléphonie mobile. <br>

                La société éditrice s’engage à faire figurer le nom du membre à proximité de chaque utilisation
                de sa publication. <br>
            </p>
            <h3 class="h5 mt-3 mb-3">ARTICLE 13 : Protection des données</h3>
            <p class="text-justify">
            <h3 class="h5 mt-3 mb-3">Politique de protection des données à caractère personnel </h3>

            Lors de votre navigation sur notre site, vous êtes amenés à nous communiquer des données
            personnelles. Nous vous remercions de votre confiance et tenons à vous informer ici sur
            l’utilisation de vos données ainsi que sur vos droits. <br>

            <h3 class="h5 mt-3 mb-3">Le responsable de traitement</h3>

            Le responsable de traitement des données à caractère personnel est la société SASU
            Askano dont vous trouverez les coordonnées dans les mentions légales. <br>

            <h3 class="h5 mt-3 mb-3">Formalités CNIL</h3>

            [Le traitement de données à caractère personnel effectué sur notre site a fait l’objet d’une
            déclaration à la Commission Nationale Informatique et Libertés]. <br>

            <h3 class="h5 mt-3 mb-3">Finalités de la collecte et du traitement des données</h3>

            Les données personnelles collectées sur notre site sont utilisées pour réaliser le traitement des
            commandes et gérer la relation commerciale (livraisons, factures, service après-vente). <br>
            Nous pouvons également utiliser vos données à des fins publicitaires, soit après avoir recueilli
            votre consentement exprès, soit dans les limites autorisées par la loi. Nous sommes également
            susceptibles d’utiliser vos données pour satisfaire le cas échéant à nos obligations légales et/ou
            réglementaires. <br>

            <h3 class="h5 mt-3 mb-3">Destinataires des données à caractère personnel</h3>

            L es destinataires de vos données à caractère personnel collectées sur notre site sont en tout
            premier lieu nous-mêmes pour le traitement de vos commandes et la gestion de la relation client.
            D’autres destinataires de vos données personnelles sont, le cas échéant, nos prestataires de moyens
            de paiement ou de sécurisation des paiements, nos prestataires de livraison, nos partenaires
            commerciaux. Dans le cas où cela est exigé par la loi, votre consentement est recueilli ou une
            possibilité de refus vous est aménagée avant toute transmission de données. <br>

            <h3 class="h5 mt-3 mb-3">Vos Droits</h3>

            Il est rappelé que la personne dont les données à caractère personnel sont traitées bénéficie des
            droits d’accès, de rectification et d’opposition au traitement de ses données à caractère personnel.
            <br>
            Vous pouvez exercer ces droits en nous envoyant un message via le formulaire de contact. <br>

            <h3 class="h5 mt-3 mb-3">Cookies</h3>

            Pour assurer le bon fonctionnement de ce site, nous devons parfois enregistrer de petits fichiers de
            données sur l’équipement de nos utilisateurs. La plupart des grands sites web font de même. <br>

            <h3 class="h5 mt-3 mb-3">Qu’est ce qu’un cookie ?</h3>

            Un cookie est un petit fichier texte que les sites web sauvegardent sur votre ordinateur ou appareil
            mobile lorsque vous les consultez. Il permet à ces sites de mémoriser vos actions et préférences
            (nom d’utilisateur, langue, taille des caractères et autres paramètres d’affichage) pendant un temps
            donné, pour que vous n’ayez pas à ré-indiquer ces informations à chaque fois vous consultez ces
            sites ou naviguez d’une page à une autre. <br>

            <h3 class="h5 mt-3 mb-3">Comment contrôler les cookies ?</h3>

            Vous pouvez contrôler et/ou supprimer des cookies comme vous le souhaitez. Pour en savoir plus,
            consultez <a href="www.cnil.fr" target="_blank">www.cnil.fr</a>. Vous avez la possibilité de
            supprimer tous les cookies déjà stockés sur votre ordinateur et de configurer la plupart des
            navigateurs pour qu’ils les bloquent. Toutefois, dans ce cas, vous devrez peut-être indiquer
            vous-mêmes certaines préférences chaque fois que vous vous rendrez sur un site, et certains services
            et fonctionnalités risquent de ne pas être accessibles. <br>

            </p>
            '
        ]);
    }
}
