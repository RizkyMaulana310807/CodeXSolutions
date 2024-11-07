<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/ico/favicon.ico" type="image/x-icon">
    <title>CodeX Solutions</title>
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/dist/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>

<body>

    <!-- navbar -->
    <nav class="bg-[#FEFEE3] xxs:bg-red-500 xs:bg-orange-500 md:bg-yellow-500 lg:bg-lime-500 xl:bg-green-500 py-4 flex flex-row justify-between px-4 items-center drop-shadow-lg">
        <!-- logo -->
        <div class="flex flex-row items-center gap-2 hover:cursor-pointer">
            <img class="h-9 w-9 xs:w-6 xs:h-6 rounded-full" src="img/logo/logo.png" alt="logo.png">
            <h1 class="xs:text-xs xl:text-lg font-semibold">CodeX Solutions</h1>
        </div>

        <!-- menu -->
        <div id="menu-item" class="xxs:hidden md:flex flex gap-4">
            <a href="#" class="border-2 border-transparent underline-offset-4 hover:underline hover:text-slate-400 duration-200 transition-all ease-in-out">Home</a>
            <a href="#" class="border-2 border-transparent underline-offset-4 hover:underline hover:text-slate-400 duration-200 transition-all ease-in-out">Services</a>
            <a href="#" class="border-2 border-transparent underline-offset-4 hover:underline hover:text-slate-400 duration-200 transition-all ease-in-out">Testimonial</a>
            <a href="#" class="border-2 border-transparent underline-offset-4 hover:underline hover:text-slate-400 duration-200 transition-all ease-in-out">Contact</a>
        </div>

        <!-- button -->
        <div class="bg-transparent md:border-2 md:border-black rounded-xl font-semibold xxs:border-0 xxs:px-0 xxs:py-0 md:px-6 md:py-2 text-black transform hover:scale-110 hover:text-white hover:bg-black transition-all duration-200 ease-in-out">
            <a href="#" class="xxs:hidden md:flex">Log In</a>
            <i class="fa-solid fa-bars xxs:flex md:hidden p-2" id="toggle-sidebar"></i>
        </div>

    </nav>

    <!-- sidebar -->
    <div id="sidebar" class="h-screen w-64 bg-gray-800 text-white fixed left-0 top-0 transform -translate-x-full transition-transform duration-300 z-50">
        <div class="p-4">
            <img class="w-9 h-9 flex rounded-full m-auto border-2 border-blue-950" src="img/logo/logo.png" alt="logo.png">
            <h2 class="text-center mt-2 font-semibold">CodeX Solutions</h2>
            <nav class="mt-8">
                <ul>
                    <li class="mb-4">
                        <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded-md">
                            <span class="material-icons mr-3"><i class="fa-solid fa-home"></i></span>Dashboard
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded-md">
                            <span class="material-icons mr-3"><i class="fa-solid fa-user"></i></span>Profile
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded-md">
                            <span class="material-icons mr-3"><i class="fa-solid fa-gear"></i></span>Settings
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded-md">
                            <span class="material-icons mr-3"><i class="fa-solid fa-right-from-bracket"></i></span>Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    <main>
        <div class="flex flex-row bg-[#FEFEE3] py-10">
            <div class="flex md:w-1/2 flex-col justify-evenly px-6 xs:w-full xxs:w-full md:text-left xs:text-center xs:justify-center xs:gap-4 xxs:text-center xxs:justify-center xxs:gap-4 bg-red-500">
                <h1 class="md:text-7xl xl:text-8xl font-bebas text-gray-900 xs:text-7xl xxs:text-5xl"><span class="hover:text-green-500 drop-shadow-md transition-all duration-200 ease-in-out">Grow</span> your Online <span class="hover:text-blue-500 drop-shadow-md transition-all duration-200 ease-in-out">World</span> Together</h1>
                <p class="md:text-sm text-md text-slate-700">Temukan solusi <span>IT</span> anda di sini</p>
                <span><a href="#" class="md:scale-75 lg:scale-100 bg-transparent border-2 border-black text-black inline-flex gap-4 items-center justify-center px-4 py-2 rounded-lg hover:bg-gray-900 hover:text-white transition-all duration-200 ease-in-out">Services <i class="fa-solid fa-right-long"></i></a></span>
            </div>

            <div class="md:flex md:w-1/2 justify-center items-center xxs:hidden">
                <div class="relative group">
                    <!-- Kartu pertama -->
                    <div class="bg-white inline-flex shadow-2xl hover:shadow-lg flex-col p-4 rounded-lg border-2 border-black hover:scale-110 transition-transform duration-200 ease-in-out transform group-hover:translate-x-44 mb-4">
                        <div class="">
                            <img class="w-64 h-64" src="img/illustration/digital_artist_male.jpg" alt="UIUX.jpg">
                        </div>
                        <div>
                            <div class="py-4">
                                <h1 class="text-lg font-bold">UI / UX</h1>
                                <p class="text-sm">UI / UX DESIGNER</p>
                            </div>
                            <div class="py-4 flex flex-row justify-around items-center">
                                <h1>Avaliable</h1>
                                <button class="bg-white border-2 border-black py-2 px-4 rounded-lg hover:bg-black hover:text-white shadow-2xl hover:shadow-lg hover:scale-110 transition-all duration-200 ease-in-out">Order now</button>
                            </div>
                        </div>
                    </div>

                    <!-- Kartu kedua (ditempatkan di atas kartu pertama) -->
                    <div class="bg-white inline-flex shadow-2xl hover:shadow-lg flex-col p-4 rounded-lg border-2 border-black absolute top-4 left-4 hover:scale-110 transition-transform duration-200 ease-in-out transform group-hover:-translate-x-36">
                        <div class="">
                            <img class="w-64 h-64" src="img/illustration/developer_male.jpg" alt="WEBDEV.jpg">
                        </div>
                        <div>
                            <div class="py-4">
                                <h1 class="text-lg font-bold">Website Developer</h1>
                                <p class="text-sm">Website Developer</p>
                            </div>
                            <div class="py-4 flex flex-row justify-around items-center">
                                <h1>Avaliable</h1>
                                <button class="bg-white border-2 border-black py-2 px-4 rounded-lg hover:bg-black hover:text-white shadow-2xl hover:shadow-lg hover:scale-110 transition-all duration-200 ease-in-out">Order now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row items-center space-x-4 px-4 bg-gray-700">
            <h1 class="mr-4 xxs:text-xs md:text-xl font-semibold text-white">Supported Payment Method : </h1>
            <img src="img/logo/dana.png" alt="dana.png" class="md:w-32 md:h-32 xxs:h-14 xxs:w-h-14 object-contain filter grayscale hover:grayscale-0 transition duration-300">
            <img src="img/logo/ovo.png" alt="ovo.png" class="md:w-32 md:h-32 xxs:h-14 xxs:w-h-14 object-contain filter grayscale hover:grayscale-0 transition duration-300">
            <img src="img/logo/paypal.png" alt="paypal.png" class="md:w-32 md:h-32 xxs:h-14 xxs:w-h-14 object-contain filter grayscale hover:grayscale-0 transition duration-300">
        </div>

        <div class="flex flex-col justify-center items-center gap-4 p-6">
            <h1 class="font-bold text-2xl md:text-3xl xl:text-4xl text-center">Bikin website harga murah!</h1>
            <p class="text-center">Kami menyediakan jasa pembuatan Web, Design, dan IT Support</p>
            <div class="flex flex-col xxs:gap-4 sm:gap-4 md:flex-row md:gap-6 xl:gap-9">

                <!-- UI/UX Card -->
                <div class="bg-[#ABDAFC] p-4 rounded-lg justify-evenly xxs:scale-75 sm:scale-75 md:scale-100 inline-flex flex-col h-64 w-64 drop-shadow-2xl border-2 border-transparent transform xxs:hover:scale-90 md:hover:scale-105 hover:border-black transition-all duration-200 ease-in-out">
                    <span><i class="fa-solid fa-brush w-12 h-12 text-left flex justify-center items-center border-2 border-black rounded-full bg-white"></i></span>
                    <h1 class="font-bold mt-4 text-left">UI / UX</h1>
                    <p class="text-left">Jasa buat design figma dengan harga terjangkau mulai dari</p>
                </div>

                <!-- Website Developer Card -->
                <div class="bg-[#F88DAD] p-4 rounded-lg justify-evenly xxs:scale-75 sm:scale-75 md:scale-100 inline-flex flex-col h-64 w-64 gap-6 drop-shadow-2xl border-2 border-transparent transform xxs:hover:scale-90 md:hover:scale-105 hover:border-black transition-all duration-200 ease-in-out">
                    <span><i class="fa-solid fa-code w-12 h-12 text-left flex justify-center items-center border-2 border-black rounded-full bg-white"></i></span>
                    <h1 class="font-bold mt-4 text-left">Website Developer</h1>
                    <p class="text-left">Jasa buat website dengan harga terjangkau sesuai request Client, dan pelayanan 12/7</p>
                </div>

                <!-- IT Support Card -->
                <div class="bg-[#FAC748] p-4 rounded-lg justify-evenly xxs:scale-75 sm:scale-75 md:scale-100 inline-flex flex-col h-64 w-64 gap-6 drop-shadow-2xl border-2 border-transparent transform xxs:hover:scale-90 md:hover:scale-105 hover:border-black transition-all duration-200 ease-in-out">
                    <span><i class="fa-solid fa-wrench w-12 h-12 text-left flex justify-center items-center border-2 border-black rounded-full bg-white"></i></span>
                    <h1 class="font-bold mt-4 text-left">IT Support</h1>
                    <p class="text-left">Jasa IT Support buat bantuin masalah program kamu!</p>
                </div>

            </div>
        </div>


        <div class="flex flex-row ">

            <div class="xs:hidden xs:w-full md:flex xl:w-1/2 overflow-hidden bg-[#fee9cc]">
                <img class="hover:scale-110 hover:drop-shadow-xl object-cover transition-transform duration-300" src="img/illustration/persons_digital.png" alt="persos.png">
            </div>


            <div class="xl:flex xl:w-1/2 xl:flex-col bg-[#fee9cc] xl:p-6 md:justify-around">

                <h1 class="text-2xl font-bold">Kenapa CodeX?</h1>
                
                <div class="flex justify-evenly gap-4">
                    <div class="bg-red-500 inline-flex w-40 h-40 p-6 flex-col text-center rounded-lg">
                        <h1 class="underline underline-offset-4 font-bold">200+</h1>
                        <p class="font-light text-slate-700">Kami sudah melayani lebih dari 200+ Client</p>
                    </div>
                    <div class="bg-red-500 inline-flex w-40 h-40 p-6 flex-col text-center rounded-lg">
                        <h1 class="underline underline-offset-4 font-bold">75+</h1>
                        <p class="font-light text-slate-700">Kami telah menyelesaikan lebih dari 75+ Project</p>
                    </div>
                    <div class="bg-red-500 inline-flex w-40 h-40 p-6 flex-col text-center rounded-lg">
                        <h1 class="underline underline-offset-4 font-bold">175+</h1>
                        <p class="font-light text-slate-700">Kami telah mendapat 275 Review Positive</p>
                    </div>
                </div>

                <div class="bg-blue-500 p-6 rounded-xl">
                    <i class="fa-solid fa-quote-left fa-2xl xs:fa-xs group-hover:text-white"></i>
                    <h1>Kami menyediakan memberikan layanan gratis revisi untuk kesalahan pengerjaan di project</h1>
                    <h1 class="font-light text-xs">*Request tambahan membutuhkan biaya tambahan</h1>
                </div>
                
            </div>

        </div>

    </main>




    <script>
        $(document).ready(function() {
            $('#toggle-sidebar').click(function() {
                $('#sidebar').toggleClass('-translate-x-full');
                $('#main-content').toggleClass('ml-64');
            });
        });
    </script>
</body>

</html>