<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TextPlug</title>
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
    <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Tailwind Custom Forms - use to standardise form fields - https://github.com/tailwindcss/custom-forms-->
    <link rel="stylesheet" href="./style.css">

</head>

<body class="leading-relaxed tracking-wide flex flex-col">
    <div class="flex flex-col">
        <div class="flex relative">
            <img src="/img/Grid layers - v2 (1).jpg" alt="grid" class="lg:w-full lg:h-[1120px] w-[475px] h-[758px]">
        </div>
        <!-- Nav bar -->
        <nav id="header" class="w-full z-30 top-0 text-white py-1 absolute">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between px-2">
                <div class="pl-4 flex items-center">
                    <a>
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
                                href="login.html">Login</a>
                        </li>
                    </ul>

                    <a href="Register.html"><button a
                            class="mx-auto lg:mx-0 text-[#222222] rounded-xl plus-jakarta-sans-medium text-[14.4px] bg-white mt-4 lg:mt-0 py-2 px-8 justify-end items-end border border-[#A1A1AA]"
                            href="index.html">
                            Register
                        </button></a>
                </div>
            </div>
        </nav>


        <div class="flex flex-col container mx-auto h-screen absolute mt-20 lg:mt-32">
            <div class="flex flex-col text-center justify-center px-3 lg:px-0">
                <div class="flex text-center justify-center lg:px-0 lg:mt-10">
                    <h3
                        class="text-[14px] text-[#222222] bg-[#FFFFFF] rounded-3xl lg:px-8 py-[6px] px-20 border border-[#E4E4E7] plus-jakarta-sans-medium mt-[35px] lg:py-1 lg:mt-2">
                        High Quality Verification Service
                    </h3>

                </div>
                <div class="flex flex-col justify-center leading-tight mt-5">
                    <div
                        class=" text-[42px] md:text-5xl lg:text-5xl font-bold leading-tight plus-jakarta-sans-bold lg:plus-jakarta-sans-extra-bold">
                        The Best <span class="inline-block"> Online </span> SMS
                    </div>
                    <img src="/img/Vector 10.png" alt="line" style="display: block; margin: 0 auto;" class="mb-2">
                    <figcaption
                        class="text-[42px] md:text-5xl lg:text-5xl font-bold leading-tight mb-0 plus-jakarta-sans-bold lg:plus-jakarta-sans-extra-bold">
                        Verification Service
                    </figcaption>
                </div>

                <p
                    class="text-[#52525B] dm-sans font-normal text-[14px] lg:text-[16px] mb-4 mt-4 lg:mt-5 leading-tight">
                    With our fast sms verification service, you can protect your <br>online identity by using our
                    one-time-use non-VoIP <br>phone numbers.</p>
            </div>

            <div class="flex text-center justify-center px-3 lg:px-0">
                <h3
                    class="text-[14px] md:text-sm lg:text-[16px] plus-jakarta-sans-bold text-white bg-[#DF5C0C] shadow-2xl rounded-xl px-16 py-4 lg:px-5 lg:py-4 mt-5 lg:mt-2">
                    Get access to cheap phone numbers
                </h3>

            </div>

            <div class="flex justify-end mt-20 lg:mt-20">
                <img src="/img/Illustration.jpg" alt="carousel" class="items-end">
            </div>

            <!-- <div class="flex flex-row mt-20"> -->
            <!-- First slide -->
            <!-- <div class="w-full lg:w-auto pl-20"> -->
            <!-- <img src="User.jpg" alt="card" class="w-64 h-auto transform translate-y-2"> -->
            <!-- </div>  -->

            <!-- Second slide -->
            <!-- <div class="w-full lg:w-auto ml-auto space-x-2 lg:space-x-6"> -->
            <!-- <img src="Card 3.jpg" alt="card" class="w-64 h-auto transform -translate-y-1"> -->
            <!-- </div> -->

            <!-- Third slide -->
            <!-- <div class="w-full lg:w-auto ml-auto space-x-2 lg:space-x-6"> -->
            <!-- <img src="Card 6.jpg" alt="card" class="w-64 h-auto transform translate-y-2 lg:translate-y-6"> -->
            <!-- </div> -->

            <!-- Fourth slide -->
            <!-- <div class="w-full lg:w-auto ml-auto space-x-2 lg:space-x-6"> -->
            <!-- <img src="Card 8 (1).png" alt="card" class="w-64 h-auto transform -translate-y-1"> -->
            <!-- </div> -->

            <!-- Fifth slide -->
            <!-- <div class="w-full lg:w-auto ml-auto space-x-2 lg:space-x-6"> -->
            <!-- <img src="Card 5.jpg" alt="card" class="w-154 h-147.7 transform translate-y-4 lg:translate-y-8"> -->
            <!-- </div> -->

            <!-- Sixth slide -->
            <!-- <div class="w-full lg:w-auto ml-auto"> -->
            <!-- <img src="Card 7.jpg" alt="card" class="w-auto h-auto transform -translate-x-1"> -->
            <!-- </div> -->
            <!-- </div> -->


            <div class="flex justify-center text-[#F64B4B] text-[14px] lg:text-[13px] mt-16 lg:mt-32 dm-sans-regular">
                <p>
                    WHY TEXTPLUG?
                </p>
            </div>

            <div class="flex justify-center mt-2 lg:mt-5">
                <p class="text-[#161C2D] text-2xl lg:text-4xl text-center plus-jakarta-sans-regular">
                    People choose us because we <br>are simply the best!
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pl-10 justify-center mt-20 lg:mt-32">
                <!-- Block 1 -->
                <div class="flex items-center lg:pl-60">
                    <img src="/img/Icon.png" alt="Reliable Protection"
                        class="lg:h-20 lg:w-20 h-auto w-auto mb-8 lg:mr-6 lg:mb-6">
                    <div>
                        <h3 class="lg:text-[21px] text-[16px] text-[#222222] dm-sans-bold pl-4">Reliable Protection
                        </h3>
                        <p class="lg:text-[16px] text-[12px] text-[#161C2D] dm-sans-regular mt-2 pl-4">Our SMS
                            verification with one-time-use <br>non-VoIP phone numbers ensure your <br>online accounts
                            stay safe.</p>
                    </div>
                </div>

                <!--  Block 2 -->
                <div class="flex items-center mt-8 lg:pr-40">
                    <img src="/img/Icon (1).png" alt="Lightning-Fast"
                        class="lg:h-20 lg:w-20 h-auto w-auto mb-8 lg:mr-6 lg:mb-6">
                    <div>
                        <h3 class="lg:text-[21px] text-[16px] text-[#222222] dm-sans-bold pl-4">Lightning-Fast
                            Verification</h3>
                        <p class="lg:text-[16px] text-[12px] text-[#161C2D] dm-sans-regular mt-2 pl-4">TextPlug offers
                            rapid SMS service, <br>streamlining your verification process <br>without sacrificing
                            security.</p>
                    </div>
                </div>

                <!--  Block 3 -->
                <div class="flex items-center mt-8 lg:pl-60 lg:mt-[60px]">
                    <img src="/img/Icon (2).png" alt="Versatile"
                        class="lg:h-20 lg:w-20 w-auto h-auto mb-8 lg:mr-6 lg:mb-6">
                    <div>
                        <h3 class="lg:text-[21px] text-[16px] text-[#222222] dm-sans-bold pl-4">Versatile Compatibility
                        </h3>
                        <p class="lg:text-[16px] text-[12px] text-[#161C2D] dm-sans-regular mt-2 pl-4">TextPlug adapts
                            to various platforms <br>effortlessly, ensuring compatibility and <br>ease of use for all
                            users.</p>
                    </div>
                </div>

                <!-- Block 4 -->
                <div class="flex items-center mt-8 lg:pr-40 lg:mt-[60px]">
                    <img src="/img/Icon (3).png.png" alt="Dedicated"
                        class="lg:h-20 lg:w-20 w-auto h-auto mb-8 lg:mr-6 lg:mb-6">
                    <div>
                        <h3 class="lg:text-[21px] text-[16px] font-semibold pl-4">Dedicated Support</h3>
                        <p class="lg:text-[16px] text-[12px] text-[#161C2D] dm-sans-regular mt-2 pl-4">TextPlug
                            provides dedicated assistance <br>for any questions or concerns, ensuring a <br>hassle-free
                            experience.</p>
                    </div>
                </div>
            </div>

            <hr class="mt-10 lg:mt-32 bg-[#E7E9ED] mb-5 lg:mx-20">

            <div class="flex flex-col lg:flex-row lg:justify-between justify-center lg:p-20 p-5">
                <div class="flex flex-col">
                    <h1 class="lg:text-[32px] text-[24px] text-[#333333] dm-sans-bold">Ready to buy a number?</h1>
                    <p class="flex dm-sans-regular text-[14px] lg:text-[18px] text-[#333333] mt-3 lg:mt-5">Simplify
                        your verification process with TextPlug's temporary numbers. <br>Get started now for hassle-free
                        account security.</p>
                </div>
                <button
                    class="bg-[#df5c0c] text-[#ffffff] mt-5 text-[14px] lg:text-[17px] dm-sans-bold py-4 lg:px-8 lg:py-5 rounded-lg lg:rounded-xl items-center">Get
                    Started Now</button>
            </div>


            <div class="mx-auto p-4 flex flexcol lg:flex-row justify-center bg-white lg:shadow-sm">
                <div class="relative h-screen w-full lg:h-auto justify-center ">
                    <img src="/img/Shadow.png" alt="shadow" class="w-[1440px] h-[674px] pt-20">
                </div>

                <div class="justify-center flex flex-col mt- lg:mt-7 absolute">
                    <div>
                        <p class="text-center text-[#52525B] text-[14px] lg:text-[16.2px] plus-jakarta-sans-medium">A
                            lot of people like TextPlug!</p>
                    </div>
                    <div>
                        <h1
                            class="text-center text-[#18181B] text-[18px] lg:text-[37.8px] font-bold plus-jakarta-sans-bold">
                            What our users say About Us!</h1>
                    </div>
                </div>


                <!-- testimonial section  -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 absolute mt-52 lg:mt-52 justify-center">
                    <div class="max-w-md mx-auto bg-white rounded-2xl shadow-lg px-5 py-4">
                        <p class="text-[#F59E0B] text-lg">★★★★★</p>
                        <p class="text-gray-700 text-base mb-4">"TextPlug made verifying my accounts <br>a breeze!
                            Their temporary numbers <br>worked like a charm, and I felt much <br>more secure online.
                            Highly <br>recommended!."
                        </p>
                        <div class="flex items-center">
                            <img src="/img/Oval (3).png" alt="User" class="w-8 h-8 rounded-full mr-2">
                            <div>
                                <p class="text-lg text-gray-900 font-semibold">Oladimeji Abubakar</p>
                                <p class="text-sm text-gray-400">User</p>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-md mx-auto bg-white py-8 rounded-2xl shadow-lg px-5">
                        <p class="text-[#F59E0B] text-lg">★★★★★</p>
                        <p class="text-gray-700 text-base mb-4">“TextPlug saved me so much time and <br>headache. No
                            more waiting for codes <br>or dealing with sketchy verification <br>methods. Their service
                            is quick, <br>efficient, and trustworthy.”</p>
                        <div class="flex items-center">
                            <img src="/img/Oval (4).png" alt="User" class="w-8 h-8 rounded-full mr-2">
                            <div>
                                <p class="text-lg text-gray-900 font-semibold">Sarah L</p>
                                <p class="text-sm text-gray-400">User</p>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-md mx-auto bg-white py-8 rounded-2xl shadow-lg px-8">
                        <p class="text-[#F59E0B] text-lg">★★★★★</p>
                        <p class="text-gray-700 text-base mb-4">“TextPlug saved me so much time and <br>headache. No
                            more waiting for codes <br>or dealing with sketchy verification <br>methods. Their service
                            is quick, <br>efficient, and trustworthy.”
                        </p>
                        <div class="flex items-center">
                            <img src="/img/Oval (2).png" alt="User" class="w-8 h-8 rounded-full mr-2">
                            <div>
                                <p class="text-lg text-gray-900 font-semibold">Mike Olusegun</p>
                                <p class="text-sm text-gray-400">User</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex flex-row bg-white p-8 lg:p-10 lg:pt-2 lg:mt-2 justify-between mt-96">
                <div>
                    <img src="/img/image_4.jpg" alt="logo"
                        class="w-[95.74px] h-[30px] lg:w-[95.74px] lg:h-[30px]">
                </div>
                <div class="lg:text-[16px] text-[12px] dm-sans-medium">Copyrights reserved © 2024</div>
            </div>



            <script>
                /*Toggle dropdown list*/
                /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

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
