<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/scrollreveal"></script>
  {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
</head>
<body class="body">
    <div class="header-container overflow-y-scroll bg-cover bg-fixed" style="background-image: url('{{'assets/images/images5.jpg'}}')">
        <div class="h-full bg-gradient-to-t from-black">
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
            <div class=" grid sm:grid-rows-1 md:grid-rows-3 lg:grid-rows-3 gap-10 justify-center">
                <div></div>
                <div>
                    <h1 class="text-white text-center text-2xl font-light">Our Vision, better than others</h1>
                    <div class="text-center mx-20">
                        <h1 class="text-white text-7xl sm:p-0 md:p-5 lg:p-5 font-bold">Unlock the Future of ur Event with us!</h1>
                        <button type="button" class="button-readmore cursor-pointer mt-4 py-3 w-64 rounded-full bg-[#fff] text-[#000] font-semibold">
                            Read more
                        </button>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="welcome-container text-center pt-[100px] pb-[100px]">
        <h1 class="text-4xl font-medium">Welcome to Kesan Corp <br> Your Partner in Event Organizier</h1>
        <p class="sm:mx-10 md:mx-40 lg:mx-40 mt-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto est, ex quasi accusamus voluptate sed modi obcaecati maiores ipsa similique, perspiciatis, earum pariatur? Quod dignissimos harum voluptatibus eligendi, iure facilis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, iste. Corrupti a dolores dicta id unde esse iure cum. Eius quod ut incidunt repudiandae sequi obcaecati beatae qui eveniet dignissimos?lorem</p>
    </div>
    <div class=" bg-[#0A0F19]">
        <div class="business-container bg-cover bg-fixed overflow-y-scroll" style="background-image: url({{'assets/images/images8.jpg'}})">
            <div class=" pt-20 bg-gradient-to-t from-[#0A0F19] justify-items-center">
                <h1 class="text-4xl font-medium text-white text-center">Business Units of KesanCorp</h1>
                <p class="font-thin text-white text-center sm:mx-10 md:mx-40 lg:mx-40 mt-4 text-lg">As time goes by, we are committed to continuing to grow and develop through developing innovative products and services that will provide more value for consumers through 8 subholdings operating in different industrial fields.</p>
            <div class="grid sm:grid-cols-1 md:grid-cols-2 mt-8 sm:p-10 md:p-20 justify-items-center sm:mx-10 md:mx-60 border-b border-white">
                <div class="text-white">
                    <a href="">
                        <img class="w-72  " src="{{'assets/images/logo/logo1.png'}}" alt="">
                    </a>
                </div>
                <div class="text-white">
                    <a href="">
                        <img class="w-72" src="{{'assets/images/logo/logo3.png'}}" alt="">
                    </a>
                </div>
            </div>
            </div>
        </div>
        <div class="vision-container sm:mx-10 md:mx-20 lg:mx-20 grid sm:grid-rows-4 md:grid-rows-2 lg:grid-rows-2 grid-flow-col sm:gap-2 md:gap-20 lg:gap-20 text-white sm:p-2 sm:pb-20 md:p-20 lg:p-20 place-items-center">
        <div class="">
            <h5>Company Mission</h5>
            <h1 class="text-4xl">Our mission is to revolutionize manufacturing through state-of-the-art 3D printing technology</h1>
        </div>
        <div class="col-span-1">
            <div class="w-full rounded-3xl bg-cover">
                <img class="rounded-3xl" src="{{'assets/images/images4.jpeg'}}" alt="">
            </div>
        </div>
        <div class="col-span-1">
            <div class=" rounded-3xl bg-cover">
                <img class="rounded-3xl" src="{{'assets/images/images3.jpeg'}}" alt="">
            </div>
        </div>
        <div>
            <h5>Why Choose Us</h5>
            <h1 class="text-4xl">We take one more step ahead than other company, we always keep technology, and commitment to quality in first place.</h1>
        </div>
    </div>
    </div>
    <div class="partner-container text-center sm:pt-20 md:pt-[100px] lg:pt-[100px] sm:pb-20 md:pb-[100px] lg:pb-[100px]">
        <h1 class="text-4xl font-medium">You're in Really Good Company</h1>
        <p class="sm:mx-10 md:mx-[400px] lg:mx-[400px] mt-6">Kesan Corp has positioned it self as a trusted Event Organizier Company to some of the most notable clients in various industries</p>
        <div class="grid grid-rows-2 sm:grid-cols-2 md:grid-cols-6 lg:grid-cols-6 mt-10 sm:mx-10 md:mx-32 lg:mx-32 gap-10 justify-items-center">
            <div><img src="{{'assets/images/logo/logo3.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo1.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo3.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo1.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo3.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo1.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo3.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo1.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo3.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo1.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo3.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo1.png'}}" alt=""></div>
            <div></div>
            <div><img src="{{'assets/images/logo/logo3.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo1.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo3.png'}}" alt=""></div>
            <div><img src="{{'assets/images/logo/logo1.png'}}" alt=""></div>
        </div>
    </div>
    <div class="md:h-[415px] bg-cover" style="background-image: url('{{'assets/images/images6.jpg'}}')">
        <div class="bg-gradient-to-t from-black h-full">
            <div class="sm:p-4 md:p-20 h-[415px] grid sm:grid-rows-1 md:grid-rows-2 content-end sm:mx-0 md:mx-20 pb-20">
                <div class="pb-[100px]">
                    <h1 class="text-white text-left sm:text-xl md:text-2xl lg:text-2xl font-light">So, what are u waiting for?</h1>
                    <h1 class="text-white sm:text-5xl md:text-7xl lg:text-7xl font-bold">Lets make ur event and collaborate with us!</h1>
                    <button type="button" class="button-readmore cursor-pointer mt-4 py-3 w-64 rounded-full bg-[#fff] text-[#000] font-semibold">
                        Contact us
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    ScrollReveal().reveal('.header-container', { duration: 1500, interval:16 });
    ScrollReveal().reveal('.welcome-container', { duration: 1500, interval:16 });
    ScrollReveal().reveal('.business-container', { duration: 1500, interval:16 });
    ScrollReveal().reveal('.vision-container', { duration: 2000, interval:16 });
    ScrollReveal().reveal('.partner-container', { duration: 2000, interval:16 });

    const menubtn = document.getElementById('menu-button');
    const menu = document.getElementById('menu');
    menubtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    })
</script>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</html>