<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TextPlug - Home</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/img/tp_logo.svg" type="image/svg+xml">
    <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    {{-- <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" /> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Tailwind Custom Forms - use to standardise form fields - https://github.com/tailwindcss/custom-forms-->
    <link rel="stylesheet" href="/css/font.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script defer src="https://static.getbutton.io/widget/bundle.js?id=hnXnK"></script>
    <script type="text/javascript" async src="//l.getsitecontrol.com/pwp3xv54.js"></script>

    <!-- Twitter conversion tracking base code -->
    <script>
        ! function(e, t, n, s, u, a) {
            e.twq || (s = e.twq = function() {
                    s.exe ? s.exe.apply(s, arguments) : s.queue.push(arguments);
                }, s.version = '1.1', s.queue = [], u = t.createElement(n), u.async = !0, u.src =
                'https://static.ads-twitter.com/uwt.js',
                a = t.getElementsByTagName(n)[0], a.parentNode.insertBefore(u, a))
        }(window, document, 'script');
        twq('config', 'oobj0');
    </script>
    <!-- End Twitter conversion tracking base code -->
</head>

<body class="w-full items-center justify-center leading-relaxed tracking-wide flex flex-col overflow-x-hidden">
    @if ($globalMessage)
        <script>
            Swal.fire({
                title: 'NOTICE !',
                text: "{{ $globalMessage }}",
                icon: 'info',
                confirmButtonText: 'Get Started',
                confirmButtonColor: '#DF5C0C',
            });
        </script>
    @endif

    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "green",
                stopOnFocus: true,
                ariaLive: "polite",
                onClick: function() {}
            }).showToast();
        </script>
    @endif
    @if (session('error'))
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script>
            Toastify({
                text: "{{ session('error') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "red",
                stopOnFocus: true,
                ariaLive: "polite",
                onClick: function() {}
            }).showToast();
        </script>
    @endif
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

    <main class="w-screen h-[80vh] flex items-center justify-center">
        <button class="text-white bg-orange-500 rounded-lg shadow-sm"
            onclick="window.location.reload();">Reload</button>
    </main>

    <!-- Footer -->
    <footer class="w-full flex flex-row items-center bg-white justify-between py-10 px-8">
        <img src="/img/image_4.jpg" alt="logo" class="w-[95.74px] h-[30px] lg:w-[95.74px] lg:h-[30px]">

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
