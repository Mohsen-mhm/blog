<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-auto">
        <a href="{{ route('home', app()->getLocale()) }}"
           class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="h-16 mr-2" src="/images/logo.svg" alt="logo">
        </a>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    @lang('messages.register.account')
                </h1>
                <form class="space-y-4 md:space-y-6" wire:submit.prevent="register">
                    @csrf

                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('messages.name')</label>
                        <input type="text" name="name" id="name"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('user.name') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
                               placeholder="John" wire:model.debounce.750ms="user.name" required>
                        @error('user.name') <span class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('messages.username')</label>
                        <input type="text" name="username" id="username"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('user.username') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
                               placeholder="John" wire:model.debounce.750ms="user.username" required>
                        @error('user.username') <span class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('messages.email')</label>
                        <input type="email" name="email" id="email"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('user.email') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
                               placeholder="name@company.com" wire:model.debounce.750ms="user.email" required>
                        @error('user.email') <span class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('messages.password')</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                               wire:model.debounce.750ms="user.password"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('user.password') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
                               required>
                        @error('user.password') <span class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="password-confirm"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('messages.password.confirm')</label>
                        <input type="password" name="password_confirmation" id="password-confirm"
                               placeholder="••••••••" wire:model.debounce.750ms="user.password_confirmation"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('user.password_confirmation') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
                               required>
                        @error('user.password_confirmation') <span class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox"
                                   class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-purple-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-purple-600 dark:ring-offset-gray-800"
                                   required>
                        </div>
                        <div class="ml-2 mr-2 text-sm">
                            <label for="terms" class="font-light text-gray-500 dark:text-gray-300"><a
                                    class="font-medium text-purple-600 hover:underline dark:text-purple-500"
                                    href="#">@lang('messages.accept.terms')</a></label>
                        </div>
                    </div>
                    <button type="submit"
                            class="w-full text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                        @lang('messages.register')
                    </button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        @lang('messages.have.account') <a href="{{ route('login', app()->getLocale()) }}"
                                                    class="font-medium text-purple-600 hover:underline dark:text-purple-500">@lang('messages.login')</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
