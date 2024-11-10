<?php
// Get the current month and year from AJAX request
$month = isset($_GET['month']) ? (int)$_GET['month'] : date('m');
$year = isset($_GET['year']) ? (int)$_GET['year'] : date('Y');

// Validate year range
$startYear = date('Y');
$maxYear = $startYear + 2;
if ($year < $startYear || $year > $maxYear) {
    echo "Invalid year range";
    exit;
}

// Get the number of days in the month
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$firstDayOfMonth = date('w', strtotime("$year-$month-01"));

// Display the days of the week
$daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
foreach ($daysOfWeek as $day) {
    echo "<div class='text-center font-bold p-2'>$day</div>";
}

// Display empty cells for days before the first day of the month
for ($i = 0; $i < $firstDayOfMonth; $i++) {
    echo "<div></div>";
}

// Define events for specific dates (you can modify this to load from database)
$events = [
    3 => ['title' => 'Meeting', 'description' => 'Team meeting at 10 AM'],
    10 => ['title' => 'Deadline', 'description' => 'Project submission deadline'],
    15 => ['title' => 'Holiday', 'description' => 'Public Holiday']
];

// Display the days of the month
for ($day = 1; $day <= $daysInMonth; $day++) {
    $currentDate = strtotime("$year-$month-$day");
    $today = strtotime(date('Y-m-d'));
    
    $dayClass = 'p-2 border rounded';
    if ($currentDate == $today) {
        $dayClass .= ' bg-blue-100'; // Highlight today's date
    }

    if (isset($events[$day])) {
        echo "<div class='relative $dayClass group'>";
        echo "<span class='text-lg'>$day</span>";
        echo "<div class='absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full'></div>";
        echo "<div class='hidden group-hover:block absolute z-10 bg-gray-800 text-white p-2 rounded shadow-lg text-sm w-48 top-full left-1/2 transform -translate-x-1/2'>";
        echo "<strong>{$events[$day]['title']}</strong><br>";
        echo "{$events[$day]['description']}";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<div class='$dayClass'><span class='text-lg'>$day</span></div>";
    }
}
?>