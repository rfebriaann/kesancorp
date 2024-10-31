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
        /* background-color: #0e0e0e; */
    }
    .container{
        z-index: 2;
        /* height: 400px; */
        width: 300px;
        overflow: hidden;
        position: absolute;
    }
    .container-vision{
        z-index: 2;
        /* height: 400px; */
        /* width: 200px; */
        overflow: hidden;
        position: absolute;
    }
    .slider-text ul {
        padding: 0;
        list-style-type: none;
        display: flex;
        width: max-content;
        animation: runSlider 50s linear infinite;
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
        margin-top: 295px;
    }
     @keyframes runSlider{
        from {
            transform: translateX(0);
        } to {
            transform: translateX(calc(-310px * 9));
        }
     }

     .about-us{
        height: 500px;
     }
    /* .container .card {
        overflow: hidden;
    } */
</style>
<body>
    <div class="text-center">
        <h1 class="sm:text-4xl md:text-6xl lg:text-[230px] tracking-tight font-extrabold text-center text-[#0A82F9] mt-20">Kesan.</h1>
        <p class="text-xl mt-4 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora itaque dolores voluptatibus ipsum labore</p>
    </div>
    
    <div class="flex justify-center mt-20 card">
        <div class="w-64 ">
            <div class="container bg-[#18191E] rounded-3xl rotate-[-13deg]">
                <div class="p-3 h-[500px]">
                    <a href="">
                        <img class="object-cover h-[430px] w-full rounded-2xl" src="{{'assets/images/1.png'}}" alt="">
                    </a>
                    <div class="p-2">
                        <h5 class=" text-white text-2xl font-medium">MyFest 4 - Febby </h5>
                        {{-- <p class="text-[#a7a7a7] font-thin text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus officiis aut quis </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class=" w-64 ">
            <div class="container bg-[#18191E] rounded-3xl -ml-20 mt-14">
                <div class="p-3 h-[500px]">
                    <a href="">
                        <img class="object-cover h-[430px] w-full rounded-2xl" src="{{'assets/images/4.png'}}" alt="">
                    </a>
                    <div class="p-2">
                        <h5 class=" text-white text-2xl font-medium">MyFest 3 - J-Rocks</h5>
                        {{-- <p class="text-[#a7a7a7] font-thin text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus officiis aut quis </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class=" w-64 ">
           <div class="container bg-[#18191E] rounded-3xl rotate-[10deg] -ml-20">
                <div class="p-3 h-[500px]">
                    <a href="">
                        <img class="object-cover  h-[430px] w-full rounded-2xl" src="{{'assets/images/5.png'}}" alt="">
                    </a>
                    <div class="p-2">
                        <h5 class=" text-white text-2xl font-medium">MyFest 3 - For Revenge</h5>
                        {{-- <p class="text-[#a7a7a7] font-thin text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus officiis aut quis </p> --}}
                    </div>
                </div>
            </div>
    </div>
</div>
<div class="slider-text text-red text-3xl font-semibold bg-[#1384F9] p-5">
        <ul>
            <li>
                 <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                 <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                 <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                 <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>


            <li>
                  <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                  <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
            <li>
                 <h5 class="font-bold text-white">NETWORK IS A KEY</h5>
            </li>
        </ul>
    </div>
    <div class="mx-auto h-60 w-full bg-[#0B0A0A]">
    </div>
    <div class="about-us items-center w-full bg-[#0B0A0A]">
        <div class="grid justify-items-center">
            <h1 class="text-[#e38eee] text-center text-4xl font-semibold">Coming Soon</h1>
                <p class="text-white text-2xl w-3/4 items-center text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto sed ad, consectetur facilis consequuntur accusamus cupiditate non minima facere, iusto ducimus cumque exercitationem culpa maxime fuga iure velit. Corporis, dolore.</p>
        </div>
        <div class="flex justify-center mt-40 card">
        <div class="w-64 ">
            <div class="container-vision pl-4 pr-4 border-2  bg-white border-[#e38eee] rounded-full rotate-[-25deg] left-[350px] -mt-10">
                <div class="p-3 ">
                    {{-- <a href="">
                        <img class="object-cover h-[430px] w-full rounded-2xl" src="{{'assets/images/1.png'}}" alt="">
                    </a> --}}
                    <div class="p-2">
                        <h5 class=" text-black text-4xl text-center font-bold">CREATIVE</h5>
                        {{-- <p class="text-[#a7a7a7] font-thin text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus officiis aut quis </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class=" w-64 z-10">
            <div class="container-vision  pl-4 pr-4 border-2 bg-white  shadow-[rgba(0,0,15,0.5)_0px_0px_8px_0px] border-[#e38eee] rounded-full text-center rotate-[10deg] left-[480px]">
                <div class="p-3 ">
                    {{-- <a href="">
                        <img class="object-cover h-[430px] w-full rounded-2xl" src="{{'assets/images/4.png'}}" alt="">
                    </a> --}}
                    <div class="p-2">
                        <h5 class=" text-black text-4xl text-center font-bold">MUSIC</h5>
                        {{-- <p class="text-[#a7a7a7] font-thin text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus officiis aut quis </p> --}}
                    </div>
                </div> 
            </div>
        </div>
        <div class=" w-64 z-0">
           <div class="container-vision pl-4 pr-4 border-2 bg-white border-[#e38eee] rounded-full rotate-[-15deg] -mt-14">
                <div class="p-3 ">
                    {{-- <a href="">
                        <img class="object-cover  h-[430px] w-full rounded-2xl" src="{{'assets/images/5.png'}}" alt="">
                    </a> --}}
                    <div class="p-2">
                        <h5 class=" text-black text-4xl text-center font-bold">EVENT</h5>
                        {{-- <p class="text-[#a7a7a7] font-thin text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus officiis aut quis </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class=" w-64 z-10">
           <div class="container-vision pl-4 pr-4 border-2 bg-white border-[#e38eee] rounded-full rotate-[25deg] right-[470px] shadow-[rgba(0,0,15,0.5)_0px_0px_8px_0px]">
                <div class="p-3 ">
                    {{-- <a href="">
                        <img class="object-cover  h-[430px] w-full rounded-2xl" src="{{'assets/images/5.png'}}" alt="">
                    </a> --}}
                    <div class="p-2">
                        <h5 class=" text-black text-4xl text-center font-bold">PROPERTY</h5>
                        {{-- <p class="text-[#a7a7a7] font-thin text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus officiis aut quis </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class=" w-64 z-20">
           <div class="container-vision pl-4 pr-4 border-2 bg-white border-[#e38eee] rounded-full rotate-[10deg] right-[300px] -mt-10 shadow-[rgba(0,0,15,0.5)_0px_0px_8px_0px]">
                <div class="p-3 ">
                    {{-- <a href="">
                        <img class="object-cover  h-[430px] w-full rounded-2xl" src="{{'assets/images/5.png'}}" alt="">
                    </a> --}}
                    <div class="p-2">
                        <h5 class=" text-black text-4xl text-center font-bold">ENTERTAIMENT</h5>
                        {{-- <p class="text-[#a7a7a7] font-thin text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus officiis aut quis </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="bg-black bg-cover bg-center backdrop-grayscale" style="background-image: url({{'assets/images/images16.jpg'}})">
        <div class="bg-black/85 bg-cover bg-center">
        <div class="mx-72 py-8 border-t border-white/50">
        </div>
        <div class="mx-60 text-white">
            <h1 class="text-5xl font-extrabold text-white">Upcoming Events</h1>
            <div class="grid grid-cols-3 py-10 gap-4">
                <div class=" bg-[#18191E] rounded-3xl">
                    <div class="p-3">
                        <a href="">
                            <img class="object-cover  h-[330px] w-full rounded-2xl" src="{{'assets/images/5.png'}}" alt="">
                        </a>
                        <div class="p-2">
                            <p>20.2023 | Istora Senayan</p>
                            <h5 class=" text-white text-2xl font-medium">MyFest 3 - For Revenge</h5>
                            <a href="" class="inline-block bg-white border-2 border-[#e38eee] text-center font-bold text-black  py-2 px-6 mt-2 rounded-full hover:rotate-[-8deg] hover:scale-105 transition duration-300">See Event</a>
                            {{-- <p class="text-[#a7a7a7] font-thin text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus officiis aut quis </p> --}}
                        </div>
                    </div>
                </div>
                <div class=" bg-[#18191E] rounded-3xl">
                    <div class="p-3">
                        <a href="">
                            <img class="object-cover  h-[330px] w-full rounded-2xl" src="{{'assets/images/1.png'}}" alt="">
                        </a>
                        <div class="p-2">
                            <p>20.2023 | Istora Senayan</p>
                            <h5 class=" text-white text-2xl font-medium">MyFest 3 - For Revenge</h5>
                            <a href="" class="inline-block bg-white border-2 border-[#e38eee] text-center font-bold text-black  py-2 px-6 mt-2 rounded-full hover:rotate-[-8deg] hover:scale-105 transition duration-300">See Event</a>
                            {{-- <p class="text-[#a7a7a7] font-thin text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus officiis aut quis </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-60 text-white" style="background-image: url()">
            <h1 class="text-5xl font-extrabold text-white">Past Events</h1>
            <div class="grid grid-cols-3 py-10 gap-4">
                <div class=" bg-[#18191E] rounded-3xl">
                    <div class="p-3">
                        <a href="">
                            <img class="object-cover h-[330px] w-full rounded-2xl" src="{{'assets/images/5.png'}}" alt="">
                        </a>
                        <div class="p-2">
                            <p>20.2023 | Istora Senayan</p>
                            <h5 class=" text-white text-2xl font-medium">MyFest 3 - For Revenge</h5>
                            <a href="" class="inline-block bg-white border-2 border-[#e38eee] text-center font-bold text-black  py-2 px-6 mt-2 rounded-full hover:rotate-[-8deg] hover:scale-105 transition duration-300">See Event</a>
                            {{-- <p class="text-[#a7a7a7] font-thin text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus officiis aut quis </p> --}}
                        </div>
                    </div>
                </div>
                <div class=" bg-[#18191E] rounded-3xl">
                    <div class="p-3">
                        <a href="">
                            <img class="object-cover  h-[330px] w-full rounded-2xl" src="{{'assets/images/1.png'}}" alt="">
                        </a>
                        <div class="p-2">
                            <p>20.2023 | Istora Senayan</p>
                            <h5 class=" text-white text-2xl font-medium">MyFest 3 - For Revenge</h5>
                            <a href="" class="inline-block bg-white border-2 border-[#e38eee] text-center font-bold text-black  py-2 px-6 mt-2 rounded-full hover:rotate-[-8deg] hover:scale-105 transition duration-300">See Event</a>
                            {{-- <p class="text-[#a7a7a7] font-thin text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus officiis aut quis </p> --}}
                        </div>
                    </div>
                </div>
                <div class=" bg-[#18191E] rounded-3xl">
                    <div class="p-3">
                        <a href="">
                            <img class="object-cover  h-[330px] w-full rounded-2xl" src="{{'assets/images/4.png'}}" alt="">
                        </a>
                        <div class="p-2">
                            <p>20.2023 | Istora Senayan</p>
                            <h5 class=" text-white text-2xl font-medium">MyFest 3 - For Revenge</h5>
                            <a href="" class="inline-block bg-white border-2 border-[#e38eee] text-center font-bold text-black  py-2 px-6 mt-2 rounded-full hover:rotate-[-8deg] hover:scale-105 transition duration-300">See Event</a>
                            {{-- <p class="text-[#a7a7a7] font-thin text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus officiis aut quis </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div>
        <footer class="bg-[#010101] text-white sm:p-2 md:p-20 lg:p-20">
                <div class="sm:mx-10 md:mx-20 lg:mx-20 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                    <div clas>
                        <img src="{{'assets/images/logo/logo1.png'}}" alt="" class="w-52 ">
                    </div>
                    <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                        <div>
                            <h1 class="text-xl font-semibold mb-2">Helpful link</h1>
                            <a href="{{route('home')}}" class="block">Home</a>
                            <a href="{{route('business')}}" class="block">Business</a>
                            <a href="{{route('events')}}" class="block">Events</a>
                            <a href="{{route('news')}}" class="block">News</a>
                            <a href="{{route('about')}}" class="block">About</a>
                            <a href="" class="block">Contact us</a>
                        </div>
                        <div>
                            <h1 class="text-xl font-semibold mb-2">Address</h1>
                            <p>
                                Jl. Pemuda No.59, Tampan, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28291
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-10 mx-20 text-center">
                    <p>© 2024 Kesancorp</p>
                </div>
            </footer>
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