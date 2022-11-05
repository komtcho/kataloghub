<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Type some info">
    <meta name="author" content="Type name">

    <title>Tailwind Ecommerce Kit</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        function open_sidebar() {
            document.getElementById('sidebar').classList.remove('-left-full');
            document.getElementById('backdrop').classList.remove('hidden');
        }

        function hide_sidebar() {
            document.getElementById('sidebar').classList.add('-left-full');
            document.getElementById('backdrop').classList.add('hidden');
        }
    </script>
</head>

<body class="bg-gray-100 text-gray-600">

    <b id="backdrop" onclick="hide_sidebar()"
        class="fixed hidden md:hidden bg-black opacity-60 top-0 left-0 right-0 bottom-0 z-30"></b>

    <div class="flex min-h-screen dark:bg-gray-900">

        <aside id="sidebar"
            class="fixed -left-full top-0 bottom-0 md:static z-40 w-60 overflow-y-auto bg-blue-800 flex-shrink-0">

            <header class="flex items-center justify-between h-14 px-4 py-2 mb-2 border-b border-blue-700">
                <a class="inline-block" href="https://tailwind-ecommerce.com">
                    <img src="images/logo-white.png" height="36" class="max-h-9 hover:opacity-70">
                </a>
                <button onclick="hide_sidebar()"
                    class="md:hidden float-right appearance-none border border-transparent bg-transparent text-white">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </header>

            <ul>
                <li class="hover:bg-blue-100 relative">
                    <a href="admin-main.html"
                        class="flex px-5 py-3 items-center w-full text-white hover:text-white hover:bg-blue-700">
                        <span aria-hidden="true">
                            <svg class="text-white opacity-50" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        </span>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>

                <li class="hover:bg-blue-100 relative">
                    <a href="admin-form-add.html"
                        class="flex px-5 py-3 items-center w-full text-white hover:text-white hover:bg-blue-700">
                        <span aria-hidden="true">
                            <svg class="text-white opacity-50" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                        </span>
                        <span class="ml-3">Products</span>
                    </a>
                </li>

                <li class="hover:bg-blue-100 relative">
                    <a href="#"
                        class="flex px-5 py-3 items-center w-full text-white hover:text-white hover:bg-blue-700">
                        <span aria-hidden="true">
                            <svg class="text-white opacity-50" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                        </span>
                        <span class="ml-3">Orders</span>
                    </a>
                </li>

                <li class="hover:bg-blue-100 relative">
                    <a href="admin-table.html"
                        class="flex px-5 py-3 items-center w-full text-white hover:text-white hover:bg-blue-700">
                        <span aria-hidden="true">
                            <svg class="text-white opacity-50" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </span>
                        <span class="ml-3">Customers</span>
                    </a>
                </li>

                <li class="hover:bg-blue-100 relative">
                    <a href="#"
                        class="flex px-5 py-3 items-center w-full text-white hover:text-white hover:bg-blue-700">
                        <span aria-hidden="true">
                            <svg class="text-white opacity-50" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path
                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                </path>
                            </svg>
                        </span>
                        <span class="ml-3">Settings</span>
                    </a>
                </li>

                <li class="hover:bg-blue-100 relative">
                    <a href="admin-blank.html"
                        class="flex px-5 py-3 items-center w-full text-white hover:text-white hover:bg-blue-700">
                        <span aria-hidden="true">
                            <svg class="text-white opacity-50" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                        </span>
                        <span class="ml-3">Blank page</span>
                    </a>
                </li>

                <li class="relative">
                    <a href="#"
                        class="flex px-5 py-3 items-center w-full text-white hover:text-white hover:bg-blue-700">
                        <span aria-hidden="true">
                            <svg class="text-white opacity-50" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                        </span>
                        <span class="ml-3">More pages</span>
                        <span>
                            <svg class="text-gray-400" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 0 24 24" width="24">
                                <path fill="currentColor" d="M7 10l5 5 5-5H7z" />
                            </svg>
                        </span>
                    </a>
                    <div class="submenu pb-3">
                        <a href="#" class="pl-14 py-1 block text-white hover:bg-blue-700">Submenu one</a>
                        <a href="#" class="pl-14 py-1 block text-white hover:bg-blue-700">Submenu two</a>
                    </div>
                </li>

                <li class="relative">
                    <a href="#"
                        class="flex px-5 py-3 items-center w-full text-white hover:text-white hover:bg-blue-700">
                        <span aria-hidden="true">
                            <svg class="text-white opacity-50" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                        </span>
                        <span class="ml-3">Dropdown</span>
                        <span>
                            <svg class="text-white opacity-50" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 0 24 24" width="24">
                                <path fill="currentColor" d="M7 10l5 5 5-5H7z" />
                            </svg>
                        </span>
                    </a>
                    <div class="submenu pb-3">
                        <a href="#" class="pl-14 py-1 block text-white hover:bg-blue-700">Submenu one</a>
                        <a href="#" class="pl-14 py-1 block text-white hover:bg-blue-700">Submenu two</a>
                        <a href="#" class="pl-14 py-1 block text-white hover:bg-blue-700">Submenu three</a>
                    </div>
                </li>

            </ul>

            <hr class="border-blue-600">

            <div class="px-5 my-6">
                <button
                    class="inline-block w-full text-left px-4 py-2 text-black bg-yellow-400 border border-transparent rounded-md hover:bg-yellow-500">
                    Create account <span class="float-right" aria-hidden="true">+</span>
                </button>
            </div>
        </aside>

        <main class="w-full">

            <header class="h-14 z-10 py-3 bg-white shadow-sm border-b border-gray-200">
                <div class="container h-full flex items-center justify-between px-6 mx-auto">

                    <!-- Mobile hamburger -->
                    <button onclick="open_sidebar()"
                        class="p-1 mr-5  md:hidden focus:outline-none focus:shadow-outline-purple">
                        <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path fill="currentColor" d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                        </svg>
                    </button>

                    <!-- Search input -->
                    <form>
                        <div class="relative">
                            <input
                                class="appearance-none border border-transparent bg-transparent rounded-md py-1 px-2 focus:outline-none focus:border-gray-400 w-full"
                                type="text" placeholder="Search for " aria-label="Search">
                        </div>
                    </form>
                    <ul class="flex items-center flex-shrink-0 space-x-2">
                        <li>
                            <button
                                class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full hover:bg-blue-200"
                                aria-label="Button name">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="22"
                                    height="22" viewBox="0 0 24 24">
                                    <path
                                        d="M4 4h16v12H5.17L4 17.17V4m0-2c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4zm2 10h8v2H6v-2zm0-3h12v2H6V9zm0-3h12v2H6V6z" />
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full hover:bg-blue-200"
                                aria-label="Button name">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zM7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2c.15-2.65 1.51-4.97 3.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43c2.02 1.45 3.39 3.77 3.54 6.42z">
                                    </path>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-10 h-10 flex items-center justify-center bg-gray-200 border border-transparent rounded-full hover:border-blue-400 overflow-hidden"
                                aria-label="Button name">
                                <img src="images/avatars/avatar.jpg" width="32" height="32"
                                    class="w-10 h-10 rounded-full">
                            </button>
                        </li>
                    </ul>
                </div>
            </header>

            {{ $slot }}
        </main>
    </div>
</body>

</html>
