<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Office Hours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .hours-container {
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        .hours-container h2 {
            margin-top: 0;
            color: #333;
        }
        .day {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eaeaea;
        }
        .day:last-child {
            border-bottom: none;
        }
        .day-name {
            font-weight: bold;
            color: #555;
        }
        .hours {
            color: #888;
        }
    </style>
</head>
<body>

<div class="hours-container">
    <h2>Office Hours</h2>
    <?php
    $office_hours = [
        "Monday" => "9am - 5pm",
        "Tuesday" => "9am - 5pm",
        "Wednesday" => "9am - 5pm",
        "Thursday" => "9am - 5pm",
        "Friday" => "9am - 5pm",
        "Saturday" => "10am - 2pm",
        "Sunday" => "Closed"
    ];

    foreach ($office_hours as $day => $hours) {
        echo "<div class='day'><span class='day-name'>$day</span><span class='hours'>$hours</span></div>";
    }
    ?>
</div>

</body>
</html>
