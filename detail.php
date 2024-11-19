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

<body>
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
            <a href="https://wa.me/08882125177?text=halo,%20saya%20tertarik%20dengan%20produk%20anda" class="xxs:hidden md:flex font-sourGummy">Order Now</a>
            <i class="fa-solid fa-bars xxs:flex md:hidden p-2 border-2 border-gray-700 rounded-xl" id="toggle-sidebar"></i>
        </div>

    </nav>
    <div class="flex flex-col w-full h-full p-4">
        <div class="flex xxs:flex-col md:flex-row justify-evenly">
            <div class="bg-bl font-sourGummy shadow-keycaps-bl p-4 rounded-lg xxs:scale-75 sm:scale-75 md:scale-100 inline-flex flex-col m-4 gap-6 drop-shadow-2xl border-2 border-gray-700 hover:border-3 hover:shadow-none transition-all duration-200 ease-in-out transform xxs:hover:scale-90 md:hover:scale-105">
                <span><i class="fa-solid fa-brush w-12 h-12 text-left flex justify-center items-center border-2 border-black rounded-full bg-white"></i></span>
                <h1 class="font-bold mt-4 text-left">Mockup design</h1>
                
                <p class="">UI/UX Design: <span class="text-base underline underline-offset-8">Desain antarmuka pengguna yang intuitif dan mudah digunakan.</span></p>
                <p class="">Web Design: <span class="text-base underline underline-offset-8">Desain tampilan website yang menarik dan profesional</span></p>
                <p class="">Wireframing: <span class="text-base underline underline-offset-8">Membuat kerangka dasar desain sebelum tahap visual.</span></p>
                <p class="">Prototyping: <span class="text-base underline underline-offset-8">Membuat prototipe interaktif untuk menguji desain.</span></p>
                <p class="">High Fidelity Design: <span class="text-base underline underline-offset-8">Desain dengan tampilan yang sangat detail dan mirip dengan produk akhir.</span></p>
                <p class="">Low Fidelity Design: <span class="text-base underline underline-offset-8">Desain dengan tampilan yang sederhana dan berfungsi sebagai blueprint.</span></p>
            </div>
            <div class="bg-pk font-sourGummy shadow-keycaps-pk p-4 rounded-lg xxs:scale-75 sm:scale-75 md:scale-100 inline-flex flex-col m-4 gap-6 drop-shadow-2xl border-2 border-gray-700 hover:border-3 hover:shadow-none transition-all duration-200 ease-in-out transform xxs:hover:scale-90 md:hover:scale-105">
                <span><i class="fa-solid fa-code w-12 h-12 text-left flex justify-center items-center border-2 border-black rounded-full bg-white"></i></span>
                <h1 class="font-bold mt-4 text-left">Web Developer</h1>
                
                <p>Website Statis: <span class="texet-base underline underline-offset-8">Website dengan konten yang tidak berubah-ubah.</span></p>
                <p>Website Dinamis: <span class="texet-base underline underline-offset-8">Website dengan konten yang dapat berubah secara otomatis.</span></p>
                <p>E-commerce: <span class="texet-base underline underline-offset-8">Website untuk menjual produk atau jasa secara online.</span></p>
                <p>Web Application: <span class="texet-base underline underline-offset-8">Aplikasi berbasis web untuk keperluan bisnis.</span></p>
                <p>Responsive Web Design: <span class="texet-base underline underline-offset-8">Desain website yang dapat menyesuaikan tampilan di berbagai perangkat.</span></p>
                <p>Pengembangan API: <span class="texet-base underline underline-offset-8">Antarmuka pemrograman aplikasi untuk menghubungkan sistem yang berbeda.</span></p>
                <p>Custom Development: <span class="texet-base underline underline-offset-8">Pengembangan aplikasi khusus sesuai kebutuhan.</span></p>
            </div>
            <div class="bg-yl font-sourGummy shadow-keycaps-yl p-4 rounded-lg xxs:scale-75 sm:scale-75 md:scale-100 inline-flex flex-col m-4 gap-6 drop-shadow-2xl border-2 border-gray-700 hover:border-3 hover:shadow-none transition-all duration-200 ease-in-out transform xxs:hover:scale-90 md:hover:scale-105">
                <span><i class="fa-solid fa-wrench w-12 h-12 text-left flex justify-center items-center border-2 border-black rounded-full bg-white"></i></span>
                <h1 class="font-bold mt-4 text-left">IT Support</h1>
                
                <p>Optimasi Kinerja: <span class="text-base underline underline-offset-8">Meningkatkan kecepatan dan efisiensi sistem IT.</span></p>
                <p>Cybersecurity Assessment: <span class="text-base underline underline-offset-8">Mengevaluasi tingkat keamanan sistem IT.</span></p>
                <p>Konsultasi Strategi IT: <span class="text-base underline underline-offset-8">Membantu merumuskan strategi IT yang selaras dengan tujuan bisnis.</span></p>
                <p>Analisis Kebutuhan Sistem: <span class="text-base underline underline-offset-8">Menentukan sistem IT yang paling sesuai dengan kebutuhan bisnis Anda.</span></p>
            </div>
        </div>
    </div>
    <footer class="bg-yl flex flex-col h-40 justify-evenly items-center">
        <div class="flex gap-4">
            <a target="_blank" href="https://www.instagram.com/codex._solutions/profilecard/?igsh=cjk4NXRuMXFscGt6"><i class="fa-brands fa-2xl text-gray-800 fa-instagram hover:text-pink-700 transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
            <a target="_blank" href="https://github.com/RizkyMaulana310807"><i class="fa-brands fa-2xl text-gray-800 fa-github hover:text-black transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
            <a target="_blank" href="https://vm.tiktok.com/ZSjAkD8KY/"><i class="fa-brands fa-2xl text-gray-800 fa-tiktok hover:text-black transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
            <a target="_blank" href="mailto:rizkymaulana.bussinese@gmail.com"><i class="fa-solid fa-2xl text-gray-800 fa-envelope hover:text-black transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
            <a target="_blank" href="https://wa.me/08882125177?text=halo,%20saya%20tertarik%20dengan%20produk%20anda"><i class="fa-brands fa-2xl text-gray-800 fa-whatsapp hover:text-green-700 transform hover:scale-110 hover:underline hover:underline-offset-8 transition-all ease-in-out duration-200"></i></a>
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
    </script>
</body>

</html>