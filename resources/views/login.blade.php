<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ke SIEITS!</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">\
    <link rel="shortcut icon" href="/images/siets.ico" />
    <style>
        .bglogin
        {
            background-color: #EFABA1;
        }
        .bgbutton
        {
            background-color : #FE705F;
        }
        .bggaris
        {
            background-color : #BFB6B5;
        }
    </style>
</head>
<body>
    <div class="flex flex-row">
        <div class="bglogin h-screen w-1/2">
            <div class="flex flex-col h-full mb-auto mt-auto items-center justify-center">
                <img src="/images/loginpict.png" alt="login" class="h-4/7">
                <div class="absolute left-2 bottom-5">
                    <img src="/images/decor.png" alt="login" class="h-20">
                </div>
            </div>
        </div>
        <div class="flex">
            <div class="flex flex-col absolute top-20 items-center">
                <img src="/images/SIETS.png" alt="tulisan" class="w-1/2">
                <div class="pt-4 pb-16">
                    <div class="py-0.3 rounded-full bggaris w-97"></div>
                </div>
                <button class="py-2 rounded-sm bgbutton w-97 text-white">
                    <div class="flex flex-row items-center justify-center">
                        <img src="/images/its.png" alt="its" class="h-8 w-8">
                        <span class="px-5">
                            Masuk dengan MyITS
                        </span>
                    </div>
                </button>
                <div class="py-8 w-97">
                    <form action="{{route('login.post')}}" method="POST">
                        @csrf
                        <label for="email" class="justify-center text-base md:text-xl font-medium">Email</label><br>
                        <div class="py-1"></div>
                        <input name="email" type="email" class="outline-none rounded-sm border border-gray-400 py-1 px-4 w-72 md:w-full text-sm focus:ring-2 focus:ring-form
                        @error('email') border-red-500 @enderror" value=""><br>
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="py-2"></div>
                        <label for="password" class="justify-center text-base md:text-xl font-medium">Password</label><br>
                        <div class="py-1"></div>
                        <input name="password" type="password" class="outline-none rounded-sm border border-gray-400 py-1 px-4 w-72 md:w-full text-sm focus:ring-2 focus:ring-form
                        @error('password') border-red-500 @enderror">
                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="pt-8">
                    <button class="py-2 rounded-sm bgbutton w-97 text-white">
                        <div class="flex justify-center">Login</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>