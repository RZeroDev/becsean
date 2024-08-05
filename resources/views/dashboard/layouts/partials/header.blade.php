   <!-- Start Page Content -->
   
            <main class="page-content bg-gray-50 dark:bg-slate-800">
                <!-- Top Header -->
                <div class="top-header">
                    <div class="header-bar flex justify-between">
                        <div class="flex items-center space-x-1">

                            <!-- show or close sidebar -->
                            <a id="close-sidebar" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-full" href="javascript:void(0)">
                                <i data-feather="menu" class="h-4 w-4"></i>
                            </a>
                            <!-- show or close sidebar -->
            
                        </div>

                        <ul class="list-none mb-0 space-x-1">
                            <!-- User/Profile Dropdown -->
                            <li class="dropdown inline-block relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                                    <span class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-full"><img src="{{ Auth::user()->avatar ? asset(FrontHelper::getEnvFolder() . Auth::user()->avatar) : asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/images/avatar.png')}}" class="rounded-full" alt=""></span>
                                    <span class="font-semibold text-[16px] ms-1 sm:inline-block hidden">{{ Auth::user()->firstname.' '.Auth::user()->lastname }}</span>
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <ul class="py-2 text-start">
                                        <li>
                                            <a href="{{ route('profile.edit') }}" class="block font-medium py-1 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><i class="uil uil-user me-2"></i>Profile</a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="block font-medium py-1 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white">
                                                    <i class="uil uil-sign-out-alt me-2"></i> Déconnexion
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li><!--end dropdown-->
                            <!-- User/Profile Dropdown -->
                        </ul>
                    </div>
                </div>
                <!-- Top Header -->