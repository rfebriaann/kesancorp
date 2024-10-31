<div>
  <div class="h-96 overflow-y-scroll bg-cover bg-fixed" style="background-image: url('{{'assets/images/images7.jpg'}}')">
      <div class="h-full bg-gradient-to-r from-black/100 to-black/70 flex items-center justify-center">
        <div class="sm:mx-20 md:mx-60 mt-20">
          <h1 class="text-white sm:text-5xl md:text-7xl font-bold">Our Brand</h1>
        </div>
      </div>
    </div>
    <div class="vision-container sm:mx-10 md:mx-20 lg:mx-20 text-black sm:p-2 sm:pb-20 md:p-20 lg:p-20 place-items-center">
        <div class="">
            <h5>Company Mission</h5>
            <h1 class="text-4xl">Our mission is to revolutionize manufacturing through state-of-the-art 3D printing technology</h1>
        </div>
        <div class="first-paragraph mt-4">
        <p>Tancorp Group merupakan perusahaan induk Indonesia yang bertumbuh secara eksponensial dari tahun ke tahun. Kini kami telah bertransformasi menjadi perusahaan holding nasional terbesar di Indonesia yang memiliki 8 perusahaan subholding yang bergerak di berbagai bidang industri. Mulai dari, industri, distribusi, properti, perhotelan, makanan & minuman, kesehatan & kecantikan, bisnis jaringan, serta kafe & restoran</p>
     </div>
    </div>
     <div class="partner-container text-center sm:pb-20 md:pb-[100px] lg:pb-[100px]">
        <div class="flex flex-wrap mx-20 justify-center">
            @foreach ($business as $busines)
            <a class="hover:scale-105 transition ease-in-out delay-150" href="{{route('business.show.{id}', $busines->id)}}">
              <div class="flex justify-center items-center">
                <img class="object-contain w-80" src="{{asset('storage/assets/busines_images/' . $busines->image)}}" alt="">
              </div>
            </a>
            @endforeach
        </div>
    </div>
</div>