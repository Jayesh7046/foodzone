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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Quicksand:wght@500&display=swap"
        rel="stylesheet">
</head>

<body class="bg-violet-300">
    <!-- Main Background -->
    <div class="flex justify-center bg-white h-screen m-5">
        <div class="container bg-blue-500 w-10/12 h-screen">
            <!-- Navbar Start-->
            <div class="bg-red-500 pt-6">
                <div class="flex justify-between">
                    <div class="place-self-center">
                        <i class="fa-solid fa-bars fa-2x"></i>
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
                        <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                    </div>
                </div>
            </div>
            <!-- Navbar End -->
            <!-- First page start -->
            <div class="box p-2 bg-white">
                <div class="container mx-auto  m-8 flex justify-between ">
                    <div class="basis-1/2 ">
                        <h1 class="mt-36 space-y-2 bg-green-100 text-5xl cursive">We Love <br> Delicious Foods!</h1>
                        <div class="grid grid-raw-3 gap-4 place-items-start ... space-y-2 mt-20">
                            <div class="flex justify-between mb-40">
                                <button class="bg-red-600 rounded-full h-10 w-40 text-white font-medium">Exploer Menu</button>
                                <button class="ml-10"><a href="#" class="hover:text-red-600"><i class="fa-solid fa-film fa-2x"></i></button>
                                <div class="mt-2 ml-2 font-medium">Play Video</div></a>
                            </div>
                            <div class="flex justify-between">
                                <i class="fa-solid fa-rocket fa-2x text-center pr-4 border-r-2 border-black">
                                    <h1 class="text-base font-sans">Fast Delivery</h1>
                                </i>
                                <i class="fa-solid fa-leaf fa-2x text-center pr-4 mx-4 border-r-2 border-black">
                                    <h1 class="text-base font-sans">Fresh Food</h1>
                                </i>
                                <i class="fa-solid fa-comment fa-2x text-center">
                                    <h1 class="text-base font-sans">24/7 Support</h1>
                                </i>
                            </div>
                        </div>

                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
                    </div>
                    <div
                        class="basis-1/2 bg-blue-50 bg_food bg-no-repeat bg-cover bg-center  flex justify-end items-end">
                        <span class="box-icon bg-white"><i class="fa-solid fa-angle-left fa-2x  text-blue-600"></i></span>
                        <span class="box-icon bg-white"><i class="fa-solid fa-angle-right fa-2x"></i></span>
                    </div>
                </div>
            </div>
            <!-- end first page -->
            <!-- Second page -->
            <div class=""></div>

        </div>
    </div>
</body>

</html>