<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
    <link rel="shortcut icon" href="../img/ico/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/dist/output.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fonts.css">
</head>

<body class="flex h-screen">
    <div class="flex w-full">
        <!-- Sidebar -->
        <div class="fixed h-screen bg-gray-900 text-white transition-all duration-300 w-20 hover:w-64 group z-50">
            <!-- Logo Section -->
            <div class="h-20 flex items-center justify-center bg-gray-800 w-20 rounded-lg">
                <div class="w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center">
                    <img src="../img/logo/logo.png" alt="logo.png">
                </div>
            </div>

            <!-- Divider -->
            <div class="w-full h-px bg-gray-700 my-4"></div>

            <!-- Navigation Menu -->
            <nav class="px-4">
                <a href="#" onclick="showContent('dashboard')" class="menu-link flex items-center h-14 px-3 my-1 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors duration-200">
                    <i class="fas fa-home text-xl min-w-[2rem] text-center"></i>
                    <span class="ml-3 whitespace-nowrap transition-all duration-300 opacity-0 group-hover:opacity-100 w-0 group-hover:w-auto overflow-hidden">Dashboard</span>
                </a>
                <a href="#" onclick="showContent('users')" class="menu-link flex items-center h-14 px-3 my-1 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors duration-200">
                    <i class="fas fa-users text-xl min-w-[2rem] text-center"></i>
                    <span class="ml-3 whitespace-nowrap transition-all duration-300 opacity-0 group-hover:opacity-100 w-0 group-hover:w-auto overflow-hidden">Users</span>
                </a>
                <a href="#" onclick="showContent('calendar')" class="menu-link flex items-center h-14 px-3 my-1 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors duration-200">
                    <i class="fas fa-calendar text-xl min-w-[2rem] text-center"></i>
                    <span class="ml-3 whitespace-nowrap transition-all duration-300 opacity-0 group-hover:opacity-100 w-0 group-hover:w-auto overflow-hidden">calendar</span>
                </a>
                <a href="#" onclick="showContent('reports')" class="menu-link flex items-center h-14 px-3 my-1 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors duration-200">
                    <i class="fas fa-file-alt text-xl min-w-[2rem] text-center"></i>
                    <span class="ml-3 whitespace-nowrap transition-all duration-300 opacity-0 group-hover:opacity-100 w-0 group-hover:w-auto overflow-hidden">Reports</span>
                </a>
                <a href="#" onclick="showContent('messages')" class="menu-link flex items-center h-14 px-3 my-1 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors duration-200">
                    <i class="fas fa-envelope text-xl min-w-[2rem] text-center"></i>
                    <span class="ml-3 whitespace-nowrap transition-all duration-300 opacity-0 group-hover:opacity-100 w-0 group-hover:w-auto overflow-hidden">Messages</span>
                </a>
                <a href="#" onclick="showContent('settings')" class="menu-link flex items-center h-14 px-3 my-1 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors duration-200">
                    <i class="fas fa-cog text-xl min-w-[2rem] text-center"></i>
                    <span class="ml-3 whitespace-nowrap transition-all duration-300 opacity-0 group-hover:opacity-100 w-0 group-hover:w-auto overflow-hidden">Settings</span>
                </a>
                <a href="#" onclick="showContent('notifications')" class="menu-link flex items-center h-14 px-3 my-1 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors duration-200">
                    <i class="fas fa-bell text-xl min-w-[2rem] text-center"></i>
                    <span class="ml-3 whitespace-nowrap transition-all duration-300 opacity-0 group-hover:opacity-100 w-0 group-hover:w-auto overflow-hidden">notifications</span>
                    <div class="bg-red-500 fixed rounded-full">
                        <h1 class="text-xs px-1 rounded-full">1</h1>
                    </div>
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-20 group-hover:ml-64 bg-gray-700 transition-all duration-300 p-4 w-full">
            <!-- Dashboard -->
            <div id="dashboard" class="hidden content-section w-full h-full flex-col p-4">
                <h1 class="text-2xl font-bold text-white">Dashboard</h1>
                <div class="flex h-full w-full flex-col">
                    <div class="flex flex-row p-4 w-full h-16 drop-shadow-xl">
                        <div class="gap-4 w-full h-11 flex items-center">
                            <button onclick="showData('masuk')" class="bg-bl px-6 py-2 rounded-lg">Masuk</button>
                            <button onclick="showData('terima')" class="bg-bl px-6 py-2 rounded-lg">Di terima</button>
                            <button onclick="showData('berakhir')" class="bg-bl px-6 py-2 rounded-lg">Berakhir</button>
                        </div>
                        <div class="gap-4 w-full h-11 flex flex-row justify-end">
                            <button class="px-6 py-2 bg-bl rounded-lg">Sort</button>
                            <div class="bg-bl flex flex-row rounded-lg border-2 border-transparent focus-within:ring-2 focus-within:ring-white focus-within:border-white">
                                <label for="searchInput" class="flex items-center"><i class="fa-solid fa-magnifying-glass px-4 text-2xl flex text-center items-center"></i></label>
                                <input class="w-72 p-4 rounded-r-lg focus:outline-none" type="text" name="searchInput" id="searchInput" placeholder="Search ...">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="flex h-full w-full p-4">
                        <div id="masuk" class="dataContent grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-4 w-full">
                            <?php
                            // Contoh array data
                            $dataList = [
                                ["title" => "Data 1", "description" => "Deskripsi Data Masuk"],
                                ["title" => "Data 2", "description" => "Deskripsi Data Masuk"],
                                ["title" => "Data 3", "description" => "Deskripsi Data Masuk"],
                                ["title" => "Data 4", "description" => "Deskripsi Data Masuk"],
                                // Tambahkan data lainnya
                            ];

                            // Loop data
                            foreach ($dataList as $data) {
                                echo '
                                    <div class="p-4 bg-white shadow rounded">
                                        <h2 class="text-lg font-semibold">' . $data["title"] . '</h2>
                                        <p class="text-gray-600">' . $data["description"] . '</p>
                                    </div>
                                ';
                            }
                            ?>
                        </div>
                        <div id="terima" class="dataContent hidden grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-4 w-full">
                            <?php
                            // Contoh array data
                            $dataList = [
                                ["title" => "Data 1", "description" => "Deskripsi Data Diterima"],
                                ["title" => "Data 2", "description" => "Deskripsi Data Diterima"],
                                ["title" => "Data 3", "description" => "Deskripsi Data Diterima"],
                                ["title" => "Data 4", "description" => "Deskripsi Data Diterima"],
                                // Tambahkan data lainnya
                            ];

                            // Loop data
                            foreach ($dataList as $data) {
                                echo '
                                    <div class="p-4 bg-white shadow rounded">
                                        <h2 class="text-lg font-semibold">' . $data["title"] . '</h2>
                                        <p class="text-gray-600">' . $data["description"] . '</p>
                                    </div>
                                ';
                            }
                            ?>
                        </div>
                        <div id="berakhir" class="dataContent hidden grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-4 w-full">
                            <?php
                            // Contoh array data
                            $dataList = [
                                ["title" => "Data 1", "description" => "Deskripsi Data Berakhir"],
                                ["title" => "Data 2", "description" => "Deskripsi Data Berakhir"],
                                ["title" => "Data 3", "description" => "Deskripsi Data Berakhir"],
                                ["title" => "Data 4", "description" => "Deskripsi Data Berakhir"],
                                // Tambahkan data lainnya
                            ];

                            // Loop data
                            foreach ($dataList as $data) {
                                echo '
                                    <div class="p-4 bg-white shadow rounded">
                                        <h2 class="text-lg font-semibold">' . $data["title"] . '</h2>
                                        <p class="text-gray-600">' . $data["description"] . '</p>
                                    </div>
                                ';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>


            <div id="users" class="content-section hidden w-full h-full flex-col p-4">
                <h1 class="text-2xl font-bold text-white">Users</h1>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 p-4">
                    <?php
                    // Data dummy
                    $profiles = [
                        ["username" => "Rizky31", "email" => "rizkymaulana317b@gmail.com", "full_name" => "Rizky Maulana", "phone" => "+62 812-8721-7886", "birth_date" => "31-Aug-2007"],
                        ["username" => "Alya21", "email" => "alya21@example.com", "full_name" => "Alya Ningsih", "phone" => "+62 812-3456-7890", "birth_date" => "21-May-2006"],
                        ["username" => "Budi14", "email" => "budi14@example.com", "full_name" => "Budi Santoso", "phone" => "+62 812-1111-2222", "birth_date" => "14-Oct-2005"],
                        ["username" => "Siti18", "email" => "siti18@example.com", "full_name" => "Siti Aminah", "phone" => "+62 813-4444-5555", "birth_date" => "18-Feb-2006"],
                        ["username" => "Dika22", "email" => "dika22@example.com", "full_name" => "Dika Prasetyo", "phone" => "+62 814-6666-7777", "birth_date" => "22-Jun-2007"],
                        ["username" => "Dika22", "email" => "dika22@example.com", "full_name" => "Dika Prasetyo", "phone" => "+62 814-6666-7777", "birth_date" => "22-Jun-2007"],
                        ["username" => "Dika22", "email" => "dika22@example.com", "full_name" => "Dika Prasetyo", "phone" => "+62 814-6666-7777", "birth_date" => "22-Jun-2007"],
                        ["username" => "Dika22", "email" => "dika22@example.com", "full_name" => "Dika Prasetyo", "phone" => "+62 814-6666-7777", "birth_date" => "22-Jun-2007"],
                        ["username" => "Dika22", "email" => "dika22@example.com", "full_name" => "Dika Prasetyo", "phone" => "+62 814-6666-7777", "birth_date" => "22-Jun-2007"],
                        ["username" => "Dika22", "email" => "dika22@example.com", "full_name" => "Dika Prasetyo", "phone" => "+62 814-6666-7777", "birth_date" => "22-Jun-2007"],
                    ];

                    // Loop data profil
                    foreach ($profiles as $profile) {
                        echo '
         <div class="flex flex-col group">
                <!-- header -->
                <div class="flex flex-col items-center gap-4 bg-yl py-4 rounded-t-lg">
                    <div class="absolute left-0 top-0 p-6 xxs:flex md:hidden">
                        <a href="../index.php" class="group">
                            <i class="fa-solid fa-arrow-left text-4xl bg-bl w-16 h-w-16 aspect-square flex justify-center items-center rounded-full shadow-keycaps-bl border-2 border-gray-800 group-active:translate-y-[10px] group-active:shadow-active-bl transition-all duration-75 ease-in-out"></i>
                        </a>
                    </div>
                    <i class="text-gray-800 fa-solid fa-user text-2xl border-2 border-gray-800 w-16 h-16 text-center flex items-center justify-center rounded-full bg-bl shadow-keycaps-bl"></i>
                    <h1 class="text-gray-800 font-sourGummy xxs:text-sm md:text-xs">Rizky31</h1>
                    <p class="text-gray-800 font-sourGummy xxs:text-sm md:text-xs flex gap-2"><span><i class="text-gray-800 fa-solid fa-envelope"></i></span>rizkymaulana317b@gmail.com</p>
                </div>
                <hr>
                <!-- info -->
                <div class="hidden bg-yl group-hover:flex group-hover:fixed flex-col items-center rounded-b-lg">
                    <div class="flex flex-col">
                        <p class="text-gray-800 font-sourGummy text-xs">Nama lengkap</p>
                        <p class="bg-bl py-2 px-4 shadow-keycaps-bl font-sourGummy text-gray-800 text-xs w-56 rounded-lg border-2 border-gray-700">Rizky Maulana</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-gray-800 font-sourGummy text-xs">Nomor Telp.</p>
                        <p class="bg-bl py-2 px-4 shadow-keycaps-bl font-sourGummy text-gray-800 text-xs w-56 rounded-lg border-2 border-gray-700">+62 812-8721-7886</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-gray-800 font-sourGummy text-xs">Tanggal lahir</p>
                        <p class="bg-bl py-2 px-4 shadow-keycaps-bl font-sourGummy text-gray-800 text-xs w-56 rounded-lg border-2 border-gray-700">31-Aug-2007</p>
                    </div>
                </div>
            </div>';
                    }
                    ?>
                </div>
            </div>


            <div id="calendar" class="content-section w-full h-full flex-col p-4">
                <h1 class="text-2xl font-bold text-white">Deadline</h1>
                <p class="text-white">This is the Deadline content.</p>
                <div class="flex w-full h-full p-4">
                    <div class="w-full mx-auto">
                        <div class="max-w-4xl mx-auto">
                            <div class="text-center">
                                <h1 class="text-3xl font-bold text-white">Calendar</h1>
                                <div class="mb-4">
                                    <div class="flex justify-center">
                                        <button id="prevBtn" onclick="changeMonth('prev')" class="bg-blue-500 text-white px-4 py-2 rounded-l hover:bg-blue-600">Previous</button>
                                        <button id="nextBtn" onclick="changeMonth('next')" class="bg-blue-500 text-white px-4 py-2 rounded-r hover:bg-blue-600">Next</button>
                                    </div>
                                </div>
                                <h2 class="text-2xl font-semibold text-white" id="monthYear"></h2>
                            </div>

                            <div id="calendar-container" class="grid grid-cols-7 gap-2 bg-white p-4 rounded-lg shadow w-full h-full">
                                <!-- Calendar content will be loaded here -->
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>


            <div id="reports" class="content-section hidden bg-rd w-full h-full flex-col p-4">
                <h1 class="text-2xl font-bold">Reports</h1>
                <p>This is the Reports content.</p>
            </div>


            <div id="messages" class="content-section hidden bg-rd w-full h-full flex-col p-4">
                <h1 class="text-2xl font-bold">Messages</h1>
                <p>This is the Messages content.</p>
            </div>


            <div id="settings" class="content-section hidden bg-rd w-full h-full flex-col p-4">
                <h1 class="text-2xl font-bold">Settings</h1>
                <p>This is the Settings content.</p>
            </div>


            <div id="notifications" class="content-section hidden bg-rd w-full h-full flex-col p-4">
                <h1 class="text-2xl font-bold">Notifications</h1>
                <p>This is the Notifications content.</p>
            </div>


        </div>
    </div>

    <script>
        function showContent(contentId) {
            // Hide all content sections
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.add('hidden');
                section.classList.remove('flex');
            });
            // Show the selected content section
            document.getElementById(contentId).classList.remove('hidden');
            document.getElementById(contentId).classList.add('flex');
        }

        function showData(contentId) {
            document.querySelectorAll('.dataContent').forEach(section => {
                section.classList.add('hidden');
                section.classList.remove('grid');
            })
            document.getElementById(contentId).classList.remove('hidden');
            document.getElementById(contentId).classList.add('grid');
        }
        let currentMonth = <?php echo date('m'); ?>;
        let currentYear = <?php echo date('Y'); ?>;
        const startYear = <?php echo date('Y'); ?>;
        const maxYear = startYear + 2;

        function loadCalendar(month, year) {
            $.ajax({
                url: 'get_calendar.php',
                type: 'GET',
                data: {
                    month: month,
                    year: year
                },
                success: function(response) {
                    $('#calendar-container').html(response);
                    updateMonthYear(month, year);
                    updateButtonStates();
                }
            });
        }

        function changeMonth(direction) {
            if (direction === 'prev') {
                currentMonth--;
                if (currentMonth < 1) {
                    currentMonth = 12;
                    currentYear--;
                }
            } else {
                currentMonth++;
                if (currentMonth > 12) {
                    currentMonth = 1;
                    currentYear++;
                }
            }
            loadCalendar(currentMonth, currentYear);
        }

        function updateMonthYear(month, year) {
            const monthNames = ["January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            document.getElementById('monthYear').textContent = `${monthNames[month - 1]} ${year}`;
        }

        function updateButtonStates() {
            // Disable Previous button if we're at the start date
            const isPrevDisabled = currentYear === startYear && currentMonth === 1;
            document.getElementById('prevBtn').disabled = isPrevDisabled;
            document.getElementById('prevBtn').classList.toggle('opacity-50', isPrevDisabled);
            document.getElementById('prevBtn').classList.toggle('cursor-not-allowed', isPrevDisabled);

            // Disable Next button if we're at the max date
            const isNextDisabled = currentYear === maxYear && currentMonth === 12;
            document.getElementById('nextBtn').disabled = isNextDisabled;
            document.getElementById('nextBtn').classList.toggle('opacity-50', isNextDisabled);
            document.getElementById('nextBtn').classList.toggle('cursor-not-allowed', isNextDisabled);
        }

        // Load initial calendar
        $(document).ready(function() {
            loadCalendar(currentMonth, currentYear);
        });
    </script>
</body>

</html>