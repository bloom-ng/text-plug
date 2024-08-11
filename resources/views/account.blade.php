<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account</title>
    <meta name="description" content="" />

    <!-- Tailwind --><!-- Scripts -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet" /> --}} -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Karla:400,700&display=swap");

        .font-family-karla {
            font-family: karla;
        }

        .bg-sidebar {
            background: #ffffff;
        }

        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #1947ee;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }
    </style>
</head>

<body class="bg-gray-100 font-family-karla flex lg:overflow-y-scroll">

    <!-- side bar -->
    <aside class="relative bg-[#ffffff] h-screen w-64 hidden sm:block">
        <div class="p-6">
            <img src="/img/image_4.jpg" alt="logo" class="w-[130px] h-[40.73px]">
        </div>
        <nav class="text-white text-xs font-semibold pt-3">
            <a href="dashboard.html"
                class="flex items-center py-2 px-8 text-gray-600 hover:bg-gray-100 hover:text-gray-700">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_58_4494" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                        width="25" height="25">
                        <rect x="0.5" y="0.25" width="24" height="24" fill="white" />
                    </mask>
                    <g mask="url(#mask0_58_4494)">
                        <path
                            d="M10.7524 6.13434L11.0308 10.2743L11.169 12.3551C11.1705 12.5691 11.204 12.7817 11.2687 12.986C11.4356 13.3826 11.8372 13.6346 12.2741 13.617L18.9313 13.1815C19.2196 13.1768 19.498 13.2846 19.7052 13.4813C19.8779 13.6452 19.9894 13.8596 20.0246 14.0902L20.0364 14.2302C19.7609 18.0449 16.9592 21.2267 13.1524 22.048C9.34555 22.8693 5.44186 21.1343 3.56071 17.7849C3.01839 16.8118 2.67965 15.7423 2.56438 14.639C2.51623 14.3124 2.49503 13.9825 2.50098 13.6525C2.49503 9.56273 5.40747 6.02696 9.48433 5.17457C9.97501 5.09816 10.456 5.35792 10.6528 5.80553C10.7037 5.90919 10.7373 6.02021 10.7524 6.13434Z"
                            fill="#222222" fill-opacity="0.7" />
                        <path opacity="0.4"
                            d="M22.5005 10.0622L22.4935 10.0948L22.4733 10.1422L22.4761 10.2723C22.4657 10.4446 22.3991 10.6104 22.2845 10.7444C22.165 10.8839 22.0018 10.9789 21.8221 11.0158L21.7125 11.0308L14.0317 11.5285C13.7762 11.5537 13.5218 11.4713 13.3319 11.3019C13.1735 11.1606 13.0723 10.97 13.0437 10.7646L12.5282 3.095C12.5192 3.06907 12.5192 3.04096 12.5282 3.01502C12.5352 2.80361 12.6283 2.60378 12.7866 2.46017C12.9448 2.31656 13.1552 2.24114 13.3705 2.25076C17.9304 2.36677 21.7628 5.64573 22.5005 10.0622Z"
                            fill="#222222" fill-opacity="0.7" />
                    </g>
                </svg>
                <span class="pl-5 dm-sans-medium text-[13.5px] text-[#222222B2]">Dashboard</span>
            </a>

            <a href="order.html"
                class="flex items-center py-2 px-8 text-gray-600 hover:bg-gray-100 hover:text-gray-700 mt-7">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.91803 3.5C9.19803 2.91 9.80203 2.5 10.5 2.5H14.5C15.198 2.5 15.801 2.91 16.082 3.5C16.765 3.506 17.298 3.537 17.774 3.723C18.3423 3.94527 18.8364 4.32301 19.2 4.813C19.567 5.307 19.74 5.94 19.976 6.811L20.718 9.533L20.998 10.374L21.022 10.404C21.923 11.558 21.494 13.274 20.636 16.705C20.09 18.888 19.818 19.979 19.004 20.615C18.19 21.25 17.065 21.25 14.815 21.25H10.185C7.93503 21.25 6.81003 21.25 5.99603 20.615C5.18203 19.979 4.90903 18.888 4.36403 16.705C3.50603 13.274 3.07703 11.558 3.97803 10.404L4.00203 10.374L4.28203 9.533L5.02403 6.811C5.26103 5.94 5.43403 5.306 5.80003 4.812C6.16376 4.32238 6.65793 3.945 7.22603 3.723C7.70203 3.537 8.23403 3.505 8.91803 3.5ZM8.92003 5.003C8.25803 5.01 7.99203 5.035 7.77203 5.121C7.466 5.24068 7.19984 5.44411 7.00403 5.708C6.82803 5.945 6.72403 6.276 6.43403 7.343L5.86403 9.432C6.88403 9.25 8.27803 9.25 10.184 9.25H14.815C16.722 9.25 18.115 9.25 19.135 9.43L18.566 7.341C18.276 6.274 18.172 5.943 17.996 5.706C17.8002 5.44211 17.5341 5.23868 17.228 5.119C17.008 5.033 16.742 5.008 16.08 5.001C15.938 5.29985 15.7142 5.55232 15.4346 5.72914C15.1549 5.90596 14.8309 5.99987 14.5 6H10.5C10.1693 5.99996 9.8453 5.9062 9.56566 5.72956C9.28602 5.55293 9.06216 5.30166 8.92003 5.003Z"
                        fill="#222222" fill-opacity="0.7" />
                </svg>
                <span class="pl-5 dm-sans-medium text-[13.5px] text-[#222222B2]">Orders</span>
            </a>

            <a href="wallet.html"
                class="flex items-center py-2 px-8 text-gray-600 hover:bg-gray-100 hover:text-gray-700 mt-7">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.5 20.25C5.4 20.25 4.45833 19.8583 3.675 19.075C2.89167 18.2917 2.5 17.35 2.5 16.25V8.25C2.5 7.15 2.89167 6.20833 3.675 5.425C4.45833 4.64167 5.4 4.25 6.5 4.25H18.5C19.6 4.25 20.5417 4.64167 21.325 5.425C22.1083 6.20833 22.5 7.15 22.5 8.25V16.25C22.5 17.35 22.1083 18.2917 21.325 19.075C20.5417 19.8583 19.6 20.25 18.5 20.25H6.5ZM6.5 8.25H18.5C18.8667 8.25 19.2167 8.29167 19.55 8.375C19.8833 8.45833 20.2 8.59167 20.5 8.775V8.25C20.5 7.7 20.3043 7.22933 19.913 6.838C19.5217 6.44667 19.0507 6.25067 18.5 6.25H6.5C5.95 6.25 5.47933 6.446 5.088 6.838C4.69667 7.23 4.50067 7.70067 4.5 8.25V8.775C4.8 8.59167 5.11667 8.45833 5.45 8.375C5.78333 8.29167 6.13333 8.25 6.5 8.25ZM4.65 11.5L15.775 14.2C15.925 14.2333 16.075 14.2333 16.225 14.2C16.375 14.1667 16.5167 14.1 16.65 14L20.125 11.1C19.9417 10.85 19.7083 10.646 19.425 10.488C19.1417 10.33 18.8333 10.2507 18.5 10.25H6.5C6.06667 10.25 5.68767 10.3627 5.363 10.588C5.03833 10.8133 4.80067 11.1173 4.65 11.5Z"
                        fill="#222222" fill-opacity="0.7" />
                </svg>
                <span class="pl-5 dm-sans-medium text-[13.5px] text-[#222222B2]">Wallet</span>
            </a>

            <a href="Account..html"
                class="flex items-center py-[12px] px-5 bg-[#DF5C0C] text-white rounded-xl ml-8 mt-7 mr-4">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.5 2.25C6.98 2.25 2.5 6.73 2.5 12.25C2.5 17.77 6.98 22.25 12.5 22.25C18.02 22.25 22.5 17.77 22.5 12.25C22.5 6.73 18.02 2.25 12.5 2.25ZM12.5 6.25C14.43 6.25 16 7.82 16 9.75C16 11.68 14.43 13.25 12.5 13.25C10.57 13.25 9 11.68 9 9.75C9 7.82 10.57 6.25 12.5 6.25ZM12.5 20.25C10.47 20.25 8.07 19.43 6.36 17.37C8.1116 15.9957 10.2736 15.2488 12.5 15.2488C14.7264 15.2488 16.8884 15.9957 18.64 17.37C16.93 19.43 14.53 20.25 12.5 20.25Z"
                        fill="white" />
                </svg>
                <span class="ml-3 dm-sans-medium text-[13.5px] text-[#ffffff]">Account</span>
            </a>

            <a href="/signout"
                class="flex items-center py-2 px-8 text-gray-600 hover:bg-gray-100 hover:text-gray-700 mt-7">
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.8308 14.9008L18.2526 10.9083C18.416 10.7219 18.4996 10.4866 18.4998 10.25C18.4998 10.0882 18.4608 9.92571 18.3816 9.77797C18.3464 9.71213 18.3033 9.64958 18.2526 9.59173L14.8308 5.59921C14.4714 5.17986 13.8401 5.13127 13.4208 5.49066C13.0015 5.85006 12.9529 6.48136 13.3123 6.90071L15.3257 9.24995L7.58103 9.24995C7.02875 9.24995 6.58103 9.69767 6.58103 10.25C6.58103 10.8022 7.02875 11.25 7.58103 11.25L15.3258 11.25L13.3123 13.5993C12.9529 14.0187 13.0015 14.65 13.4208 15.0094C13.8401 15.3688 14.4714 15.3202 14.8308 14.9008ZM8.49976 4.24994C9.05204 4.24994 9.49976 4.69765 9.49976 5.24994L9.49976 6.74994C9.49976 7.30222 9.94747 7.74994 10.4998 7.74994C11.052 7.74994 11.4998 7.30222 11.4998 6.74994L11.4998 5.24994C11.4998 3.59308 10.1566 2.24994 8.49976 2.24994L5.49976 2.24994C3.8429 2.24994 2.49976 3.59308 2.49976 5.24994L2.49976 15.2499C2.49976 16.9068 3.8429 18.2499 5.49976 18.2499L8.49976 18.2499C10.1566 18.2499 11.4998 16.9068 11.4998 15.2499L11.4998 13.7499C11.4998 13.1977 11.052 12.7499 10.4998 12.7499C9.94747 12.7499 9.49976 13.1977 9.49976 13.7499L9.49976 15.2499C9.49976 15.8022 9.05204 16.2499 8.49976 16.2499L5.49976 16.2499C4.94747 16.2499 4.49976 15.8022 4.49976 15.2499L4.49976 5.24994C4.49976 4.69765 4.94747 4.24994 5.49976 4.24994L8.49976 4.24994Z"
                        fill="#B22234" />
                </svg>
                <span class="text-[13.5px] dm-sans-medium text-[#B22234]">Sign Out</span>
            </a>
        </nav>
    </aside>
    <!-- /side bar -->

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex justify-between">
            <div class="flex flex-row justify-between">
                <p class=" text-[#222222] plus-jakarta-sans-medium text-[30px] ml-4">Account</p>
                <div class="flex ml-[1000px]">
                    <img src="/img/Rectangle 1393.jpg" alt="User" class="w-[45px] h-[45px]">
                    <div class="ml-2">
                        <p class="text-[12px] text-[#222222] font-semibold">Oladimeji</p>
                        <p class="text-[10.5px] text-[#22222280]">Account</p>
                    </div>
                </div>
            </div>

            <!-- <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen"
                    class="realtive z-10 w-12 h-12 overflow-hidden focus:outline-none">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#3D3C42" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button x-show="isOpen" @click="isOpen = false"
                    class="h-full w-full fixed inset-0 cursor-default">
                </button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="/admin/users/edit/me" class="block px-4 py-2 account-link hover:text-white ">Account</a>
                    <div class="px-4 py-2 account-link hover:text-white">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                            @csrf
                        </form>

                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                            Sign Out
                        </a>
                    </div>


                </div>
            </div> -->
        </header>
        <!-- /desktop header -->

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-[#ffffff] py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="/index">
                    <img class="w-[98px] lg:w-16" src="/img/image_4.jpg" alt="logo" /></a>

                <button @click="isOpen = !isOpen" class="text-black text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex' : 'hidden'" class="flex flex-col pt-4">

                <a href="dashboard.html" class="flex items-center  text-[#222222] py-2 pl-4 nav-item">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="mr-3">
                        <mask id="mask0_58_4494" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="25" height="25">
                            <rect x="0.5" y="0.25" width="24" height="24" fill="white" />
                        </mask>
                        <g mask="url(#mask0_58_4494)">
                            <path
                                d="M10.7524 6.13434L11.0308 10.2743L11.169 12.3551C11.1705 12.5691 11.204 12.7817 11.2687 12.986C11.4356 13.3826 11.8372 13.6346 12.2741 13.617L18.9313 13.1815C19.2196 13.1768 19.498 13.2846 19.7052 13.4813C19.8779 13.6452 19.9894 13.8596 20.0246 14.0902L20.0364 14.2302C19.7609 18.0449 16.9592 21.2267 13.1524 22.048C9.34555 22.8693 5.44186 21.1343 3.56071 17.7849C3.01839 16.8118 2.67965 15.7423 2.56438 14.639C2.51623 14.3124 2.49503 13.9825 2.50098 13.6525C2.49503 9.56273 5.40747 6.02696 9.48433 5.17457C9.97501 5.09816 10.456 5.35792 10.6528 5.80553C10.7037 5.90919 10.7373 6.02021 10.7524 6.13434Z"
                                fill="#222222" fill-opacity="0.7" />
                            <path opacity="0.4"
                                d="M22.5005 10.0622L22.4935 10.0948L22.4733 10.1422L22.4761 10.2723C22.4657 10.4446 22.3991 10.6104 22.2845 10.7444C22.165 10.8839 22.0018 10.9789 21.8221 11.0158L21.7125 11.0308L14.0317 11.5285C13.7762 11.5537 13.5218 11.4713 13.3319 11.3019C13.1735 11.1606 13.0723 10.97 13.0437 10.7646L12.5282 3.095C12.5192 3.06907 12.5192 3.04096 12.5282 3.01502C12.5352 2.80361 12.6283 2.60378 12.7866 2.46017C12.9448 2.31656 13.1552 2.24114 13.3705 2.25076C17.9304 2.36677 21.7628 5.64573 22.5005 10.0622Z"
                                fill="#222222" fill-opacity="0.7" />
                        </g>
                    </svg>
                    Dashboard
                </a>



                <a href="order.html" class="flex items-center text-[#222222] py-2 pl-4 nav-item">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="mr-3">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.91803 3.5C9.19803 2.91 9.80203 2.5 10.5 2.5H14.5C15.198 2.5 15.801 2.91 16.082 3.5C16.765 3.506 17.298 3.537 17.774 3.723C18.3423 3.94527 18.8364 4.32301 19.2 4.813C19.567 5.307 19.74 5.94 19.976 6.811L20.718 9.533L20.998 10.374L21.022 10.404C21.923 11.558 21.494 13.274 20.636 16.705C20.09 18.888 19.818 19.979 19.004 20.615C18.19 21.25 17.065 21.25 14.815 21.25H10.185C7.93503 21.25 6.81003 21.25 5.99603 20.615C5.18203 19.979 4.90903 18.888 4.36403 16.705C3.50603 13.274 3.07703 11.558 3.97803 10.404L4.00203 10.374L4.28203 9.533L5.02403 6.811C5.26103 5.94 5.43403 5.306 5.80003 4.812C6.16376 4.32238 6.65793 3.945 7.22603 3.723C7.70203 3.537 8.23403 3.505 8.91803 3.5ZM8.92003 5.003C8.25803 5.01 7.99203 5.035 7.77203 5.121C7.466 5.24068 7.19984 5.44411 7.00403 5.708C6.82803 5.945 6.72403 6.276 6.43403 7.343L5.86403 9.432C6.88403 9.25 8.27803 9.25 10.184 9.25H14.815C16.722 9.25 18.115 9.25 19.135 9.43L18.566 7.341C18.276 6.274 18.172 5.943 17.996 5.706C17.8002 5.44211 17.5341 5.23868 17.228 5.119C17.008 5.033 16.742 5.008 16.08 5.001C15.938 5.29985 15.7142 5.55232 15.4346 5.72914C15.1549 5.90596 14.8309 5.99987 14.5 6H10.5C10.1693 5.99996 9.8453 5.9062 9.56566 5.72956C9.28602 5.55293 9.06216 5.30166 8.92003 5.003Z"
                            fill="#222222" fill-opacity="0.7" />
                    </svg>
                    Orders
                </a>


                <a href="wallet.html" class="flex items-center text-[#222222] py-2 pl-4 nav-item">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="mr-3">
                        <path
                            d="M6.5 20.25C5.4 20.25 4.45833 19.8583 3.675 19.075C2.89167 18.2917 2.5 17.35 2.5 16.25V8.25C2.5 7.15 2.89167 6.20833 3.675 5.425C4.45833 4.64167 5.4 4.25 6.5 4.25H18.5C19.6 4.25 20.5417 4.64167 21.325 5.425C22.1083 6.20833 22.5 7.15 22.5 8.25V16.25C22.5 17.35 22.1083 18.2917 21.325 19.075C20.5417 19.8583 19.6 20.25 18.5 20.25H6.5ZM6.5 8.25H18.5C18.8667 8.25 19.2167 8.29167 19.55 8.375C19.8833 8.45833 20.2 8.59167 20.5 8.775V8.25C20.5 7.7 20.3043 7.22933 19.913 6.838C19.5217 6.44667 19.0507 6.25067 18.5 6.25H6.5C5.95 6.25 5.47933 6.446 5.088 6.838C4.69667 7.23 4.50067 7.70067 4.5 8.25V8.775C4.8 8.59167 5.11667 8.45833 5.45 8.375C5.78333 8.29167 6.13333 8.25 6.5 8.25ZM4.65 11.5L15.775 14.2C15.925 14.2333 16.075 14.2333 16.225 14.2C16.375 14.1667 16.5167 14.1 16.65 14L20.125 11.1C19.9417 10.85 19.7083 10.646 19.425 10.488C19.1417 10.33 18.8333 10.2507 18.5 10.25H6.5C6.06667 10.25 5.68767 10.3627 5.363 10.588C5.03833 10.8133 4.80067 11.1173 4.65 11.5Z"
                            fill="#222222" fill-opacity="0.7" />
                    </svg>
                    Wallet
                </a>

                <a href="Account..html"
                    class="flex items-center bg-[#df5c0c] text-[#ffffff] py-2 pl-4 nav-item rounded-lg mr-64">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="mr-3">
                        <path
                            d="M12.5 2.25C6.98 2.25 2.5 6.73 2.5 12.25C2.5 17.77 6.98 22.25 12.5 22.25C18.02 22.25 22.5 17.77 22.5 12.25C22.5 6.73 18.02 2.25 12.5 2.25ZM12.5 6.25C14.43 6.25 16 7.82 16 9.75C16 11.68 14.43 13.25 12.5 13.25C10.57 13.25 9 11.68 9 9.75C9 7.82 10.57 6.25 12.5 6.25ZM12.5 20.25C10.47 20.25 8.07 19.43 6.36 17.37C8.1116 15.9957 10.2736 15.2488 12.5 15.2488C14.7264 15.2488 16.8884 15.9957 18.64 17.37C16.93 19.43 14.53 20.25 12.5 20.25Z"
                            fill="white" />
                    </svg>
                    Account
                </a>

                <form id="logout-form" action="" method="POST" style="display: none">

                </form>
                <a href="/signout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="flex items-center py-2 pl-4 nav-item text-[#B22234]">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="mr-3">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.8308 14.9008L18.2526 10.9083C18.416 10.7219 18.4996 10.4866 18.4998 10.25C18.4998 10.0882 18.4608 9.92571 18.3816 9.77797C18.3464 9.71213 18.3033 9.64958 18.2526 9.59173L14.8308 5.59921C14.4714 5.17986 13.8401 5.13127 13.4208 5.49066C13.0015 5.85006 12.9529 6.48136 13.3123 6.90071L15.3257 9.24995L7.58103 9.24995C7.02875 9.24995 6.58103 9.69767 6.58103 10.25C6.58103 10.8022 7.02875 11.25 7.58103 11.25L15.3258 11.25L13.3123 13.5993C12.9529 14.0187 13.0015 14.65 13.4208 15.0094C13.8401 15.3688 14.4714 15.3202 14.8308 14.9008ZM8.49976 4.24994C9.05204 4.24994 9.49976 4.69765 9.49976 5.24994L9.49976 6.74994C9.49976 7.30222 9.94747 7.74994 10.4998 7.74994C11.052 7.74994 11.4998 7.30222 11.4998 6.74994L11.4998 5.24994C11.4998 3.59308 10.1566 2.24994 8.49976 2.24994L5.49976 2.24994C3.8429 2.24994 2.49976 3.59308 2.49976 5.24994L2.49976 15.2499C2.49976 16.9068 3.8429 18.2499 5.49976 18.2499L8.49976 18.2499C10.1566 18.2499 11.4998 16.9068 11.4998 15.2499L11.4998 13.7499C11.4998 13.1977 11.052 12.7499 10.4998 12.7499C9.94747 12.7499 9.49976 13.1977 9.49976 13.7499L9.49976 15.2499C9.49976 15.8022 9.05204 16.2499 8.49976 16.2499L5.49976 16.2499C4.94747 16.2499 4.49976 15.8022 4.49976 15.2499L4.49976 5.24994C4.49976 4.69765 4.94747 4.24994 5.49976 4.24994L8.49976 4.24994Z"
                            fill="#B22234" />
                    </svg>
                    Sign Out
                </a>

            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>

        <!-- /mobile header -->

        <!-- content -->

        <div class="flex flex-col overflow-y-scroll">
            <div class="flex bg-white lg:w-[725px] lg:h-[300px] shadow-lg lg:ml-7 lg:mt-7 rounded-xl mx-3 mt-4">
                <div class="flex flex-col">
                    <h1 class="dm-sans-medium text-[18px] text-[#222222] font-semibold mt-6 ml-6 lg:ml-10">Email
                        Address</h1>
                    <p class="lg:ml-10 ml-6 dm-sans-medium text-[12px] text-[#22222299]">Change your account email
                        address</p>

                    <div class="flex flex-col">
                        <div class="flex flex-col">
                            <input type="text" placeholder="Email"
                                class=" lg:w-[602px] h[45px] mt-12 ml-6 lg:ml-10 bg-[#fcfcfd] py-2 pl-3 rounded-lg border border-[#EAEAEB] dm-sans-regular text-[#222222B2] text-[14px] mr-4">
                        </div>
                        <div class="flex justify-end items-end ml-44 pl-44 mb-4">
                            <button
                                class="lg:mt-12 mt-8 lg:ml-8 lg:w-[220px] lg:h-[49px] bg-[#DF5C0C] text-white lg:py-2 p-2 rounded-lg dm-sans-extrabold lg:text-[17px] text[12px] mr-4">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex bg-white lg:w-[725px] lg:h-[400px] shadow-lg lg:ml-7 lg:mb-14 mb-10 mt-7 rounded-xl mx-3">
                <div class="flex flex-col">
                    <h1 class="dm-sans-medium text-[18px] text-[#222222] font-semibold mt-6 ml-6 lg:ml-10">Password
                    </h1>
                    <p class="lg:ml-10 ml-6 dm-sans-medium text-[12px] text-[#22222299]">Change your account password
                    </p>

                    <div class="flex flex-col">
                        <div class="flex flex-col ">
                            <input type="text" placeholder="Current Password"
                                class="lg:w-[602px] h[45px] mt-8 ml-6 lg:ml-10 bg-[#fcfcfd] py-2 pl-3 rounded-lg border border-[#EAEAEB] dm-sans-regular text-[#222222B2] text-[14px] mr-4">
                        </div>
                        <div class="flex flex-col">
                            <input type="text" placeholder="New Password"
                                class="lg:w-[602px] h[45px] mt-8 ml-6 lg:ml-10 bg-[#fcfcfd] py-2 pl-3 rounded-lg border border-[#EAEAEB] dm-sans-regular text-[#222222B2] text-[14px] mr-4">
                        </div>
                        <div class="flex justify-end items-end ml-44 pl-44">
                            <button
                                class="lg:mt-12 mt-8 lg:ml-8 lg:w-[220px] lg:h-[49px] bg-[#DF5C0C] text-white lg:py-2 p-2 rounded-lg dm-sans-extrabold lg:text-[17px] text[12px] mr-4 mb-4">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- /content -->

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
        var chartOne = document.getElementById("chartOne");
        var myChart = new Chart(chartOne, {
            type: "bar",
            data: {
                labels: [
                    "Red",
                    "Blue",
                    "Yellow",
                    "Green",
                    "Purple",
                    "Orange",
                ],
                datasets: [{
                    label: "# of Votes",
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)",
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)",
                    ],
                    borderWidth: 1,
                }, ],
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        },
                    }, ],
                },
            },
        });

        var chartTwo = document.getElementById("chartTwo");
        var myLineChart = new Chart(chartTwo, {
            type: "line",
            data: {
                labels: [
                    "Red",
                    "Blue",
                    "Yellow",
                    "Green",
                    "Purple",
                    "Orange",
                ],
                datasets: [{
                    label: "# of Votes",
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)",
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)",
                    ],
                    borderWidth: 1,
                }, ],
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        },
                    }, ],
                },
            },
        });
    </script>
</body>

</html>
