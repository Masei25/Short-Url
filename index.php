<?php

    error_reporting(0);

    session_start();

    $error = $_SESSION['error'] ?? '';
    
    // Include database configuration file
    require_once 'Lib/Connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>NetBiz Group</title>
</head>
<body>
    
    <!-- component -->
    <div class="w-full my-20 z-50 sticky  rounded-3xl px-6 bg-zinc-900">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-center w-full mb-10 lg:flex-row">
                <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
                <div class="max-w-xl mb-6">
                    
                    <h2 class="font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none max-w-lg mb-6">
                    Enter Url
                    </h2>
                </div>

                <form action="Lib/change_url.php" method="POST" class="space-y-2">
                    <p class="text-sm text-red-400">
                        
                        <?php echo $error ?? ''; ?>
                    </p>
                    <div>
                        <input type="text" id="url" name="url" placeholder="Url.." class="px-1 rounded border-1 border-gray-600 w-full py-2">
                    </div>
                
                    <div>
                        <input type="submit" value="Submit" class="flex object-cover sm:mr-64 mr-32 object-top items-center cursor-pointer text-white border border-2 justify-center w-24 sm:px-10 py-1 leading-6 bg-black rounded-lg font-black ">
                    </div>

                </form>
        
                </div>
                    
            </div>
        </div>
    </div>

    <?php 
        // remove all session variables
        session_unset(); 
    ?>

</body>
</html>