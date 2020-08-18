<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alarm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>


    <link rel="stylesheet" href="assets/css/alarm.css">

</head>
<body>
<a href="/blog" target="blank"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">Go Back &raquo;</button></a>

    <div class="container">
        <h1 id="timer"></h1>

        <i class='far fa-clock fa-spin' style='font-size:40px'></i>

        <select id="hours"></select>
        <select id="minutes"></select>
        <select id="seconds"></select>

        <i class='far fa-clock fa-spin' style='font-size:40px'></i>
        <div>

            <button id="startstop" >Set Alarm</button>
        </div>
    </div>
    <script src="assets/js/alarm.js"></script>

</body>
</html>
