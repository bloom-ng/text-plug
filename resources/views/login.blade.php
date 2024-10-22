<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TextPlug -Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
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

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '445413785154070');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=445413785154070&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>
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
    @if (session('status'))
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script>
            Toastify({
                text: "{{ session('status') }}",
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
    <div class="flex flexcol justify-center">
        <div class="flex h-screen w-full relative items-center">
            <img src="/img/Ellipse 5.png" alt="gradient" class="h-screen w-full">
        </div>
        <div class="flex flex-col justify-center absolute z-10">
            <a href="/"><img src="/img/image_4.jpg" alt="logo"
                    class=" items-center h-[47px] w-[150px] mt-2 mb-5"></a>
        </div>
        <div class="absolute">
            <h1 class="flex-row text-3xl plus-jakarta-sans-bold lg:text-[34px] text-center text-[#222222] mt-28">Sign in
                to your account</h1>
            <h3 class="text-[#222222] text-[18px] dm-sans-regular text-center mt-2 mb-5">Sign in to your TextPlug
                account to access your secure non-voip <br>numbers and manage your account settings.</h3>


            <!-- form section -->
            <form action="/login" method="POST"
                class="mt-0 bg-white w-[100%] rounded-3xl items-center justify-center p-10 shadow-lg">
                @csrf
                <div class="flex flex-col justify-center">
                    <label for="Email" class="text-[18px] text-[#222222] dm-sans-medium mb-3">Email address</label>
                    <input type="text" name="email" id="Email address" placeholder="Email address" required
                        class="shadow-sm w-76 p-2 border border-gray-200 rounded-lg mb-3 items-center">
                    @error('email')
                        <div class="text-red-500 dm-sans-thin italic mb-4">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex flex-col justify-center">
                    <label for="Password" class="text-[18px] text-[#222222] dm-sans-medium mb-3">Password</label>
                    <input type="password" name="password" id="Password" placeholder="Password" required
                        class="shadow-sm w-76 p-2 border border-gray-200 rounded-lg items-center">
                    @error('password')
                        <div class="text-red-500 dm-sans-thin italic mb-4">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col justify-center mt-10">
                    <button class="rounded-lg shadow-lg p-2 dm-sans-bold text-[18px] bg-[#DF5C0C] border text-[#ffffff]"
                        type="submit" id="Log in">Log in</button>
                    <a href="/forgot-password">
                        <p class="text-[#22222299] text-center mt-4">Forgot your password?</p>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
