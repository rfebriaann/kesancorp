<div>
    <div class="sm:mx-4 md:mx-20 rounded-2xl text-black sm:pl-0 md:pl-20 sm:pr-0 md:pr-20 pt-8 place-items-center">
        <div class="rounded-2xl bg-red-500 h-[500px] bg-cover bg-center" style="background-image: url({{asset('storage/assets/event_images/' . $data->image)}})">
        </div>

        <div class="mt-10 grid sm:grid-cols-1 md:grid-cols-2 gap-10 sm:mx-10">
            <div>
                <h1 class="text-6xl font-bold">{{$data->event_name}}</h1>
                {{-- <p class="mt-4 text-xl">{{$data->event_detail}}</p> --}}
                <p class="mt-4 text-xl">My Chilhood Dream</p>
            </div>
            <div>
                <div class="grid grid-cols-2 border-b pb-4">
                    <div>
                        <span><p>Location :</p></span>
                        <span><p class="fo nt-semibold">One Street Food, Jl. Pemuda, Pekanbaru</p></span>
                    </div>
                    <div>
                        <span><p>Date :</p></span>
                        <span><p class="font-semibold">{{ $data->event_date }}</p></span>
                    </div>
                </div>
                <p class="mt-4">{{$data->event_detail}}</p>
            </div>
        </div>
    </div>
    <div class="sm:mx-5 md:mx-20 lg:mx-40 sm:p-2 sm:mt-20 md:mt-10 lg:mt-10">
        <div>
           <h1 class="text-4xl">Create the best live experiences for your audience with us!</h1>
        </div>
        <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 pb-20 gap-5 mt-10">
             @foreach ($images as $image)
                <div class="bg-cover bg-center h-48 w-82" style="background-image: url({{asset('storage/assets/gallery_images/' . $image->image)}})"></div>
                {{-- <img class=" bg-cover" src="{{asset('storage/assets/gallery_images/' . $image->image)}}" alt=""> --}}
            @endforeach
        </div>
    </div>
    {{-- <div class="grid sm:grid-rows-3 md:grid-rows-1 sm:grid-cols-1 md:grid-cols-3 gap-3">
        <div class="row-span-1 bg-red-500 h-[500px] bg-cover " style="background-image: url({{'/assets/images/images7.jpg'}})"></div>
        <div class="grid grid-cols-2 grid-rows-2 gap-4">
            <div class="col-span-2 bg-red-500 h-[243px] bg-cover " style="background-image: url({{'/assets/images/images8.jpg'}})"></div>
            <div class="bg-red-500 h-[242px] bg-cover" style="background-image: url({{'/assets/images/images9.jpg'}})"></div>
            <div class="bg-red-500 h-[242px] bg-cover" style="background-image: url({{'/assets/images/images10.jpg'}})"></div>
        </div>
        <div class="row-span-1 bg-red-500 h-[500px] bg-cover " style="background-image: url({{'/assets/images/images6.jpg'}})"></div>
    </div> --}}
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
</div>
