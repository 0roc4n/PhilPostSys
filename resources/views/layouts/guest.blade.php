<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PhilPost RRR - Log In') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
            background-color: #2c54ff;
        }

        .wrapper {
            height: 5px;
            width: 700px;
            box-shadow: 0 0 20px rgba(218, 216, 207, 0.5); /* Add a hint of glow */
            background-color: #edeade;
            border-radius: 2px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            z-index: 0;
        }

        .lid {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            border-radius: 4px;
            border-right: 350px solid transparent; /* Adjust the border sizes */
            border-bottom: 200px solid transparent; /* Adjust the border sizes */
            border-left: 350px solid transparent; /* Adjust the border sizes */
            transform-origin: top;
            transition: transform 0.25s linear;
        }

        /* lid when closed */
        .lid.one {
            border-radius: 4px;
            border-top: 250px solid #edeade; /* Adjust the border size and color */
            transform: rotateX(0deg);
            z-index: 7;
            transition-delay: 0.75s;
        }

        /* lid when opened */
        .lid.two {
            border-radius: 4px;
            border-top: 150px solid #dad8cf; /* Adjust the border size and color */
            transform: rotateX(90deg);
            z-index: 1;
            transition-delay: 0.5s;
        }

        .envelope {
            position: absolute;
            height: 100%; /* Adjust the height of the envelope */
            width: 100%; /* Adjust the width of the envelope */
            top: 50%; /* Move the envelope slightly down */
            left: 0;
            border-radius: 4px;
            border-top: 150px solid transparent; /* Adjust the border sizes */
            border-right: 350px solid #dad8cf; /* Adjust the border sizes and color */
            border-bottom: 150px solid #dad8cf; /* Adjust the border sizes and color */
            border-left: 350px solid #dad8cf; /* Adjust the border sizes and color */
            z-index: 3;
            cursor: pointer; /* Add cursor pointer for click effect */
        }

        .letter {
            position: absolute;
            top: 0;
            width: 99%;
            height: 300px; /* Increase the height of the letter */
            background-color: white;
            box-shadow: 0 0 20px rgba(218, 216, 207, 0.5);
            border-radius: 2px;
            z-index: 2;
            transition: 0.5s;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            overflow: hidden; /* Ensure contents are not visible initially */
        }

        .letter form {
            font-family: Arial;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .letter input {
            margin-bottom: 10px;
            padding: 1px;
            border: 1px solid #ccc;
            border-radius: 15px;
            width: 400px; /* Adjust the width as needed */
        }

        .letter input[type="submit"] {
            padding: 5px 10px;
            background-color: #2c54ff;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        .letter p {
            text-align: center;
            font-size: 20px;
            font-family: Arial;
            margin-bottom: 11px;
            color: #3b4049;
        }

        .wrapper:hover .lid.one {
            transform: rotateX(90deg);
            transition-delay: 0s;
        }

        .wrapper:hover .lid.two {
            transform: rotateX(180deg);
            transition-delay: 0.25s;
        }

        .wrapper:hover .letter {
            top: -250px; /* Adjusted position on hover */
            height: 500px; /* Increased height on hover */
            transform: translateY(-50px);
            transition-delay: 0.5s;
        }

        /* Style for the photo */
        .lid.one img {
            position: absolute;
            top: -100px; /* Adjust position to fit with the lid */
            left: 50%;
            transform: translateX(-50%);
            transition: 0.5s;
            z-index: 8; /* Ensure it's above lid.two */
        }

        .wrapper:hover .lid.one img {
            top: -350px; /* Adjust position to fit with the opened envelope */
            transition-delay: 0.25s;
        }

        .login-form-container {
            width: 100%;
            max-width: 1000px; /* Adjust as needed */
            margin: 0 auto;
            padding: 0 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        @media (max-width: 767px) {
            .login-form-container {
                padding: 0 10px;
            }
        }

        .login-form-container {
            margin: 0 auto;
            padding: 0 20px; /* Adjust padding as needed */
        }

        .login-form-container {
            margin-right: 20px; /* Adjust margin between image and form */
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="lid one">
        <!-- Add an image for the photo -->
        <img
                src="public/assets/PHLPOSTLogo.png"
                alt="PhilPost Office Logo"
                width="100"
        />
    </div>
    <div class="lid two"></div>
<div class="envelope"></div>
<div class="letter">
    <p>Log In</p>
    {{ $slot }}
</div>
</div>

<!-- JavaScript/jQuery for opening the envelope on click -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".envelope").click(function(){
            $(".lid.one").css("transform", "rotateX(90deg)");
            $(".lid.two").css("transform", "rotateX(180deg)");
            $(".letter").css({"top": "-250px", "height": "500px", "transform": "translateY(-50px)"});
        });
    });
</script>

</body>
</html>

