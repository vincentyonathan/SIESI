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
    </style>
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
                    <!-- <li class="mt-6 px-10 w-full h-10">
                        <button class="bg-white rounded-md px-2 py-2 w-full h-12">
                            <a href="/public/admin_additem.html" class="flex items-center">
                                <img src="/images/activity-black.png" alt="" class="w-8 pl-1">
                                <span class="pl-4">Add Item</span>
                            </a>
                        </button>
                    </li> -->
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
            <div class="py-0.3 rounded-full bggaris h-full w-1"></div>
            
            <div class="col-span-9 flex flex-col">
                <h1 class="absolute text-secondary pt-12">Kegiatan</h1>
                <div class="rounded-sm absolute top-20 w-8/12 h-adapt bg-danger items-center z-0"></div>
                <img src="/images/kosong.png" alt="" class="z-10 w-1/4 mr-auto ml-auto pt-40">
                <h1 class="text-black z-10 mr-auto ml-auto text-lg font-semibold">Belum ada kegiatan yang dapat di survey</h1>
                <h2 class="text-secondary z-10 mr-auto ml-auto text-center px-80 text-base">Kegiatan bisa dinilai berdasarkan pengisian tiap individu
                    agar kedepannya bisa dijadikan bahan evaluasi dari pihak
                    penyelenggara.
                </h2>
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
</body>
</html>