<html>
    <head>
        <title>@yield('title')WasteLess</title>
        <link rel = "icon" href ="{{ asset('img/logo bulet 1.png') }}" 
        type = "image/x-icon">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body>
        <!-- navbar sebelum login -->
        <div class="flex flex-col h-screen">
            @section('navbar')
            <nav class="fixed bg-white w-full z-[1100]">
                <div class="py-2 px-14">
                    <div class="flex justify-between items-center">
                        <a href="/" class="logo">
                            <img src="{{ asset('img/logo orange.png') }}">
                        </a>
                        <div class="flex flex-wrap items-baseline space-x-7 text-sm font-medium">
                            <a href="#" class="group">Tentang Kami
                                <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                            </a>
                            <a href="#" class="group">Layanan
                                <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                            </a>
                            <a href="#" class="group">Jenis Sampah
                                <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                            </a>
                            <a href="{{route('login.view')}}" class="py-1 px-5 bg-slate-50 hover:bg-[#6C894A] border-2 border-[#6C894A] text-[#6C894A] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 hover:scale-110 duration-300">
                                Masuk
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            @show
     
            <div class="mb-auto mt-28 px-32">
                @yield('content')
            </div>
    
            @section('footer')
            <footer class="bg-[#6C894A] mt-28">
                <div class="pt-8 pb-5 px-24">
                    <div class="flex flex-wrap justify-between">
                        <div>
                            <div class="logo mb-2">
                                <img src="{{ asset('img/logo white.png') }}">
                            </div>
                            <div class="flex flex-wrap mb-4 text-sm font-medium text-white space-x-4">
                                <a href="#" class="hover:text-gray-900">Tentang</a>
                                <a href="#" class="hover:text-gray-900">Layanan</a>
                                <a href="#" class="hover:text-gray-900">Bantuan</a>
                            </div>
                        </div>
                        <div>
                            <h2 class="py-4 text-lg font-semibold text-white">Kontak Kami</h2>
                            <div class="flex flex-wrap space-x-4 mb-4">
                                <a href="#" class="text-white hover:text-gray-900">
                                    <span class="i-mdi-linkedin text-2xl">Linkedin page</span>
                                </a>
                                <a href="#" class="text-white hover:text-gray-900">
                                    <span class="i-mdi-twitter text-2xl">Twitter page</span>
                                </a>                            
                                <a href="#" class="text-white hover:text-gray-900 ">
                                    <span class="i-mdi-instagram text-2xl">Instagram page</span>
                                </a>                            
                                <a href="#" class="text-white hover:text-gray-900">
                                    <span class="i-mdi-facebook text-2xl">Facebook page</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="text-sm text-gray-300">© 2023 <a href="#" class="hover:underline">WasteLess</a>. All Rights Reserved.</span>
                    </div>
                </div>
            </footer>
            @show
        </div>
    </body>
</html>