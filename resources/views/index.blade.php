<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>PhilPost-Legazpi</title>

    <style>
        .scrollleft {
            background-color: #040E47;
            color: white;
            font-weight: 400;
            font-size: small;
        }

        .copyright {
            font-weight: 400;
            font-size: small;
            position: fixed;
            left: 50%; /* Center the element horizontally */
            transform: translateX(-50%); /* Adjust to center the element */
            width: auto;
        }

        .curDateTime {
            margin-left: auto;
        }

        .h4 {
            margin: 0;
            font-weight: 400;
            font-size: small;
        }

        .time {
            font-weight: 400;
            font-size: small;
            color: black;
        }

        .fullscreen-image {
            width: 100%;
            height: auto;
            max-width: 100vw;
            max-height: 80vh; /* Adjust the max-height value to compress the height of the image */
        }

        .fullscreen {
            max-width: 100vw;
            object-fit: contain;
        }

        @media (max-width: 767px) {
            .time,
            .curDateTime {
                display: none; /* Hide the time section on small screens */
            }
            .navposition {
                text-align: right; /* Align the content to the right */
                margin-left: auto; /* Push the element to the right */
            }
            .copyright {
                font-size: x-small;
                white-space: nowrap; /* Prevent line breaks */
            }
        }
    </style>
</head>

<body>

    <nav x-data="{ open: false }"
        class="fullscreen px-4 sm:px-10 bg-white border-b shadow-sm border-gray-100 sticky top-0 z-40">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto h-16 flex items-center ">
            <!-- Logo -->
            <div>
                <img src="{{ asset('assets/PHLPOSTLogo.png') }}" alt="PhilPostLogo"
                    class="h-10 fill-current text-gray-800" />
            </div>
            <div class="navposition flex">
                <div class="hover:bg-gray-300 rounded-md ml-10 text-sm">
                    <button class="flex items-center p-2">
                        <a href="/#">Home</a>
                    </button>
                </div>
                <div class="hover:bg-gray-300 rounded-md ml-2 text-sm">
                    <button class="flex items-center p-2">
                        <a href="/login">Login</a>
                    </button>
                </div>
            </div>
            <div class="curDateTime">
                <div class="flex justify-end time">Philippine Standard Time:</div>
                <h6 class="h4" id="currentDateTime"></h6>
            </div>
        </div>
    </nav>

    <div class="fullscreen">
        <img src="{{ asset('assets/philpost_index.png') }}" alt="philpostindex"
            class="fullscreen-image img-fluid" />
    </div>

    <div class="scrollleft">
        <marquee class="p-1" behavior="scroll" direction="left" scrollamount="5">
            SCAM ALERT: Clients are advised to beware of phishing attempts. Protect your data and privacy. ANNOUNCEMENT:
            The Post Office official website is undergoing development. Anticipate new and improved online services coming
            very soon!
        </marquee>
    </div>

    <!-- Footer Section -->
    <footer class="copyright p-1">
        <p>Copyright © 2024 All Rights Reserved by Phlpost Corporation, Legazpi</p>
    </footer>

    <script>
        function displayCurrentDateTime() {
            var currentDate = new Date();
            var options = {
                weekday: 'long',
                month: 'long',
                day: 'numeric',
                year: 'numeric',
                hour: 'numeric',
                minute: 'numeric',
                second: 'numeric',
                hour12: true
            };

            var dateTimeString = currentDate.toLocaleString('en-US', options);
            document.getElementById('currentDateTime').innerText = dateTimeString;
        }

        setInterval(displayCurrentDateTime, 1000);
        displayCurrentDateTime();

    </script>

</body>

</html>
