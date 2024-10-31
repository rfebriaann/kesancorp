<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    
    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        /* height: 300px; */
    }
    
    .container-box{
        transition: opacity 0.6s ease;
    }
    .box:hover :not(:hover) {
        opacity: 0.4;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
    }

  </style>
<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="welcome-container text-center pt-[100px] pb-[100px]">
        <h1 class="text-4xl font-medium">Welcome to Kesan Corp <br> Your Partner in Event Organizier</h1>
        <p class="sm:mx-10 md:mx-40 lg:mx-40 mt-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto est, ex quasi accusamus voluptate sed modi obcaecati maiores ipsa similique, perspiciatis, earum pariatur? Quod dignissimos harum voluptatibus eligendi, iure facilis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, iste. Corrupti a dolores dicta id unde esse iure cum. Eius quod ut incidunt repudiandae sequi obcaecati beatae qui eveniet dignissimos?lorem</p>
    </div>
    <div class=" bg-[#0A0F19]">
        <div class="business-container bg-cover bg-fixed overflow-y-scroll" style="background-image: url({{'assets/images/background.jpeg'}})">
            <div class=" pt-20 bg-gradient-to-t from-[#0A0F19] to-[#0A0F19]/50 justify-items-center">
                <h1 class="text-4xl font-semibold text-white text-center">Business Units of KesanCorp</h1>
                <p class="font-thin text-white text-center sm:mx-10 md:mx-40 lg:mx-40 mt-4 text-lg">As time goes by, we are committed to continuing to grow and develop through developing innovative products and services that will provide more value for consumers through 8 subholdings operating in different industrial fields.</p>
            <div class="flex flex-wrap mx-32 justify-center mt-6">
                @foreach ($business as $busines)
                    <div class="flex justify-center items-center m-4 h-[400px] w-[400px]">
                        <img class="object-contain w-96" src="{{asset('storage/assets/busines_images/' . $busines->image)}}" alt="">
                    </div>
                @endforeach
            </div>
            </div>
        </div>

        {{-- @foreach ($categories as $category)
            <div class="flex flex-col justify-start items-start">
                @foreach($category->projects as $project)
                <div class="swiper mySwiper">
                    <div class="sm:mx-10 md:mx-40 lg:mx-40 text-white">
                    </div>
                    <div class="swiper-wrapper flex gap-5 justify-start items-start">
                        <div class="flex flex-col">
                            <h1 class="text-4xl text-white">{{$category->name}}</h1>
                        <div class="swiper-slide">
                        <div class="flex">
                            <div class="group opacity-100 grayscale hover:grayscale-0 *:hover:opacity-100 bg-cover bg-center flex justify-center items-center  transition duration-300 ease-in-out" style="background-image: url({{asset('storage/assets/project_images/' . $project->project_image)}})">
                                <img class="opacity-0 object-contain size-52 transition duration-300 ease-in-out" src="{{asset('storage/assets/project_logo/' . $project->logo_image)}}" alt="">
                            </div>
                            </div>
                    </div>
                </div>
                @endforeach
                <div class="swiper-pagination"></div>
                </div>
            </div>
        @endforeach --}}
    
        
        @foreach($categories as $category)
        <div class="container">
            <div class="sm:mx-10 md:mx-40 lg:mx-40">
                <h1 class="text-4xl text-white">{{$category->name}}</h1>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper flex gap-4">
                    @foreach($category->projects as $project)
                    <div class="swiper-slide box">
                        <div class="group container-box bg-cover bg-center flex justify-center items-center " style="background-image: url({{asset('storage/assets/project_images/' . $project->project_image)}})">
                            <img class="opacity-0 object-contain size-52" src="{{asset('storage/assets/project_logo/' . $project->logo_image)}}" alt="">
                        </div>
                    </div>
                    @endforeach
                    {{-- </div> --}}
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="partner-container sm:mx-10 md:mx-48 lg:mx-48 sm:pt-20 md:pt-[80px] lg:pt-[80px]">
        <div class="p-10 text-left">
            <h1 class="text-4xl font-medium">Why choose us as a business partner?</h1>
            <p class="mt-6">Kesan Corp has positioned it self as a trusted Event Organizier Company to some of the most notable clients in various industries</p>
        </div>
        <div class="flex flex-wrap mx-22 justify-center mt-6">
            @foreach ($clients as $client)
                 <div class="flex justify-center items-center m-4 h-[170px] w-[170px]">
                    <img class="object-contain w-36" src="{{asset('storage/assets/clients_images/' . $client->image)}}" alt="">
                </div>
            @endforeach
        </div>
    </div>
    <div class="partner-container sm:mx-10 md:mx-48 lg:mx-48">
        <div class=" border-t p-10 text-left">
            <h1 class="text-4xl font-medium">Latest News</h1>
            <p class="mt-6">Kesan Corp has positioned it self as a trusted Event Organizier Company to some of the most notable clients in various industries</p>
        </div>
        <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 pb-20 sm:gap-10 md:gap-0 lg:gap-0 text-left">
            @foreach ($news as $new)
                <a href="{{route('news.show.{id}', $new->id)}}" class="">
                        <div class="w-[320px] h-[420px] rounded-3xl bg-cover bg-center" style="background-image: url({{asset('storage/assets/new_images/' . $new->image)}})">
                                <div class="relative bg-gradient-to-t from-black/100 hover:to-white/30 transition ease-in-out delay-50 w-full h-full rounded-3xl">
                                    <div class="absolute inset-x-0 bottom-0 p-4">
                                        <p class=" text-left text-black"><span class="bg-[#08A68C] text-sm leading-8 text-white font-medium  rounded-2xl px-4 p-1">{{ucwords(strtolower($new->date))}}</span></p>
                                        <h1 class="text-2xl text-white line-clamp-2">{{$new->title}}</h1>
                                    </div>
                                </div>
                        </div>
                </a>
            @endforeach
        </div>
    </div>
    <div class="md:h-[415px] bg-cover" style="background-image: url('{{'assets/images/images6.jpg'}}')">
        <div class="bg-gradient-to-t from-black h-full">
            <div class="sm:p-4 md:p-20 h-[415px]">
                <h1 class="text-white text-left sm:text-xl md:text-2xl lg:text-2xl font-light">So, what are u waiting for?</h1>
                <h1 class="text-white sm:text-5xl md:text-7xl lg:text-7xl font-bold">Lets make ur event and collaborate with us!</h1>
                {{-- <button type="button" class="button-readmore cursor-pointer mt-4 py-3 w-64 rounded-full bg-[#fff] text-[#000] font-semibold">
                    Contact us
                </button> --}}
                <a href="https://wa.me/6285161762468" target="_blank" class="inline-block mt-4 py-3 px-20  rounded-full bg-[#fff] text-[#000] font-semibold">
                    Contact us
                </a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: false,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 0,
        slideShadows: true,
      },
      loop:false,
    //   pagination: {
    //     el: ".swiper-pagination",
    //   },
    });
  </script>
<script>
    let defaultTransform = 0;
function goNext() {
    defaultTransform = defaultTransform - 398;
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);
function goPrev() {
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 398;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);

</script>
