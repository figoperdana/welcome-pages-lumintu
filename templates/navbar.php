<?php
require_once "./index.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
</head>

<body>

  <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
    <div class="container flex flex-wrap">
      <div class="flex items-center mx-auto">
        <a href="https://account.lumintulogic.com/home.php" class="flex items-center">
          <img src="assets/logo/logo_lumintu.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
        </a>
      </div>
      <div class="flex justify-end items-center mx-auto">
      <div class="flex items-center">
        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mrd-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button">
          <span class="sr-only">Open user menu</span>
        </button>

        <!-- Dropdown menu -->
        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
          <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      </div>
      <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
          <li>
            <a href="account-settings.php" id="settings" class="block py-2 pr-4 pl-3 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-gray-700 dark:focus:text-grey-600 dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent" aria-current="page">Pengaturan</a>
          </li>
          <li>
            <a href="logout.php" id="logout" class="block py-2 pr-4 pl-3 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-gray-700 dark:focus:text-grey-600 dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent" aria-current="page">Keluar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</body>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

</html>