<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Dark/Light Mode</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans text-[#1b1b18] min-h-screen relative overflow-x-hidden" id="body">
    <div class="navbar bg-base-100 shadow-sm font-outfit text-[13px] leading-[20px] px-8 fixed z-10">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden dark:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a>Item 1</a></li>
                    <li>
                        <a>Parent</a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl font-sans dark:text-white">daisyUI</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 dark:text-white">
                <li><a>Item 1</a></li>
                <li>
                    <details>
                        <summary>Parent</summary>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
        <div class="navbar-end pr-4">
            <label class="btn btn-circle bg-white dark:bg-[#1D232A] dark:btn-ghost swap swap-rotate mx-4">
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox" id="theme-toggle" class="toggle-theme" />

                <!-- sun icon -->
                <svg class="swap-off h-5 w-5 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                </svg>

                <!-- moon icon -->
                <svg class="swap-on h-5 w-5 fill-current text-purple-900" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                </svg>
            </label>
            <button class="btn bg-white rounded-3xl dark:bg-[#1D232A] dark:btn-ghost dark:text-white">Login</button>
        </div>

    </div>

    <div class="hero min-h-screen"
        style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
        <div class="hero-overlay"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                <p class="mb-5">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>

    <div class="container mx-auto min-h-screen">
        <div class="flex flex-wrap justify-center py-4 gap-8">
            <!-- Left Side: Modal Button -->
            <div class="flex-1 min-w-[300px] max-w-xl flex justify-center items-center">
                <button class="btn" onclick="product_modal.showModal()">Open Product Modal</button>

                <!-- Modal -->
                <dialog id="product_modal" class="modal">
                    <div class="modal-box max-w-5xl bg-white dark:bg-[#1D232A]">
                        <div class="flex flex-col lg:flex-row gap-8">
                            <!-- KIRI: Gambar Produk -->
                            <div class="basis-1/2 w-full flex flex-col items-center relative">
                                <!-- Gambar utama -->
                                <img id="mainProductImage" src="https://picsum.photos/id/100/400/500"
                                    alt="Product Image"
                                    class="rounded-sm w-full max-w-md h-full z-10 border border-gray-200 shadow-sm object-cover">

                                <!-- Thumbnail menempel di bawah gambar besar -->
                                <div class="flex flex-wrap justify-center gap-3.5 -mt-12 z-20 px-4 py-2">
                                    <img src="https://picsum.photos/id/100/60/60"
                                        data-full="https://picsum.photos/id/100/400/500"
                                        class="thumbnail active w-14 h-16 rounded-sm border border-gray-200 shadow-sm bg-white ring-2 ring-purple-400 transition-all duration-200 cursor-pointer">
                                    <img src="https://picsum.photos/id/101/60/60"
                                        data-full="https://picsum.photos/id/101/400/500"
                                        class="thumbnail w-14 h-16 rounded-sm border border-gray-200 shadow-sm bg-white hover:ring-2 hover:ring-purple-400 transition-all duration-200 cursor-pointer">
                                    <img src="https://picsum.photos/id/102/60/60"
                                        data-full="https://picsum.photos/id/102/400/500"
                                        class="thumbnail w-14 h-16 rounded-sm border border-gray-200 shadow-sm bg-white hover:ring-2 hover:ring-purple-400 transition-all duration-200 cursor-pointer">
                                    <img src="https://picsum.photos/id/103/60/60"
                                        data-full="https://picsum.photos/id/103/400/500"
                                        class="thumbnail w-14 h-16 rounded-sm border border-gray-200 shadow-sm bg-white hover:ring-2 hover:ring-purple-400 transition-all duration-200 cursor-pointer">
                                    <img src="https://picsum.photos/id/104/60/60"
                                        data-full="https://picsum.photos/id/104/400/500"
                                        class="thumbnail w-14 h-16 rounded-sm border border-gray-200 shadow-sm bg-white hover:ring-2 hover:ring-purple-400 transition-all duration-200 cursor-pointer">
                                </div>
                            </div>

                            <!-- KANAN: Detail Produk -->
                            <div class="basis-1/2 w-full">
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-xl font-semibold text-purple-600">$78.00</span>
                                    <span class="line-through text-gray-400">$88.00</span>
                                </div>
                                <h2 class="text-2xl font-bold text-gray-700">Classy Modern Smart Watch</h2>
                                <p class="mt-2 text-gray-600 text-sm">
                                    I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                    pain was born give me someone some thing to be major graduate of my greatness of my
                                    kind...
                                </p>
                                <div class="mt-4 text-sm text-gray-600 space-y-1">
                                    <div class="flex space-x-4">
                                        <div><span class="font-semibold">Type:</span></div>
                                        <div><span class="font-semibold">Model Number:</span></div>
                                    </div>
                                    <div class="flex space-x-4">
                                        <div>Watch</div>
                                        <div>Forerunner 290XT</div>
                                    </div>
                                </div>

                                <!-- Color Pilihan -->
                                <div class="mt-4">
                                    <p class="font-semibold">Color</p>
                                    <div class="flex gap-2 mt-2">
                                        <div
                                            class="w-6 h-6 rounded-full bg-purple-500 border-2 border-gray-300 cursor-pointer">
                                        </div>
                                        <div
                                            class="w-6 h-6 rounded-full bg-black border-2 border-gray-300 cursor-pointer">
                                        </div>
                                    </div>
                                </div>

                                <!-- Size Pilihan -->
                                <div class="mt-6">
                                    <p class="font-semibold">Size</p>
                                    <div class="flex gap-2 mt-2">
                                        <button class="btn btn-sm px-4">XS</button>
                                        <button class="btn btn-sm px-4">SM</button>
                                        <button class="btn btn-sm px-4">L</button>
                                        <button class="btn btn-sm px-4">XL</button>
                                    </div>
                                </div>

                                <!-- Quantity dan Add to Cart -->
                                <div class="mt-6 flex items-center gap-4">
                                    <div class="flex items-center border-2 border-gray-200 rounded-sm overflow-hidden">
                                        <button
                                            class="px-4 py-2 text-xl text-purple-600 bg-gray-50 hover:bg-gray-200 transition-colors duration-200 rounded-l-md">−</button>
                                        <input type="number" value="1"
                                            class="w-12 text-center border-none outline-none py-2 bg-gray-50">
                                        <button
                                            class="px-4 py-2 text-xl text-purple-600 bg-gray-50 hover:bg-gray-200 transition-colors duration-200 rounded-r-md">+</button>
                                    </div>
                                    <button
                                        class="btn btn-primary px-6 bg-purple-500 text-white hover:bg-purple-600 rounded-sm shadow-none border-0">Add
                                        to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Modal -->
                        <div class="modal-action">
                            <form method="dialog">
                                <button class="btn">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </div>

            <!-- Right Side: Swiper dengan Card -->
            <div class="flex-1 min-w-[350px] max-w-xl px-4">
                <div class="swiper mySwiper w-full py-8 lg:px-0">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden w-full max-w-sm mx-auto">
                                <div class="h-48 overflow-hidden">
                                    <img src="https://picsum.photos/id/101/400/300" class="w-full h-full object-cover"
                                        alt="Product image">
                                </div>
                                <div class="p-5">
                                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Smart Watch Pro
                                    </h3>
                                    <div class="flex items-center mt-1">
                                        <span class="text-purple-600 font-medium">$149.99</span>
                                        <span class="ml-2 text-sm text-gray-400 line-through">$199.99</span>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Advanced smartwatch with
                                        health tracking and notifications</p>
                                    <div class="mt-4 flex justify-between items-center">
                                        <div class="flex">
                                            <div class="rating rating-xs rating-half">
                                                <input type="radio" name="rating-11" class="rating-hidden" />
                                                <input type="radio" name="rating-11"
                                                    class="mask mask-star-2 mask-half-1 bg-orange-500"
                                                    aria-label="0.5 star" />
                                                <input type="radio" name="rating-11"
                                                    class="mask mask-star-2 mask-half-2 bg-orange-500"
                                                    aria-label="1 star" />
                                                <input type="radio" name="rating-11"
                                                    class="mask mask-star-2 mask-half-1 bg-orange-500"
                                                    aria-label="1.5 star" />
                                                <input type="radio" name="rating-11"
                                                    class="mask mask-star-2 mask-half-2 bg-orange-500"
                                                    aria-label="2 star" />
                                                <input type="radio" name="rating-11"
                                                    class="mask mask-star-2 mask-half-1 bg-orange-500"
                                                    aria-label="2.5 star" />
                                                <input type="radio" name="rating-11"
                                                    class="mask mask-star-2 mask-half-2 bg-orange-500"
                                                    aria-label="3 star" />
                                                <input type="radio" name="rating-11"
                                                    class="mask mask-star-2 mask-half-1 bg-orange-500"
                                                    aria-label="3.5 star" />
                                                <input type="radio" name="rating-11"
                                                    class="mask mask-star-2 mask-half-2 bg-orange-500"
                                                    aria-label="4 star" />
                                                <input type="radio" name="rating-11"
                                                    class="mask mask-star-2 mask-half-1 bg-orange-500"
                                                    aria-label="4.5 star" checked="checked" />
                                                <input type="radio" name="rating-11"
                                                    class="mask mask-star-2 mask-half-2 bg-orange-500"
                                                    aria-label="5 star" />
                                            </div>
                                            <span class="ml-2 text-sm text-gray-500">4.5 (120)</span>
                                        </div>
                                        <button
                                            class="bg-purple-500 hover:bg-purple-600 text-white px-3 py-1 rounded-sm text-sm">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden w-full max-w-sm mx-auto">
                                <div class="h-48 overflow-hidden">
                                    <img src="https://picsum.photos/id/102/400/300" class="w-full h-full object-cover"
                                        alt="Product image">
                                </div>
                                <div class="p-5">
                                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Wireless Earbuds
                                    </h3>
                                    <div class="flex items-center mt-1">
                                        <span class="text-purple-600 font-medium">$89.99</span>
                                        <span class="ml-2 text-sm text-gray-400 line-through">$129.99</span>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Premium noise cancelling
                                        wireless earbuds with long battery life</p>
                                    <div class="mt-4 flex justify-between items-center">
                                        <div class="flex">
                                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <span class="ml-1 text-sm text-gray-500">4.8 (240)</span>
                                        </div>
                                        <button
                                            class="bg-purple-500 hover:bg-purple-600 text-white px-3 py-1 rounded-sm text-sm">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden w-full max-w-sm mx-auto">
                                <div class="h-48 overflow-hidden">
                                    <img src="https://picsum.photos/id/103/400/300" class="w-full h-full object-cover"
                                        alt="Product image">
                                </div>
                                <div class="p-5">
                                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Bluetooth
                                        Speaker</h3>
                                    <div class="flex items-center mt-1">
                                        <span class="text-purple-600 font-medium">$69.99</span>
                                        <span class="ml-2 text-sm text-gray-400 line-through">$99.99</span>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Portable waterproof
                                        speaker with 24-hour battery life</p>
                                    <div class="mt-4 flex justify-between items-center">
                                        <div class="flex">
                                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <span class="ml-1 text-sm text-gray-500">4.6 (180)</span>
                                        </div>
                                        <button
                                            class="bg-purple-500 hover:bg-purple-600 text-white px-3 py-1 rounded-sm text-sm">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden w-full max-w-sm mx-auto">
                                <div class="h-48 overflow-hidden">
                                    <img src="https://picsum.photos/id/104/400/300" class="w-full h-full object-cover"
                                        alt="Product image">
                                </div>
                                <div class="p-5">
                                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Fast Charger
                                    </h3>
                                    <div class="flex items-center mt-1">
                                        <span class="text-purple-600 font-medium">$29.99</span>
                                        <span class="ml-2 text-sm text-gray-400 line-through">$39.99</span>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">65W GaN charger with
                                        multiple ports for all your devices</p>
                                    <div class="mt-4 flex justify-between items-center">
                                        <div class="flex">
                                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <span class="ml-1 text-sm text-gray-500">4.7 (320)</span>
                                        </div>
                                        <button
                                            class="bg-purple-500 hover:bg-purple-600 text-white px-3 py-1 rounded-sm text-sm">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Optional Pagination -->
                    <div class="swiper-pagination mt-4"></div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer sm:footer-horizontal bg-base-200 text-base-content p-10">
        <nav>
            <h6 class="footer-title">Services</h6>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
        </nav>
        <nav>
            <h6 class="footer-title">Company</h6>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </nav>
        <nav>
            <h6 class="footer-title">Legal</h6>
            <a class="link link-hover">Terms of use</a>
            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Cookie policy</a>
        </nav>
        <nav>
            <h6 class="footer-title">Services</h6>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
        </nav>
    </footer>
    <footer
        class="footer bg-base-300 text-base-content border-base-300 border-t px-10 pt-4 lg:py-4 lg:flex lg:justify-between">
        <aside class="grid-flow-col items-center">
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd" clip-rule="evenodd" class="fill-current">
                <path
                    d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
                </path>
            </svg>
            <p>
                ACME Industries Ltd.
                <br />
                Providing reliable tech since 1992
            </p>
        </aside>
        <nav class="">
            <div class="grid grid-flow-col gap-4 pb-4 lg:py-4">
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg>
                </a>
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                        </path>
                    </svg>
                </a>
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg>
                </a>
            </div>
        </nav>
    </footer>



    <!-- Script untuk Ganti Gambar Utama -->
    <script>
        // Saat halaman dimuat
        document.addEventListener("DOMContentLoaded", function() {
            const thumbnails = document.querySelectorAll(".thumbnail");
            const mainImage = document.getElementById("mainProductImage");

            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener("click", function() {
                    // Ganti gambar utama
                    mainImage.src = this.dataset.full;

                    // Hapus highlight dari semua thumbnail
                    thumbnails.forEach(t => t.classList.remove("ring-2", "ring-purple-400",
                        "active"));

                    // Tambahkan highlight ke thumbnail yang dipilih
                    this.classList.add("ring-2", "ring-purple-400", "active");
                });
            });

            // Set default gambar utama dari thumbnail pertama
            const firstThumbnail = document.querySelector(".thumbnail");
            if (firstThumbnail) {
                mainImage.src = firstThumbnail.dataset.full;
            }
        });
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the toggle element
            const themeToggle = document.getElementById('theme-toggle');

            // Check if theme is already set in localStorage
            const currentTheme = localStorage.getItem('theme') || 'dark';
            document.documentElement.setAttribute('data-theme', currentTheme);

            // Set the toggle state based on the current theme
            themeToggle.checked = currentTheme === 'light';

            // Toggle theme when checkbox changes
            themeToggle.addEventListener('change', function() {
                const theme = this.checked ? 'light' : 'dark';
                document.documentElement.setAttribute('data-theme', theme);
                localStorage.setItem('theme', theme);
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Swiper(".mySwiper", {
                effect: "cards", // Menggunakan efek cards
                grabCursor: true, // Mengaktifkan kursor grab
                slidesPerView: 1, // Menampilkan 3 slide
                spaceBetween: 100, // Jarak antar slide        
                cardsEffect: {
                    slideShadows: false, // Menonaktifkan bayangan
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        });
    </script>


</body>

</html>
