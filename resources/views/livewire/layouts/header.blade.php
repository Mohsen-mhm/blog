<header class="border-b shadow">
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="{{ route('home', app()->getLocale()) }}" class="flex items-center">
                <img src="/images/logo.png" class="mr-3 h-12" alt="Learn Asan"/>
            </a>
            <div class="flex items-center lg:order-2">
                @guest
                    @if(\Illuminate\Support\Facades\Route::has('login'))
                        <a href="{{ route('login', app()->getLocale()) }}"
                           class="text-gray-800 dark:text-white border border-gray-300 hover:bg-gray-50 transition focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">@lang('messages.login')
                            <i
                                class="fa-solid fa-right-to-bracket ml-1 mr-1"
                                style="transform: translateY(2px)"></i></a>
                    @endif
                    @if(\Illuminate\Support\Facades\Route::has('register'))
                        <a href="{{ route('register', app()->getLocale()) }}"
                           class="text-white bg-purple-700 transition hover:bg-purple-800 transition focus:ring-4 focus:ring-purple-300 transition font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">@lang('messages.register')
                            <i
                                class="fa-solid fa-user-plus ml-1 mr-1"></i></a>
                    @endif
                @else
                    <a href="#"
                       class="text-white bg-purple-700 transition hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">
                        @lang('messages.dashboard')
                        <i class="fa-regular fa-user ml-2 -mr-1"></i>
                    </a>
                    <livewire:auth.logout/>
                @endguest
                <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-white rounded bg-purple-700 transition lg:bg-transparent lg:text-purple-700 transition lg:p-0 dark:text-white"
                           aria-current="page">@lang('messages.home')</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 transition lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Company</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 transition lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Marketplace</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 transition lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 transition lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 transition lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                    <li>
                        <button type="button" data-dropdown-toggle="language-dropdown-menu"
                           class="flex justify-center align-center items-center py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 transition lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                            <img src="/images/iran-flag-icon.svg" alt="iran flag" class="w-8 rounded">
                        </button>
                        <!-- Dropdown -->
                        <div
                            class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                            id="language-dropdown-menu">
                            <ul class="py-2 font-medium" role="none">
                                <li>
                                    <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'en']) }}"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                       role="menuitem">
                                        <div class="inline-flex items-center">
                                            <img src="/images/united-states-flag-icon.svg" alt="iran flag"
                                                 class="w-6 mr-2 rounded">
                                            @lang('messages.english')
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'fa']) }}"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                       role="menuitem">
                                        <div class="inline-flex items-center">
                                            <img src="/images/iran-flag-icon.svg" alt="iran flag"
                                                 class="w-6 mr-2 rounded">
                                            @lang('messages.persian')
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <button data-collapse-toggle="mobile-menu-language-select" type="button"
                                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                aria-controls="mobile-menu-language-select" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
