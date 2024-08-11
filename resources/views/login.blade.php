<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="flex flexcol justify-center">
        <div class="flex h-screen w-full relative items-center">
            <img src="/img/Ellipse 5.png" alt="gradient" class="h-screen w-full">
        </div>
        <div class="flex flex-col justify-center absolute z-10">
            <a href="index.html"><img src="/img/image_4.jpgg" alt="logo"
                    class=" items-center h-[47px] w-[150px] mt-2 mb-5"></a>
        </div>
        <div class="absolute">
            <h1 class="flex-row text-3xl plus-jakarta-sans-bold lg:text-[34px] text-center text-[#222222] mt-28">Sign in
                to your account</h1>
            <h3 class="text-[#222222] text-[18px] dm-sans-regular text-center mt-2 mb-5">Sign in to your TextPlug
                account to access your secure temporary <br>numbers and manage your account settings.</h3>


            <!-- form section -->
            <form action="Sign in"
                class="mt-0 bg-white w-[100%] rounded-3xl items-center justify-center p-10 shadow-lg">
                <div class="flex flex-col justify-center">
                    <label for="Email" class="text-[18px] text-[#222222] dm-sans-medium mb-3">Email address</label>
                    <input type="text" id="Email address" placeholder="Email address" required
                        class="shadow-sm w-76 p-2 border border-gray-200 rounded-lg mb-3 items-center">
                </div>

                <div class="flex flex-col justify-center">
                    <label for="Password" class="text-[18px] text-[#222222] dm-sans-medium mb-3">Password</label>
                    <input type="text" id="Password" placeholder="Password" required
                        class="shadow-sm w-76 p-2 border border-gray-200 rounded-lg items-center">
                </div>
                <div class="flex flex-col justify-center mt-10">
                    <button class="rounded-lg shadow-lg p-2 dm-sans-bold text-[18px] bg-[#DF5C0C] border text-[#ffffff]"
                        type="submit" id="Log in">Log in</button>
                    <a href="#">
                        <p class="text-[#22222299] text-center mt-4">Forgot your password?</p>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Password case sensitivity (JS container)-->
    <!-- <script>
        -- >
        <
        !--document-- >
        <
        !--.getElementById("Log in") -- >
            <
            !--.addEventListener("click", function(event) {
                -- >
                <
                !--
                const password = document.getElementById("Password").value;
                -- >
                <
                !--
                if (password.length < 6) {
                    -- >
                    <
                    !--event.preventDefault();
                    -- >
                    <
                    !--alert("Password must be at least 6 characters long.");
                    -- >
                    <
                    !--
                    return; // Stop the function if the password is too short -->
                    <
                    !--
                }-- >
                <
                !--
                if (!password.split("").some((char) => char >= "A" && char <= "Z")) {
                    -- >
                    <
                    !--event.preventDefault();
                    -- >
                    <
                    !--alert("Password must contain a capital letter.");
                    -- >
                    <
                    !--
                    return; // Stop the function if there's no capital letter -->
                    <
                    !--
                }-- >
                <
                !--
                if (!password.split("").some((char) => char >= "0" && char <= "9")) {
                    -- >
                    <
                    !--event.preventDefault();
                    -- >
                    <
                    !--alert("Password must contain a number.");
                    -- >
                    <
                    !--
                    return; // Stop the function if there's no number -->
                    <
                    !--
                }-- >
                <
                !--
                if (!password.split("").some((char) => "!@#$%^&*()".includes(char))) {
                    -- >
                    <
                    !--event.preventDefault();
                    -- >
                    <
                    !--alert("Password must contain a special character");
                    -- >
                    <
                    !--
                    return; // Stop the function if there's no special character -->
                    <
                    !--
                }-- >
                <
                !--
            });
        -- >
        <
        !--
    </script> -->


    <nav class=" bg-white w-64 h-screen p-8 ">
        <a href="/account" class="flex items-center py-2 px-8 text-gray-600 hover:bg-gray-100 hover:text-gray-700 mt-7">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
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

        <a href="/orders" class="flex items-center py-2 px-8 text-gray-600 hover:bg-gray-100 hover:text-gray-700 mt-7">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.91803 3.5C9.19803 2.91 9.80203 2.5 10.5 2.5H14.5C15.198 2.5 15.801 2.91 16.082 3.5C16.765 3.506 17.298 3.537 17.774 3.723C18.3423 3.94527 18.8364 4.32301 19.2 4.813C19.567 5.307 19.74 5.94 19.976 6.811L20.718 9.533L20.998 10.374L21.022 10.404C21.923 11.558 21.494 13.274 20.636 16.705C20.09 18.888 19.818 19.979 19.004 20.615C18.19 21.25 17.065 21.25 14.815 21.25H10.185C7.93503 21.25 6.81003 21.25 5.99603 20.615C5.18203 19.979 4.90903 18.888 4.36403 16.705C3.50603 13.274 3.07703 11.558 3.97803 10.404L4.00203 10.374L4.28203 9.533L5.02403 6.811C5.26103 5.94 5.43403 5.306 5.80003 4.812C6.16376 4.32238 6.65793 3.945 7.22603 3.723C7.70203 3.537 8.23403 3.505 8.91803 3.5ZM8.92003 5.003C8.25803 5.01 7.99203 5.035 7.77203 5.121C7.466 5.24068 7.19984 5.44411 7.00403 5.708C6.82803 5.945 6.72403 6.276 6.43403 7.343L5.86403 9.432C6.88403 9.25 8.27803 9.25 10.184 9.25H14.815C16.722 9.25 18.115 9.25 19.135 9.43L18.566 7.341C18.276 6.274 18.172 5.943 17.996 5.706C17.8002 5.44211 17.5341 5.23868 17.228 5.119C17.008 5.033 16.742 5.008 16.08 5.001C15.938 5.29985 15.7142 5.55232 15.4346 5.72914C15.1549 5.90596 14.8309 5.99987 14.5 6H10.5C10.1693 5.99996 9.8453 5.9062 9.56566 5.72956C9.28602 5.55293 9.06216 5.30166 8.92003 5.003Z"
                    fill="#222222" fill-opacity="0.7" />
            </svg>
            <span class="pl-5 dm-sans-medium text-[13.5px] text-[#222222B2]">Orders</span>
        </a>

        <a href="/wallet" class="flex items-center py-2 px-8 text-gray-600 hover:bg-gray-100 hover:text-gray-700 mt-7">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.5 20.25C5.4 20.25 4.45833 19.8583 3.675 19.075C2.89167 18.2917 2.5 17.35 2.5 16.25V8.25C2.5 7.15 2.89167 6.20833 3.675 5.425C4.45833 4.64167 5.4 4.25 6.5 4.25H18.5C19.6 4.25 20.5417 4.64167 21.325 5.425C22.1083 6.20833 22.5 7.15 22.5 8.25V16.25C22.5 17.35 22.1083 18.2917 21.325 19.075C20.5417 19.8583 19.6 20.25 18.5 20.25H6.5ZM6.5 8.25H18.5C18.8667 8.25 19.2167 8.29167 19.55 8.375C19.8833 8.45833 20.2 8.59167 20.5 8.775V8.25C20.5 7.7 20.3043 7.22933 19.913 6.838C19.5217 6.44667 19.0507 6.25067 18.5 6.25H6.5C5.95 6.25 5.47933 6.446 5.088 6.838C4.69667 7.23 4.50067 7.70067 4.5 8.25V8.775C4.8 8.59167 5.11667 8.45833 5.45 8.375C5.78333 8.29167 6.13333 8.25 6.5 8.25ZM4.65 11.5L15.775 14.2C15.925 14.2333 16.075 14.2333 16.225 14.2C16.375 14.1667 16.5167 14.1 16.65 14L20.125 11.1C19.9417 10.85 19.7083 10.646 19.425 10.488C19.1417 10.33 18.8333 10.2507 18.5 10.25H6.5C6.06667 10.25 5.68767 10.3627 5.363 10.588C5.03833 10.8133 4.80067 11.1173 4.65 11.5Z"
                    fill="#222222" fill-opacity="0.7" />
            </svg>
            <span class="pl-5 dm-sans-medium text-[13.5px] text-[#222222B2]">Wallet</span>
        </a>

        <a href="/Account" class="flex items-center py-[12px] px-5 bg-[#DF5C0C] text-white rounded-xl mt-7 ml-8">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.5 2.25C6.98 2.25 2.5 6.73 2.5 12.25C2.5 17.77 6.98 22.25 12.5 22.25C18.02 22.25 22.5 17.77 22.5 12.25C22.5 6.73 18.02 2.25 12.5 2.25ZM12.5 6.25C14.43 6.25 16 7.82 16 9.75C16 11.68 14.43 13.25 12.5 13.25C10.57 13.25 9 11.68 9 9.75C9 7.82 10.57 6.25 12.5 6.25ZM12.5 20.25C10.47 20.25 8.07 19.43 6.36 17.37C8.1116 15.9957 10.2736 15.2488 12.5 15.2488C14.7264 15.2488 16.8884 15.9957 18.64 17.37C16.93 19.43 14.53 20.25 12.5 20.25Z"
                    fill="white" />
            </svg>
            <span class="pl-5 dm-sans-medium text-[13.5px] text-[#222222B2]">Account</span>
        </a>

        <a href="/signout" class="flex items-center py-2 px-8 text-gray-600 hover:bg-gray-100 hover:text-gray-700 mt-7">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.8308 14.9008L18.2526 10.9083C18.416 10.7219 18.4996 10.4866 18.4998 10.25C18.4998 10.0882 18.4608 9.92571 18.3816 9.77797C18.3464 9.71213 18.3033 9.64958 18.2526 9.59173L14.8308 5.59921C14.4714 5.17986 13.8401 5.13127 13.4208 5.49066C13.0015 5.85006 12.9529 6.48136 13.3123 6.90071L15.3257 9.24995L7.58103 9.24995C7.02875 9.24995 6.58103 9.69767 6.58103 10.25C6.58103 10.8022 7.02875 11.25 7.58103 11.25L15.3258 11.25L13.3123 13.5993C12.9529 14.0187 13.0015 14.65 13.4208 15.0094C13.8401 15.3688 14.4714 15.3202 14.8308 14.9008ZM8.49976 4.24994C9.05204 4.24994 9.49976 4.69765 9.49976 5.24994L9.49976 6.74994C9.49976 7.30222 9.94747 7.74994 10.4998 7.74994C11.052 7.74994 11.4998 7.30222 11.4998 6.74994L11.4998 5.24994C11.4998 3.59308 10.1566 2.24994 8.49976 2.24994L5.49976 2.24994C3.8429 2.24994 2.49976 3.59308 2.49976 5.24994L2.49976 15.2499C2.49976 16.9068 3.8429 18.2499 5.49976 18.2499L8.49976 18.2499C10.1566 18.2499 11.4998 16.9068 11.4998 15.2499L11.4998 13.7499C11.4998 13.1977 11.052 12.7499 10.4998 12.7499C9.94747 12.7499 9.49976 13.1977 9.49976 13.7499L9.49976 15.2499C9.49976 15.8022 9.05204 16.2499 8.49976 16.2499L5.49976 16.2499C4.94747 16.2499 4.49976 15.8022 4.49976 15.2499L4.49976 5.24994C4.49976 4.69765 4.94747 4.24994 5.49976 4.24994L8.49976 4.24994Z"
                    fill="#B22234" />
            </svg>
            <span class="pl-5 text-[13.5px] dm-sans-medium text-[#B22234]">Sign Out</span>
        </a>
    </nav>
</body>

</html>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#FAFBFC]">
    <!-- Header -->
    <header class="flex justify-between items-center p-4 bg-[#ffffff]">
        <!-- First Image -->
        <img src="/img/image_4.jpg" alt="logo" class="w-[130px] h-[40.73px] mt-3">

        <!-- Text Close to the First Image -->
        <p class="ml-2 text-[#222222] plus-jakarta-sans-medium mr-[800px] text-[27px]">Dashboard</p>

        <div class="flex items-end">
            <img src="/img/Rectangle 1393.jpg" alt="User" class="w-[45px] h-[45px] mr-2">

            <div class="pr-20">
                <p class="text-[12px] text-[#222222] font-semibold">Oladimeji</p>
                <p class="text-[10.5px] text-[#22222280]">Account</p>
            </div>
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                xmlns="http://www.w3.org/2000/svg" class="mr-10">
                <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#3D3C42" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </div>
    </header>

    <div class="flex">
        <nav class=" bg-white w-64 h-screen p-8 ">
            <a href="/dashboard" class="flex items-center py-[12px] px-5 bg-[#DF5C0C] text-white rounded-xl ml-8">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_38_1068" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                        width="25" height="25">
                        <rect x="0.5" y="0.25" width="24" height="24" fill="white" />
                    </mask>
                    <g mask="url(#mask0_38_1068)">
                        <path
                            d="M10.7529 6.13434L11.0313 10.2743L11.1695 12.3551C11.171 12.5691 11.2045 12.7817 11.2692 12.986C11.4361 13.3826 11.8377 13.6346 12.2746 13.617L18.9318 13.1815C19.2201 13.1768 19.4985 13.2846 19.7057 13.4813C19.8784 13.6452 19.9899 13.8596 20.0251 14.0902L20.0369 14.2302C19.7614 18.0449 16.9597 21.2267 13.1529 22.048C9.34604 22.8693 5.44235 21.1343 3.5612 17.7849C3.01888 16.8118 2.68014 15.7423 2.56487 14.639C2.51672 14.3124 2.49552 13.9825 2.50147 13.6525C2.49552 9.56273 5.40796 6.02696 9.48482 5.17457C9.9755 5.09816 10.4565 5.35792 10.6533 5.80553C10.7042 5.90919 10.7378 6.02021 10.7529 6.13434Z"
                            fill="white" />
                        <path opacity="0.4"
                            d="M22.5 10.0622L22.493 10.0948L22.4728 10.1422L22.4756 10.2723C22.4652 10.4446 22.3986 10.6104 22.284 10.7444C22.1645 10.8839 22.0013 10.9789 21.8216 11.0158L21.712 11.0308L14.0312 11.5285C13.7757 11.5537 13.5213 11.4713 13.3314 11.3019C13.173 11.1606 13.0718 10.97 13.0432 10.7646L12.5277 3.095C12.5187 3.06907 12.5187 3.04096 12.5277 3.01502C12.5347 2.80361 12.6278 2.60378 12.7861 2.46017C12.9443 2.31656 13.1547 2.24114 13.37 2.25076C17.9299 2.36677 21.7623 5.64573 22.5 10.0622Z"
                            fill="white" />
                    </g>
                </svg>
                <span class="ml-3 dm-sans-medium text-[13.5px] text-[#ffffff]">Dashboard</span>
            </a>

            <a href="/orders"
                class="flex items-center py-2 px-8 text-gray-600 hover:bg-gray-100 hover:text-gray-700 mt-7">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.91803 3.5C9.19803 2.91 9.80203 2.5 10.5 2.5H14.5C15.198 2.5 15.801 2.91 16.082 3.5C16.765 3.506 17.298 3.537 17.774 3.723C18.3423 3.94527 18.8364 4.32301 19.2 4.813C19.567 5.307 19.74 5.94 19.976 6.811L20.718 9.533L20.998 10.374L21.022 10.404C21.923 11.558 21.494 13.274 20.636 16.705C20.09 18.888 19.818 19.979 19.004 20.615C18.19 21.25 17.065 21.25 14.815 21.25H10.185C7.93503 21.25 6.81003 21.25 5.99603 20.615C5.18203 19.979 4.90903 18.888 4.36403 16.705C3.50603 13.274 3.07703 11.558 3.97803 10.404L4.00203 10.374L4.28203 9.533L5.02403 6.811C5.26103 5.94 5.43403 5.306 5.80003 4.812C6.16376 4.32238 6.65793 3.945 7.22603 3.723C7.70203 3.537 8.23403 3.505 8.91803 3.5ZM8.92003 5.003C8.25803 5.01 7.99203 5.035 7.77203 5.121C7.466 5.24068 7.19984 5.44411 7.00403 5.708C6.82803 5.945 6.72403 6.276 6.43403 7.343L5.86403 9.432C6.88403 9.25 8.27803 9.25 10.184 9.25H14.815C16.722 9.25 18.115 9.25 19.135 9.43L18.566 7.341C18.276 6.274 18.172 5.943 17.996 5.706C17.8002 5.44211 17.5341 5.23868 17.228 5.119C17.008 5.033 16.742 5.008 16.08 5.001C15.938 5.29985 15.7142 5.55232 15.4346 5.72914C15.1549 5.90596 14.8309 5.99987 14.5 6H10.5C10.1693 5.99996 9.8453 5.9062 9.56566 5.72956C9.28602 5.55293 9.06216 5.30166 8.92003 5.003Z"
                        fill="#222222" fill-opacity="0.7" />
                </svg>
                <span class="pl-5 dm-sans-medium text-[13.5px] text-[#222222B2]">Orders</span>
            </a>

            <a href="/wallet"
                class="flex items-center py-2 px-8 text-gray-600 hover:bg-gray-100 hover:text-gray-700 mt-7">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.5 20.25C5.4 20.25 4.45833 19.8583 3.675 19.075C2.89167 18.2917 2.5 17.35 2.5 16.25V8.25C2.5 7.15 2.89167 6.20833 3.675 5.425C4.45833 4.64167 5.4 4.25 6.5 4.25H18.5C19.6 4.25 20.5417 4.64167 21.325 5.425C22.1083 6.20833 22.5 7.15 22.5 8.25V16.25C22.5 17.35 22.1083 18.2917 21.325 19.075C20.5417 19.8583 19.6 20.25 18.5 20.25H6.5ZM6.5 8.25H18.5C18.8667 8.25 19.2167 8.29167 19.55 8.375C19.8833 8.45833 20.2 8.59167 20.5 8.775V8.25C20.5 7.7 20.3043 7.22933 19.913 6.838C19.5217 6.44667 19.0507 6.25067 18.5 6.25H6.5C5.95 6.25 5.47933 6.446 5.088 6.838C4.69667 7.23 4.50067 7.70067 4.5 8.25V8.775C4.8 8.59167 5.11667 8.45833 5.45 8.375C5.78333 8.29167 6.13333 8.25 6.5 8.25ZM4.65 11.5L15.775 14.2C15.925 14.2333 16.075 14.2333 16.225 14.2C16.375 14.1667 16.5167 14.1 16.65 14L20.125 11.1C19.9417 10.85 19.7083 10.646 19.425 10.488C19.1417 10.33 18.8333 10.2507 18.5 10.25H6.5C6.06667 10.25 5.68767 10.3627 5.363 10.588C5.03833 10.8133 4.80067 11.1173 4.65 11.5Z"
                        fill="#222222" fill-opacity="0.7" />
                </svg>
                <span class="pl-5 dm-sans-medium text-[13.5px] text-[#222222B2]">Wallet</span>
            </a>

            <a href="/account"
                class="flex items-center py-2 px-8 text-gray-600 hover:bg-gray-100 hover:text-gray-700 mt-7">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.5 2.25C6.98 2.25 2.5 6.73 2.5 12.25C2.5 17.77 6.98 22.25 12.5 22.25C18.02 22.25 22.5 17.77 22.5 12.25C22.5 6.73 18.02 2.25 12.5 2.25ZM12.5 6.25C14.43 6.25 16 7.82 16 9.75C16 11.68 14.43 13.25 12.5 13.25C10.57 13.25 9 11.68 9 9.75C9 7.82 10.57 6.25 12.5 6.25ZM12.5 20.25C10.47 20.25 8.07 19.43 6.36 17.37C8.1116 15.9957 10.2736 15.2488 12.5 15.2488C14.7264 15.2488 16.8884 15.9957 18.64 17.37C16.93 19.43 14.53 20.25 12.5 20.25Z"
                        fill="#222222" fill-opacity="0.7" />
                </svg>
                <span class="pl-5 dm-sans-medium text-[13.5px] text-[#222222B2]">Account</span>
            </a>

            <a href="/signout"
                class="flex items-center py-2 px-8 text-gray-600 hover:bg-gray-100 hover:text-gray-700 mt-7">
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.8308 14.9008L18.2526 10.9083C18.416 10.7219 18.4996 10.4866 18.4998 10.25C18.4998 10.0882 18.4608 9.92571 18.3816 9.77797C18.3464 9.71213 18.3033 9.64958 18.2526 9.59173L14.8308 5.59921C14.4714 5.17986 13.8401 5.13127 13.4208 5.49066C13.0015 5.85006 12.9529 6.48136 13.3123 6.90071L15.3257 9.24995L7.58103 9.24995C7.02875 9.24995 6.58103 9.69767 6.58103 10.25C6.58103 10.8022 7.02875 11.25 7.58103 11.25L15.3258 11.25L13.3123 13.5993C12.9529 14.0187 13.0015 14.65 13.4208 15.0094C13.8401 15.3688 14.4714 15.3202 14.8308 14.9008ZM8.49976 4.24994C9.05204 4.24994 9.49976 4.69765 9.49976 5.24994L9.49976 6.74994C9.49976 7.30222 9.94747 7.74994 10.4998 7.74994C11.052 7.74994 11.4998 7.30222 11.4998 6.74994L11.4998 5.24994C11.4998 3.59308 10.1566 2.24994 8.49976 2.24994L5.49976 2.24994C3.8429 2.24994 2.49976 3.59308 2.49976 5.24994L2.49976 15.2499C2.49976 16.9068 3.8429 18.2499 5.49976 18.2499L8.49976 18.2499C10.1566 18.2499 11.4998 16.9068 11.4998 15.2499L11.4998 13.7499C11.4998 13.1977 11.052 12.7499 10.4998 12.7499C9.94747 12.7499 9.49976 13.1977 9.49976 13.7499L9.49976 15.2499C9.49976 15.8022 9.05204 16.2499 8.49976 16.2499L5.49976 16.2499C4.94747 16.2499 4.49976 15.8022 4.49976 15.2499L4.49976 5.24994C4.49976 4.69765 4.94747 4.24994 5.49976 4.24994L8.49976 4.24994Z"
                        fill="#B22234" />
                </svg>
                <span class="pl-5 text-[13.5px] dm-sans-medium text-[#B22234]">Sign Out</span>
            </a>
        </nav>

        <div class="flex bg-white w-[725px] h-[290px] shadow-lg ml-16 mt-7 rounded-xl">
            <div class="flex flex-col">
                <h1 class="dm-sans-medium text-[18px] text-[#222222] text-2xl font-semibold mt-4 ml-6">Overview</h1>
                <p class="ml-6 dm-sans-medium text-[12px] text-[#22222299]">Your Account Summary</p>

                <div class="flex flex-row pl-8">
                    <div class="bg-[#FFE2E5] w-[135px] h-[138px] shadow-lg mt-7 rounded-xl">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ml-6 mt-4">
                            <circle cx="15" cy="15" r="15" fill="#FA5A7D" />
                            <path
                                d="M10.5 21C9.675 21 8.96875 20.7063 8.38125 20.1188C7.79375 19.5313 7.5 18.825 7.5 18V12C7.5 11.175 7.79375 10.4688 8.38125 9.88125C8.96875 9.29375 9.675 9 10.5 9H19.5C20.325 9 21.0313 9.29375 21.6188 9.88125C22.2063 10.4688 22.5 11.175 22.5 12V18C22.5 18.825 22.2063 19.5313 21.6188 20.1188C21.0313 20.7063 20.325 21 19.5 21H10.5ZM10.5 12H19.5C19.775 12 20.0375 12.0312 20.2875 12.0938C20.5375 12.1562 20.775 12.2562 21 12.3937V12C21 11.5875 20.8533 11.2345 20.5597 10.941C20.2662 10.6475 19.913 10.5005 19.5 10.5H10.5C10.0875 10.5 9.7345 10.647 9.441 10.941C9.1475 11.235 9.0005 11.588 9 12V12.3937C9.225 12.2562 9.4625 12.1562 9.7125 12.0938C9.9625 12.0312 10.225 12 10.5 12ZM9.1125 14.4375L17.4562 16.4625C17.5687 16.4875 17.6813 16.4875 17.7938 16.4625C17.9062 16.4375 18.0125 16.3875 18.1125 16.3125L20.7188 14.1375C20.5813 13.95 20.4062 13.797 20.1937 13.6785C19.9812 13.56 19.75 13.5005 19.5 13.5H10.5C10.175 13.5 9.89075 13.5845 9.64725 13.7535C9.40375 13.9225 9.2255 14.1505 9.1125 14.4375Z"
                                fill="white" />
                        </svg>
                        <h1 class="dm-sans-medium text-[18px] text-[#222222] text-2xl font-semibold mt-2 ml-6">N5,000
                        </h1>
                        <p class="ml-6 dm-sans-medium text-[12px] text-[#22222299]">Balance</p>
                    </div>

                    <div class="bg-[#FFF4DE] w-[135px] h-[138px] shadow-lg ml-10 mt-7 rounded-xl">
                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ml-6 mt-4">
                            <circle cx="15.25" cy="15" r="15" fill="#FF947A" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.3135 8.4375C12.5235 7.995 12.9765 7.6875 13.5 7.6875H16.5C17.0235 7.6875 17.4757 7.995 17.6865 8.4375C18.1987 8.442 18.5985 8.46525 18.9555 8.60475C19.3816 8.77145 19.7523 9.05476 20.025 9.42225C20.3002 9.79275 20.43 10.2675 20.607 10.9207L21.1635 12.9622L21.3735 13.593L21.3915 13.6155C22.0672 14.481 21.7455 15.768 21.102 18.3412C20.6925 19.9785 20.4885 20.7968 19.878 21.2738C19.2675 21.75 18.4237 21.75 16.7362 21.75H13.2637C11.5762 21.75 10.7325 21.75 10.122 21.2738C9.51146 20.7968 9.30671 19.9785 8.89796 18.3412C8.25446 15.768 7.93271 14.481 8.60846 13.6155L8.62646 13.593L8.83646 12.9622L9.39296 10.9207C9.57071 10.2675 9.70046 9.792 9.97496 9.4215C10.2478 9.05429 10.6184 8.77125 11.0445 8.60475C11.4015 8.46525 11.8005 8.44125 12.3135 8.4375ZM12.315 9.56475C11.8185 9.57 11.619 9.58875 11.454 9.65325C11.2244 9.74301 11.0248 9.89558 10.878 10.0935C10.746 10.2713 10.668 10.5195 10.4505 11.3197L10.023 12.8865C10.788 12.75 11.8335 12.75 13.263 12.75H16.7362C18.1665 12.75 19.2112 12.75 19.9762 12.885L19.5495 11.3183C19.332 10.518 19.254 10.2697 19.122 10.092C18.9751 9.89408 18.7755 9.74151 18.546 9.65175C18.381 9.58725 18.1815 9.5685 17.685 9.56325C17.5785 9.78739 17.4106 9.97674 17.2009 10.1094C16.9911 10.242 16.7481 10.3124 16.5 10.3125H13.5C13.2519 10.3125 13.0089 10.2421 12.7992 10.1097C12.5895 9.9772 12.4216 9.78874 12.315 9.56475Z"
                                fill="white" />
                        </svg>
                        <h1 class="dm-sans-medium text-[18px] text-[#222222] text-2xl font-semibold mt-2 ml-6">5</h1>
                        <p class="ml-6 dm-sans-medium text-[12px] text-[#22222299]">Total Orders</p>
                    </div>

                    <div class="bg-[#DCFCE7] w-[135px] h-[138px] shadow-lg ml-10 mt-7 rounded-xl">
                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ml-6 mt-4">
                            <circle cx="15.5" cy="15" r="15" fill="#3CD856" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.0144 8.25C13.3205 8.25 11.7774 8.8095 10.8643 9.26663C10.7818 9.30788 10.7049 9.34837 10.6333 9.38737C10.4915 9.46463 10.3708 9.53663 10.2748 9.6L11.3135 11.1293L11.8025 11.3239C13.7135 12.288 16.2763 12.288 18.1877 11.3239L18.7427 11.0359L19.7248 9.6C19.5214 9.46727 19.3098 9.34741 19.0914 9.24112C18.1828 8.78887 16.6764 8.25 15.0148 8.25M12.599 9.981C12.2312 9.91217 11.8679 9.821 11.5112 9.708C12.3665 9.32812 13.6412 8.925 15.0148 8.925C15.9662 8.925 16.8658 9.1185 17.6098 9.36375C16.7379 9.48638 15.8075 9.6945 14.921 9.95062C14.2235 10.1524 13.4083 10.1306 12.599 9.981ZM18.584 11.88L18.4918 11.9265C16.3895 12.987 13.601 12.987 11.4988 11.9265L11.4114 11.8822C8.25278 15.3476 5.84153 21.7489 15.0144 21.7489C24.1873 21.7489 21.7175 15.2288 18.584 11.88ZM14.6248 15C14.4259 15 14.2351 15.079 14.0944 15.2197C13.9538 15.3603 13.8748 15.5511 13.8748 15.75C13.8748 15.9489 13.9538 16.1397 14.0944 16.2803C14.2351 16.421 14.4259 16.5 14.6248 16.5V15ZM15.3748 14.25V13.875H14.6248V14.25C14.227 14.25 13.8454 14.408 13.5641 14.6893C13.2828 14.9706 13.1248 15.3522 13.1248 15.75C13.1248 16.1478 13.2828 16.5294 13.5641 16.8107C13.8454 17.092 14.227 17.25 14.6248 17.25V18.75C14.2985 18.75 14.0207 18.5419 13.9172 18.2501C13.9018 18.2024 13.877 18.1582 13.8443 18.1202C13.8116 18.0822 13.7716 18.0512 13.7266 18.0289C13.6817 18.0067 13.6328 17.9937 13.5827 17.9906C13.5327 17.9876 13.4825 17.9947 13.4352 18.0114C13.388 18.0281 13.3445 18.0541 13.3075 18.0879C13.2704 18.1217 13.2405 18.1626 13.2196 18.2081C13.1986 18.2536 13.187 18.3029 13.1854 18.353C13.1838 18.4032 13.1922 18.4531 13.2103 18.4999C13.3137 18.7924 13.5053 19.0456 13.7586 19.2247C14.0119 19.4038 14.3145 19.5 14.6248 19.5V19.875H15.3748V19.5C15.7726 19.5 16.1541 19.342 16.4354 19.0607C16.7167 18.7794 16.8748 18.3978 16.8748 18C16.8748 17.6022 16.7167 17.2206 16.4354 16.9393C16.1541 16.658 15.7726 16.5 15.3748 16.5V15C15.701 15 15.9789 15.2081 16.0824 15.4999C16.0978 15.5476 16.1225 15.5918 16.1553 15.6298C16.188 15.6678 16.228 15.6988 16.2729 15.7211C16.3178 15.7433 16.3668 15.7563 16.4168 15.7594C16.4669 15.7624 16.517 15.7553 16.5643 15.7386C16.6116 15.7219 16.655 15.6959 16.6921 15.6621C16.7291 15.6283 16.759 15.5874 16.78 15.5419C16.801 15.4964 16.8126 15.4471 16.8142 15.397C16.8158 15.3468 16.8073 15.2969 16.7893 15.2501C16.6858 14.9576 16.4943 14.7044 16.241 14.5253C15.9876 14.3462 15.685 14.25 15.3748 14.25ZM15.3748 17.25V18.75C15.5737 18.75 15.7645 18.671 15.9051 18.5303C16.0458 18.3897 16.1248 18.1989 16.1248 18C16.1248 17.8011 16.0458 17.6103 15.9051 17.4697C15.7645 17.329 15.5737 17.25 15.3748 17.25Z"
                                fill="white" />
                        </svg>
                        <h1 class="dm-sans-medium text-[18px] text-[#222222] text-2xl font-semibold mt-2 ml-6">N3,000
                        </h1>
                        <p class="ml-6 dm-sans-medium text-[12px] text-[#22222299]">Amount Spent</p>
                    </div>

                    <div class="bg-[#44B0FF33] w-[135px] h-[138px] shadow-lg ml-10 mt-7 rounded-xl">
                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ml-6 mt-4">
                            <circle cx="15.75" cy="15" r="15" fill="#44B0FF" />
                            <g clip-path="url(#clip0_38_1163)">
                                <path
                                    d="M21.5397 11.957C21.211 11.1726 20.7329 10.4597 20.132 9.85791C19.5328 9.25508 18.8211 8.7758 18.0372 8.44726C17.2342 8.10907 16.3714 7.93572 15.5001 7.9375H15.4708C14.5846 7.94189 13.7277 8.11767 12.9205 8.46338C12.1434 8.79528 11.4384 9.27542 10.8449 9.87695C10.2497 10.4774 9.77709 11.1878 9.45325 11.9687C9.1171 12.7808 8.94677 13.6519 8.95228 14.5308C8.95667 15.5474 9.19984 16.5566 9.65394 17.459V19.6855C9.65394 20.0576 9.9557 20.3594 10.3263 20.3594H12.5499C13.4565 20.8168 14.4569 21.0575 15.4723 21.0625H15.5031C16.379 21.0625 17.2272 20.8926 18.027 20.5601C18.8069 20.2354 19.5159 19.7617 20.1144 19.1655C20.7179 18.5664 21.1925 17.8662 21.525 17.0854C21.8693 16.2769 22.0451 15.417 22.0494 14.5293C22.0524 13.6372 21.8795 12.7715 21.5397 11.957ZM12.5763 15.2031C12.1896 15.2031 11.8746 14.8882 11.8746 14.5C11.8746 14.1118 12.1896 13.7969 12.5763 13.7969C12.963 13.7969 13.278 14.1118 13.278 14.5C13.278 14.8882 12.9645 15.2031 12.5763 15.2031ZM15.5001 15.2031C15.1134 15.2031 14.7985 14.8882 14.7985 14.5C14.7985 14.1118 15.1134 13.7969 15.5001 13.7969C15.8868 13.7969 16.2018 14.1118 16.2018 14.5C16.2018 14.8882 15.8868 15.2031 15.5001 15.2031ZM18.424 15.2031C18.0372 15.2031 17.7223 14.8882 17.7223 14.5C17.7223 14.1118 18.0372 13.7969 18.424 13.7969C18.8107 13.7969 19.1256 14.1118 19.1256 14.5C19.1256 14.8882 18.8107 15.2031 18.424 15.2031Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_38_1163">
                                    <rect width="15" height="15" fill="white" transform="translate(8 7)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <h1 class="dm-sans-medium text-[18px] text-[#222222] text-2xl font-semibold mt-2 ml-6">5</h1>
                        <p class="ml-6 dm-sans-medium text-[15px] text-[#22222299]">Received Codes</p>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="flex flex-col bg-[#DF5C0C] w-[337px] h-[292.24px] shadow-xl ml-20 mt-7 rounded-xl justify-center items-center">
            <svg width="43" height="41" viewBox="0 0 43 41" fill="none"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                class="items-center  w-[43px] h-[41px]">
                <rect width="43" height="41" fill="url(#pattern0_42_3076)" />
                <defs>
                    <pattern id="pattern0_42_3076" patternContentUnits="objectBoundingBox" width="1"
                        height="1">
                        <use xlink:href="#image0_42_3076" transform="scale(0.0100775 0.0105691)" />
                    </pattern>
                    <image id="image0_42_3076" width="300" height="94"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAABeCAYAAACZ4CkLAAAAAXNSR0IArs4c6QAAIABJREFUeF7tXXfcLFWRPdVhHhhQgiIYVxQBieaABEEJkoMoGVxAUEF3zawBdcWAu0ZwRUkiAoIIKEEElChBYVkJKypgQERWUBF406F2Tk/PTE9Ph9s9Pd/3vff6/n7vn/fdvre6uud0Vd2qU4IFNFR1BQTBqyG6AaDrA7IOgDPFdj+5gMRsRWk10GpgnjQg87RvtK2qLo8g2AqC1wK6MYCNMuT5sNjux+dTznbvVgOtBhaGBuYFsFS7r0BoHQiEewCyQokqPiq2e9TCUFcrRauBVgPzqYE5BSwNuocAcgSAtSvcdGthVVBWO7XVwNKsgZkDlqo+AaF/KIB3Ali9hjJbC6uG0tpLWg0sjRqYGWCpqoPQe2tPaR8FZOUplNc4YKnqaoC/BqAeENwvsvxdU8jXXtpqoNXAHGlgJoClvr8dJDwGkBc0cB9TA5Z63uawsCUUm0CwHoAnZch1OyCXIdTvi+te1IDc7RKtBloNNKyBRgFLVR+H0DsBkD2ml1MfhMj1CHCMuO6Pqq6nqoLAOwCCowF5arXr9Tao9XHY9pkiEla7tp3daqDVwKw00BhgqXY3RGh9B9Dn1RT2F4BcCQ2vh603iCy6teY6UF28FkLrDADr110juk5xDWxnNxH541TrtBe3Gmg10IgGGgEs9bv7Q+TE6hLJXYB+DZZzgojcX/36yStUvU0R4twct6/GFvog1NpLHOfCGhe3l7QaaDXQoAamBiwNvE8AOLKSTIKLEeDT4rqXV7quZLL63X0hcnKTaw7XUtlRHOe8mazdLtpqoNWAkQamAiwN/BMAPcBoJ04SvRyCD4p0fmp8jeFE9bsHQOQEg+n3QXADFLcAWA6CdaCyJqBrlF4bYmtx3YtL57UTWg20GpiJBmoDlobeBVBsYyjVP6B6hDidbxjOrzRNfX8/iJ5UctH7YTmnisgfsuap6ioIg08AekjBOg/D8tYWedzvKwnYTm410GqgEQ1UBixVfTzU/z4UmxlJoLgKtr+PyPJ3G82vOKkcrORuWOHuIp0bTZaODg8COR6Cl2TOF1wslru1yVrtnFYDrQaa1UAlwFLVJyLwfwjBKwzECAD8OyznqFmlBqjf3Qcip+TKwliZRKd8DxvIO5wSgXLoXw1gg8zrQmwhrntZlTXbua0GWg1Mr4FqgBV2L4HKlgbb/hEW9hBxrzSYW2uK+v6eEP0mACtngZtgORuLyCN1NlDVVRH6tMqeMXG94PtiudvXWbe9ptVAq4H6GjAGLA0Wfxaw3l2+lf4vLHeLvFhR+fXlM9T3947BKmeyngbLPaguWA0WVV38QoRyLSBPnNjICp4vstyvyqVtZ7QaaDXQlAaMAEt9f0eIfq90U8VPYDs7iMjfSufWnFBqWQnOgjh7NOWGFgD1+8R2P1PzNtrLWg20GqihgVLAUn1sDYQ2UwAeV7i+4Dyx3B1ryGB8yVyDFQVTz9sCFiZLgwRni+XuZix8O7HVQKuBqTVQDli+dxUEry4Bq3Mhzq4iwkD7TIb6/q4QPTM3ZiU4D+Ls3JRlNXILtYPQp8W4aPzG9Hdid541k5ttF2010GogUwOFgKVB9+09apgvlYDVD8Ryt5ulftX33wTRb+fuIThHLHeXWcmgYfcyqGw+sb7lrCgiD81q33bdVgOtBsY1kAtYqvpshP5txa4gc5zsjWb5o1Xf3wOipxeA1bliuTvN8sFq0D0VkL0mAStYQ2S538xy73btVgOtBkYayAes0DsHiiIgWAwrfInIol/MSqGxG0jWBTvHPrwI4mw3S1eU+2rofReKnTMsrKeKyJ9ndf/tuq0GWg0YWFiq3msQ4opiZekRYne+OCuFqu+/EaIEq+whuEAs9w2z2j+5rgbe/wBYN7XXA2K7T5mL/ds9Wg20GuhrYMLCUlULIX+gUU/AvHGr2G76B9yYTg0sq8sgztYi4jW2acFCGniPTQTdVa8Qp7PpXOzf7rHsaUAD74OAHDi68/ALYneK48nLgJomAcuskJiq+YjY7sea1pH6/m4Q/U6+ZaU/grjbiwhBZCZDA+8oWM6nRORR9bzXw0IGQ4McJ7Zz2EwEaBdd5jWgQfc/AHlXQhEz+b0taYqeBKyge4cxF7viOtjh/iKL7mjixg3A6lKIy5jV7MAq9M7uUc/sAtUrYLvbQP3zoWz0mh56ePvFa+Kpt2tkaaAFrOz3Ygyw1PO2hoUazJp6Kiw9WmQRTxVrjXKwAt1AgtWjtTYwuEhD7ywodk1MvSmnGzVgOU8XkXsNlp3VlHcAY7IeD+Bbs9psCVv3IwCSaSifBfCDJekeWsAyAazQ+yEUr6v9YAXnQMKPiCxikNp4aNA9GJD/yr2gX/KzbdXaQNXHno/Q3h2QZ0F0VUCfAMWfAdIx622w3O8NqJkzwKpI/s+I7b7P+AZnM5HxjLcnlibr6ydns9UStyoTjHdPSH1Qr4j960vSXbSAVQJYqo88A6H7u4KHSstmebOHLsfCso8sy89S1eUQBl8ElC9U9lBcCTsKsBuzLkS5W9DDIXhVqbyKq2Hpo4YsFExy+Bss9zki8mDp2rOd0AJWvn5bwJrtuzdvqw9dQg289/SSRIuKeT8G6AOAmKYyPALoeVDr27DtK9M/cPX9nSDh5wF5dgFY/RS2s6WI/MNEQ6qL10NgHVdaSmSyWP6cD4jtfmq6JRq5ugWsFrAaeZGWpEVGgOV7N+SybAJ+HLO5X7W7AUJh5vlaFW/0dqj+GSJPi1vWP6HwesW1sJ3Xm5LvGZURVRQ4c7rlPFtEftvEUlOu0QJWC1hTvkJL3uURYJW6gxmEdXG3nCMAFANPHZ1Ep4+RZWXEFKqB/7VCt7KODPnX3ALL2bTM3W12y8zVWsBqAWsOXrOFtUUfsILuYYB8Jd81033F6ZDdc2yo6pMQ+ocC+FcAqzRya4LzIc6exmAVeuSXn5OM9+H9KeiqkqTQOK7WiG7GF2kBqwWsGbxWC3vJAWB9C5A9c0T1YDkrFQGIqi6P0PtnAO8B5JlT3HKl5DiDzj3/AJRNVX8KC9cB7i3A4tUROGtBwj0BYX1gMc9X3s1YeI2Ie9UU9zrtpXMJWNQR26Dx0IXu8H3TCj/j6+cl6K6qTwU8vv8B4N5pGnvN0sXSdkoYndjDXgXw/zhNQ5oBYN2dG/wWXCSWa9rOC+r728DSA6Ag5/lyRi9mlA4RvNeUcjg6XVRaVrJFwfo3wwp2L1pTVVdEGBwFKHOazIfK9uI43ze/YOqZGwNgw9rkeB6Apyf+464YTIo22wrAYgNpXhCnTLD0iJxfT8q45te9PDCmr7BxbRkbLTsQHZNa4/3Rh6TeYBjirPj9WhkAQeIeAIOTW5aVJes8fwngjwVb8QQ8esc18I6G4pXDuba+T6RzXSaosMOSyoehsn5OX8u/AiCN9mWwnC+JSNEp/NgWZYClvvfj4QWWemJ16qcjpW5OdfFaCKyvDv9b5LYqVR2xAbM/VPaAYE0Aq2Xo714ofg3IceI4udRRGnoXIoyzEywEoqqrIfSLEiArWT0DwaLOM4H3Roj1Yog+Gxq9+DwRdAG5FxLeDcUFsNyzy4LYUestuL+ilWcGVuExYi/iqafRiPO1WGi9UekFKjuI45xfOq/ZCbQEv9vAkvyhF5247gHgbQBeU3EvgsXXemGBLwPIo8cmwCddd/6QXwigW3EvTmf4osmyKLr2j48AKx1iUNlWHGcsmbpPveR9ssAryb6lKNyBo0Xca8vuuQiwVNVF6Cf15ontdsrWNP27avdlCGUE0orrxXFfXna9qq6OMPgAEO6X2Qchf4GfIcS7xXVHIBzP1cBjHDt6NhzSTy/Qc3LXmueWVqqL10ZoXQvFrczHgvrnFfZEVHmzOE4+f1bOjarqSgh9vkj8ImQNHyq7zANYUZZZAxYtKLZL26HspSz5O608VgqwQiA9ngqAlk7SWmMG+nsr7vniHvDdkCjcDws6J5kubQxY6ncPhMi0DYE/LLb78SLhljTAUvU2RRhZvVPEsvV0sTtvTuplErDK8q8s54mmAXDTt8N0XmSahhZpbgbmPU3sLPekv6TKXuI4p5mun56nqk9H6F2d4x6/W2z3c4UvmT72XIT2vrlzrOBUU7c3tcYsXUK6ayw2f06G3AQxunzsdP0nANT/PwFYFYi40mjlTHYUAuhi09pKj717sbDk4Q0ptZnce73hMyMv2s0pqh9+nNIuR32XsMDCUr97AEROmJRVfwuR26G4vQ+kuhqU1RUF/TsFZ0Oc/fLiXEsSYGnQfRcgzOF0DJ9j/rQU1XkvP5QewSDOHIgG/vGAMmCeMeRusR2+oHM+VB99DkLnmhz/Ny1PAJXdxHHKYiml96G+/2aIZoBeOTtDbA3m11OqHiBO56RSIcwmNBF0pzVJAEhXMBwbNcEFymol6WIStFi7lz68yCuHmcY1pDX26YR67ozBK+1W1g6657mE6nf3hQjBuz8UN0LwbVjOaSKSewgRccsF+EwmeBX0t1xSAEuD7tsAyfo4mb3FmbAz6nw1CVgM3gmyeZ0El4jlvr7+zvWu7Hde9m43PnFUeZM4Tj7ZXwUx4q7PD0weGOg9YneyrJDROxxxiflFjThqxQNzxJ8WsHgg8jMASd4z0j0zjsUGslUGg960xjZLXMQvI9dOJ9nWdQ3Z0JYuZRJc2YE8KyDeJGC9AbZ9K0L/7tGDrm7Ja9B9JyD/OalUPUzsznHp/18SAEv1sechtHnwYna4VuWNgr5N7M6xGRZWN/+EEHKs2A6DsHM+NPCY25U+WZqZZZVcWH3v2swvohWuXUalo4F/F6A5wCbfENvJsWYrq3hawGKx+cGJXQlWL4rdvsrCxDGly1KgRQuZAXzGmZJjnxjgBv9n4hpeBICnnINBKzDv3WwSsLaF0P1V6upPsHR7kQ5jaJVHvzGvfW7qRPExWMGGIsv979g7WMCHtRCC7v064KgzOg9O6g66kQwtZMWNfy+2+8ysGNb9qSPg5OYfFNs9uq40016ngfeBYgaCiHHh5U3H2DToZuelGVhy6ntX5xZdN9u7cRrAYtu2ZA4ZrSHGsqblNWPA9edxmsHg8bN349kZ70IV15BWX/Ig5Q9xaVheJURzgAV9KyA84n8UVvhSkUW3TvNeaz/OyT6fw5MvCH4sljvWlWmhW1gaeGn3vJpaVA8Wp3O8qj4NoX95dqmfHgoIjZbEKWHQ/VvBEeS8F/qWWlr9Mp7Nm+TJinJxAOYJpYa+Q+xOob+uoXcxFNlutOAysdyi3LEqD30awOIpV4J+N7JUaLE0MdjyLZn2wZSAbTMWznIN+cVN0/YwTsZYFWtQB4P6vaRA2AYBS34dWUQ1T5+zZMzsV2B5zxR5HA83orHwAat7awmNeuLW5etQXAjbu0lkeZ4kj40o4Tb0aZ2nrDW9p5enxQOeocspmXzlo+XeK7bLo+d5HT0ZCR75ll4NCpqiG9LA4w8nK4/r38R2GYzOHYW8Wob5LIbKrgtYfPiM0Q2+WjzS5ylsU2VGPMljJ6EVB7+9HhcV409ZAXyeqI4C2VGG+MSpIeM7b03ohGBEi6toNAhYkbPbeCs5DTy6gElXaOwUeiEDVkyAwMOaksE2gLqXiMvQQOFQ1ZUR+j8pcTF5SuhpwUqlR/llgjT1dwNL66q4YNokk7tYeWH3kmx+LD1E7A4TJPMBK/BPBHT/nAlNNu+oC1jp+BEtxmqZ/uUPNS0b9ZEEpuQKRa4hM86vTuRcMa2CJUL/N6eApbJzEyfQSZk16NLdSVq1N4ntMoYYjQUNWPkf9L7wgu9FWeyWc5SI/L38dYnvOcqFZAa/rJd3DQGLC+YxLpQmuJkK08S8UtCSiEaZzKRTgZYG3QcBefKEzCrbieMUUu1q0D0ZkLxcrIUAWKRSTgb+6cI1TR+cBkWWFX0o5x3Icg2ZuvBvANjzkmVCg3FAL1/MJC2kQQtLH4LlPkVE/Cbe4SEgqT4Foc/48WhYjjvYZ0EDVnGc9jtiuW+sq6s4nWnCbRysR8CiqZ5V68M5C4EKeHjvcWLnfwPC+rHsIbgE4uxQt1FFv7zAZ1B3cljOqgNK5bztddDEImuC4kZx3JfWfZip6+paWIwpbZ1Yi4DAdIEmB2NWSRBkwHwsgzm1WRrgeKrI+rJkt+0f9awt03q55gCrIFdqWoVp4P8G0FGeoxU8f5BYvKABK+gytsRSu9TQb8Fy9xGRIq8tV21RDWLgX1aQcBu5hHxZn5/z65+3tIYJVURA4l1TyFA6hOHI0qrVt1AD7/O9IlryfI0Pw/hTYdC92V6GdQGLVssguMmY0aI+u0Cjg/lRyXo5Hn+XAXXaNUwKxOJk5nSNcqGKxW0OsCBfEdtJcuc3pqiJdyXE5oN6uoUNWBlhJMHZYrk8Ea49NOieAgg/XrmDgMWXifVZGUNPFruTF4+pLVjVC/tWjyFYjUCLbexpaRk3W42YJkQvyJHvyF6BaWmTB/W9ayCJav/kYoLzxXKnrdcbrFgXsB5KlDcxQ7vI8qn6qAbz+fVNxqz4UUy6dlnrZrmGg3nv7pUAFZZFpRZsELAws4OnifQZlX3EcU7lvSxUwFLVVRH6GZn9ej+s4BVZp4CmL5GG3pm9muFk85D0pYFo6F2a3XcvKj/4iThuMnvZdO/G5vXdwOCq/GTMIjg2B4jYFfzvnOLNh2E5zxURnn4VDg08Hk0naV8S8+V4sZ1ksmbZckV/rwNYPBk0YnGdRrCMa5mblfNRHJvNDwJz75KD176sohXYHGCp7CGOw/UaHxp0vwDI4YmFh2lECxewuhshFD6TjCG/gWW/sixskqdIDbonAbJfkaJZS/hfcRZvxjy9v1c2wDyIeRkxWF055uePSaLMIftCQUDX6Eha+wFQFlnn8dQbfWVV1Ubo06KbaFAbi32U2O5HG1JmHcBivV+SXoaulmnh8TRiM0mVQfSiwbgkj/rT8Ul+RJjUWiXo3SRg1WL/MFGWBh5Ldd6ZmDu04hcwYL0coeTzmKnsWcRvVaQX9b0rIMXURnQJ/6XQ3LacFeeDv9zADfwrLN1cpHNTaQFmvwJ8FxGZiNWo6ioI/SvzwUp/C8tdw+SUKK6tYpJj9lA9SJxOU/3x6gAW5Uq6hEwPmIIOxORnaTyHtYh58YujeqtUAfrmAAt4j9huWYmY8U0mJ07EbBLF8fMLWN4mCMGcqP5IxG9VF6+L0MrpO6qHit0ZEf9V0Er8O+RhVxGvV0A+rG0hmn+sbeHVJolfFWQrnWoAVg/D0k0IVkOdBh6PzT+Wu3iKtiJ6DhHjqM+kthzLSv8OSzcWWcRSitKhvr89RM/LnWhhExGX4NjEqAtYLC1JFjzTTWwqabTufTH7n6eAg0F5kuwP/NAwaJ/Fs5W1Z5OA9Xmx3XfVvbGi6zT0ftADg1EVQIitxHV/GL2bBbWE/b+PB77FdvOs+sqiq+/vCNER84niOnFcHqTwN5MXw3qX2B0eWNUaGvjsT1qaDyilVgHwfrHdJKVHLYFMLzIAq0diy2rCldFg8WcBiwHa7CEJ2grVFRB6VxUkqXVhYTMTdsjBZhp4BMy8fCO2tyc3flMNWOsCFn8QyfQAgvVY4a3ps2poHtkXCKJJGiPm8TDnKknNTa6p9Q1dw+YASzBVXlEhYAUeKZNZBdAfVrjuoFbRALDGmDhhOU8SkTy210qPaoL3K3VC3uO/+isgK4wWDT8h9qL8975kd/X9HSBR74XSEXO6e0k3YfwiwYViuVm1YKWLV53QbzfWYcwqj8blkV4ziW1EXMabMocGXvLYPmOOng7LPQyhzy/6MLN4YmIN3vaJL+b4oveJ7eblu1VVFefXBSwS0BEMBoNJpNMyaKblJ9/86IcIMEEyjycsXQZ1cZwnxlNDgtRKicUZlD/SQFnNARb0/2C5zL9rNPUjpuUez39LfNAMACsFdg67kZOqeuqhgcdGwaOazjRgTSSOyq9hdTdL1kKaCqHafRFCoddh1AymD1ihdy40lx6XJ2Qr1E0GMxc8Iuyj4MkXffzyErpmDfwvA2pAh6MPZWayD3bL4PEuu4+Y8oOlI2kyvP6lDeSppGSoC1g8hUlmi5NHe4wpoOxeDf5O6zeZd0XLkyR/6cF8MAbVWX/IwQoFgt2gCJgpF0kyRSaU0jUpo3dpELAiJtvageQ8XfVcOuojGZf7pdjuMPXDALAYR1p3uH6IrcV1CfZTjwnGkQkLy6PcqefJWG+wWdW0BtVH/wmhQ2ojozHompNDLhavYWHTIqvGaKeSSXEzV77oWVZIF/0HQhqKzNFQM1UPIbYV103GU4xuTz1vK1ggZ1OehIeL3SHINDX+o8ddlYytmAammShKuuMB1TSzktkcxLijS8kNPLcXPGdHneTYBEA6dkeQ4vNOWrlMaeDXPTnYb4CcSYPBtRmDK2pe8a1e9n6ybZ0xG8UE42h/15+J7fKksrGhgcdcpsQJvI7FgEoBazJn6dNiuxkMI9VEjpkT2GHIGl6ZBizNTW24F1awichy6ecfLcWYcTIkUkwtky133Pm5uyFCKQhoNko8l/+T7jMYMgiebNHkI8R2RV+PhsBqcbxPZbCKHkZZ92krWCtN0lbtVZqYnY6X8fSRtMQmI53NX1TrZ7Jecg6B88OJ/2B2ehbNdpqgkXE0Wgzp9AW6hDx5TbqGZc0r0uSEpq4kvY3ze/THrK/sD9UrIELANUocNlGWBh5jwsnmG+z9uUoyBlUKWEGXPF1JptJ7xXZz8v9MpIpvd9Ly4ynhMOg+VEvgka02K6RyX9/SShMS+l8CwtfBctk1/U/9lKWIByunyibaifletDpHfFgjAboP5Nfo6d9iP/4x81uvN1N18ToIhcHwPj2Jyk7iOLkBOQ38YwESfeUM0UtL+hf2LwzxujqWVUJ/2QXT0QS5S2yHlkeTg4cLSeofWnem/SNJa5IOtJMmOzc2aCj4hrEllSymZ1lLuqt4Ft0xm1Hktb+ihZXs7ESrkG2n8lxD6iV5+MKUicKExOFznGxC8SZI+NUohGDpi0U6OUmTZhrKrqbQb4rdGSuYLwWszNO6cSvNTKLRrLjw+H/6zYdlVMeZBVi+vzdEJ7rBx6vdB8t/1cA9HL8Xxrt0H4RyKqDFvwmVXeI9sgCLCKj5NVMNEpiVKVIjkxOXQq2DxHGy2Cr7WFYas+qfXmjgMYCYdjUSTwpXiuPyK1pr5DeuGCxXrU+ioRDs8Zds5sqEULp2ZdQrg+WZsJjkGOd1G/SstOzC73KhWI5DFy+ZaMygOUEs7b4x1pIkOSSDRFkFADn7kywAdDtokWV9RElOmDxIoPtFK6/0gztpYckbIEowPRLQBxHKHuK6ReSBuZpSz9sMVlQUngww/7nXyGLNdK5jGWD13//uqWPAwv+0dCORjgFX1biYEeVx4P+414BlTViyUyoPa8LC6u/v0Svj880Y+jtY7qsR+szzTCbHlr9J/Rl3iu2uOcHpPvyyaLc4g3UGfnyR5KrKY1oGsbPVUWZZAf8utjvMri4FLehpYneS7ACmiuWDS5OxjV/bwJc5Qxh+dVgqlAzyF/GcZ91POsWBzB0kx0vSJ5vogdYZAYJcVcnBwHu6oQV1HNXLxYNAyUA7T6qLBl1CAiBPDweDrm1WjhRdoyF7ZzyZgWK6q4Ujq2sObPsGhD6baQx0/TlYzkerUHPnUgrnBMuNAEu7r0Aoaav0L1B5R5V2d3GlBz8ibCT8YVh6sUkj1ajBcWEoKWoLl9+WrxgA9hWn880JTvfkNRr4dwLKlyd7WHiNiFv1ZS57Ryr/vYRziv5dZufnYj4tPUXsjpHbMK6ziVhC+n5uEdul5TKLcWKPwSBdnM5TPzbp5BE3AYjlN3mD1hDTQNLZ7gQC/is7JmfTVDKzZnUFPiTuBp3cmy8vLaNk+Q17FTJIbjLo8iaL0+kasskFSf7SI02jw7/zWjLX0oqkbiZ40zIA6w3iOBeo79PSSli0+veIgM9yvigime3Q4oMk3h/ZP5IUz7Gs+UwQJoDFRXL7DwguhDj7igjZZTNHv5TMYyyM8dCVetTe18B2Xgt4G5gAVrS/7+8F0eQHyOQ5lswZtdQrASyPwdL8r1CzbAO1bqwuWA02ywat+kXJJXxijMHtLY5j+oOsqpO141Zd2akUk6vxBDZdac84AuWLMplTg+DHLy9PFfkj52EIXQAWMvNrPEly2G+2yhO6LNYLplMkPwp1UirSJ4AEVSa/pt09spXy4zo67SrWLudpUav6uLsx7yuVMyR3QfS2qDs56XoEq0NBvRYVfH9KbDdd6D2U0BSw+qDhXQeJCsSzxk2A/gKQWxDiFog8BaJs8voyqG46ihXjxrg3wsOq3ZcglFF8MCOGldxIfX+3uJenW/UFzpif9ozGG6mObdyvq0uavpPrWfpykc5cFMxO7F0OVjAqLh4HLfmy2E5pSUDWg8gvUxjOfrjXLTqrM3IDz3W4BOlq6I6Z1ARmARYXYooBfzz8YE3z0jEIy9O/LFYLuo0EqMGgdUPAzWWXzFESM6x5aph0DfNcYQaySQFt8gyogzDPwhp+8Po/ZsbccmI3ZY9W70coe5fFwSoBFonv1P82FDuW7Z7z91/Ccsiy8JcIALX7MlMLa6SXxeshtGjxm7ByZInxCKD/InaHJ7wJ4PbGMvon6o8yKsjTizdJ82us39i85glNMuUheX2lY+c4prWy2G7yeNlYnuGDKuTE19vE7kzTt81UHsazGNyke1b041wdAHNs8gYbojI1gtnvpln5rPsjUDGAn1fiw9wvxp+S6Q0ER7qudUbaNeQaG+e4hjxtZn4SaVyKGn6yzXqQAViZtNhR3p3gyDJ2gcRPj7r5Ciz3JBOe8yqANXwX/e6BEOtD5lRMchcQfg6We6KIDOtJVbsvRSgjo6TEwhoDGNYhWnp4LmXV5NOmRX4SLOeTWbQ0hS5hH10LKIJHm5V2j6nzFpZdo/rYmghtxivS1sS8Ncspz/2HAAAIQUlEQVQoBXgrXE9kEeNEczH4o+NJIUubCA4EqKRLRNYBUz4snsgRBHj6x3UYUGfgmwmmdA95EsVUCp6YlRVP0xpJJn+yzIWxpCqUMWn98VSRcg0GXUN+4fMGWQCoF+qH7hpjSskPdpR1PgFYIbYR181NCO6XltCdttaChhtAonrHKJUFgnugehdCubDMokoLrb6/E0RHXHQhuIZRJrv6/s6QcOdesfiO4zV/0S4/B+RmKM7Pa6wRY8Do1Fb191VZRlQfewFC+82ArgkVuqDU+WqA/haKuyF6PdT+cXmPhBILK3pohRxZsWoThZpz8UscfkX6oMV8ocHx+byBVaSr8sJNIzd1LnXY7pWvAVMLa0nRYZS5ju7TAHFFOkz2XKJGzxPiodHAMn44k5Ki3yPMu6ugwSpv+k5YzgZNNjA11WTcPZegReqPmXAVmcsSUdQwZjOoh0tfGuWTmK7XzptfDSxtgDW/2pxud1UVhD7rRwfjjlwOHQ26hwGSzlBOSSAniu0kOwhPJ2GFq1X1yfNBLJgloobeRVBslSv+PFmjFdTZTo010ALWwnkVVB9bA6H9q6FEgksKSb/U926ARPS0BTa0HixOh6cmy+zQKNgpRRQtH+0RrJUmLS6zClxAN94C1sJ5GOr7u0L0rJFE8o1iwMqvyh6/K5UdxXHymTYXjg5mIknMXBodCeeMO8R2eYTfjgWugRawzB7QBCup4AKxXJaLNTY08I8HdNT0V/XAUlrVXhfkI3qFn2XUp90+lXCnjKeosZtZaAsV9iOksFb4QpFFeSR2C+12lll5WsAyf/S9ciOeDo+SlvuME6a1rIUbqeoTEXp/GIujk5fPRDwNve+VJ6WR/1y2nmv+dxP552KO+t1/hkQJhXmjdQvn4kFMuUcLWOYK1MD/CqCHja7QU8XuFDZCNV1dA4+HaUxC7o+YANMMsFSfgDAg7UQedfFg2cVQ2bUst8JU6CVpXuwWFp0WzkvC7ZKkw4UgawtY5k9BVZ+F0GdtKPP/+qOBUrSY1WKcrFNlNzK3GAFWJEfEU2WRXM+g+rp+ux9zdS28mRp6P4SONXgYF9IK1xZZdMfCk7yVaPh7m+TDysx0bzUW41Pgf6OXDDqeKZBoV1ZVT3FdImtOhxxYLMoWx31139CqMOKUfeY/FZU4DKD2NFjuW0SklIOogggLeqoG3YMBGauFSgn8EbHd/FZkC/rulg3hWgur2nPu9xMk+6iwIiIx9BRY7ttNypCGH4vASzck4Z/+Cstbd9DgohJgRZZWWR/DcanvgBXuuqwEm1V1JYR+UdBxllQz1d60dnamBlrAqv5iqHY3iAg3Iemu3axbPZWkhSLuqDFrEtZUV0PovwWQAzM7vKe6V1UGrBi0docoO5MYjun6lhlusiCmadi9BCpb5gpjBS8QWW68vdOCkLwVInq3W5ew1osQ0yuTLyyv2P+RXmcukhcEDHRFNDdQlgz1qdAnB4kI9xPHSbLqVnMJxww+z3s9rIhn26ifWFTKE+JQcd1La2lkRhdFXwe4v2/sONbvHgSRrxWI+yGxXTZ9aMcC1EALWPUfSkSzHHaPBCyyhpCho94QXBSTD07QFNWysAZSqHqvRKgXFPb4mxT5ZqgcM0NSOyMlqS5eH6H1nV7fu36dH1vZh3IGbPvCaboz9336qLYwb7RuodETmp9JLWBNr/d+ra/F/E0G45MNSQoWV4ZSToGFM0Q61+VNnAqwuKjq4rUR2hcYpDykZSCtLClmjxsQh02vqvIVoo67ah9T0DiW4HUJQj0TtntmnfbfGnZ/VNipp3ULyx/UPM1QXbwefGsUi3GcW+by/Zyn257Jtqr6eATBVhB9EQQbIozBy9IQSl42/Q1U7oEtvzTtezo1YPVBS58I9U+BjnEeVVCCnAhLTwac62ZxqqjMIwuCTWDpW6DYpYJgBK8fINQzYLvnmDYd0KB7CCBfLdjng2K75INqR6uBVgMVNNAIYA3267Xkoe/Ko8lpxs0Am7qGN8JikM69uSqIRad1QbAlBJsB4caArDeNQMNrI7dRz4Ltnp1kaEyvXeoWil4uVue1jcjULtJqYBnSQKOA1be2uhsikOMgmU0N6qr2FgjuhepDgPUQEDwAWIui2JnoioA+GSorAbpyfLRq6DfXFSe609Oh1ll5fRM19C4toIl9QGw3j+p5GqHaa1sNLNUaaBywhtaW390fIrS2lvYfJsnzvwu1Tk+WJGngpdvBj71IPbqZmel+qX5j25tbpjUw0x8Nm6Ei9Nl1mQ0ARqn2S63K2avOOhvQewF9RwFj68/Fdut2F1lqtdfeWKuBMg3MFLCG1lY/A5zdad6+MIFLfwcIO8bM0ZBjxXbeNkebtdu0GlhqNDAngJUCLnYqZrvyF82vFvXBiOfLco5ld9x+Z1/sDIS7Vswrq34bqlEb7uoXtle0Gli2NTCngJVUdb8NkOwNWGx3PndsnIqfAPJ1cZzc9toaZfHL7gBbJU3UR037xrBp5UZFp4zTbtBe32pgadXAvAHWOHjps3sV39tDZKv4ZM203MfkudwB6E0AroXlnpHVrLFokT43jxK4dq/QXDR/ybYhhckza+e0GsjUwIIArLRkqovXQmCv0yuwXgfQF0LlGRA8GVB2NV4hLphkv7K/APoX9GlZWSz5ABDcD7V/BTu8FXB/UTWHqxC81HsVQibHErxKyQwnl1J5kzjOGe272Gqg1UA9DSxIwKp3K3N7Vb/jr+wGgC5tWd/BP8DS7UQ67JbcjlYDrQZqaqAFrJqKG3dpo0LqXaDYAhK1d+8P0cvZEhyWe3Jbj9aAotsllnkN/D875UUgh2+x6AAAAABJRU5ErkJggg==" />
                </defs>
            </svg>
            <p class="dm-sans-medium text-[16px] text-[#ffffff] text-center p-2">TextPlug</p>
            <p class="dm-sans-medium text-[14px] text-[#ffffff] text-center p-2">Need a new number for
                <br>verification?
            </p>
            <button
                class="px-16 py-3 mt-2 dm-sans-medium rounded-lg text-[#DF5C0C] text-[12px] bg-[#ffffff] text-center">Buy
                Now</button>
        </div>
</body>

</html>
