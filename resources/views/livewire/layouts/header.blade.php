<header class="border-b shadow">
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="{{ route('home', app()->getLocale()) }}" class="flex items-center">
                <img src="/images/logo.svg" class="mr-3 h-10" alt="Learn Asan"/>
            </a>
            <div class="flex items-center lg:order-2">
                <button type="button" data-dropdown-toggle="language-dropdown-menu"
                        class="flex justify-center align-center items-center py-2 pr-4 pl-3 text-gray-700 hover:bg-transparent lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 transition lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                    <img
                        src="/images/{{ app()->getLocale() == 'fa' ? 'iran-flag-icon.svg' : 'united-states-flag-icon.svg' }}"
                        alt="iran flag" class="w-8 rounded">
                </button>
                <!-- Dropdown -->
                <div
                    class="z-50 hidden my-5 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-lg dark:bg-gray-700"
                    id="language-dropdown-menu">
                    @php
                        require_once app_path('Helpers/CustomHelpers.php');
                    @endphp
                    <ul class="py-2 font-medium">
                        <li>
                            @if(app()->getLocale() == 'en')
                                {!! en() !!}
                            @else
                                {!! ir() !!}
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'en')
                                {!! ir() !!}
                            @else
                                {!! en() !!}
                            @endif
                        </li>
                    </ul>
                </div>
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
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:mt-0">
                    <li>
                        <a href="{{ route('home', app()->getLocale()) }}"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 transition lg:px-5 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">@lang('messages.home')</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 transition lg:px-5 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">@lang('messages.test')</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 transition lg:px-5 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">@lang('messages.test')</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 transition lg:px-5 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">@lang('messages.test')</a>
                    </li>
                    <li class="mt-3 lg:mt-2">
                        @guest
                            @if(\Illuminate\Support\Facades\Route::has('login'))
                                <a href="{{ route('login', app()->getLocale()) }}"
                                   class="text-gray-800 dark:text-white border border-gray-300 hover:bg-gray-50 transition focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-3 lg:px-3 py-1 lg:py-1 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">@lang('messages.login')
                                    <i
                                        class="fa-solid fa-right-to-bracket ml-1 mr-1"
                                        style="transform: translateY(2px)"></i></a>
                            @endif
                            @if(\Illuminate\Support\Facades\Route::has('register'))
                                <a href="{{ route('register', app()->getLocale()) }}"
                                   class="text-white bg-purple-700 border border-purple-700 transition hover:bg-purple-800 transition focus:ring-4 focus:ring-purple-300 transition font-medium rounded-lg text-sm px-3 lg:px-3 py-1 lg:py-1 mr-2 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">@lang('messages.register')
                                    <i
                                        class="fa-solid fa-user-plus ml-1 mr-1"></i></a>
                            @endif
                        @else
                            <a href="{{ route('dashboard.home', app()->getLocale()) }}"
                               class="text-white bg-purple-700 transition hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">
                                @lang('messages.dashboard')
                                <i class="fa-regular fa-user ml-1 mr-1"></i>
                            </a>
                            <livewire:auth.logout/>
                        @endguest
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
