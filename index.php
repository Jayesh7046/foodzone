<?php include_once("./shorting/package.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Zone</title>
    <link rel="stylesheet" href="./design_files/style2.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body class="bg-violet-300">
    <!-- Main Background -->
    <div class="bg-white h-screen m-5">
        <div class="bg-blue-500 mx-40 w-10/12 h-screen">
            <!-- Navbar Start-->
            <div class="bg-red-500 pt-6 mb-16">
                <div class="flex justify-between">
                    <div class="place-self-center">
                        <img src="./images/menu icon.png" alt="" class="img">
                    </div>
                    <div class="place-self-center space-x-4">
                        <?php 
                        nav_link(["Home","About","Special Dishes"])
                    ?>
                    </div>
                    <div class="place-self-center space-x-4 cursive">Resto</div>
                    <div class="place-self-center space-x-4">
                        <?php 
                        nav_link(["Menu","Team","Reservation"])
                    ?>
                    </div>
                    <div class="place-self-center space-x-4">
                        <img src="./images/search.png" alt="" class="img">
                    </div>
                </div>
            </div>
            <!-- Navbar End -->
            <div class="grid grid-cols-1 gap-1 place-items-end h-56 ...">
                <img src="https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
            </div>
            <div class="grid grid-raw-3 gap-4 place-items-start ... space-y-2 bg-green-100 text-5xl cursive">
                <div class=" ">We Love <br></div>
                <div class=" ">Delicious Foods!</div>
            </div>
            <div class="grid grid-raw-3 gap-4 place-items-start ... space-y-2 mt-20">
                <div class="flex justify-between">
                    <button class="bg-red-600 rounded-full h-10 w-40 text-white font-medium">Exploer Menu</button>
                    <button class="ml-10"><img src="./images/video.png" alt=""></button>
                    <div class="mt-2 ml-2 font-medium">Play Video</div>
                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>