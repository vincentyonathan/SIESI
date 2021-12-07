<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang ke SIEITS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="/images/its.ico" />
    <style>
        .activity:hover #hoveritem1{
            display:none;
        }
        .activity:hover #hoveritem2{
            display: block;
        }
        .activity:hover #hovertext{
            margin-left: 2rem;
        }
        .modal {
            transition: opacity 0.25s ease;
        }
        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }
        .bggaris
        {
            background-color: #BFB6B5;
        }
        .warnatulisan
        {
            color: #FE705F;
        }
        .title1
        {
            color: #414141;
        }
        .desc1
        {
            color:#848484;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
</head>
<body>
    <div class="wrapper">
        <div class="grid grid-cols-14">
            <div class="col-span-3 h-screen bg-white">
                <ul class="pt-10 flex flex-col items-center">
                    <li>
                        <button>
                            <a href="#">
                                <img src="/images/SIETS.png" alt="" class="w-40">
                            </a>
                        </button>    
                    </li>
                    <div class="py-0.3 rounded-full bggaris w-3/4"></div>
                    <li class="mt-10 w-3/4 h-10">
                        <button class="activity bg-transparent rounded-md px-2 py-2 w-full h-12 text-secondary hover:bg-primary hover:text-primary">
                            <a href="/public/admin_home.html" class="flex items-center">
                                <img src="/images/kegiatanabu.png" alt="" id="hoveritem1" class="relative w-8 pl-1">
                                <img src="/images/kegiatanoren.png" alt="" id="hoveritem2" class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Kegiatan</span>
                            </a>
                        </button>
                    </li>
                    <li class="mt-10 w-3/4 h-10">
                        <button class="activity bg-transparent rounded-md px-2 py-2 w-full h-12 text-secondary hover:bg-primary hover:text-primary">
                            <a href="/public/admin_home.html" class="flex items-center">
                                <img src="/images/tambahabu.png" alt="" id="hoveritem1" class="relative w-8 pl-1">
                                <img src="/images/tambahoren.png" alt="" id="hoveritem2" class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Tambah Kegiatan</span>
                            </a>
                        </button>
                    </li>
                    <li class="mt-10 w-3/4 h-10">
                        <button class="activity bg-transparent rounded-md px-2 py-2 w-full h-12 text-secondary hover:bg-primary hover:text-primary">
                            <a href="/public/admin_home.html" class="flex items-center">
                                <img src="/images/keluarabu.png" alt="" id="hoveritem1" class="relative w-8 pl-1">
                                <img src="/images/keluaroren.png" alt="" id="hoveritem2" class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Keluar</span>
                            </a>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="py-0.3 rounded-full bggaris h-fullz w-1"></div>
            
            <div class="col-span-9 flex flex-col">
                <h1 class="absolute text-secondary pt-12">Tambah Kegiatan</h1>
                <div class="rounded-sm absolute top-20 w-8/12 h-fullz bg-danger items-center z-0">
                    <div class="flex flex-wrap px-4">
                        <div class="flex flex-col my-2 px-2 w-full md:w-full lg:w-full xl:w-full">
                            <div class="flex flex-col pl-8">
                                <label for="name" class="pt-3 text-base font-medium">Nama</label>
                                <input name="name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Name">                      
                                <label for="message" class="pt-3 text-base font-medium">Deskripsi Kegiatan</label>
                                <textarea id="message" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                                <label for="date" class="pt-3 text-base font-medium">Tanggal</label>
                                    <div date-rangepicker class="flex items-center">
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                            </div>
                                            <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                                        </div>
                                        <span class="mx-10 text-gray-500">to</span>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                            </div>
                                            <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                                        </div>
                                    </div>
                            </div>
                            <div class="pt-3 px-8">
                                <div class="py-0.1 rounded-full bggaris w-full"></div>
                            </div>
                            <div class="px-8 flex flex-col">
                                <div class="rounded-sm absolute top-80 h-3/5 bg-white w-8/7">
                                <h1 class="absolute pt-8 ml-5 font-bold text-xl">Capaian Kegiatan</h1>
                                    <div class="flex flex-col pt-10 pt-20 card h-140 overflow-y-scroll">
                                        <div class="rounded-sm relative bg-white w-full h-30">
                                            <div class="flex flex-col">
                                                <div class="flex flex-row px-5">
                                                    <div class="flex flex-col">
                                                        <h1 class="title1 font-bold align-top text-base">Kegiatan</h1>
                                                        <p>Duis sagittis aliquam arcu, vel cursus tellus sodales et. Quisque eu urna eget dolor ultrices vehicula nec nec dolor. Nulla porta urna vel. . .</p>
                                                    </div>
                                                    <div>
                                                        <div class="relative mr-auto ml-auto pt-8 pl-20">
                                                            <div class="py-1 md:py-3 rounded-md bg-wt">
                                                                <h3 class="px-7 md:px-7 text-xs md:text-sm text-black"></h3>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                    <div>
                                                        <button>
                                                            <a href="">
                                                                <img src="/images/trashbin.png" alt="" class="pt-5">
                                                            </a>
                                                        </button>   
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <div class="py-0.1 rounded-full bggaris w-full opacity-50"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-sm relative bg-white w-full h-30">
                                        <div class="flex flex-col">
                                                <div class="flex flex-row px-5">
                                                    <div class="flex flex-col">
                                                        <h1 class="title1 font-bold align-top text-base">Kegiatan</h1>
                                                        <p>Duis sagittis aliquam arcu, vel cursus tellus sodales et. Quisque eu urna eget dolor ultrices vehicula nec nec dolor. Nulla porta urna vel. . .</p>
                                                    </div>
                                                    <div>
                                                        <div class="relative mr-auto ml-auto pt-8 pl-20">
                                                            <div class="py-1 md:py-3 rounded-md bg-wt">
                                                                <h3 class="px-7 md:px-7 text-xs md:text-sm text-black"></h3>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                    <div>
                                                        <button>
                                                            <a href="">
                                                                <img src="/images/trashbin.png" alt="" class="pt-5">
                                                            </a>
                                                        </button>   
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <div class="py-0.1 rounded-full bggaris w-full opacity-50"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-sm relative bg-white w-full h-30">
                                            <div class="flex flex-col">
                                                <div class="flex flex-row px-5">
                                                    <div class="flex flex-col">
                                                        <h1 class="title1 font-bold align-top text-base">Kegiatan</h1>
                                                        <p>Duis sagittis aliquam arcu, vel cursus tellus sodales et. Quisque eu urna eget dolor ultrices vehicula nec nec dolor. Nulla porta urna vel. . .</p>
                                                    </div>
                                                    <div>
                                                        <div class="relative mr-auto ml-auto pt-8 pl-20">
                                                            <div class="py-1 md:py-3 rounded-md bg-wt">
                                                                <h3 class="px-7 md:px-7 text-xs md:text-sm text-black"></h3>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                    <div>
                                                        <button>
                                                            <a href="">
                                                                <img src="/images/trashbin.png" alt="" class="pt-5">
                                                            </a>
                                                        </button>   
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <div class="py-0.1 rounded-full bggaris w-full opacity-50"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded-sm relative bg-white w-full h-30">
                                            <div class="flex flex-col">
                                                <div class="flex flex-row px-5">
                                                    <div class="flex flex-col">
                                                        <h1 class="title1 font-bold align-top text-base">Kegiatan</h1>
                                                        <p>Duis sagittis aliquam arcu, vel cursus tellus sodales et. Quisque eu urna eget dolor ultrices vehicula nec nec dolor. Nulla porta urna vel. . .</p>
                                                    </div>
                                                    <div>
                                                        <div class="relative mr-auto ml-auto pt-8 pl-20">
                                                            <div class="py-1 md:py-3 rounded-md bg-wt">
                                                                <h3 class="px-7 md:px-7 text-xs md:text-sm text-black"></h3>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                    <div>
                                                        <button>
                                                            <a href="">
                                                                <img src="/images/trashbin.png" alt="" class="pt-5">
                                                            </a>
                                                        </button>   
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-6">
                                                <div class="py-0.1 rounded-full bggaris w-full opacity-50"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-20">
                                        <div class="flex flex-row pl-4">
                                            <button class="add flex flex-row">
                                                <img src="/images/plus.png" alt="" class="h-8">
                                                <h1 class="pt-1 pl-2">Tambah Kegiatan</h1>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>                 
                        </div>
                    </div>
                </div>
                <div class="relative flex flex-row top-full mt-60 left-2/3">
                    <div class="px-2">
                        <button class="py-1 md:py-2 rounded-md bg-btn">
                            <a href="#" class="px-8 md:px-16 text-xs md:text-sm text-black">Batal</a>
                        </button>
                        <button class="py-1 md:py-2 rounded-md bg-wt">
                            <a href="#" class="px-8 md:px-16 text-xs md:text-sm text-black">Simpan</a>
                        </button>
                    </div>    
                </div>
            </div>
        </div>
    </div>

    <script>
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
          openmodal[i].addEventListener('click', function(event){
            event.preventDefault()
            toggleModal()
          })
        }
        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)
        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
          closemodal[i].addEventListener('click', toggleModal)
        }
        document.onkeydown = function(evt) {
          evt = evt || window.event
          var isEscape = false
          if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
          } else {
            isEscape = (evt.keyCode === 27)
          }
          if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
          }
        };
        function toggleModal () {
          const body = document.querySelector('body')
          const modal = document.querySelector('.modal')
          modal.classList.toggle('opacity-0')
          modal.classList.toggle('pointer-events-none')
          body.classList.toggle('modal-active')
        }
      </script>
      <script>
        window.addEventListener('DOMContentLoaded', () => {
            const card = document.querySelector('.card')
            const add = document.querySelector('.add')
            add.addEventListener('click', () => {
                const html = `<div class="rounded-sm relative bg-white w-full h-30 pt-2">
                    <div class="flex flex-col">
                        <div class="flex flex-row px-5">
                            <div class="flex flex-col">
                                <h1 class="title1 font-bold align-top text-base">Kegiatan</h1>
                                <p>Duis sagittis aliquam arcu, vel cursus tellus sodales et. Quisque eu urna eget dolor ultrices vehicula nec nec dolor. Nulla porta urna vel. . .</p>
                            </div>
                            <div>
                                <div class="relative mr-auto ml-auto pt-8 pl-20">
                                    <div class="py-1 md:py-3 rounded-md bg-wt">
                                        <h3 class="px-7 md:px-7 text-xs md:text-sm text-black"></h3>
                                    </div>
                                </div>  
                            </div>
                            <div>
                                <button>
                                    <a href="">
                                        <img src="/images/trashbin.png" alt="" class="pt-5">
                                    </a>
                                </button>   
                            </div>
                        </div>
                    </div>
                    <div class="pt-6">
                        <div class="py-0.1 rounded-full bggaris w-full opacity-50"></div>
                    </div>
                </div>`;
                const addCard = document.querySelector(`.card`);
                addCard.innerHTML += html;
            });
        })
      </script> 
      <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
      <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/datepicker.bundle.js"></script>
</body>
</html>