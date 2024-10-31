<div>
    <nav class="absolute navbar container p-3 mx-auto md:p-0">
        <div class="flex items-center justify-between">
            <img class="sm:mx-auto md:mx-auto lg:mx-auto w-28 md:hidden lg:hidden sm:hidden" src="{{asset('assets/images/logo/logo1.png')}}" alt="logo_4">
            {{-- <img id="menu-button" class="w-7 h-7 md:hidden" src="/static_files/svgs/bars-black.svg" alt="menu icon"> --}}
            <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="w-10 h-10 icon icon-tabler icon-tabler-align-left md:hidden" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l10 0" /><path d="M4 18l14 0" /></svg>
        </div>
        <div class="hidden md:block" id="menu">
            <div class="grid grid-cols-1 md:grid-cols-9 sm:-mt-1 md:mt-12 sm:ml-6 md:ml-0 sm:bg-black/80 md:bg-inherit sm:p-2 sm:w-full md:p-0">
                <div class="col-span-4 text-lg">
                    <ul class="justify-end md:p-6 md:flex text-white">
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="{{route('home')}}">Home</a></li>
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="{{route('business')}}">Business</a></li>
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="{{route('events')}}">Events</a></li>
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
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="{{route('news')}}">News</a></li>
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="{{route('about')}}">About</a></li>
                        <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="{{route('home')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<script>
    const menubtn = document.getElementById('menu-button');
    const menu = document.getElementById('menu');
    menubtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    })
</script>