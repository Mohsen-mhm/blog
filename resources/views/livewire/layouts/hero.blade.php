<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div
            class="w-full lg:col-span-7 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#" class="relative text-center transition">
                <img class="p-2 rounded-t-lg transition" src="/images/img.png" alt="post image"/>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-800 hover:to-gray-900 transition rounded-lg"></div>
                <div class="px-5 pb-5 absolute" style="transform: translateY(-100px)">
                    <a href="#">
                        <h5 class="text-lg font-semibold tracking-tight truncate text-white dark:text-white">Apple Watch
                            Series 7 GPS, Aluminium Case, Starlight Sport, Starlight Sport, Starlight Sport</h5>
                    </a>
                    <div class="flex items-center justify-between mt-3">
                        <span class="text-lg font-bold text-white dark:text-white"><i class="fa-solid fa-tag fa-lg text-yellow-300"></i>$599</span>
                    </div>
                </div>
            </a>
        </div>
        <div
            class="mr-auto place-self-center lg:col-span-5 md:w-full md:flex md:flex-col md:justify-center md:items-center sm:w-full sm:flex sm:flex-col sm:justify-center sm:items-center mt-5 lg:mt-0">
            <p class="mb-3 text-sm font-normal text-gray-500 lg:text-lg dark:text-gray-400">@lang('messages.newsletters')</p>
            <div class="flex justify-center align-center items-center text-center">
                <i class="fa-solid fa-arrow-down mx-2 fa-lg text-purple-700 pb-2"></i>
                <p class="mb-2 text-sm font-normal text-gray-500 lg:text-sm dark:text-gray-400">@lang('messages.newsletters.join')</p>
                <i class="fa-solid fa-arrow-down mx-2 fa-lg text-purple-700 pb-2"></i>
            </div>
            <form class="w-full max-w-md mx-auto">
                <label for="default-email" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Email
                    sign-up</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </div>
                    <input type="email" id="default-email"
                           class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
                           required>
                    <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800 transition">
                        @lang('messages.register')
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
