<div>
    <div class="h-96 overflow-y-scroll bg-cover bg-fixed" style="background-image: url('{{'/assets/images/images7.jpg'}}')">
        <div class="h-full bg-gradient-to-r from-black/100 to-black/70 flex items-center justify-center">
            <div class="sm:mx-20 md:mx-60 mt-20">
                <h1 class="text-white sm:text-5xl md:text-7xl font-bold">Our Events.</h1>
            </div>
        </div>
    </div>
    <div class="sm:mx-5 md:mx-20 lg:mx-40 sm:p-2 sm:mt-20 md:mt-10 lg:mt-10">
        <div>
           <h1 class="text-4xl">Create the best live experiences for your audience with us!</h1>
           <div class="flex mt-4 -mb-4">
                <div class="relative w-64">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input
                        type="text"
                        wire:model.live = 'search'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                        placeholder="Search" required="">
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 pb-20">
            @foreach ($events as $event)
                <a href="{{route('events.show.detail.{id}', $event->id)}}">
                    <div class="w-[350px] h-[500px] mt-8 border p-4 rounded-3xl">
                        <div class="rounded-t-2xl bg-cover bg-center h-72 w-full" style="background-image: url({{asset('storage/assets/event_images/' . $event->image)}})">
                            <p class="px-4 text-left py-3 text-black"><span class="bg-[#08A68C] text-sm leading-8 text-white font-medium  rounded-2xl px-4 p-1">{{ucwords(strtolower($event->project->project_name))}}</span></p>
                        </div>
                        {{-- <img class="rounded-t-2xl bg-cover h-72 w-full" src="{{asset('storage/assets/event_images/' . $data->image)}}" alt=""> --}}
                        <div class="mx-3">
                            <h1 class="text-2xl font-bold mt-3">{{$event->event_name}}</h1>
                            <p class="line-clamp-5 mt-3">{{$event->event_detail}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
