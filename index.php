<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/icons/logo.ico" type="image/x-icon">

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/intro.js/minified/introjs.min.css" />

  <title>Dashboard | Lumintu Classsroom</title>

  <!-- Flowbite CSS -->
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />

  <!-- DaisyUI -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.14.3/dist/full.css" rel="stylesheet" type="text/css" />

  <!-- CDN TailwindCSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="bg-white w-full h-screen">
    <?php
    require_once "templates/navbar.php";
    ?>
<header>
  <div class="max-w-screen-2xl px-4 py-8 mx-auto sm:py-6 sm:px-2 lg:px-2">
    <div class="sm:justify-between sm:items-center sm:flex">
      <div class="text-center sm:text-left">
        <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
          Welcome Back,
        </h1>
        <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
        Barry
        </h1>

      </div>

      <div class="flex flex-col gap-4 mt-4 sm:flex-row sm:mt-0 sm:items-center">
        <button
          class="inline-flex items-center justify-center px-5 py-3 text-gray-500 transition border border-gray-200 rounded-lg hover:text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring"
          type="button"
        >
          <span class="text-sm font-medium"> View Website </span>

          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-4 h-4 ml-1.5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
            />
          </svg>
        </button>

        <button
          class="inline-flex items-center justify-center px-5 py-3 text-gray-500 transition border border-gray-200 rounded-lg hover:text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring"
          type="button"
        >
          Create Post
        </button>
      </div>
    </div>
  </div>
</header>

    <br>

    <!-- jumbotron -->
    <aside class="relative overflow-hidden text-gray-300 bg-gray-900 lg:flex" data-carousel-item="">
          <div class="w-full p-12 text-center lg:w-1/2 sm:p-16 lg:p-24 lg:text-left">
          <div class="max-w-xl mx-auto lg:ml-0">
            <p class="text-sm font-medium">Lorem ipsum dolor sit amet.</p>

            <p class="mt-2 text-2xl font-bold text-white sm:text-3xl">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit
            </p>

            <p class="hidden lg:mt-4 lg:block">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas
              tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu enim et
              fermentum, augue. Aliquet amet volutpat quisque ut interdum tincidunt
              duis.
            </p>

            <a
              href=""
              class="inline-block px-5 py-3 mt-8 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600">
              Continue Your Course
            </a>
          </div>
        </div>

        <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-auto">
          <img
            src="https://www.hyperui.dev/photos/women-2.jpeg"
            alt="Women smiling at college"
            class="absolute inset-0 object-cover w-full h-full"
          />
        </div>
        </aside>

      <!-- component title
        <div class="container mx-auto px-4 pb-6 bg-white">
        <div class="flex flex-col items-center justify-center space-y-6 text-center">
          <h1 class="text-2xl font-bold tracking-normal sm:text-3xl lg:text-4xl text-grey-800">Kelas yang telah kamu ambil</h1>
        </div>
        <div class="py-4">
          <div class="w-full border-t border-gray-300"></div>
          </div>
        </div> -->

<br><br>
  
  <!-- component title-->
  <div class="container mx-auto px-4 pt-16 pb-6 ">
  <div class="flex flex-col items-center justify-center space-y-6 text-center">
    <h1 class="text-2xl font-bold tracking-normal sm:text-3xl lg:text-4xl text-grey-800">Ayo tentukan kelas kamu sekarang</h1>
    <p class="text-xl tracking-normal text-grey-800">Pilih kelas sesuai dengan minat kamu</p>
  </div>
  <div class="py-4">
    <div class="w-full border-t border-gray-300"></div>
    </div>
  </div>

   <!-- component -->
   <section class="text-gray-600 body-font bg-white">
      <div class="container px-16 py-2 mx-auto bg-white">
        <div class="flex flex-wrap">
          <div class="p-4 md:w-1/4" id="bantu1">
            <div class="h-full rounded-xl bg-white overflow-hidden shadow-lg">
            <a href="">
                <img
                  class="lg:h-48 md:h-36 w-full object-top scale-100 transition-all duration-400 hover:scale-90"
                  src="assets/img/Add tasks-pana.svg"
                  alt="blog">
              </a>
              <a href="">
                <div class="p-6">
                  <br>
                  <h1 class="title-font text-lg font-medium text-gray-600 mb-3">GradIT</h1>
                  <p class="leading-relaxed mb-3">Raih impian menjadi web developer profesional</p>
                  <div class="flex items-center flex-wrap ">
                  </div>
                  <br>
                  <div class="text-center">
                <a type="button" data-modal-toggle="defaultModal" class="text-white bg-gradient-to-r from-amber-600 to-amber-700 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Ayo Gabung Sekarang</a>
              </a>
              </div>
                </div>

            </div>
          </div>
          <div class="p-4 md:w-1/4" id="bantu2">
            <div class="h-full rounded-xl bg-white overflow-hidden shadow-lg">
              <a href="">
                <img
                  class="lg:h-48 md:h-36 w-full object-center scale-110 transition-all duration-400 hover:scale-100"
                  src="assets/img/Consulting-rafiki(1).svg"
                  alt="blog">
              </a>
              <a href="">
                <div class="p-6">
                  <br>
                  <h1 class="title-font text-lg font-medium text-gray-600 mb-3">ProKidz</h1>
                  <p class="leading-relaxed mb-3">Asah kemampuan coding anak bersama Prokidz</p>
                  <div class="flex items-center flex-wrap ">
                  </div>
                  <br>
                  <div class="text-center">
                <a type="button" data-modal-toggle="defaultModal2" class="text-white bg-gradient-to-r from-amber-600 to-amber-700 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Ayo Gabung Sekarang</a>
                </div>
                </div>
              </a>
            </div>
          </div>
          <div class="p-4 md:w-1/4" id="bantu3">
            <div class="h-full rounded-xl bg-white overflow-hidden shadow-lg">
              <a href="">
                <img
                  class="lg:h-48 md:h-36 w-full object-center scale-110 transition-all duration-400 hover:scale-100"
                  src="assets/img/Calendar-cuate(1).svg"
                  alt="blog">
              </a>
              <a href="">
                <div class="p-6">
                  <br>
                  <h1 class="title-font text-lg font-medium text-gray-600 mb-3">InCareer</h1>
                  <p class="leading-relaxed mb-3">Raih impian menjadi web developer profesional</p>
                  <div class="flex items-center flex-wrap ">
                  </div>
                  <br>
                  <div class="text-center">
                <a type="button" data-modal-toggle="defaultModal3" class="text-white bg-gradient-to-r from-amber-600 to-amber-700 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Ayo Gabung Sekarang</a>
                </div>
                </div>
              </a>
            </div>
          </div>
          <div class="p-4 md:w-1/4" id="bantu3">
            <div class="h-full rounded-xl bg-white overflow-hidden shadow-lg">
              <a href="">
                <img
                  class="lg:h-48 md:h-36 w-full object-center scale-110 transition-all duration-400 hover:scale-100"
                  src="assets/img/Calendar-cuate(1).svg"
                  alt="blog">
              </a>
              <a href="">
                <div class="p-6">
                  <br>
                  <h1 class="title-font text-lg font-medium text-gray-600 mb-3">Codecation</h1>
                  <p class="leading-relaxed mb-3">Buat website kamu sendiri hanya dalam 1 bulan</p>
                  <div class="flex items-center flex-wrap ">
                  </div>
                  <br>
                  <div class="text-center">
                <a type="button" data-modal-toggle="defaultModal4" class="text-white bg-gradient-to-r from-amber-600 to-amber-700 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Ayo Gabung Sekarang</a>
                </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
    require_once "templates/modal.php";
    ?>


    <br><br>
    
    <?php
    require_once "templates/footer.php";
    ?>

    </div>

    <!-- Flowbite CSS -->
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.14.3/dist/full.css" rel="stylesheet" type="text/css" />

    <!-- CDN TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

  </div>
</body>

</html>