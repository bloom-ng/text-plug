<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="flex justify-center">
        <div class="flex h-screen w-full relative items-center">
            <img src="/img/Ellipse 5.png" alt="gradient" class="h-screen w-full">
        </div>
        <div class="flex flex-col justify-center absolute z-10">
            <a href="index.html"><img src="/img/image_4.jpg" alt="logo"
                    class=" items-center h-[47px] w-[150px] mb-2"></a>
        </div>
        <div class="absolute">
            <h1 class="plus-jakarta-sans-bold text-[#222222] flex-row text-3xl lg:text-[34px] text-center mt-24">Join
                TextPlug</h1>
            <h3 class="text-[#222222] text-center dm-sans-regular text-[18px] mt-2 mb-5 ">Sign up now to create your
                account and gain access to our fast <br>SMS verification service.</h3>


            <!-- form section -->
            <form action="Sign in"
                class=" bg-white w-[100%] rounded-3xl items-center justify-center p-10 shadow-lg mb-1">
                <div class="flex flex-col justify-center">
                    <label for="Name" class="text-[#222222] text-[18px] dm-sans-medium mb-1">Name</label>
                    <input type="text" id="Name" placeholder="Full name" required
                        class="shadow-sm w-76 p-2 border border-gray-200 rounded-lg mb-3 items-center">
                </div>

                <div class="flex flex-col justify-center">
                    <label for="Email" class="text-[#222222] text-[18px] dm-sans-medium mb-">Email Address</label>
                    <input type="text" id="Email" placeholder="Email address" required
                        class="shadow-sm w-76 p-2 border border-gray-200 rounded-lg items-center">
                </div>

                <div class="flex flex-col justify-center">
                    <label for="Password" class="dm-sans-medium text-[#222222] text-[18px] mt-3">Password</label>
                    <input type="text" id="Password" placeholder="Password" required
                        class="shadow-sm w-76 p-2 border border-gray-200 rounded-lg items-center">
                </div>

                <div class="flex flex-col justify-center">
                    <label for="Confirm Password" class="dm-sans-medium text-[#222222] text-[18px] mt-3">Confirm
                        Password</label>
                    <input type="text" id="Confirm Password" placeholder="Enter password again" required
                        class="shadow-sm w-76 p-2 border border-gray-200 rounded-lg items-center">
                </div>

                <div class="flex flex-col justify-center mt-8">
                    <button class="rounded-lg shadow-lg p-3 font-semibold bg-[#DF5C0C] dm-sans-bold text-[#ffffff]"
                        type="submit" id="Register">Register</button>
                </div>
            </form>
        </div>
    </div>
