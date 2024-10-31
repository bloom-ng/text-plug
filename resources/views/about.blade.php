<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TextPlug - About Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/img/tp_logo.svg" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/font.css">
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">

    <nav id="header" class="w-full z-30 text-white py-5">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between px-2">
            <div class="pl-4 flex items-center">
                <a href="/">
                    <div class="h-[30px] w-[95.74px] lg:w-[95.74px] lg:h-[30px] inline-block pl-2">
                        <img src="/img/image_4.jpg" alt="Logo">
                    </div>
                </a>
            </div>

            <div class="block lg:hidden pr-4">
                <button class="text-3xl text-black pr-4" id="nav-toggle">
                    ☰
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden  mt-2 lg:mt-0 text-black p-4 lg:p-0 z-20"
                id="nav-content">
                <ul class="list-reset lg:flex justify-center flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block lg:pl-10 py-2 px-4 text-[#222222]  dm-sans-medium text-[16px] no-underline"
                            href="#">Contact Us</a>
                    </li>

                </ul>
                <ul>
                    <li class="mr-3">
                        <a class="inline-block justify-end items-center text-[#222222] dm-sans-medium text-[16px] py-2 px-4"
                            href="/login">Login</a>
                    </li>
                </ul>

                <a href="/register"><button
                        class="mx-auto lg:mx-0 text-[#222222] rounded-xl plus-jakarta-sans-medium text-[14.4px] bg-white mt-4 lg:mt-0 py-2 px-8 justify-end items-end border border-[#A1A1AA]">Register
                    </button></a>
            </div>
        </div>
    </nav>

    <div class="flex-grow">
        <div class="max-w-4xl mx-auto px-4 py-12">
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h1 class="text-3xl font-bold mb-6">About Us</h1>

                <div class="prose max-w-none">
                    <p class="mb-4">TEXTPLUG ENTERPRISES is a leading virtual telecommunications platform that
                        provides
                        the safe use of virtual numbers for easy and effective communication across all social media
                        platforms and ensures the utmost security between users communications.</p>

                    <p class="mb-4">Here at TEXTPLUG ENTERPRISES, we offer the best and secure virtual numbers for
                        users
                        nationwide to be able to communicate effectively on any social media platform. Therefore our
                        standards is providing a secure platform where any user can get virtual numbers for easy
                        communication.</p>

                    <p class="text-sm text-gray-600 mt-8">© 2024 TEXTPLUG ENTERPRISES, All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w-full flex flex-col md:flex-row items-center bg-white justify-between py-10 px-8">
        <img src="/img/image_4.jpg" alt="logo" class="w-[95.74px] h-[30px] lg:w-[95.74px] lg:h-[30px]">

        <div class="flex space-x-6 my-4 md:my-0">
            <a href="/about" class="text-gray-600 hover:text-gray-900">About</a>
            <a href="/privacy" class="text-gray-600 hover:text-gray-900">Privacy Policy</a>
            <a href="/terms" class="text-gray-600 hover:text-gray-900">Terms of Use</a>
        </div>

        <div class="lg:text-[16px] text-[12px] dm-sans-medium">Copyrights reserved © 2024</div>
    </footer>

    <script>
        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>
</body>

</html>
