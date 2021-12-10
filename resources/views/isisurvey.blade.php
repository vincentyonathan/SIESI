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
</head>
<body>
    <div class="wrapper">
        <div class="grid grid-cols-14">
            <div class="col-span-3 h-screen bg-white">
                <ul class="pt-10 flex flex-col items-center">
                    <li>
                        <button>
                            <a href="{{route('mainpage')}}">
                                <img src="/images/SIETS.png" alt="" class="w-40">
                            </a>
                        </button>    
                    </li>
                    <div class="py-0.3 rounded-full bggaris w-3/4"></div>
                    <li class="mt-10 w-3/4 h-10">
                        <button class="activity bg-transparent rounded-md px-2 py-2 w-full h-12 text-secondary hover:bg-primary hover:text-primary">
                            <a href="{{route('mainpage')}}" class="flex items-center">
                                <img src="/images/kegiatanabu.png" alt="" id="hoveritem1" class="relative w-8 pl-1">
                                <img src="/images/kegiatanoren.png" alt="" id="hoveritem2" class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Kegiatan</span>
                            </a>
                        </button>
                    </li>
                    <li class="mt-10 w-3/4 h-10">
                        <button class="activity bg-transparent rounded-md px-2 py-2 w-full h-12 text-secondary hover:bg-primary hover:text-primary">
                            <a href="{{route('addKegiatan')}}" class="flex items-center">
                                <img src="/images/tambahabu.png" alt="" id="hoveritem1" class="relative w-8 pl-1">
                                <img src="/images/tambahoren.png" alt="" id="hoveritem2" class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Tambah Kegiatan</span>
                            </a>
                        </button>
                    </li>
                    <li class="mt-10 w-3/4 h-10">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit" class="flex items-center activity bg-transparent rounded-md px-2 py-2 w-full h-12 text-secondary hover:bg-primary hover:text-primary">
                                <img src="/images/keluarabu.png" alt="" id="hoveritem1" class="relative w-8 pl-1">
                                <img src="/images/keluaroren.png" alt="" id="hoveritem2" class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Keluar</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="py-0.3 rounded-full bggaris h-fullz w-1"></div>
            
            <div class="col-span-9 flex flex-col">
                <form action="{{route('isisurvey.post')}}" method="post">
                @csrf
                <h1 class="absolute text-secondary pt-12">Kegiatan</h1>
                <div class="rounded-sm absolute top-20 w-8/12 h-fullz bg-danger items-center z-0">
                    <div class="flex flex-wrap px-4">
                        <div class="flex flex-col my-2 px-2 w-full md:w-full lg:w-full xl:w-full">
                            <div class="flex flex-row items-center md:items-start py-4 px-4 bg-transparent overflow-hidden rounded-lg bg-cover h-landing bg-local relative h-32 md:h-32">
                                <div class="pl-6 pr-16 flex flex-col pt-2 flex-grow">
                                    <h2 class="title1 text-footer text-base font-semibold pt-4 md:pt-0">{{$kegiatan->nama_kegiatan}}</h2>
                                    <span class="desc1 hidden md:block md:text-sm lg:text-base text-footer pt-2 md:pb-6 lg:pb-4">
                                    {{$kegiatan->deskripsi_kegiatan}}
                                    </span>
                                </div>
                                <div class="flex flex-col pr-40 w-1/3 pt-2">
                                    <div class="flex flex-row">
                                        <img src="/images/tanggal.png" alt="" class="w-1/6 pt-1">
                                        <p class="text-sm ml-2 pt-2.5">{{Carbon\Carbon::parse($kegiatan->tanggal_mulai)->format('d M Y')}}</p>
                                    </div>
                                    <h2 class="text-secondary ml-16 mr-16 text-sm">Hingga</h2>
                                    <div class="flex flex-row">
                                        <img src="/images/tanggal.png" alt="" class="w-1/6 pt-1">
                                        <p class="text-sm ml-2 pt-2.5">{{Carbon\Carbon::parse($kegiatan->tanggal_selesai)->format('d M Y')}}</p>
                                    </div>
                                </div>      
                                <div class="relative mr-auto ml-auto pt-8">
                                    <button class="py-1 md:py-2 rounded-md bg-haha">
                                        <a href="#" class="px-8 md:px-16 text-xs md:text-sm text-white">Aktif</a>
                                    </button>
                                </div>                           
                            </div>
                            <div class="pt-2 px-8">
                                <div class="py-0.1 rounded-full bggaris w-full"></div>
                            </div>
                            <div class="px-8 flex flex-col">
                                <div class="rounded-sm absolute top-40 h-4/6 bg-white w-8/7">
                                <h1 class="absolute pt-8 ml-5 font-bold text-xl">Capaian Kegiatan</h1>
                                    <div class="flex flex-col pt-10 pt-20 card h-140 overflow-y-scroll">
                                        <div class="rounded-sm relative bg-white w-full h-30">
                                            <div class="flex flex-col">
                                                @foreach($capaian as $c)
                                                
                                                <div class="flex flex-row px-5">
                                                    <div class="flex flex-col flex-grow">
                                                        <h1 class="title1 font-bold align-top text-base">{{$c->nama_pokok}}</h1>
                                                        <p>{{$c->deskripsi}}</p>
                                                    </div>
                                                    <div>
                                                        <div class="relative mr-auto ml-auto pt-4 pl-20">
                                                            @if($c->nilai == 0)
                                                            <div class="py-1 md:py-3 rounded-md bg-wt">
                                                                <input type="hidden" name="id_capaian[]" value="{{$c->id}}">
                                                                <input name="nilai[]" type="number" min = '0' max="100" step="1" class="px-7 md:px-7 text-xs md:text-sm bg-transparent border-0 text-black">
                                                            </div>
                                                            @else
                                                            <div class="py-1 md:py-1 px-0.3 rounded-md bg-wt">
                                                                <input disabled type="number" min = '0' max="100" step="1" value="{{$c->nilai}}" class="px-7 md:px-7 text-xs md:text-sm bg-transparent border-0 text-black">
                                                            </div>
                                                            @endif
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <div class="py-0.1 rounded-full bggaris w-full opacity-50"></div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                 
                        </div>
                    </div>
                    <div class="relative flex flex-row top-3/4 left-1/3 ml-72">
                        <div class="px-2">
                            <button class="py-1 md:py-2 rounded-md bg-btn">
                                <span href="#" class="px-8 md:px-16 text-xs md:text-sm text-black">Batal</a>
                            </button>
                            <button type="submit" class="py-1 md:py-2 rounded-md bg-wt">
                                <span class="px-8 md:px-16 text-xs md:text-sm text-black">Simpan</a>
                            </button>
                        </div>    
                    </div>
                </div>
                </form>
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
                const html = `<div class="rounded-sm relative bg-white w-full h-30">
                    <div class="flex flex-col">
                        <div class="flex flex-row px-5">
                            <div class="flex flex-col">
                                <h1 class="title1 font-bold align-top text-base">Kegiatan</h1>
                                <p>Duis sagittis aliquam arcu, vel cursus tellus sodales et. Quisque eu urna eget dolor ultrices vehicula nec nec dolor. Nulla porta urna vel. . .</p>
                            </div>
                            <div>
                                <div class="relative mr-auto ml-auto pt-4 pl-20">
                                    <div class="py-1 md:py-3 rounded-md bg-wt">
                                        <h3 class="px-7 md:px-7 text-xs md:text-sm text-black"></h3>
                                    </div>
                                </div>  
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
</body>
</html>