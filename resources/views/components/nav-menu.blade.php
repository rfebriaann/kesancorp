<div>
    <div class="header-container overflow-y-scroll bg-cover bg-fixed" style="background-image: url('{{'assets/images/images5.jpg'}}')">
        <div class="h-full bg-gradient-to-t from-black">
            <nav :class="{'flex': open, 'hidden': !open}" class="navbar container p-3 mx-auto md:p-0">
                <div class="flex items-center justify-between">
                    <img class="sm:mx-auto md:mx-auto lg:mx-auto w-28 md:hidden lg:hidden sm:hidden" src="{{asset('assets/images/logo/logo1.png')}}" alt="logo_4">
                    {{-- <img id="menu-button" class="w-7 h-7 md:hidden" src="/static_files/svgs/bars-black.svg" alt="menu icon"> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="w-10 h-10 icon icon-tabler icon-tabler-align-left md:hidden" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l10 0" /><path d="M4 18l14 0" /></svg>
                </div>
                <div @click.away="open = false" x-data="{ open: false }" class="hidden md:block" id="menu">
                    <div class="grid grid-cols-1 md:grid-cols-9 mt-12 ">
                        <div class="col-span-4 text-lg">
                            <ul class="justify-end md:p-6 md:flex text-white">
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="{{route('home')}}">Home</a></li>
                                {{-- <li class="p-1 py-3 border-b md:py-0 md:border-0 md:ml-10">
                                     <button @click="open = !open" class="">
                                        <span>Business</span>
                                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </li> --}}
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="{{route('business')}}">Business</a></li>
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="{{route('events')}}">Events</a></li>
                            </ul>
                            {{-- <div x-show="open" x-transition:enter="transition ease-out duration-100"  x-transition:leave="transition ease-in duration-75" class="absolute -mt-[30px] left-[380px] w-full origin-top-left md:w-48">
                                <div class="px-2 py-2 text-white">
                                    <a class="block px-4 py-2 mt-2 text-sm font-normal border-b border-white" href="#">Kesan Land</a>
                                </div>
                            </div> --}}
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
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="{{route('news')}}">News</a></li>
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="{{route('about')}}">About</a></li>
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="{{route('home')}}">Contact us</a></li>
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
</div>
<script>
    const menubtn = document.getElementById('menu-button');
    const menu = document.getElementById('menu');
    menubtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    })
</script>