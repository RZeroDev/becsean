<!-- sidebar-wrapper -->
<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="{{ route('index') }}" target="_blank"><img
                    src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/logo-white.png') }}"
                    height="24" width="150" alt="Logo Askano"></a>
        </div>

        <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}"><i class="uil uil-chart-line me-2"></i>Tableau de Bord</a>
            </li>
            <li class="{{ request()->routeIs('index') ? 'active' : '' }}">
                <a href="{{ route('index') }}" target="blank"><i class="uil uil-chart-line me-2"></i>Visiter le site</a>
            </li>
            <li class="sidebar-dropdown {{ request()->is('services*') || request()->is('sectionStatus*') || request()->routeIs('testimonialHomes*') || request()->is('heros*') || request()->is('aboutHomes*') || request()->is('testimonials*') || request()->is('workAreas*') || request()->is('authorSections*') || request()->is('actualities*') || request()->is('partners*') || request()->is('servieHomes*')  ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <i class="uil uil-invoice me-2"></i>Page d'acceuil
                </a>
                <div class="sidebar-submenu {{ request()->is('sectionStatus*') || request()->is('services*') || request()->routeIs('testimonialHomes*') || request()->is('heros*') || request()->is('aboutHomes*') || request()->is('testimonials*') || request()->is('workAreas*') || request()->is('authorSections*') || request()->is('actualities*') || request()->is('partners*') || request()->is('servieHomes*')  ? 'block' : '' }}">
                    <ul>
                        <li class="{{ request()->routeIs('heros*') ? 'active' : '' }}">
                            <a href="{{ route('heros.index') }}">Héro</a>
                        </li>
                        <li class="{{ request()->routeIs('services*') || request()->routeIs('servieHomes*') ? 'active' : '' }}">
                            <a href="{{ route('services.index') }}">Services</a>
                        </li>
                        <li class="{{ request()->routeIs('aboutHomes*') ? 'active' : '' }}">
                            <a href="{{ route('aboutHomes.index') }}">A propos</a>
                        </li>
                        <li class="{{ request()->routeIs('testimonials*') || request()->routeIs('testimonialHomes*') ? 'active' : '' }}">
                            <a href="{{ route('testimonials.index') }}">Témoignages</a>
                        </li>
                        <li class="{{ request()->routeIs('workAreas*') ? 'active' : '' }}">
                            <a href="{{ route('workAreas.index') }}">Processus de travail</a>
                        </li>
                        <li class="{{ request()->routeIs('authorSections*') ? 'active' : '' }}">
                            <a href="{{ route('authorSections.index') }}">Bloc contact</a>
                        </li>
                        <li class="{{ request()->routeIs('actualities*') ? 'active' : '' }}">
                            <a href="{{ route('actualities.index') }}">Actualités</a>
                        </li>
                        <li class="{{ request()->routeIs('partners*') ? 'active' : '' }}">
                            <a href="{{ route('partners.index') }}">Partenaires</a>
                        </li>
                        <li class="{{ request()->routeIs('sectionStatus*') ? 'active' : '' }}">
                            <a href="{{ route('sectionStatus.index') }}">Gestion des sections</a>
                        </li>
                    </ul>
                </div>
            </li>
           
            @hasanyrole('super-admin|admin|dev')
                <li class="sidebar {{ request()->is('aboutPolitiques*') ? 'active' : '' }}">
                    <a href="{{ route('aboutPolitiques.index') }}">
                        <i class="uil uil-apps me-2"></i>Page à propos
                    </a>
                </li>
                <li class="sidebar {{ request()->is('servicePages*') ? 'active' : '' }}">
                    <a href="{{ route('servicePages.index') }}">
                        <i class="uil uil-apps me-2"></i>Page services
                    </a>
                </li>
                <li class="sidebar {{ request()->is('actualitiesPages*') ? 'active' : '' }}">
                    <a href="{{ route('actualitiesPages.index') }}">
                        <i class="uil uil-apps me-2"></i>Page actualités
                    </a>
                </li>
                <li class="sidebar-dropdown {{ request()->is('emails*') || request()->is('phones*') ? 'active' : '' }}">
                    <a href="javascript:void(0)">
                        <i class="uil uil-apps me-2"></i>Contacts
                    </a>
                    <div class="sidebar-submenu {{ request()->is('emails*') || request()->is('phones*') ? 'block' : '' }}">
                        <ul>
                            <li class="{{ request()->routeIs('emails.index') ? 'active' : '' }}">
                                <a href="{{ route('emails.index') }}">Email</a>
                            </li>
                            <li class="{{ request()->routeIs('phones.index') ? 'active' : '' }}">
                                <a href="{{ route('phones.index') }}">Téléphone</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Paramètres -->
                <li class="sidebar-dropdown {{ request()->is('users*') ? 'active' : '' }}">
                    <a href="javascript:void(0)">
                        <i class="uil uil-user me-2"></i>Gestion des utilisateurs
                    </a>
                    <div class="sidebar-submenu {{ request()->is('users*') ? 'block' : '' }}">
                        <ul>
                            @hasanyrole('super-admin|admin|dev')
                                <li class="{{ request()->routeIs('users.create') ? 'active' : '' }}">
                                    <a href="{{ route('users.create') }}"
                                        style="color: {{ Route::currentRouteName() == 'users.create' ? 'white' : 'grey' }} !important;">Ajouter</a>
                                </li>
                            @endhasanyrole
                            <li class="{{ request()->routeIs('users.index') ? 'active' : '' }}">
                                <a href="{{ route('users.index') }}">Liste</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar {{ request()->is('cguPages*') ? 'active' : '' }}">
                    <a href="{{ route('cguPages.index') }}">
                        <i class="uil uil-apps me-2"></i>Page CGU
                    </a>
                </li>
                <li class="sidebar {{ request()->is('legalPages*') ? 'active' : '' }}">
                    <a href="{{ route('legalPages.index') }}">
                        <i class="uil uil-apps me-2"></i>Page Mention Légal
                    </a>
                </li>
                <li class="{{ request()->routeIs('settings.index') ? 'active' : '' }}">
                    <a href="{{ route('settings.index') }}">
                        <i class="uil uil-chart-line me-2"></i>Informations générales
                    </a>
                </li>
                <li class="sidebar-dropdown {{ request()->routeIs('analytics*')  || request()->routeIs('automatings*') ? 'active' : '' }}">
                    <a href="javascript:void(0)">
                        <i class="uil uil-chart-line me-2"></i>Paramètres
                    </a>
                    <div class="sidebar-submenu {{ request()->is('automatings*') || request()->is('analytics*')   ? 'block' : '' }}">
                        <ul>
                            <li class="{{ request()->routeIs('automatings.index') ? 'active' : '' }}">
                                <a href="{{ route('automatings.index') }}">Réseaux sociaux</a>
                            </li>
                            <li class="{{ request()->routeIs('analytics1*')  ? 'active' : '' }}">
                                <a href="{{ route('analytics1') }}">Google Analytics</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="{{ request()->routeIs('seos*') ? 'active' : '' }}">
                    <a href="{{ route('seos.index') }}">
                        <i class="uil uil-chart-line me-2"></i>Réferencement SEO
                    </a>
                </li>
            @endhasanyrole

            <li
                class="relative lg:m-8 m-6 px-8 py-10 rounded-lg bg-gradient-to-b to-transparent from-slate-800 text-center">
                <span class="relative z-10">
                    <span
                        class="text-xl font-bold h5 text-white">{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</span>

                    <span class="text-slate-400 mt-3 mb-5 block">{{ Auth::user()->roles->first()->role }}</span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-gray-500/5 hover:bg-gray-500 border-gray-500/10 hover:border-gray-500 text-white rounded-md">
                            Déconnexion
                        </button>
                    </form>
                </span>

                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/images/shree-276.png') }}"
                    class="absolute top-1/2 -translate-y-1/2 start-0 end-0 mx-auto text-center h-40 w-40 z-0 opacity-5"
                    alt="">
            </li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
</nav>

<!-- sidebar-wrapper  -->
