<?php

// return Iran flag and language name for header
function ir()
{
    return "<a href='" . route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'fa']) . "'
                class='block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white'
                role='menuitem'>
                <div class='inline-flex items-center'>
                    <img src='/images/iran-flag-icon.svg' alt='iran flag'
                        class='w-6 " . (app()->getLocale() == 'en' ? 'mr-2' : 'ml-2') . " rounded'>
                    " . __('messages.persian') . "
                </div>
            </a>";
}

// return US flag and language name for header
function en()
{
    return "<a href='" . route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'en']) . "'
                class='block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white'
                role='menuitem'>
                <div class='inline-flex items-center'>
                    <img src='/images/united-states-flag-icon.svg' alt='iran flag'
                        class='w-6 " . (app()->getLocale() == 'en' ? 'mr-2' : 'ml-2') . " rounded'>
                    " . __('messages.english') . "
                </div>
            </a>";
}

?>
