<?php
  error_reporting(0);
  //include the encryption file from the root directory
  require 'Lib/encryption.php';

  session_start();
  error_reporting(0);

  $value = $_SESSION['url'][0] ?? '';
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
                NetBiz Group.
                </h2>
                <p class="text-white text-base md:text-lg"> Click on the short link to access the original url.
                </p>
              </div>
              <div class="flex items-center space-x-3">
                <Link href="/comingsoon">
                  <a href=<?php echo $value['long_url'] ?? ''; ?> target="_blank" class="flex object-cover sm:mr-64 mr-32 object-top items-center cursor-pointer text-white border border-2 justify-center w-full sm:px-10 py-4 leading-6 bg-black rounded-lg font-black">
                    <?php echo decrypt($value['short_code']) ?? ''; ?>
                  </a>
                </Link>
              </div>
              <p class="text-sm text-white flex justify-center">Short Url : <?php echo decrypt($value['short_code']) ?? ''; ?> </p>
            </div>
                
          </div>
    </div>
  </div>

</body>
</html>