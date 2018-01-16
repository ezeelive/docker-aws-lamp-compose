<?php
$conn = mysqli_connect("mysql", "ezeelive", "ezeelive", "ezeelive");

if (!$conn) {
    echo "Connection Error: " . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}

echo "Success Connected." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

mysqli_close($conn);
