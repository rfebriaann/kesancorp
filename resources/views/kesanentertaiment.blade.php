<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
</head>
<style>
    body {
        background-color: #0E0E0E;
        /* background-color: white; */
        color: #fff;
        margin: 0;
    }
    .slider ul {
        padding: 0;
        list-style-type: none;
        display: flex;
        width: max-content;
        animation: runSlider 40s linear infinite;
    }

    .slider-text ul {
        padding: 0;
        list-style-type: none;
        display: flex;
        width: max-content;
        animation: runSlider 15s linear infinite;
    }

    .slider video {
        width: 310px;
        height: 340px;
        border-radius: 20px;
        object-fit: cover;
    }
    .slider iframe {
        width: 310px;
        height: 340px;
        border-radius: 20px;
        object-fit: cover;
        position: relative;
  overflow: hidden;
    }

    .slider img{
        /* height: 90px; */
        width: 310px;
        height: 340px;
        border-radius: 20px;
        /* margin-right: 20px; */
        object-fit: cover;

    }

    .slider li {
        border-radius: 20px;
        background-color: #292a2e;
        width: 300px;
        height: 340px;
        letter-spacing: 1px;
        display: flex;
        justify-content: start;
        align-items: center;
        width: 275px;
        /* padding: 10px 10px 10px 10px; */
        margin-right: 35px;
    } 

    .slider-text li{
        /* background-color: #292a2e; */
        /* width: 300px; */
        display: flex;
        justify-content: start;
        align-items: center;
        margin-right: 10px;
        color: #0e0e0e;
    }

    .slider-text{
        overflow: hidden;
    }

    .slider {
        overflow: hidden;
        /* margin-top: 200px; */
    }

     @keyframes runSlider{
        from {
            transform: translateX(0);
        } to {
            transform: translateX(calc(-310px * 9));
        }
     }

     .highlight-text {
        text-shadow: 0px 0px 25px rgb(253 156 81 / 0.8);
     }

     .button-readmore {
        box-shadow: 3px 5px #E44528;
     }

     .business-card:hover {

        box-shadow: 0px 5px #078772,
        0px 14px #066757;
        /* padding: 20px; */
     }

     .slider-text::before,
     .slider-text::after{
        background: linear-gradient(to right, rgb(21, 21, 21) 0%, rgba(255,255,255,0) 100%);
        /* background: linear-gradient(to right, rgba(255, 255,255,1) 0%, rgba(255,255,255,0) 100%); */
        content: '';
        height: 263.5%;
        position: absolute;
        width: 15%;
        z-index: 2;
     }

     .slider-text::before{
        left: 0;
        top: 0;
     }
     .slider-text::after{
        right: 0;
        top: 0;
        transform: rotateZ(180deg);
     }
     .navbar::before,
     .navbar::after{
        z-index: 100;
     }
     /* .navbar {
        z-index: 3;
     } */

     /* .button-readmore:hover {
        box-shadow: 3px 5px #fed3cb;
     } */
</style>

<body>
     <nav class="navbar container p-3 mx-auto md:p-0">
        <div class="flex items-center justify-between">
            <img class="sm:mx-auto md:mx-auto lg:mx-auto w-28 md:hidden lg:hidden sm:hidden" src="{{asset('assets/images/logo/logo1.png')}}" alt="logo_4">
            {{-- <img id="menu-button" class="w-7 h-7 md:hidden" src="/static_files/svgs/bars-black.svg" alt="menu icon"> --}}
            <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="w-10 ml-5 h-10 icon icon-tabler icon-tabler-align-left md:hidden" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l10 0" /><path d="M4 18l14 0" /></svg>
        </div>
        <div class="hidden md:block" id="menu">
            <div class="grid grid-cols-1 md:grid-cols-9 mt-12 ">
                <div class="col-span-4 text-lg md:border-y border-y-[#F9A140]">
                    <ul class="justify-end  md:p-6 md:flex">
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
                <div class="col-span-4 md:border-y border-y-[#F9A140]">
                    <ul class="justify-start text-lg md:p-6 md:flex">
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="#">Company</a></li>
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="#">Services</a></li>
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="mx-auto">
        <div class="jumbotorn grid justify-items-center ">
            <h1 class="sm:text-4xl md:text-6xl lg:text-8xl tracking-tight font-serif font-medium text-center text-white mt-20">The world’s destination <br class=""> for design</h1>
            <p class="sm:text-[16px] sm:pr-4 sm:pl-4 md:pr-12 md:pl-12 md:text-[18px] lg:text-xl mt-6 sm:font-light  md:font-medium text-center text-white">Get inspired by the work of millions of top-rated designers & agencies around the world.</p>
            <button type="button" class="button-readmore cursor-pointer mt-6 py-3 w-32 rounded-full bg-[#F9A140] text-[#fff] font-semibold ring-2 ring-[#E44528] transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110">
                Read more
            </button>
        </div>
    <div class="slider mt-12">
        <ul>
            <li>
                 <img style="filter: grayscale(90%);" src="{{asset('assets/images/1.png')}}" alt=""> 
            </li>
            <li>
               {{-- <iframe 
                src="https://www.youtube.com/embed/5tALTJYkqaw?autoplay=1&mute=1&loop=1&color=white&controls=0&modestbranding=1&playsinline=1&rel=0"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;"
                allowfullscreen="allowfullscreen"
                mozallowfullscreen="mozallowfullscreen" 
                msallowfullscreen="msallowfullscreen" 
                oallowfullscreen="oallowfullscreen" 
                webkitallowfullscreen="webkitallowfullscreen"
                >
            </iframe> --}}
            <iframe width="560" height="315" src="https://www.youtube.com/embed/2AJXJZ0t3m8?si=fRSos401l9a8S7RM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            {{-- <iframe width="950" height="534" src="https://www.youtube.com/embed/2AJXJZ0t3m8" title="pov: it&#39;s 2010s and you are on roadtrip ~nostalgia playlist" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
                 {{-- <video width="310" height="340" autoplay loop muted>
                    <source src="{{asset('assets/videos/video4.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video> --}}
            </li>
            <li>
                 <img style="filter: grayscale(100%);" src="{{asset('assets/images/2.png')}}" alt=""> 
            </li>
            <li>
                 <img src="{{asset('assets/images/3.png')}}" alt=""> 
            </li>
            <li>
                 <img src="{{asset('assets/images/4.png')}}" alt=""> 
            </li>
            <li>
                <video width="310" height="340" autoplay loop muted>
                    <source src="{{asset('assets/videos/video3.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/vNHH2sna2pI?si=xMORzn_J0UUGDnhs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
            </li>
            <li>
                 <img style="filter: grayscale(100%);" src="{{asset('assets/images/5.png')}}" alt=""> 
            </li>
            <li>
                 <video width="310" height="340" autoplay loop muted>
                    <source src="{{asset('assets/videos/video3.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </li>
            <li>
                <img src="{{asset('assets/images/6.png')}}" alt=""> 
            </li>


            <li>
                 <img style="filter: grayscale(90%);" src="{{asset('assets/images/1.png')}}" alt=""> 
            </li>
            <li>
                 <video width="310" height="340" autoplay loop muted>
                    <source src="{{asset('assets/videos/video4.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </li>
            <li>
                 <img style="filter: grayscale(100%);" src="{{asset('assets/images/2.png')}}" alt=""> 
            </li>
            <li>
                 <img src="{{asset('assets/images/3.png')}}" alt=""> 
            </li>
            <li>
                 <img src="{{asset('assets/images/4.png')}}" alt=""> 
            </li>
            <li>
                   <video width="310" height="340" autoplay loop muted>
                    <source src="{{asset('assets/videos/video3.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </li>
            <li>
                 <img style="filter: grayscale(100%);" src="{{asset('assets/images/5.png')}}" alt=""> 
            </li>
            <li>
                 <video width="310" height="340" autoplay loop muted>
                    <source src="{{asset('assets/videos/video3.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </li>
            <li>
                <img src="{{asset('assets/images/6.png')}}" alt=""> 
            </li>
        </ul>
    </div>
    <div class=" bg-[#08A68C] md:mt-20 sm:mt-14 sm:pr-26 sm:pl-26 sm:pt-8 sm:pb-8 md:pr-32 md:pl-32 md:pt-14 md:pb-14 rounded-tl-[40px] rounded-tr-[40px]">
        <h1 class="text-6xl tracking-tight font-serif text-left text-white">We create worth-sharing contents <br> <font class="underline decoration-[9px] decoration-[#FD8BA5]">and experiences for a to enjoy.</font></h1>
        <p class="mt-4 text-xl">Find your worth-sharing contents and experiences from our brands</p>
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10 mt-12">
            <div class="bg-[#FD8BA5] rounded-3xl">
            <div class=" hover:rotate-[-3deg] p-5 transition ease-in-out delay-150 bg-[#0E0E0E] rounded-3xl hover:shadow-lg shadow-white-500/40">
                <a href="#">
                            <img class="rounded-t-2xl grayscale hover:grayscale-0 transition ease-in-out delay-150" src="{{asset('assets/images/images2.jpg')}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="font-serif mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            {{-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a> --}}
                            <button type="button" class="button-readmore cursor-pointer mt-6 py-3 w-32 rounded-full bg-[#F9A140] text-[#fff] font-semibold ring-2 ring-[#E44528] transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110">
                                Read more
                            </button>
                 </div>
            </div>
            </div>
            <div class="bg-[#FD8BA5] rounded-3xl">
                <div class="hover:rotate-[3deg] p-5 transition ease-in-out delay-150 bg-[#0E0E0E] rounded-3xl hover:shadow-lg shadow-white-500/40">
                <a href="#">
                            <img class="rounded-t-2xl grayscale hover:grayscale-0 transition ease-in-out delay-150" src="{{asset('assets/images/images1.jpeg')}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="font-serif mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            {{-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a> --}}
                            <button type="button" class="button-readmore cursor-pointer mt-6 py-3 w-32 rounded-full bg-[#F9A140] text-[#fff] font-semibold ring-2 ring-[#E44528] transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110">
                                Read more
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-text text-red text-3xl font-semibold bg-[#FD8BA5] p-5">
        <ul>
            <li>
                 <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                 <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                 <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                 <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                <h5>NETWORK IS A KEY</h5>
            </li>


            <li>
                  <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5>NETWORK IS A KEY</h5>
            </li>
            <li>
                 <h5>NETWORK IS A KEY</h5>
            </li>
        </ul>
    </div>
    <div class="bg-[#0E0E0E] md:mt-0 sm:mt-14 sm:pr-26 sm:pl-26 sm:pt-8 sm:pb-8 md:pr-32 md:pl-32 md:pt-14 md:pb-14">
        <h1 class="text-6xl mt-12 tracking-tight font-serif text-left text-white font-semibold">Embodying Our Vision and Mission</h1>
        <div class="grid sm:grid-rows-3 md:grid-rows-3 lg:grid-rows-3 grid-flow-dense gap-0 p-8 mt-10">
                <div class="grid grid-cols-2 h-40">
                    <h1 class="text-4xl h-full font-serif text-[#F9A140] font-semibold">Our Vision</h1>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, tempore iste officia sit ex ipsam quos nam dicta dolore natus, facere nisi sequi iure delectus dolor iusto. Cupiditate, ducimus reiciendis!</p>
                </div>
                <div class="grid grid-cols-2 h-40">
                    <h1 class="text-4xl h-full font-serif text-[#F9A140] font-semibold">Our Vision</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, tempore iste officia sit ex ipsam quos nam dicta dolore natus, facere nisi sequi iure delectus dolor iusto. Cupiditate, ducimus reiciendis!</p>
                </div>
           
                <div class="grid grid-cols-1">
                    <h1 class="text-4xl text-center font-serif text-[#F9A140] font-semibold">Meet Our Team</h1>
                    <div class="grid grid-cols-2 gap-10 mt-10">
                        <div class="bg-red-500 h-24">
                            <img class="object-cover h-40 w-full" src="{{asset('assets/images/images3.jpeg')}}" alt="">
                        </div>
                        <div class="">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic earum veritatis a illum quibusdam quis natus, consequuntur sit deserunt nesciunt recusandae</p>
                            {{-- <a href="" class="text-[#f9a140] text-2xl">Meet our team</a> --}}
                            <a href="#" class="inline-flex text-xl items-center px-5 py-2.5 font-normal text-[#FD8BA5]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4" /></svg>
                                 Meet our team
                            </a>
                        </div>
                    </div>
                </div>
        </div>
        <div class="rotate-[-6deg] bg-[#08A68C] rounded-[180px]">
            <div class="rotate-[6deg] bg-[#FD8BA5] mt-20 rounded-3xl">
                <div class="grid grid-cols-2">
                    <div class="p-20">
                        <h1 class="text-6xl font-serif text-black font-semibold">About us</h1>
                        <p class="mt-4 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptates tempore, saepe rerum corporis ad, dolorum perferendis ipsam incidunt harum quasi iste similique voluptate. Aliquam dolorem aperiam totam at nobis!</p>
                    </div>
                    <div class="bg-gradient-to-r from-[#FD8BA5] to-[#0E0E0E] via-">
                        <img class="rounded-r-3xl mix-blend-multiply" src="{{asset('assets/images/images4.jpeg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="bg-[#f9a140] p-20 rounded-tl-[40px] rounded-tr-[40px] mt-20">
        <h1>footer</h1>
    </div> --}}
    <footer>
        <div class="container bg-[#000] mt-20 rounded-tr-[40px] rounded-tl-[40px]">
            <div class="grid grid-cols-2">
                <div>
                    <img class="" src="{{asset('assets/images/logo/logo2.png')}}" alt="logo_4">
                </div>
                <div class="p-20">
                    <h5 class="text-xl">Follow us on</h5>
                    <div class="grid grid-row-3 gap-4">
                        <div>
                            <a href="" class="text-6xl underline underline-offset-8 decoration-2">INSTAGRAM</a>
                        </div>
                        <div>
                            <a href="" class="text-6xl underline underline-offset-8 decoration-2">TIKTOK</a>
                        </div>
                        <div>
                            <a href="" class="text-6xl underline underline-offset-8 decoration-2">X</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
 <script>
        const menubtn = document.getElementById('menu-button');
        const menu = document.getElementById('menu');
        menubtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        })
    </script>
</html>