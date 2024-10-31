<div>
  <div class="h-96 overflow-y-scroll bg-cover bg-fixed" style="background-image: url('{{'assets/images/images7.jpg'}}')">
      <div class="h-full bg-gradient-to-r from-black/100 to-black/70 flex items-center justify-center">
        <div class="sm:mx-20 md:mx-60 mt-20">
          <h1 class="text-white sm:text-5xl md:text-7xl font-bold">Meet our team</h1>
        </div>
      </div>
    </div>
    <div class="vision-container sm:mx-20 md:mx-40 lg:mx-40 text-black py-10 place-items-center">
        <div class="">
            <h2 class="text-lg">About</h2>
            <h1 class="text-4xl">Our mission is to revolutionize manufacturing through state-of-the-art 3D printing technology</h1>
        </div>
    </div>
     <div class="partner-container text-center ">
        <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 sm:md-10 md:mx-40 lg:mx-40 justify-center gap-8">
            @foreach ($teams as $team)
            <div class="">
                <div class="h-[400px] w-full bg-cover bg-center sm:mx-20 md:mx-0 lg:mx-0 " style="background-image: url({{asset('storage/assets/team_images/' . $team->image)}})"></div>
                <p class="text-left mt-4 font-semibold text-2xl">{{$team->name}}</p>
                <p class="text-left ">{{$team->position->name}}</p>
            </div>
            @endforeach
        </div>
    </div>
    <div class="sm:mx-2 md:mx-20 sm:pl-10 md:pl-20 sm:pr-10 md:pr-20 pb-14 mt-10">
        <h1 class="text-2xl font-medium">Meet Byon Board Member</h1>
        <div class="sm:p-4">
            <div class="grid grid-cols-2">
                @foreach ($allteams as $team)
                <div class="border-b border-black p-4"><h1 class="text-xl font-medium">{{$team->name}}</h1></div>
                <div class="border-b border-black p-4">{{$team->position->name}}</div>

                @endforeach
            </div>
        </div>
    </div>
</div>