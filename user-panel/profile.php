<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | CodeX</title>
    <link rel="shortcut icon" href="../img/ico/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/dist/output.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fonts.css">
</head>

<body>

    <main class="xxs:h-[96rem] md:h-screen bg-white flex justify-center items-center xxs:p-6 md:p-0">

        <div class="flex xxs:flex-col md:flex-row w-[95%] md:h-[95%] xxs:gap-6 md:gap-0 justify-between items-center">
            <div class="xxs:w-[20rem] xxs:h-[42rem] w-[24rem] md:h-[36.9rem] flex flex-col">
                <!-- header -->
                <div class="flex flex-col items-center gap-4 bg-yl py-4 rounded-t-lg">
                    <div class="absolute left-0 top-0 p-6 xxs:flex md:hidden">
                        <a href="../index.php" class="group">
                            <i class="fa-solid fa-arrow-left text-4xl bg-bl w-16 h-w-16 aspect-square flex justify-center items-center rounded-full shadow-keycaps-bl border-2 border-gray-800 group-active:translate-y-[10px] group-active:shadow-active-bl transition-all duration-75 ease-in-out"></i>
                        </a>
                    </div>
                    <i class="text-gray-800 fa-solid fa-user text-9xl border-2 border-gray-800 w-44 h-44 text-center flex items-center justify-center rounded-full bg-bl shadow-keycaps-bl"></i>
                    <h1 class="text-gray-800 font-sourGummy xxs:text-sm md:text-base">Rizky31</h1>
                    <p class="text-gray-800 font-sourGummy xxs:text-sm md:text-base flex gap-2"><span><i class="text-gray-800 fa-solid fa-envelope"></i></span>rizkymaulana317b@gmail.com</p>
                </div>
                <hr>
                <!-- info -->
                <div class="bg-yl h-full flex flex-col xxs:justify-normal md:justify-evenly xxs:gap-4 md:gap-0 items-center rounded-b-lg">
                    <div class="flex flex-col w-[75%]">
                        <p class="text-gray-800 font-sourGummy xxs:text-xs md:text-base">Nama lengkap</p>
                        <p class="bg-bl shadow-keycaps-bl font-sourGummy text-gray-800 w-full xxs:px-3 xxs:py-2 xxs:text-sm md:px-6 md:py-3 rounded-lg border-2 border-gray-700">Rizky Maulana</p>
                    </div>
                    <div class="flex flex-col w-[75%]">
                        <p class="text-gray-800 font-sourGummy xxs:text-xs md:text-base">Nomor Telp.</p>
                        <p class="bg-bl shadow-keycaps-bl font-sourGummy text-gray-800 w-full xxs:px-3 xxs:py-2 xxs:text-sm md:px-6 md:py-3 rounded-lg border-2 border-gray-700">+62 812-8721-7886</p>
                    </div>
                    <div class="flex flex-col w-[75%]">
                        <p class="text-gray-800 font-sourGummy xxs:text-xs md:text-base">Tanggal lahir</p>
                        <p class="bg-bl shadow-keycaps-bl font-sourGummy text-gray-800 w-full xxs:px-3 xxs:py-2 xxs:text-sm md:px-6 md:py-3 rounded-lg border-2 border-gray-700">31-Aug-2007</p>
                    </div>
                </div>
            </div>

            <div class="bg-yl flex flex-col xxs:w-[20rem] md:w-[52rem] md:h-[36.9rem] rounded-lg">
                <!-- header -->
                <div class="h-[10%] px-6 py-2 flex items-center">
                    <h1 class="underline font-sourGummy underline-offset-8 cursor-help text-gray-800" title="Hanya admin yang dapat melihat informasi ini">User Information</h1>
                </div>
                <div class="h-[90%]">

                    <form action="" class="flex h-full w-full">
                        <div class="flex xxs:flex-col xxs:items-center xxs:gap-6 md:gap-0 md:flex-row h-full w-full">


                            <div class="flex flex-col xxs:w-[90%] md:w-1/2 first:h-full xxs:justify-normal md:justify-evenly xxs:gap-0 md:gap-6">
                                <div class="flex flex-col h-full w-full items-center xxs:py-0 md:py-10 gap-6">
                                    <label class="flex xxs:w-full md:w-[90%] z-50 items-center border-2 shadow-keycaps-bl border-gray-800 rounded-lg focus-within:ring-2 focus-within:ring-bl focus-within:border-bld focus-within:shadow-active-bl transform focus-within:translate-y-[10px] transition-all duration-300">
                                        <i class="text-gray-800 fa-solid fa-user bg-bl flex xxs:p-2 md:p-4 items-center justify-center m-auto rounded-l-lg"></i>
                                        <input type="text" class="flex font-sourGummy bg-bl h-full w-full xxs:px-2 xxs:py-1 md:px-4 md:py-2 xxs:placeholder:text-sm md:placeholder:text-base rounded-r-lg focus:outline-none focus:ring-0 placeholder:text-gray-800" placeholder="Nama lengkap" />
                                    </label>
                                    <label class="flex xxs:w-full md:w-[90%] z-50 items-center border-2 shadow-keycaps-bl border-gray-800 rounded-lg focus-within:ring-2 focus-within:ring-bl focus-within:border-bld focus-within:shadow-active-bl transform focus-within:translate-y-[10px] transition-all duration-300">
                                        <i class="text-gray-800 fa-solid fa-calendar bg-bl flex xxs:p-2 md:p-4 items-center justify-center m-auto rounded-l-lg"></i>
                                        <input type="text" class="flex font-sourGummy bg-bl h-full w-full xxs:px-2 xxs:py-1 md:px-4 md:py-2 xxs:placeholder:text-sm md:placeholder:text-base rounded-r-lg focus:outline-none focus:ring-0 placeholder:text-gray-800" placeholder="Tanggal lahir" />
                                    </label>
                                </div>
                                <div class="p-6 xxs:hidden md:flex">
                                    <a href="../index.php" class="group">
                                        <i class="fa-solid fa-arrow-left text-4xl bg-bl w-16 h-w-16 aspect-square flex justify-center items-center rounded-full shadow-keycaps-bl border-2 border-gray-800 group-active:translate-y-[10px] group-active:shadow-active-bl transition-all duration-75 ease-in-out"></i>
                                    </a>
                                </div>
                            </div>


                            <div class="flex flex-col xxs:w-[90%] md:w-1/2 h-full">
                                <div class="flex flex-col h-full w-full items-center xxs:py-0 md:py-10 gap-6">
                                    <label class="flex shadow-keycaps-bl xxs:w-full md:w-[90%] items-center border-2 border-gray-800 rounded-lg focus-within:ring-2 focus-within:ring-bl focus-within:border-bld focus-within:shadow-active-bl transform focus-within:translate-y-[10px] transition-all duration-300">
                                        <i class="text-gray-800 fa-solid fa-user flex xxs:p-2 md:p-4 bg-bl p-4 items-center justify-center m-auto rounded-l-lg"></i>
                                        <input type="text" class="flex font-sourGummy h-full xxs:px-2 xxs:py-1 md:px-4 md:py- bg-bl placeholder:text-gray-800 w-full px-4 py-2 rounded-r-lg focus:outline-none focus:ring-0" placeholder="Username" />
                                    </label>
                                    <label class="flex shadow-keycaps-bl xxs:w-full md:w-[90%] items-center border-2 border-gray-800 rounded-lg focus-within:ring-2 focus-within:ring-bl focus-within:border-bld focus-within:shadow-active-bl transform focus-within:translate-y-[10px] transition-all duration-300">
                                        <i class="text-gray-800 fa-solid fa-envelope flex xxs:p-2 md:p-4 bg-bl p-4 items-center justify-center m-auto rounded-l-lg"></i>
                                        <input type="text" class="flex font-sourGummy h-full xxs:px-2 xxs:py-1 md:px-4 md:py- bg-bl placeholder:text-gray-800 w-full px-4 py-2 rounded-r-lg focus:outline-none focus:ring-0" placeholder="Email" />
                                    </label>
                                    <label class="flex shadow-keycaps-bl xxs:w-full md:w-[90%] items-center border-2 border-gray-800 rounded-lg focus-within:ring-2 focus-within:ring-bl focus-within:border-bld focus-within:shadow-active-bl transform focus-within:translate-y-[10px] transition-all duration-300">
                                        <i class="text-gray-800 fa-solid fa-key flex xxs:p-2 md:p-4 bg-bl p-4 items-center justify-center m-auto rounded-l-lg"></i>
                                        <input type="text" class="flex font-sourGummy h-full xxs:px-2 xxs:py-1 md:px-4 md:py- bg-bl placeholder:text-gray-800 w-full px-4 py-2 rounded-r-lg focus:outline-none focus:ring-0" placeholder="Password" />
                                    </label>
                                    <label class="flex shadow-keycaps-bl xxs:w-full md:w-[90%] items-center border-2 border-gray-800 rounded-lg focus-within:ring-2 focus-within:ring-bl focus-within:border-bld focus-within:shadow-active-bl transform focus-within:translate-y-[10px] transition-all duration-300">
                                        <i class="text-gray-800 fa-solid fa-phone flex xxs:p-2 md:p-4 bg-bl p-4 items-center justify-center m-auto rounded-l-lg"></i>
                                        <input type="text" class="flex font-sourGummy h-full xxs:px-2 xxs:py-1 md:px-4 md:py- bg-bl placeholder:text-gray-800 w-full px-4 py-2 rounded-r-lg focus:outline-none focus:ring-0" placeholder="Nomor telepon" />
                                    </label>
                                </div>
                                <div class="w-full flex justify-center xxs:items-center py-6 gap-6">
                                    <button class="xxs:py-1 xxs:px-4 xxs:text-sm md:text-base md:py-3 md:px-8 font-sourGummy border-2 border-gray-800 rounded-lg bg-rd shadow-keycaps-rd active:shadow-active-rd transform active:translate-y-[10px] transition-all duration-75 ease-in-out">Cancel</button>
                                    <button class="xxs:py-1 xxs:px-4 xxs:text-sm md:text-base md:py-3 md:px-8 font-sourGummy border-2 border-gray-800 rounded-lg bg-gr shadow-keycaps-gr active:shadow-active-gr transform active:translate-y-[10px] transition-all duration-75 ease-in-out">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </main>

</body>

</html>