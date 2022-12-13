<?php include_once("./shorting/package.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Zone</title>
    <link rel="stylesheet" href="./components/style2.css">
    <!--custom css-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--tailwind css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Quicksand:wght@500&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- mainbg -->
    <div class="flex justify-center items-center h-screen w-screen bg-red-200">
        <!-- secondbg -->
        <div class="bg-white secondbg">
            <!-- content div -->
            <div class="mx-80 h-full w-4/6 thirdbg">
                <!-- navbar -->
                <nav class="content-center h-16 w-full bg-red-200">
                    <div class="mt-5">
                        <div class="space-x-5 ml-20">
                            <?php
                                nav_link(["Home","About","Special dishes"]);
                            ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</body>

</html>