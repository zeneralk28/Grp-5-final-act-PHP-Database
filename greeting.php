<?php
//testing
date_default_timezone_set('Asia/Manila');

$hour = date('H');

if ($hour >= 5 && $hour < 12) {
    echo "<h1>Good Morning!</h1><h2>".date("Y-m-d")."</h2>";
} elseif ($hour >= 12 && $hour < 17) {
    echo "<h1>Good Afternoon!</h1><h2>".date("Y-m-d")."</h2>";
} elseif ($hour >= 17 && $hour < 21) {
    echo "<h1>Good Evening!</h1><h2>".date("Y-m-d")."</h2>";
} else {
    echo "<h1>Good Night!</h1><h2>".date("Y-m-d")."</h2>";
}