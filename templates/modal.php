    <!-- Main modal 1 -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
      <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
              Mas krisna
            </h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
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
              Kuntul
            </h3>
            <button data-modal-toggle="defaultModal" type="button" class="text-white bg-gradient-to-r from-amber-600 to-amber-700 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Beli Sekarang</button>
          </div>

        </div>
      </div>
    </div>

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
        #summary {
          background-color: #f6f6f6;
        }
      </style>
    </head>


    <!-- Modal toggle -->
    <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
      Toggle modal
    </button>

    <!-- Main modal -->
    <div id="ModalPayment" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
      <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
              Cart Item
            </h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="ModalPayment">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <!-- Modal body -->
          <div class="max-w-full bg-white px-10 py-10">
            <div class="flex justify-between mt-5 mb-5">
              <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
              <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
              <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
            </div>
            <div class="flex justify-between items-center hover:bg-gray-100 -mx-8 px-6 py-5">
              <div class="flex w-2/5">
                <!-- product -->
                <div class="w-20">
                  <img class="h-24" src="https://drive.google.com/uc?id=18KkAVkGFvaGNqPy2DIvTqmUH_nk39o3z" alt="">
                </div>
                <div class="flex flex-col justify-between ml-4 flex-grow">
                  <span class="font-bold text-sm">Iphone 6S</span>
                  <span class="text-red-500 text-xs">Apple</span>
                  <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</a>
                </div>
              </div>
              <span class="text-center w-1/5 font-semibold text-sm">$400.00</span>
              <span class="text-center w-1/5 font-semibold text-sm">$400.00</span>
            </div>
            <div>
              <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</button>
            </div>
            <div class="border-t mt-8">
              <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                <span>Total cost</span>
                <span>$600</span>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>