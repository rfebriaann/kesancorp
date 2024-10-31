<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
</head>
<body>
    <div class=" overflow-y-scroll bg-cover bg-fixed" style="background-image: url('{{'assets/images/images7.jpg'}}')">
        <div class="h-full bg-gradient-to-r from-black/100 to-black/70" >
            <nav class="navbar container p-3 mx-auto md:p-0">
                <div class="flex items-center justify-between">
                    <img class="sm:mx-auto md:mx-auto lg:mx-auto w-28 md:hidden lg:hidden sm:hidden" src="{{asset('assets/images/logo/logo1.png')}}" alt="logo_4">
                    {{-- <img id="menu-button" class="w-7 h-7 md:hidden" src="/static_files/svgs/bars-black.svg" alt="menu icon"> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="w-10 h-10 icon icon-tabler icon-tabler-align-left md:hidden" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l10 0" /><path d="M4 18l14 0" /></svg>
                </div>
                <div class="hidden md:block" id="menu">
                    <div class="grid grid-cols-1 md:grid-cols-9 mt-12 ">
                        <div class="col-span-4 text-lg">
                            <ul class="justify-end md:p-6 md:flex text-white">
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="google.com" target="_blank">Home</a></li>
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="#">Products</a></li>
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="#">Pricing</a></li>
                            </ul>
                        </div>
                        <div class="hidden md:block">
                            <img class="sm:mx-auto md:mx-auto lg:mx-auto w-32" src="{{asset('assets/images/logo/logo2.png')}}" alt="logo_4">
                        <img id="menu-button" class="w-7 h-7 md:hidden" src="/static_files/svgs/bars-black.svg" alt="menu icon">
                            <div class="flex items-center justify-center lg:hidden md:hidden sm:hidden">
                                <div class="p-3 border-2 border-black border-dotted rounded-full">
                                    {{-- <img class="mx-auto w-9 h-9" src="{{asset('assets/images/logo/logo1.png')}}" alt="cart"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-span-4">
                            <ul class="justify-start text-lg md:p-6 md:flex text-white">
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="#">Company</a></li>
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="#">Services</a></li>
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="sm:mx-20 md:mx-60 grid sm:grid-rows-1 md:grid-rows-2 p-20 justify-center place-items-center content-center">
                
                <div class="">
                    
                </div>
                <div class="">
                    <div class="">
                        <h1 class="text-white sm:text-5xl md:text-7xl font-bold">Kesan Entertaiment.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="sm:mx-10 md:mx-20 grid sm:mt-20 md:mt-0 sm:grid-cols-1 md:grid-cols-2 md:grid-flow-col gap-20 text-black sm:p-0 sm:pb-20 md:p-20 place-items-center border-b border-gray-500">
        <div class="">
            <h5>Our Vission</h5>
            <h1 class="text-4xl">Increase the growth of double digits business in each subsidiary, through continuous product and process innovation and quality talent management</h1>
            <p class="mt-4 font-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. A fugit laboriosam, sint nisi deleniti quo expedita, suscipit eius amet mollitia corporis! Deserunt, incidunt sunt molestias asperiores quaerat maxime delectus ad. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates distinctio nihil ratione beatae non itaque, pariatur quas, dignissimos consequatur at atque quos? Tenetur eum nesciunt delectus, voluptatem reprehenderit accusamus architecto.</p>
        </div>
        <div class="col-span-2">
            <div class=" w-full rounded-3xl bg-cover">
                <img class="rounded-3xl" src="{{'assets/images/images4.jpeg'}}" alt="">
            </div>
        </div>
    </div>
    <div class="sm:mx-5 md:mx-20 sm:p-2 md:p-20 sm:mt-20">
        <div>
           <h1 class="text-4xl">Create the best live experiences for your audience with us!</h1>
        </div>
        <div class="grid sm:grid-cols-1 md:grid-cols-3">
            <a href="">
                <div class="w-[350px] mt-8 border p-4 rounded-3xl">
                    <img class="rounded-t-2xl bg-cover h-56 w-full" src="{{'assets/images/images1.jpeg'}}" alt="">
                    <div class="mx-3">
                        <h1 class="text-2xl font-bold mt-3">MyFest 1</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, quo. Commodi placeat beatae est reiciendis doloribus modi nisi ut nam illo nemo suscipit facilis, cupiditate provident iure velit, ullam autem.</p>
                    </div>
                </div>
            </a>
             <a href="">
                <div class="w-[350px] mt-8 border p-4 rounded-3xl">
                    <img class="rounded-t-2xl bg-cover h-56 w-full" src="{{'assets/images/images7.jpg'}}" alt="">
                    <div class="mx-3">
                        <h1 class="text-2xl font-bold mt-3">MyFest 1</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, quo. Commodi placeat beatae est reiciendis doloribus modi nisi ut nam illo nemo suscipit facilis, cupiditate provident iure velit, ullam autem.</p>
                    </div>
                </div>
            </a>
             <a href="">
                <div class="w-[350px] mt-8 border p-4 rounded-3xl">
                    <img class="rounded-t-2xl bg-cover h-56 w-full" src="{{'assets/images/images6.jpg'}}" alt="">
                    <div class="mx-3">
                        <h1 class="text-2xl font-bold mt-3">MyFest 1</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, quo. Commodi placeat beatae est reiciendis doloribus modi nisi ut nam illo nemo suscipit facilis, cupiditate provident iure velit, ullam autem.</p>
                    </div>
                </div>
            </a>
             <a href="">
                <div class="w-[350px] mt-8 border p-4 rounded-3xl">
                    <img class="rounded-t-2xl bg-cover h-56 w-full" src="{{'assets/images/images5.jpg'}}" alt="">
                    <div class="mx-3">
                        <h1 class="text-2xl font-bold mt-3">MyFest 1</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, quo. Commodi placeat beatae est reiciendis doloribus modi nisi ut nam illo nemo suscipit facilis, cupiditate provident iure velit, ullam autem.</p>
                    </div>
                </div>
            </a>
             <a href="">
                <div class="w-[350px] mt-8 border p-4 rounded-3xl">
                    <img class="rounded-t-2xl bg-cover h-56 w-full" src="{{'assets/images/images2.jpg'}}" alt="">
                    <div class="mx-3">
                        <h1 class="text-2xl font-bold mt-3">MyFest 1</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, quo. Commodi placeat beatae est reiciendis doloribus modi nisi ut nam illo nemo suscipit facilis, cupiditate provident iure velit, ullam autem.</p>
                    </div>
                </div>
            </a>
             <a href="">
                <div class="w-[350px] mt-8 border p-4 rounded-3xl">
                    <img class="rounded-t-2xl bg-cover h-56 w-full" src="{{'assets/images/images3.jpeg'}}" alt="">
                    <div class="mx-3">
                        <h1 class="text-2xl font-bold mt-3">MyFest 1</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, quo. Commodi placeat beatae est reiciendis doloribus modi nisi ut nam illo nemo suscipit facilis, cupiditate provident iure velit, ullam autem.</p>
                    </div>
                </div>
            </a>
             <a href="">
                <div class="w-[350px] mt-8 border p-4 rounded-3xl">
                    <img class="rounded-t-2xl bg-cover h-56 w-full" src="{{'assets/images/images10.jpg'}}" alt="">
                    <div class="mx-3">
                        <h1 class="text-2xl font-bold mt-3">MyFest 1</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, quo. Commodi placeat beatae est reiciendis doloribus modi nisi ut nam illo nemo suscipit facilis, cupiditate provident iure velit, ullam autem.</p>
                    </div>
                </div>
            </a>
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