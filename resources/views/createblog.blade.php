<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css" integrity="sha512-y6ZMKFUQrn+UUEVoqYe8ApScqbjuhjqzTuwUMEGMDuhS2niI8KA3vhH2LenreqJXQS+iIXVTRL2iaNfJbDNA1Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="antialiased">
    
      <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
         
          <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Create New blog</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <a href="/profile" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Back
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </header>

      <div class="bg-green-200 py-32 px-10 min-h-screen ">
        <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">
          <form action="/createblog" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex items-center mb-5">
              <label for="name" class="inline-block w-20 mr-6 text-right 
                                       font-bold text-gray-600">title</label>
              <input type="text" id="title" name="title" placeholder="Enter Title" 
                     class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                            text-gray-600 placeholder-gray-400
                            outline-none">
            </div>
      
            <div class="flex items-center mb-5">
              <label for="name" class="inline-block w-20 mr-6 text-right 
                                       font-bold text-gray-600">Discription</label>
              <input type="text" id="disc" name="disc" placeholder="Enter Your Blog Discription" 
                     class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                            text-gray-600 placeholder-gray-400
                            outline-none">
            </div>

            <div class="mb-2"> <span>Thambnail</span>
              <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                  <div class="absolute">
                      <div class="flex flex-col items-center "> <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> <span class="block text-gray-400 font-normal">Upload Your Blog Photo</span> <span class="block text-gray-400 font-normal">or</span> <span class="block text-blue-400 font-normal">Browse files</span> </div>
                  </div> <input type="file" class="h-full w-full opacity-0" name="photo">
              </div>
              <div class="flex justify-between items-center text-gray-400"> <span>Accepted file type:.png, .jpg only</span> <span class="flex items-center "><i class="fa fa-lock mr-1"></i> secure</span> </div>
          </div>
      
            <div class="text-right">
              <button class="py-3 px-8 bg-green-400 text-white font-bold">Upload</button> 
            </div>
      
          </form>
        </div>
      </div>

</body>
</html>
