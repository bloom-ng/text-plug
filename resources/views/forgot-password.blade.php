<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TextPlug - Forgot Password</title>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
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
        <div class="w-full flex flex-col justify-center items-center absolute">
            <h1 class="flex-row text-3xl plus-jakarta-sans-bold lg:text-[34px] text-center text-[#222222] mt-28">Forgot
                Password</h1>

            <!-- form section -->
            <form action="/forgot-password" method="POST"
                class="mt-5 bg-white lg:w-[50%] w-[90%] rounded-3xl items-center justify-center p-10 shadow-lg">
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

                <div class="flex flex-col justify-center mt-10">
                    <button class="rounded-lg shadow-lg p-2 dm-sans-bold text-[18px] bg-[#DF5C0C] border text-[#ffffff]"
                        type="submit" id="Log in">Forgot Password</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
