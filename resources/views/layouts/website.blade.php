<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Type some info" />
    <meta name="author" content="Type name" />

    <title>Tailwind Ecommerce Kit</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!--  COMPONENT: HEADER -->
    <header class="bg-white py-3 border-b">
        <div class="container max-w-screen-xl mx-auto px-4">
            <div class="flex flex-wrap items-center">
                <!-- Brand -->
                <div class="flex-shrink-0 mr-5">
                    <a href="#"> <img src="images/logo.svg" height="38" alt="Brand" /> </a>
                </div>
                <!-- Brand .//end -->

                <!-- Search -->
                <div
                    class="flex flex-nowrap items-center w-full order-last md:order-none mt-5 md:mt-0 md:w-2/4 lg:w-2/4">
                    <input
                        class="flex-grow appearance-none border border-gray-200 bg-gray-100 rounded-md mr-2 py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400"
                        type="text" placeholder="Search">
                    <button type="button"
                        class="px-4 py-2 inline-block text-white border border-transparent bg-blue-600 rounded-md hover:bg-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="10" cy="10" r="7"></circle>
                            <line x1="21" y1="21" x2="15" y2="15"></line>
                        </svg>
                    </button>
                </div>
                <!-- Search .//end -->

                <!-- Actions -->
                <div class="flex items-center space-x-2 ml-auto">
                    <a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300"
                        href="#">
                        <i class="text-gray-400 w-5 fa fa-user"></i>
                        <span class="hidden lg:inline ml-1">Sign in</span>
                    </a>

                    <a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300"
                        href="#">
                        <i class="text-gray-400 w-5 fa fa-heart"></i>
                        <span class="hidden lg:inline ml-1">Wishlist</span>
                    </a>

                    <a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300"
                        href="#">
                        <i class="text-gray-400 w-5 fa fa-shopping-cart"></i>
                        <span class="hidden lg:inline ml-1">My cart</span>
                    </a>
                </div>
                <!-- Actions .//end -->

                <!-- mobile-only -->
                <div class="lg:hidden ml-2">
                    <button type="button"
                        class="bg-white p-3 inline-flex items-center rounded-md text-black hover:bg-gray-200 hover:text-gray-800 border border-transparent">
                        <span class="sr-only">Open menu</span>
                        <i class="fa fa-bars fa-lg"></i>
                    </button>
                </div>
                <!-- mobile-only //end  -->

            </div> <!-- flex grid //end -->
        </div> <!-- container //end -->
    </header>
    <nav class="border-b bg-gray-100">
        <div class="container max-w-screen-xl mx-auto px-4">
            <!-- Bottom -->
            <div class="hidden lg:flex flex-1 items-center py-1">
                <a class="px-3 py-2 rounded-md hover:bg-gray-200" href="#"> Category </a>
                <a class="px-3 py-2 rounded-md hover:bg-gray-200" href="#"> About </a>
                <a class="px-3 py-2 rounded-md hover:bg-gray-200" href="#"> Services </a>
                <a class="px-3 py-2 rounded-md hover:bg-gray-200" href="#"> Projects </a>
                <a class="px-3 py-2 rounded-md hover:bg-gray-200" href="#"> Offers </a>
                <a class="px-3 py-2 rounded-md hover:bg-gray-200" href="#"> Others </a>
            </div>
            <!-- Bottom //end -->
        </div> <!-- container //end -->
    </nav>
    <!--  COMPONENT: HEADER //END -->

    <!--  MAIN SECTION  -->
    <section class="pt-5">
        <div class="container max-w-screen-xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-5">
                <div class="md:col-span-3">
                    <!-- banner-main -->
                    <article class="bg-blue-500 h-96 p-10 lg:p-16 rounded">
                        <h1 class="text-3xl md:text-4xl text-white font-semibold">
                            Best products &amp; <br>brands in our store
                        </h1>
                        <p class="text-lg text-white font-normal mt-4 mb-6">
                            Trendy Products, Factory Prices, Excellent Service
                        </p>
                        <div>
                            <a class="px-4 py-2 inline-block font-semibold bg-yellow-500 text-white border border-transparent rounded-md hover:bg-yellow-600"
                                href="#">
                                Discover
                            </a>
                            <a class="px-4 py-2 inline-block font-semibold text-blue-600 border border-transparent rounded-md hover:bg-gray-100 bg-white"
                                href="#">
                                Learn more
                            </a>
                        </div>
                    </article>
                    <!-- banner-main end// -->
                </div>
                <div class="col-span-1">
                    <!-- banner-sm  -->
                    <article class="bg-yellow-500 rounded h-96"> </article>
                    <!-- banner-sm end// -->
                </div>
            </div>
        </div> <!-- container //end -->
    </section>
    <!--  MAIN SECTION //END -->

    <!-- SECTION-ICONMENU -->
    <section class="pt-10">
        <div class="container max-w-screen-xl mx-auto px-4">

            <nav class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-6 lg:grid-cols-8 gap-x-3 gap-y-6">
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/sofa.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Interior items </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/ball.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Sport and travel </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/diamond.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Jewellery </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/watch.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Accessories </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/car.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Automobiles </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/homeitem.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Home items </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/music.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Musical items </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/book.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Interior items </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/toy.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Kids toys </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/animal.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Pets, animals </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/shirt.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Men's shirts </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/shoe-man.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Men's shoes </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/phone.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Smartphones </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/fix.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Tools </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/education.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Education </p>
                </a>
                <a href="#" class="group">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-full bg-blue-100 group-hover:bg-blue-200">
                        <img width="32" height="32" src="images/icons/category-svg-blue/restaurant.svg">
                    </div>
                    <p class="text-center text-gray-600 group-hover:text-blue-600"> Food, drinks </p>
                </a>
            </nav>

        </div> <!-- container //end -->
    </section>
    <!-- SECTION-ICONMENU //END -->

    <!-- SECTION-CONTENT -->
    <section class="py-10">
        <div class="container max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">New products</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div>
                    <!-- COMPONENT: PRODUCT CARD -->
                    <article class="mb-4">
                        <a href="#"
                            class="rounded bg-gray-100 border border-gray-200 block relative p-1 hover:border-blue-300">
                            <img src="images/items/1.jpg" class="mx-auto mix-blend-multiply w-auto" height="240"
                                alt="Product title here">
                        </a>
                        <div class="pt-3">
                            <a class="float-right px-3 py-2 text-gray-400 border border-gray-300 rounded-md hover:border-blue-400 hover:text-blue-600"
                                href="#">
                                <i class="fa fa-heart"></i>
                            </a>
                            <p class="font-semibold">$99.50</p>
                            <h6>
                                <a href="#" class="text-gray-600 hover:text-blue-500">
                                    GoPro action camera 4K
                                </a>
                            </h6>
                            <small class="text-sm text-gray-400"> Model: X-5600-A</small>
                        </div>
                    </article>
                    <!-- COMPONENT: PRODUCT CARD //END -->
                </div>
                <div>
                    <!-- COMPONENT: PRODUCT CARD -->
                    <article class="mb-4">
                        <a href="#"
                            class="rounded bg-gray-100 border border-gray-200 block relative p-1 hover:border-blue-300">
                            <img src="images/items/2.jpg" class="mx-auto mix-blend-multiply w-auto" height="240"
                                alt="Product title here">
                        </a>
                        <div class="pt-3">
                            <a class="float-right px-3 py-2 text-gray-400 border border-gray-300 rounded-md hover:border-blue-400 hover:text-blue-600"
                                href="#">
                                <i class="fa fa-heart"></i>
                            </a>
                            <p class="font-semibold">$99.50</p>
                            <h6>
                                <a href="#" class="text-gray-600 hover:text-blue-500">
                                    Canon EOS professional
                                </a>
                            </h6>
                            <small class="text-sm text-gray-400"> Capacity: 128GB </small>
                        </div>
                    </article>
                    <!-- COMPONENT: PRODUCT CARD //END -->
                </div>
                <div>
                    <!-- COMPONENT: PRODUCT CARD -->
                    <article class="mb-4">
                        <a href="#"
                            class="rounded bg-gray-100 border border-gray-200 block relative p-1 hover:border-blue-300">
                            <img src="images/items/3.jpg" class="mx-auto mix-blend-multiply w-auto" height="240"
                                alt="Product title here">
                        </a>
                        <div class="pt-3">
                            <a class="float-right px-3 py-2 text-gray-400 border border-gray-300 rounded-md hover:border-blue-400 hover:text-blue-600"
                                href="#">
                                <i class="fa fa-heart"></i>
                            </a>
                            <p class="font-semibold">$99.50</p>
                            <h6>
                                <a href="#" class="text-gray-600 hover:text-blue-500">
                                    Modern product name here
                                </a>
                            </h6>
                            <small class="text-sm text-gray-400">Sizes: S, M, XL</small>
                        </div>
                    </article>
                    <!-- COMPONENT: PRODUCT CARD //END -->
                </div>
                <div>
                    <!-- COMPONENT: PRODUCT CARD -->
                    <article class="mb-4">
                        <a href="#"
                            class="rounded bg-gray-100 border border-gray-200 block relative p-1 hover:border-blue-300">
                            <img src="images/items/4.jpg" class="mx-auto mix-blend-multiply w-auto" height="240"
                                alt="Product title here">
                        </a>
                        <div class="pt-3">
                            <a class="float-right px-3 py-2 text-gray-400 border border-gray-300 rounded-md hover:border-blue-400 hover:text-blue-600"
                                href="#">
                                <i class="fa fa-heart"></i>
                            </a>
                            <p class="font-semibold">$99.50</p>
                            <h6>
                                <a href="#" class="text-gray-600 hover:text-blue-500">
                                    Modern product name here
                                </a>
                            </h6>
                            <small class="text-sm text-gray-400">Sizes: S, M, XL</small>
                        </div>
                    </article>
                    <!-- COMPONENT: PRODUCT CARD //END -->
                </div>
                <div>
                    <!-- COMPONENT: PRODUCT CARD -->
                    <article class="mb-4">
                        <a href="#"
                            class="rounded bg-gray-100 border border-gray-200 block relative p-1 hover:border-blue-300">
                            <img src="images/items/5.jpg" class="mx-auto mix-blend-multiply w-auto" height="240"
                                alt="Product title here">
                        </a>
                        <div class="pt-3">
                            <a class="float-right px-3 py-2 text-gray-400 border border-gray-300 rounded-md hover:border-blue-400 hover:text-blue-600"
                                href="#">
                                <i class="fa fa-heart"></i>
                            </a>
                            <p class="font-semibold">$340.90</p>
                            <h6>
                                <a href="#" class="text-gray-600 hover:text-blue-500">
                                    Smartwatch with camera
                                </a>
                            </h6>
                            <small class="text-sm text-gray-400">Color: Black, Blue</small>
                        </div>
                    </article>
                    <!-- COMPONENT: PRODUCT CARD //END -->
                </div>
                <div>
                    <!-- COMPONENT: PRODUCT CARD -->
                    <article class="mb-4">
                        <a href="#"
                            class="rounded bg-gray-100 border border-gray-200 block relative p-1 hover:border-blue-300">
                            <img src="images/items/6.jpg" class="mx-auto mix-blend-multiply w-auto" height="240"
                                alt="Product title here">
                        </a>
                        <div class="pt-3">
                            <a class="float-right px-3 py-2 text-gray-400 border border-gray-300 rounded-md hover:border-blue-400 hover:text-blue-600"
                                href="#">
                                <i class="fa fa-heart"></i>
                            </a>
                            <p class="font-semibold">$99.50</p>
                            <h6>
                                <a href="#" class="text-gray-600 hover:text-blue-500">
                                    GoPro action camera 4K
                                </a>
                            </h6>
                            <small class="text-sm text-gray-400">Sizes: S, M, XL</small>
                        </div>
                    </article>
                    <!-- COMPONENT: PRODUCT CARD //END -->
                </div>
                <div>
                    <!-- COMPONENT: PRODUCT CARD -->
                    <article class="mb-4">
                        <a href="#"
                            class="rounded bg-gray-100 border border-gray-200 block relative p-1 hover:border-blue-300">
                            <img src="images/items/7.jpg" class="mx-auto mix-blend-multiply w-auto" height="240"
                                alt="Product title here">
                        </a>
                        <div class="pt-3">
                            <a class="float-right px-3 py-2 text-gray-400 border border-gray-300 rounded-md hover:border-blue-400 hover:text-blue-600"
                                href="#">
                                <i class="fa fa-heart"></i>
                            </a>
                            <p class="font-semibold">$399.00</p>
                            <h6>
                                <a href="#" class="text-gray-600 hover:text-blue-500">
                                    Modern product name here
                                </a>
                            </h6>
                            <small class="text-sm text-gray-400">Sizes: S, M, XL</small>
                        </div>
                    </article>
                    <!-- COMPONENT: PRODUCT CARD //END -->
                </div>
                <div>
                    <!-- COMPONENT: PRODUCT CARD -->
                    <article class="mb-4">
                        <a href="#"
                            class="rounded bg-gray-100 border border-gray-200 block relative p-1 hover:border-blue-300">
                            <img src="images/items/8.jpg" class="mx-auto mix-blend-multiply w-auto" height="240"
                                alt="Product title here">
                        </a>
                        <div class="pt-3">
                            <a class="float-right px-3 py-2 text-gray-400 border border-gray-300 rounded-md hover:border-blue-400 hover:text-blue-600"
                                href="#">
                                <i class="fa fa-heart"></i>
                            </a>
                            <p class="font-semibold">$80.00</p>
                            <h6>
                                <a href="#" class="text-gray-600 hover:text-blue-500">
                                    Travel bag blue jeans
                                </a>
                            </h6>
                            <small class="text-sm text-gray-400">Blue, Black, Red</small>
                        </div>
                    </article>
                    <!-- COMPONENT: PRODUCT CARD //END -->
                </div>
            </div> <!-- grid .// -->
        </div>
    </section>
    <!--  SECTION-CONTENT  //END -->


    <!-- SECTION-NEWSLETTER -->
    <section class="bg-gray-100 border-t py-6">
        <div class="container max-w-screen-xl mx-auto px-4">

            <div class="flex items-center flex-col lg:flex-row space-y-7 lg:space-y-0">
                <!-- heading info start -->
                <div class="flex items-center mr-10">
                    <div class="flex mr-5 items-center justify-center mr-4 rounded w-11 h-11 bg-white shadow-sm">
                        <i class="fa fa-envelope fa-lg text-blue-400"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-lg">Subscribe</p>
                        <p class="text-sm text-gray-600">Get notified on offers</p>
                    </div>
                </div>
                <!-- heading info end -->

                <!-- email start-->
                <form class="flex w-80">
                    <input
                        class="text-black w-full appearance-none  border border-gray-200 bg-white py-2 px-3 rounded-tl-md rounded-bl-md focus:outline-none  focus:border-blue-600 hover:border-gray-400"
                        type="email" placeholder="Email">
                    <button
                        class="px-4 py-2 text-blue-600 bg-white border border-gray-200 rounded-tr-md rounded-br-md hover:text-white hover:bg-blue-600">
                        Subscribe
                    </button>
                </form>
                <!-- email end-->

                <!-- socials start -->
                <nav class="flex lg:ml-auto space-x-2">
                    <a class="px-3 py-2 inline-block text-center text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:text-blue-600"
                        href="#">
                        <span class="sr-only">YouTube</span>
                        <i class="w-4 fab fa-youtube"></i>
                    </a>
                    <a class="px-3 py-2 inline-block text-center text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:text-blue-600"
                        href="#">
                        <span class="sr-only">Facebook</span>
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a class="px-3 py-2 inline-block text-center text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:text-blue-600"
                        href="#">
                        <span class="sr-only">Twitter</span>
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="px-3 py-2 inline-block text-center text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:text-blue-600"
                        href="#">
                        <span class="sr-only">Instagram</span>
                        <i class="fab fa-instagram"></i>
                    </a>
                </nav>
                <!-- socials end -->

            </div>


        </div> <!-- container .// -->
    </section>
    <!-- SECTION-NEWSLETTER //END -->

    <footer class="bg-blue-600">
        <!-- section footer top -->

        <section class="py-10 text-white">
            <div class="container max-w-screen-xl mx-auto px-4">

                <div class="flex flex-wrap">
                    <aside class="w-full md:w-1/3 lg:w-1/4 mb-5">
                        <img src="images/logo-white.png" height="38" alt="Company name">
                        <p class="my-4">
                            Company name. <br> © 2018- 2021 Templatemount. <br>
                            All rights reserved.
                        </p>
                    </aside> <!-- col .// -->
                    <aside class="w-1/2 sm:w-auto flex-auto mb-5">
                        <h3 class="font-semibold"> Store </h3>
                        <ul class="mt-2 space-y-1">
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> Join us </a>
                            </li>
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> Find store </a>
                            </li>
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> Categories </a>
                            </li>
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> Partnership </a>
                            </li>
                        </ul>
                    </aside> <!-- col .// -->
                    <aside class="w-1/2 sm:w-auto flex-auto mb-5">
                        <h3 class="font-semibold"> About </h3>
                        <ul class="mt-2 space-y-1">
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> About us </a>
                            </li>
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> Our history </a>
                            </li>
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> Our team </a>
                            </li>
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> Offices </a>
                            </li>
                        </ul>
                    </aside> <!-- col .// -->
                    <aside class="w-1/2 sm:w-auto flex-auto  mb-5">
                        <h3 class="font-semibold"> Help </h3>
                        <ul class="mt-2 space-y-1">
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> Contact us </a>
                            </li>
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> Submit ticket </a>
                            </li>
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> FAQs </a>
                            </li>
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> Refunds </a>
                            </li>
                        </ul>
                    </aside> <!-- col .// -->
                    <aside class="w-1/2 sm:w-auto flex-auto  mb-5">
                        <h3 class="font-semibold"> Links </h3>
                        <ul class="mt-2 space-y-1">
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> Our terms </a>
                            </li>
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> Privacy setting</a>
                            </li>
                            <li>
                                <a href="#" class="opacity-70 hover:opacity-100"> Sign up </a>
                            </li>
                        </ul>
                    </aside> <!-- col .// -->
                    <aside class="w-1/2 sm:w-auto lg:w-40  mb-5">
                        <h3 class="font-semibold"> Apps </h3>
                        <a href="#" class="mt-3 inline-block">
                            <img class="h-10" src="images/misc/btn-appstore.png" height="38">
                        </a>
                        <a href="#" class="inline-block">
                            <img class="h-10" src="images/misc/btn-market.png" height="38">
                        </a>
                    </aside> <!-- col .// -->
                </div> <!-- grid .// -->
            </div> <!-- container .// -->
        </section>
        <!-- section footer top end -->

        <!-- section footer bottom  -->
        <section class="bg-blue-700 py-6 text-white">
            <div class="container max-w-screen-xl mx-auto px-4">
                <div class="lg:flex justify-between">
                    <div class="mb-3">
                        <img src="images/misc/payments.png" height="24" class="h-6" alt="Payment methods">
                    </div> <!-- col .// -->
                    <div class="space-x-6">
                        <nav class="text-sm space-x-4">
                            <a href="#" class="opacity-70 hover:opacity-100">
                                Support
                            </a>
                            <a href="#" class="opacity-70 hover:opacity-100">
                                Privacy &amp; Cookies
                            </a>
                            <a href="#" class="opacity-70 hover:opacity-100">
                                Accessibility
                            </a>
                        </nav>
                    </div> <!-- col .// -->
                </div> <!-- grid .// -->
            </div> <!-- container .// -->
        </section>
        <!-- section footer bottom  end -->
    </footer>

</body>

</html>
