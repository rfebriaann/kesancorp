<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
</head>
<body>
    <nav class="navbar container p-3 mx-auto md:p-0">
        <div class="flex items-center justify-between">
            <img class="sm:mx-auto md:mx-auto lg:mx-auto w-28 md:hidden lg:hidden sm:hidden" src="{{asset('assets/images/logo/logo1.png')}}" alt="logo_4">
            {{-- <img id="menu-button" class="w-7 h-7 md:hidden" src="/static_files/svgs/bars-black.svg" alt="menu icon"> --}}
            <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="w-10 h-10 icon icon-tabler icon-tabler-align-left md:hidden" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l10 0" /><path d="M4 18l14 0" /></svg>
        </div>
        <div class="hidden md:block" id="menu">
            <div class="grid grid-cols-1 md:grid-cols-9 mt-12 ">
                <div class="col-span-4 text-lg">
                    <ul class="justify-end md:p-6 md:flex text-black">
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="google.com" target="_blank">Home</a></li>
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="#">Products</a></li>
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="#">Pricing</a></li>
                    </ul>
                </div>
                <div class="hidden md:block">
                    <img class="sm:mx-auto md:mx-auto lg:mx-auto w-32" src="{{asset('assets/images/logo/logo1.png')}}" alt="logo_4">
                <img id="menu-button" class="w-7 h-7 md:hidden" src="/static_files/svgs/bars-black.svg" alt="menu icon">
                    <div class="flex items-center justify-center lg:hidden md:hidden sm:hidden">
                        <div class="p-3 border-2 border-black border-dotted rounded-full">
                            {{-- <img class="mx-auto w-9 h-9" src="{{asset('assets/images/logo/logo1.png')}}" alt="cart"> --}}
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <ul class="justify-start text-lg md:p-6 md:flex text-black">
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="#">Company</a></li>
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="#">Services</a></li>
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    {{-- <div class="grid grid-rows-3 justify-center place-items-center content-center">
        <div class=""></div>
        <div class="mx-60 text-center row-span-2">
            <div class="">
                <h1 class="text-white text-7xl font-bold">My Fest 1</h1>
                <p class="text-white text-lg mt-4">"Menjadi dewasa, meraih mimpi"</p>
            </div>
        </div>
    </div> --}}
    <div class="sm:mx-4 md:mx-20 rounded-2xl text-black sm:pl-0 md:pl-20 sm:pr-0 md:pr-20 pt-8 pb-14 place-items-center">
        <div class="rounded-2xl bg-red-500 h-[500px] bg-cover" style="background-image: url({{'assets/images/images6.jpg'}})">
        </div>

        <div class="mt-10 grid sm:grid-cols-1 md:grid-cols-2 gap-10 sm:mx-10">
            <div>
                <h1 class="text-6xl font-bold">My Fest 1 x Coca Cola</h1>
                <p class="mt-4 text-xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo expedita dolorem eos perferendis corrupti </p>
            </div>
            <div>
                <div class="grid grid-cols-2 border-b pb-4">
                    <div>
                        <span><p>Location :</p></span>
                        <span><p class="fo nt-semibold">One Street Food, Jl. Pemuda, Pekanbaru</p></span>
                    </div>
                    <div>
                        <span><p>Date :</p></span>
                        <span><p class="font-semibold">2023, May 19</p></span>
                    </div>
                </div>
                <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At assumenda minima quia magni repudiandae enim maiores nihil laudantium aliquam quod. Voluptas, consequuntur consequatur? Aut asperiores tempore autem tenetur, mollitia explicabo.</p>
            </div>
        </div>
    </div>
    <div class="grid sm:grid-rows-3 md:grid-rows-1 sm:grid-cols-1 md:grid-cols-3 gap-3">
        <div class="row-span-1 bg-red-500 h-[500px] bg-cover " style="background-image: url({{'assets/images/images7.jpg'}})"></div>
        <div class="grid grid-cols-2 grid-rows-2 gap-4">
            <div class="col-span-2 bg-red-500 h-[243px] bg-cover " style="background-image: url({{'assets/images/images8.jpg'}})"></div>
            <div class="bg-red-500 h-[242px] bg-cover" style="background-image: url({{'assets/images/images9.jpg'}})"></div>
            <div class="bg-red-500 h-[242px] bg-cover" style="background-image: url({{'assets/images/images10.jpg'}})"></div>
        </div>
        <div class="row-span-1 bg-red-500 h-[500px] bg-cover " style="background-image: url({{'assets/images/images6.jpg'}})"></div>
    </div>
    <div class="sm:mx-2 md:mx-20 sm:pl-10 md:pl-20 sm:pr-10 md:pr-20 pt-8 pb-14 mt-10">
        <h1 class="text-4xl font-semibold">Meet Byon Board Member</h1>
        <div class="sm:p-4 md:p-10">
            <div class="grid grid-cols-2">
                <div class="border-b border-black p-4"><h1 class="text-2xl font-medium">Howandi Chandra</h1></div>
                <div class="border-b border-black p-4">CEO & Founder</div>
                <div class="border-b border-black p-4"><h1 class="text-2xl font-medium">Wandi Pranata</h1></div>
                <div class="border-b border-black p-4">CO-Founder</div>
                <div class="border-b border-black p-4"><h1 class="text-2xl font-medium">Sultan Hermawan</h1></div>
                <div class="border-b border-black p-4">COO</div>
                <div class="border-b border-black p-4"><h1 class="text-2xl font-medium">Nuraini Novi</h1></div>
                <div class="border-b border-black p-4">Advisory Producer</div>
                <div class="border-b border-black p-4"><h1 class="text-2xl font-medium">Melysa Anggun</h1></div>
                <div class="border-b border-black p-4">Project Lead</div>
            </div>
        </div>
    </div>
</body>
<script>
    const menubtn = document.getElementById('menu-button');
    const menu = document.getElementById('menu');
    menubtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    })
</script>
</html>