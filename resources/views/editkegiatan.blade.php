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
                <h1 class="absolute text-secondary pt-12">Edit Kegiatan</h1>
                <div class="rounded-sm absolute top-20 w-8/12 h-fullz bg-danger items-center z-0">
                    <div class="flex flex-wrap px-4">
                        <div class="flex flex-col my-2 px-2 w-full md:w-full lg:w-full xl:w-full">
                            <div class="flex flex-col pl-8">
                                <form action="{{route('editkegiatan.post')}}" method="post">
                                @csrf
                                <input type="hidden" name='id' value='{{$kegiatan->id}}'>
                                <label for="name" class="pt-3 text-base font-medium">Nama</label>
                                <input name="nama_kegiatan" value='{{$kegiatan->nama_kegiatan}}' type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Name">                      
                                <label for="message" class="pt-3 text-base font-medium">Deskripsi Kegiatan</label>
                                <textarea id="message" name='deskripsi_kegiatan' rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment...">{{$kegiatan->deskripsi_kegiatan}}</textarea>
                                <label for="date" class="pt-3 text-base font-medium">Tanggal</label>
                                    <div date-rangepicker class="flex items-center">
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                            </div>
                                            <input value='{{Carbon\Carbon::parse($kegiatan->tanggal_mulai)->format('m/d/Y')}}'  name="tanggal_mulai" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                                        </div>
                                        <span class="mx-10 text-gray-500">to</span>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                            </div>
                                            <input value='{{Carbon\Carbon::parse($kegiatan->tanggal_selesai)->format('m/d/Y')}}' name="tanggal_selesai" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                                        </div>
                                    </div>
                                    <div class="pt-10 flex flex-row top-32 left-1/3">
                                        <div class="px-2">
                                            <button class="py-1 md:py-2 rounded-md bg-btn">
                                                <a href="#" class="px-8 md:px-16 text-xs md:text-sm text-black">Batal</a>
                                            </button>
                                            <button id="myBtn2" class="py-1 md:py-2 rounded-md bg-woops">
                                                <a href="{{route('deletekegiatan',$kegiatan->id)}}" class="px-8 md:px-16 text-xs md:text-sm text-white">Hapus</a>
                                            </button>
                                            <button  class="py-1 md:py-2 rounded-md bg-eh">
                                                <a href="{{route('gantistatus',$kegiatan->id)}}" class="px-8 md:px-16 text-xs md:text-sm text-white">Kunci</a>
                                            </button>
                                            <button id="myBtn" type="submit" class="py-1 md:py-2 rounded-md bg-wt">
                                                <span class="px-8 md:px-16 text-xs md:text-sm text-black">Simpan</span>
                                            </button>
                                        </div>    
                                    </div>
                                </form>
                            </div>
                            
                           
                            <div class="pt-3 px-8">
                                <div class="py-0.1 rounded-full bggaris w-full"></div>
                            </div>
                            <div class="mt-8 px-8 flex flex-col">
                                <div class="rounded-sm top-80 h-3/5 bg-white">   
                                    <h1 class="pt-8 ml-5 font-bold text-xl">Capaian Kegiatan</h1>
                                    <div class="flex flex-col pt-10 pt-20 card h-140 overflow-y-scroll">
                                        @foreach($capaian as $c)
                                        <div class="rounded-sm bg-white w-full">
                                            <div class="flex flex-col ">
                                                <div class="flex flex-row px-5">
                                                    <div class="flex flex-col flex-grow">
                                                        <h1 class="title1 font-bold align-top text-base">{{$c->nama_pokok}}</h1>
                                                        <p>{{$c->deskripsi}}</p>
                                                    </div>
                                                    <div class="justify-center align">
                                                        <div class="relative mr-auto ml-auto pt-8 pl-20">
                                                            <div class="py-1 md:py-3 rounded-md bg-wt">
                                                                <h3 class="px-7 md:px-7 text-xs md:text-sm text-black">{{$c->bobot}}</h3>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                    <div>
                                                        <button>
                                                            <a href="{{route('deletecapaian',$c->id)}}">
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
                                        @endforeach
                                    <div>
                                        <div class="pl-4 pt-4">
                                            <button onclick="openmodal()" class="add flex flex-row">
                                                <img src="/images/plus.png" alt="" class="h-8">
                                                <h1 class="pt-1 pl-2">Tambah Capaian</h1>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modaltambahcapaian" style="display: none;" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
            <form action="{{route('addcapaian.post')}}" method="post">
                @csrf
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <input type="hidden" name='id_kegiatan' value="{{$kegiatan->id}}">
                    <label for="name" class="pt-4 text-base font-medium">Nama Capaian</label>
                    <input name="nama_pokok" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Capaian">                      
                    <label for="message" class="pt-4 text-base font-medium">Deskripsi Capaian</label>
                    <textarea id="message" name='deskripsi' class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Deskripsi Capaian"></textarea>
                    <label for="bobot" class="pt-4 text-base font-medium">Bobot</label>
                    <input name="bobot" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-20 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bobot">                      
                </div>
            
            </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                Submit
            </button>
        </form>
            <button onclick="closemodal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            Cancel
            </button>
        </div>
        </div>
    </div>
    </div>

    
      <script>
          function openmodal()
          {
                let x = document.getElementById("modaltambahcapaian")
                x.style.display = "block"
          }
      </script>
      <script>
          function closemodal()
          {
                let x = document.getElementById("modaltambahcapaian")
                x.style.display = "none"
          }
      </script>
      
      <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
      <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/datepicker.bundle.js"></script>
</body>
</html>