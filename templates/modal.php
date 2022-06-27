<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
</head>
<body>   
   <!-- Main modal 1 -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    GradIT
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-800 dark:text-gray-900">
                    Raih Impian Menjadi Web Developer
                </p>
                <h1 class="text-2xl leading-relaxed text-gray-800 dark:text-gray-900">
                    Benefit Langganan
                </h1>
                <ul class="list-disc p-6">
                <li>Akses Kelas GradIT</li>
                <li>Diskusi bersama Mentor</li>
                <li>Ujian</li>
                <li>Tugas</li>
                <!-- ... -->
                </ul>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-between items-start p-4 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <h3 class="text-xl pl-6 font-semibold text-gray-900 dark:text-white">
                    Harga Langganan <br>
                    Rp.900.000
                </h3>
                <button data-modal-toggle="defaultModal" type="button" href=""class="text-white bg-gradient-to-r from-amber-600 to-amber-700 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Beli Sekarang</button>
            </div>
            
        </div>
    </div>
</div>
</body>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</html>
