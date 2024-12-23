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
    <link rel="stylesheet" href="./css/fonts.css">
</head>

<body style="scroll-behavior: smooth; scroll-snap-type: mandatory;">

    <div class="xxs:hidden fixed md:flex justify-center items-center bottom-4 right-4 w-16 h-16 bg-yl rounded-full z-50 animate-roundingbl cursor-pointer">
        <div class="absolute -top-2 -right-2 bg-bl border-2 border-gray-700 w-6 h-6 rounded-full flex justify-center items-center text-gray-700">
            3
        </div>
        <a href="https://wa.me/+628882125177?text=halo,%20saya%20tertarik%20dengan%20produk%20anda" target="_blank" class="text-green-700"><i class="fa-brands fa-whatsapp fa-2xl text-green-700"></i></a>
    </div>

    <!-- navbar -->
    <nav class="bg-yl py-4 flex flex-row justify-between px-4 items-center drop-shadow-lg">
        <!-- logo -->
        <div class="flex flex-row items-center gap-2 hover:cursor-pointer active:translate-y-[10px] transition-all ease-in-out duration-75 group">
            <img class="md:h-9 md:w-9 xxs:w-6 xxs:h-6 rounded-full group-active:-translate-y-[10px] transition-all ease-in-out duration-75" src="img/logo/logo.png" alt="logo.png">
            <h1 onclick="window.location.href='index.php'" class="xxs:text-xs xl:text-lg font-semibold bg-bl rounded-lg xxs:px-2 xxs:py-1 md:px-4 md:py-2 shadow-keycaps-bl border-2 border-gray-800 group-active:shadow-active-bl transition-all ease-in-out duration-200 font-sourGummy"><span class="text-gray-900 font-bold xxs:text-sm md:text-xl font-passionate">CodeX</span> Solutions</h1>
        </div>

        <!-- menu -->
        <div id="menu-item" class="xxs:hidden md:flex flex gap-4">
            <a href="#" class="border-2 border-transparent underline-offset-4 hover:underline hover:text-pk font-sourGummy duration-200 transition-all ease-in-out">Home</a>
            <a href="#services" class="smooth-scroll border-2 border-transparent underline-offset-4 hover:underline hover:text-pk font-sourGummy duration-200 transition-all ease-in-out">Services</a>
            <a href="#testimonial" class="smooth-scroll border-2 border-transparent underline-offset-4 hover:underline hover:text-pk font-sourGummy duration-200 transition-all ease-in-out">Testimonial</a>
            <a href="#contact" class="smooth-scroll border-2 border-transparent underline-offset-4 hover:underline hover:text-pk font-sourGummy duration-200 transition-all ease-in-out">Contact</a>
        </div>

        <!-- button -->
        <div class="bg-bl md:border-2 shadow-keycaps-bl md:border-gray-700 rounded-xl font-semibold xxs:border-0 xxs:px-0 xxs:py-0 md:px-6 md:py-2 text-black transform active:translate-y-[10px] active:text-gray-700 active:shadow-active-bl transition-all duration-75 ease-in-out">
            <a href="https://wa.me/+628882125177?text=halo,%20saya%20tertarik%20dengan%20produk%20anda" class="xxs:hidden md:flex font-sourGummy">Order Now</a>
            <i class="fa-solid fa-bars xxs:flex md:hidden p-2 border-2 border-gray-700 rounded-xl" id="toggle-sidebar"></i>
        </div>

    </nav>

    <!-- sidebar -->
    <div id="sidebar" class="h-screen w-64 bg-yl text-gray-700 border-r-2 border-gray-700 fixed left-0 top-0 -translate-x-full transform transition-transform duration-300 z-50">
        <div class="p-4">
            <img class="w-9 h-9 flex rounded-full m-auto border-2 border-blue-950" src="img/logo/logo.png" alt="logo.png">
            <h2 class="text-center mt-2 font-semibold font-sourGummy"><span class="font-passionate">CodeX</span> Solutions</h2>
            <nav class="mt-8">
                <ul>
                    <li class="mb-4 bg-bl rounded-lg shadow-keycaps-bl border-2 border-gray-700 active:translate-y-[10px] active:shadow-active-bl transition-all duration-75 ease-in-out">
                        <a href="#" class="flex items-center p-2 rounded-md font-sourGummy">
                            <span class="material-icons mr-3"><i class="fa-solid fa-home"></i></span>Dashboard
                        </a>
                    </li>
                    <li class="mb-4 bg-bl rounded-lg shadow-keycaps-bl border-2 border-gray-700 active:translate-y-[10px] active:shadow-active-bl transition-all duration-75 ease-in-out">
                        <a href="user-panel/profile.php" class="flex items-center p-2 rounded-md font-sourGummy">
                            <span class="material-icons mr-3"><i class="fa-solid fa-user"></i></span>Profile
                        </a>
                    </li>
                    <li class="mb-4 bg-bl rounded-lg shadow-keycaps-bl border-2 border-gray-700 active:translate-y-[10px] active:shadow-active-bl transition-all duration-75 ease-in-out">
                        <a href="user-panel/user-order.php" class="flex items-center p-2 rounded-md font-sourGummy">
                            <span class="material-icons mr-3"><i class="fa-solid fa-cart-shopping"></i></span>Checkout
                        </a>
                    </li>
                    <li class="mb-4 bg-bl rounded-lg shadow-keycaps-bl border-2 border-gray-700 active:translate-y-[10px] active:shadow-active-bl transition-all duration-75 ease-in-out">
                        <a href="#" class="flex items-center p-2 rounded-md font-sourGummy">
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
                <p class="md:text-sm text-md text-slate-700 font-sourGummy">Temukan solusi <span>IT</span> anda di sini</p>
                <span><a href="#services" class="smooth-scroll md:scale-75 lg:scale-100 bg-bl shadow-keycaps-bl active:shadow-active-bl transform active:translate-y-[10px] border-2 border-gray-700 text-black inline-flex gap-4 items-center justify-center px-4 py-2 rounded-lg hover:text-gray-700 font-sourGummy transition-all duration-75 ease-in-out">Services <i class="fa-solid fa-right-long"></i></a></span>
            </div>

            <div class="md:flex md:w-1/2 justify-center items-center xxs:hidden">
                <div class="relative group">
                    <!-- Kartu pertama -->
                    <div class="bg-white inline-flex shadow-2xl hover:shadow-lg flex-col p-4 rounded-lg border-2 border-gray-700 hover:scale-110 transition-transform duration-200 ease-in-out transform group-hover:translate-x-44 mb-4">
                        <div class="">
                            <img class="w-64 h-64" src="img/illustration/digital_artist_male.jpg" alt="UIUX.jpg">
                        </div>
                        <div>
                            <div class="py-4">
                                <h1 class="text-lg font-bold text-gray-700 font-sourGummy">UI / UX</h1>
                                <p class="text-sm text-gray-700 font-sourGummy">UI / UX DESIGNER</p>
                            </div>
                            <div class="py-4 flex flex-row justify-around items-center">
                                <h1 class="text-white bg-pk rounded-lg px-4 py-2 font-sourGummy border-2 border-gray-700">Avaliable</h1>
                                <button onclick="window.location.href = 'https://wa.me/+628882125177?text=halo,%20saya%20tertarik%20dengan%20produk%20anda'" class="bg-bl shadow-keycaps-bl border-2 border-black py-2 px-4 rounded-lg hover:text-text-gray-800 active:translate-y-[10px] active:shadow-active-bl font-sourGummy transition-all duration-75 ease-in-out">Order now</button>
                            </div>
                        </div>
                    </div>

                    <!-- Kartu kedua (ditempatkan di atas kartu pertama) -->
                    <div class="bg-white inline-flex shadow-2xl hover:shadow-lg flex-col p-4 rounded-lg border-2 border-gray-700 absolute top-4 left-4 hover:scale-110 transition-transform duration-200 ease-in-out transform group-hover:-translate-x-36">
                        <div class="mix-blend-multiply">
                            <img class="w-64 h-64 mix-blend-multiply" src="img/illustration/developer_male.jpg" alt="WEBDEV.jpg">
                        </div>
                        <div>
                            <div class="py-4">
                                <h1 class="text-lg font-sourGummy font-bold text-gray-700">Website Developer</h1>
                                <p class="text-sm font-sourGummy text-gray-700">Website Developer</p>
                            </div>
                            <div class="py-4 flex flex-row justify-around items-center">
                                <h1 class="text-white bg-pk rounded-lg px-4 py-2 font-sourGummy border-2 border-gray-700">Avaliable</h1>
                                <button onclick="window.location.href = 'https://wa.me/08882125177?text=halo,%20saya%20tertarik%20dengan%20produk%20anda'" class="bg-bl shadow-keycaps-bl border-2 border-black py-2 px-4 rounded-lg hover:text-text-gray-800 active:translate-y-[10px] active:shadow-active-bl font-sourGummy transition-all duration-75 ease-in-out">Order now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row items-center space-x-4 px-4 bg-yl">
            <h1 class="font-sourGummy xxs:text-xs md:text-xl font-semibold text-gray-700 hover:text-white transition-all ease-in-out duration-200">Supported Payment Method : </h1>
            <img src="img/logo/dana.png" alt="dana.png" class="xxs:h-14 xxs:w-14 md:w-32 md:h-32 object-contain filter grayscale hover:grayscale-0 transition duration-300">
            <img src="img/logo/ovo.png" alt="ovo.png" class="xxs:h-14 xxs:w-14 md:w-32 md:h-32 object-contain filter grayscale hover:grayscale-0 transition duration-300">
            <img src="img/logo/paypal.png" alt="paypal.png" class="xxs:h-14 xxs:w-14 md:w-32 md:h-32 object-contain filter grayscale hover:grayscale-0 transition duration-300">
        </div>

        <div id="services" class="flex flex-col justify-center items-center gap-4 p-6">
            <h1 class="font-sourGummy font-bold text-2xl md:text-3xl xl:text-4xl text-center">Bikin website harga murah!</h1>
            <p class="font-sourGummy text-center">Kami menyediakan jasa pembuatan Web, Design, dan IT Support</p>
            <div class="flex flex-col xxs:gap-4 sm:gap-4 md:flex-row md:gap-6 xl:gap-9">

                <!-- UI/UX Card -->
                <div class="bg-bl font-sourGummy shadow-keycaps-bl p-4 rounded-lg justify-evenly xxs:scale-75 sm:scale-75 md:scale-100 inline-flex flex-col h-64 w-64 drop-shadow-2xl border-2 border-gray-700 hover:border-3 hover:shadow-none transition-all duration-200 ease-in-out transform xxs:hover:scale-90 md:hover:scale-105">
                    <span><i class="fa-solid fa-brush w-12 h-12 text-left flex justify-center items-center border-2 border-black rounded-full bg-white"></i></span>
                    <h1 class="font-bold mt-4 text-left">UI / UX</h1>
                    <p class="text-left">Jasa buat design figma dengan harga terjangkau</p>
                </div>

                <!-- Website Developer Card -->
                <div class="bg-pk font-sourGummy shadow-keycaps-pk p-4 rounded-lg justify-evenly xxs:scale-75 sm:scale-75 md:scale-100 inline-flex flex-col h-64 w-64 gap-6 drop-shadow-2xl border-2 border-gray-700 hover:border-3 hover:shadow-none transition-all duration-200 ease-in-out transform xxs:hover:scale-90 md:hover:scale-105">
                    <span><i class="fa-solid fa-code w-12 h-12 text-left flex justify-center items-center border-2 border-black rounded-full bg-white"></i></span>
                    <h1 class="font-bold mt-4 text-left">Website Developer</h1>
                    <p class="text-left">Jasa buat website dengan harga terjangkau sesuai request Client, dan pelayanan 12/7</p>
                </div>

                <!-- IT Support Card -->
                <div class="bg-yl font-sourGummy shadow-keycaps-yl p-4 rounded-lg justify-evenly xxs:scale-75 sm:scale-75 md:scale-100 inline-flex flex-col h-64 w-64 gap-6 drop-shadow-2xl border-2 border-gray-700 hover:border-3 hover:shadow-none transition-all duration-200 ease-in-out transform xxs:hover:scale-90 md:hover:scale-105">
                    <span><i class="fa-solid fa-wrench w-12 h-12 text-left flex justify-center items-center border-2 border-black rounded-full bg-white"></i></span>
                    <h1 class="font-bold mt-4 text-left">IT Support</h1>
                    <p class="text-left">Jasa IT Support buat bantuin masalah program kamu!</p>
                </div>

            </div>
        </div>


        <div class="flex flex-row">

            <div class="xxs:hidden xs:w-full md:flex xl:w-1/2 overflow-hidden bg-yl h-96">
                <img class="object-cover transition-transform duration-300" src="img/illustration/persons_digital.png" alt="persos.png">
            </div>


            <div class="xxs:flex xxs:flex-col xxs:justify-evenly xxs:w-[95%] xxs:m-auto xxs:px-4 xxs:rounded-lg md:rounded-none xxs:h-96 md:w-1/2 md:h-96 md:flex-col bg-yl md:gap-2 md:p-6 md:justify-around">

                <h1 class="xxs:text-sm text-2xl font-bold font-bona text-gray-700 font-sourGummy">Kenapa <span class="text-gray-900 bg-pk border-2 border-gray-700 shadow-keycaps-pk rounded-lg px-2 py-1">CodeX</span>?</h1>

                <div class="flex justify-evenly gap-4">
                    <div class="bg-[#ABDAFC] drop-shadow-md inline-flex flex-col text-center rounded-lg border-2 border-gray-700 shadow-keycaps-bl hover:shadow-active-bl hover:translate-y-[10px] md:p-4 transition-all ease-in-out">
                        <h1 class="underline underline-offset-4 xxs:py-2 md:py-6 xxs:text-sm md:text-base font-bold font-sourGummy text-slate-900">3</h1>
                        <p class="xxs:text-xs font-light text-slate-900 xxs:py-2 md:py-6 md:text-base font-sourGummy">Kami sudah melayani lebih dari 3 Client</p>
                    </div>
                    <div class="bg-[#F88DAD] drop-shadow-md inline-flex flex-col text-center rounded-lg border-2 border-gray-700 shadow-keycaps-pk hover:shadow-active-pk hover:translate-y-[10px] md:p-4 transition-all ease-in-out">
                        <h1 class="underline underline-offset-4 xxs:py-2 md:py-6 xxs:text-sm md:text-base font-bold font-sourGummy text-slate-900">4</h1>
                        <p class="xxs:text-xs font-light text-slate-900 xxs:py-2 md:py-6 md:text-base font-sourGummy">Kami telah menyelesaikan lebih dari 4 Project</p>
                    </div>
                    <div class="bg-[#FAC748] drop-shadow-md inline-flex flex-col text-center rounded-lg border-2 border-gray-700 shadow-keycaps-yl hover:shadow-active-yl hover:translate-y-[10px] md:p-4 transition-all ease-in-out">
                        <h1 class="underline underline-offset-4 xxs:py-2 md:py-6 xxs:text-sm md:text-base font-bold font-sourGummy text-slate-900">0</h1>
                        <p class="xxs:text-xs font-light text-slate-900 xxs:py-2 md:py-6 md:text-base font-sourGummy">Kami telah mendapat 0 Review</p>
                    </div>
                </div>

                <div class="bg-transparent p-6 rounded-xl text-gray-700">
                    <i class="fa-solid fa-quote-left fa-2xl xs:fa-xs group-hover:text-white"></i>
                    <h1 class="font-sourGummy text-gray-700">Kami memberikan layanan gratis revisi untuk kesalahan pengerjaan di project</h1>
                    <h1 class="font-sourGummy font-light text-xs text-gray-500">*Request tambahan membutuhkan biaya tambahan</h1>
                </div>

            </div>

        </div>

        <div id="testimonial" class="flex p-6 h-96 flex-col justify-evenly">
            <div class="text-center">
                <h1 class="text-4xl font-sourGummy">What <span class="text-[#FAC748]">Client</span> Say!</h1>
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
                            <h1 class="font-bold text-[#FAC748] font-sourGummy">Client name</h1>
                            <p class="font-thin text-xs font-sourGummy">Web Developer</p>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm font-sourGummy">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt officia nostrum</p>
                    </div>
                    <div>
                        <p>&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                    </div>

                </div>

            </div>
        </div>

        <div class="bg-transparentw-full flex justify-center">

            <div class="bg-yl w-[80%] rounded-xl p-4 flex flex-row justify-between items-center drop-shadow-lg">
                <h1 class="text-gray-700 font-sourGummy">Mau Order? cek dulu detailnya biar ga salah order</h1>
                <button onclick="window.location.href ='detail.php'" class="font-sourGummy bg-bl px-12 py-2 rounded-xl border-2 shadow-keycaps-bl text-black border-gray-700 active:shadow-active-bl active:text-gray-700 active:translate-y-[10px] transition-all ease-in-out duration-200">Detail</button>
            </div>

        </div>

        <div>
            <div id="contact" class="flex items-center justify-center min-h-screen bg-gray-100">
                <div class="w-full max-w-lg p-8 bg-yl border-8 border-ylb rounded-2xl shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-700 mb-6 text-center font-sourGummy">Get in touch <i class="fa-solid fa-handshake"></i></h2>
                    <form action="#" method="POST" class="space-y-4">
                        <!-- Nama -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 font-sourGummy">Name</label>
                            <input type="text" id="name" name="name" required class="mt-1 w-full px-4 py-2 border font-sourGummy border-gray-300 bg-yld text-white placeholder-white rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500" placeholder="Enter your name" />
                        </div>
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 font-sourGummy">Email</label>
                            <input type="email" id="email" name="email" required class="mt-1 w-full px-4 py-2 border font-sourGummy border-gray-300 bg-yld text-white placeholder-white rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500" placeholder="Enter your email" />
                        </div>
                        <!-- Pesan -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 font-sourGummy">Message</label>
                            <textarea id="message" name="message" required class="mt-1 w-full px-4 py-2 border font-sourGummy border-gray-300 bg-yld text-white placeholder-white rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500" rows="4" placeholder="Write your message here"></textarea>
                        </div>
                        <!-- Tombol Submit -->
                        <div class="text-center">
                            <button type="submit" class="px-6 py-2 font-sourGummy text-black bg-bl shadow-keycaps-bl border-2 border-gray-700 rounded-lg fhomehover:text-gray-700 transform focus:ring-4 focus:ring-blue-300 transition-all duration-75 ease-in-out cursor-not-allowed" disabled title="Still Development">Send an email</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <footer class="bg-yl flex flex-col h-40 justify-evenly items-center">
        <div class="flex gap-4">
            <a target="_blank" href="https://www.instagram.com/codex._solutions/profilecard/?igsh=cjk4NXRuMXFscGt6"><i class="fa-brands fa-2xl text-gray-800 fa-instagram hover:text-pink-700 transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
            <a target="_blank" href="https://github.com/RizkyMaulana310807"><i class="fa-brands fa-2xl text-gray-800 fa-github hover:text-black transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
            <a target="_blank" href="https://vm.tiktok.com/ZSjAkD8KY/"><i class="fa-brands fa-2xl text-gray-800 fa-tiktok hover:text-black transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
            <a target="_blank" href="mailto:rizkymaulana.bussinese@gmail.com"><i class="fa-solid fa-2xl text-gray-800 fa-envelope hover:text-black transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
            <a target="_blank" href="https://wa.me/+628882125177?text=halo,%20saya%20tertarik%20dengan%20produk%20anda"><i class="fa-brands fa-2xl text-gray-800 fa-whatsapp hover:text-green-700 transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
        </div>
        <hr>
        <div>
            <p class="text-gray-800 font-sourGummy">&copy;CodeXSolutions 2024, Allright reserved.</p>
        </div>
        <div>
            <p class="underline underline-offset-8 hover:text-bl transition-all duration-200 ease-in-out">S&K</p>
        </div>
    </footer>

    <script>
        $(document).ready(function() {

            $('.smooth-scroll').click(function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top

                }, 500);
            });
            $('#toggle-sidebar').click(function() {
                $('#sidebar').toggleClass('-translate-x-full');
                $('#main-content').toggleClass('ml-64');
            });
        });
    </script>
</body>

</html>