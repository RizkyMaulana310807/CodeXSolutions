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
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>

<body>

    <!-- navbar -->
    <nav class="bg-yl py-4 flex flex-row justify-between px-4 items-center drop-shadow-lg">
        <!-- logo -->
        <div class="flex flex-row items-center gap-2 hover:cursor-pointer hover:translate-y-[10px] transition-all ease-in-out duration-200 group">
            <img class="md:h-9 md:w-9 xxs:w-6 xxs:h-6 rounded-full group-hover:-translate-y-[10px] transition-all ease-in-out duration-200" src="img/logo/logo.png" alt="logo.png">
            <h1 class="xxs:text-xs xl:text-lg font-semibold bg-bl rounded-lg xxs:px-2 xxs:py-1 md:px-4 md:py-2 shadow-keycaps-bl border-2 border-gray-800 group-hover:shadow-active-bl transition-all ease-in-out duration-200"><span class="text-gray-900 font-bold xxs:text-sm md:text-xl">CodeX</span> Solutions</h1>
        </div>

        <!-- menu -->
        <div id="menu-item" class="xxs:hidden md:flex flex gap-4">
            <a href="#" class="border-2 border-transparent underline-offset-4 hover:underline hover:text-slate-400 duration-200 transition-all ease-in-out">Home</a>
            <a href="#" class="border-2 border-transparent underline-offset-4 hover:underline hover:text-slate-400 duration-200 transition-all ease-in-out">Services</a>
            <a href="#" class="border-2 border-transparent underline-offset-4 hover:underline hover:text-slate-400 duration-200 transition-all ease-in-out">Testimonial</a>
            <a href="#" class="border-2 border-transparent underline-offset-4 hover:underline hover:text-slate-400 duration-200 transition-all ease-in-out">Contact</a>
        </div>

        <!-- button -->
        <div class="bg-bl md:border-2 shadow-keycaps-bl md:border-gray-700 rounded-xl font-semibold xxs:border-0 xxs:px-0 xxs:py-0 md:px-6 md:py-2 text-black transform hover:translate-y-[10px] hover:text-gray-700 hover:shadow-active-bl transition-all duration-200 ease-in-out">
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
        <div class="flex flex-row bg-white py-10">
            <div class="flex md:w-1/2 flex-col justify-evenly px-6 xs:w-full xxs:w-full md:text-left xs:text-center xs:justify-center xs:gap-4 xxs:text-center xxs:justify-center xxs:gap-4">
                <h1 class="md:text-7xl xl:text-8xl font-bebas text-gray-900 xs:text-7xl xxs:text-5xl"><span class="hover:text-green-500 drop-shadow-md transition-all duration-200 ease-in-out">Grow</span> your Online <span class="hover:text-blue-500 drop-shadow-md transition-all duration-200 ease-in-out">World</span> Together</h1>
                <p class="md:text-sm text-md text-slate-700">Temukan solusi <span>IT</span> anda di sini</p>
                <span><a href="#" class="md:scale-75 lg:scale-100 bg-bl shadow-keycaps-bl hover:shadow-active-bl transform hover:translate-y-[10px] border-2 border-gray-700 text-black inline-flex gap-4 items-center justify-center px-4 py-2 rounded-lg hover:text-gray-700 transition-all duration-200 ease-in-out">Services <i class="fa-solid fa-right-long"></i></a></span>
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
                                <h1 class="text-lg font-bold text-gray-700">UI / UX</h1>
                                <p class="text-sm text-gray-700">UI / UX DESIGNER</p>
                            </div>
                            <div class="py-4 flex flex-row justify-around items-center">
                                <h1 class="text-white bg-pk rounded-lg px-4 py-2">Avaliable</h1>
                                <button class="bg-bl shadow-keycaps-bl border-2 border-black py-2 px-4 rounded-lg hover:text-text-gray-800 hover:translate-y-[10px] hover:shadow-active-bl transition-all duration-200 ease-in-out">Order now</button>
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
                                <h1 class="text-lg font-bold text-gray-700">Website Developer</h1>
                                <p class="text-sm text-gray-700">Website Developer</p>
                            </div>
                            <div class="py-4 flex flex-row justify-around items-center">
                                <h1 class="text-white bg-pk rounded-lg px-4 py-2">Avaliable</h1>
                                <button class="bg-bl shadow-keycaps-bl border-2 border-black py-2 px-4 rounded-lg hover:text-text-gray-800 hover:translate-y-[10px] hover:shadow-active-bl transition-all duration-200 ease-in-out">Order now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row items-center space-x-4 px-4 bg-yl">
            <h1 class="xxs:text-xs md:text-xl font-semibold text-gray-700 hover:text-white transition-all ease-in-out duration-200">Supported Payment Method : </h1>
            <img src="img/logo/dana.png" alt="dana.png" class="xxs:h-14 xxs:w-14 md:w-32 md:h-32 object-contain filter grayscale hover:grayscale-0 transition duration-300">
            <img src="img/logo/ovo.png" alt="ovo.png" class="xxs:h-14 xxs:w-14 md:w-32 md:h-32 object-contain filter grayscale hover:grayscale-0 transition duration-300">
            <img src="img/logo/paypal.png" alt="paypal.png" class="xxs:h-14 xxs:w-14 md:w-32 md:h-32 object-contain filter grayscale hover:grayscale-0 transition duration-300">
        </div>

        <div class="flex flex-col justify-center items-center gap-4 p-6">
            <h1 class="font-bold text-2xl md:text-3xl xl:text-4xl text-center">Bikin website harga murah!</h1>
            <p class="text-center">Kami menyediakan jasa pembuatan Web, Design, dan IT Support</p>
            <div class="flex flex-col xxs:gap-4 sm:gap-4 md:flex-row md:gap-6 xl:gap-9">

                <!-- UI/UX Card -->
                <div class="bg-bl shadow-keycaps-bl p-4 rounded-lg justify-evenly xxs:scale-75 sm:scale-75 md:scale-100 inline-flex flex-col h-64 w-64 drop-shadow-2xl border-2 border-gray-700 transform xxs:hover:scale-90 md:hover:scale-105 hover:border-3 hover:shadow-none transition-all duration-200 ease-in-out">
                    <span><i class="fa-solid fa-brush w-12 h-12 text-left flex justify-center items-center border-2 border-black rounded-full bg-white"></i></span>
                    <h1 class="font-bold mt-4 text-left">UI / UX</h1>
                    <p class="text-left">Jasa buat design figma dengan harga terjangkau mulai dari</p>
                </div>

                <!-- Website Developer Card -->
                <div class="bg-pk shadow-keycaps-pk p-4 rounded-lg justify-evenly xxs:scale-75 sm:scale-75 md:scale-100 inline-flex flex-col h-64 w-64 gap-6 drop-shadow-2xl border-2 border-gray-700 transform xxs:hover:scale-90 md:hover:scale-105 hover:border-3 hover:shadow-none transition-all duration-200 ease-in-out">
                    <span><i class="fa-solid fa-code w-12 h-12 text-left flex justify-center items-center border-2 border-black rounded-full bg-white"></i></span>
                    <h1 class="font-bold mt-4 text-left">Website Developer</h1>
                    <p class="text-left">Jasa buat website dengan harga terjangkau sesuai request Client, dan pelayanan 12/7</p>
                </div>

                <!-- IT Support Card -->
                <div class="bg-yl shadow-keycaps-yl p-4 rounded-lg justify-evenly xxs:scale-75 sm:scale-75 md:scale-100 inline-flex flex-col h-64 w-64 gap-6 drop-shadow-2xl border-2 border-gray-700 transform xxs:hover:scale-90 md:hover:scale-105 hover:border-3 hover:shadow-none transition-all duration-200 ease-in-out">
                    <span><i class="fa-solid fa-wrench w-12 h-12 text-left flex justify-center items-center border-2 border-black rounded-full bg-white"></i></span>
                    <h1 class="font-bold mt-4 text-left">IT Support</h1>
                    <p class="text-left">Jasa IT Support buat bantuin masalah program kamu!</p>
                </div>

            </div>
        </div>


        <div class="flex flex-row ">

            <div class="xxs:hidden xs:w-full md:flex xl:w-1/2 overflow-hidden bg-yl">
                <img class="object-cover transition-transform duration-300" src="img/illustration/persons_digital.png" alt="persos.png">
            </div>


            <div class="xxs:flex xxs:flex-col xxs:w-full xxs:h-96 xxs:justify-between xl:flex xl:w-1/2 xl:flex-col bg-yl xl:p-6 md:justify-around">

                <h1 class="xxs:text-sm text-2xl font-bold font-bona text-gray-700">Kenapa <span class="text-gray-900 bg-pk border-2 border-gray-700 shadow-keycaps-pk rounded-lg px-2 py-1">CodeX</span>?</h1>

                <div class="flex justify-evenly gap-4">
                    <div class="bg-[#ABDAFC] drop-shadow-md inline-flex xxs:w-32 xxs:h-40 md:w-40 md:h-40 p-6 flex-col text-center rounded-lg border-2 border-gray-700 shadow-keycaps-bl hover:shadow-active-bl hover:translate-y-[10px] transition-all ease-in-out">
                        <h1 class="underline underline-offset-4 font-bold text-slate-900">200+</h1>
                        <p class="xxs:text-xs font-light text-slate-900">Kami sudah melayani lebih dari 200+ Client</p>
                    </div>
                    <div class="bg-[#F88DAD] drop-shadow-md inline-flex xxs:w-32 xxs:h-40 md:w-40 md:h-40 p-6 flex-col text-center rounded-lg border-2 border-gray-700 shadow-keycaps-pk hover:shadow-active-pk hover:translate-y-[10px] transition-all ease-in-out">
                        <h1 class="underline underline-offset-4 font-bold text-slate-900">75+</h1>
                        <p class="xxs:text-xs font-light text-slate-900">Kami telah menyelesaikan lebih dari 75+ Project</p>
                    </div>
                    <div class="bg-[#FAC748] drop-shadow-md inline-flex xxs:w-32 xxs:h-40 md:w-40 md:h-40 p-6 flex-col text-center rounded-lg border-2 border-gray-700 shadow-keycaps-yl hover:shadow-active-yl hover:translate-y-[10px] transition-all ease-in-out">
                        <h1 class="underline underline-offset-4 font-bold text-slate-900">175+</h1>
                        <p class="xxs:text-xs font-light text-slate-900">Kami telah mendapat 275 Review Positive</p>
                    </div>
                </div>

                <div class="bg-transparent p-6 rounded-xl shadow-lg text-gray-700">
                    <i class="fa-solid fa-quote-left fa-2xl xs:fa-xs group-hover:text-white"></i>
                    <h1 class="text-gray-700">Kami memberikan layanan gratis revisi untuk kesalahan pengerjaan di project</h1>
                    <h1 class="font-light text-xs text-gray-500">*Request tambahan membutuhkan biaya tambahan</h1>
                </div>

            </div>

        </div>

        <div class="flex p-6 h-96 flex-col justify-evenly">
            <div class="text-center">
                <h1 class="text-4xl font-bebas">What <span class="text-[#FAC748]">Client</span> Say!</h1>
                <p></p>
            </div>
            <div class="flex justify-center">

                <!-- card -->
                <div class="bg-transparent border-2 border-black inline-flex flex-col justify-evenly w-80 h-52 p-4 rounded-lg drop-shadow-xl">
                    <!-- header -->
                    <div class="flex flex-row items-center gap-4">
                        <div>
                            <img class="w-12 h-12 rounded-full border-2 border-black" src="img/illustration/person_hold_painting.jpg" alt="persons.jpg">
                        </div>
                        <div class="flex flex-col">
                            <h1 class="font-bold text-[#FAC748]">Client name</h1>
                            <p class="font-thin text-xs">Web Developer</p>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt officia nostrum</p>
                    </div>
                    <div>
                        <p>&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                    </div>

                </div>

            </div>
        </div>

        <div class="bg-transparentw-full flex justify-center">

            <div class="bg-yl w-[80%] rounded-xl p-4 flex flex-row justify-between items-center drop-shadow-lg">
                <h1 class="text-gray-700">Siap untuk memulai? </h1>
                <button class="bg-bl px-12 py-2 rounded-xl border-2 shadow-keycaps-bl text-black border-gray-700 hover:shadow-active-bl hover:text-gray-700 hover:translate-y-[10px] transition-all ease-in-out duration-200">Start</button>
            </div>

        </div>

        <div>
            <div class="flex items-center justify-center min-h-screen bg-gray-100">
                <div class="w-full max-w-lg p-8 bg-yl border-8 border-ylb rounded-xl shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-700 mb-6 text-center">Get in touch <i class="fa-solid fa-handshake"></i></h2>
                    <form action="#" method="POST" class="space-y-4">
                        <!-- Nama -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name" required class="mt-1 w-full px-4 py-2 border border-gray-300 bg-yld text-white placeholder-white rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500" placeholder="Enter your name" />
                        </div>
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" required class="mt-1 w-full px-4 py-2 border border-gray-300 bg-yld text-white placeholder-white rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500" placeholder="Enter your email" />
                        </div>
                        <!-- Pesan -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea id="message" name="message" required class="mt-1 w-full px-4 py-2 border border-gray-300 bg-yld text-white placeholder-white rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500" rows="4" placeholder="Write your message here"></textarea>
                        </div>
                        <!-- Tombol Submit -->
                        <div class="text-center">
                            <button type="submit" class="px-6 py-2 text-black bg-bl shadow-keycaps-bl border-2 border-gray-700 rounded-lg hover:shadow-active-bl hover:text-gray-700 transform hover:translate-y-[10px] focus:ring-4 focus:ring-blue-300 transition-all duration-200 ease-in-out">Send an email</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <footer class="bg-yl flex flex-col h-40 justify-evenly items-center">
        <div class="flex gap-4">
            <a href=""><i class="fa-brands fa-2xl text-gray-800 fa-instagram hover:text-pink-700 transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
            <a href=""><i class="fa-brands fa-2xl text-gray-800 fa-github hover:text-black transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
            <a href=""><i class="fa-brands fa-2xl text-gray-800 fa-tiktok hover:text-black transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
            <a href="https://wa.me/08882125177?text=halo,%20saya%20tertarik%20dengan%20produk%20anda"><i class="fa-brands fa-2xl text-gray-800 fa-whatsapp hover:text-green-700 transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
        </div>
        <hr>
        <div>
            <p class="text-gray-800">&copy;CodeXSolutions 2024, Allright reserved.</p>
        </div>
    </footer>




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