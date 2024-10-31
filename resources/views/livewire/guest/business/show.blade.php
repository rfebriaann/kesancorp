<div>
    <div class="h-96 overflow-y-scroll bg-cover bg-fixed" style="background-image: url('{{'/assets/images/images6.jpg'}}')">
      <div class="h-full bg-gradient-to-r from-black/100 to-black/70 flex items-center justify-center">
        <div class="sm:mx-20 md:mx-60 mt-20">
            <h1 class="text-white sm:text-5xl md:text-7xl font-bold">{{$title->business_name}}.</h1>
        </div>
      </div>
    </div>
    <div class="sm:mx-5 md:mx-20 lg:mx-40 sm:p-2 sm:mt-20 md:mt-10 lg:mt-10">
        <div>
           <h1 class="text-4xl">Create the best live experiences for your audience with us!</h1>
        </div>
        <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 pb-20">
            @foreach ($datas as $data)
            
                <a href="{{route('events.show.{id}', $data->id)}}">
                    <div class="w-[350px] h-[500px] mt-8 border p-4 rounded-3xl">
                        <div class="rounded-t-2xl bg-cover bg-center h-72 w-full" style="background-image: url({{asset('storage/assets/project_images/' . $data->project_image)}})"></div>
                        {{-- <img class="rounded-t-2xl bg-cover h-72 w-full" src="{{asset('storage/assets/project_images/' . $data->project_image)}}" alt=""> --}}
                        <div class="mx-3">
                            <h1 class="text-2xl font-bold mt-3">{{$data->project_name}}</h1>
                            <p class="line-clamp-5 mt-3">{{$data->project_detail}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
