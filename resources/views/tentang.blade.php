<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/scrollreveal"></script>
  {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
</head>
<body>
    <div class=" overflow-y-scroll bg-cover bg-fixed" style="background-image: url('{{'assets/images/images14.jpg'}}')">
        <div class="h-full bg-gradient-to-r from-black/100 to-black/70" >
            <nav class="navbar container p-3 mx-auto md:p-0">
                <div class="flex items-center justify-between">
                    <img class="sm:mx-auto md:mx-auto lg:mx-auto w-28 md:hidden lg:hidden sm:hidden" src="{{asset('assets/images/logo/logo1.png')}}" alt="logo_4">
                    {{-- <img id="menu-button" class="w-7 h-7 md:hidden" src="/static_files/svgs/bars-black.svg" alt="menu icon"> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="w-10 h-10 icon icon-tabler icon-tabler-align-left md:hidden" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l10 0" /><path d="M4 18l14 0" /></svg>
                </div>
                <div class="hidden md:block" id="menu">
                    <div class="grid grid-cols-1 md:grid-cols-9 mt-12 ">
                        <div class="col-span-4 text-lg">
                            <ul class="justify-end md:p-6 md:flex text-white">
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="google.com" target="_blank">Home</a></li>
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="#">Products</a></li>
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:ml-10"><a href="#">Pricing</a></li>
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
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="#">Company</a></li>
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="#">Services</a></li>
                                <li class="p-2 py-3 border-b md:py-0 md:border-0 md:mr-10"><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="sm:mx-20 md:mx-60 grid sm:grid-rows-1 md:grid-rows-2 sm:p-20 md:p-20 lg:p-20 justify-center place-items-center content-center">
                
                <div class="">
                    
                </div>
                <div class="">
                    <div class="">
                        <h1 class="text-white sm:text-5xl md:text-7xl font-bold">Tentang Kesan Corp.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="first-paragraph sm:mx-5 md:mx-20 sm:p-10 md:p-20">
        <p>Tancorp Group merupakan perusahaan induk Indonesia yang bertumbuh secara eksponensial dari tahun ke tahun. Kini kami telah bertransformasi menjadi perusahaan holding nasional terbesar di Indonesia yang memiliki 8 perusahaan subholding yang bergerak di berbagai bidang industri. Mulai dari, industri, distribusi, properti, perhotelan, makanan & minuman, kesehatan & kecantikan, bisnis jaringan, serta kafe & restoran</p>
        <div class="p-10 bg-gray-100 mt-10 mb-10 border-l-4 border-black">
            <p>Memiliki lebih dari 100 brand aktif yang dikelola oleh 41 business unit (BU) dengan jumlah karyawan yang mencapai lebih dari 24.000 tenaga kerja. Melalui tagline “For a Better Human Life”, Kami ingin mengakomodasi kebutuhan masyarakat Indonesia dalam mencapai kehidupan yang lebih baik. Hal ini sesuai dengan visi dan misi yang menjadi pedoman bagi kami untuk menyejahterakan Bangsa Indonesia.</p>
        </div>
        <p>Perjalanan kami dimulai sejak 43 tahun lalu, tepatnya pada 1979. Saat itu, Hermanto Tanoko, founder kami, mengemban amanah untuk mengembangkan PT Avia Avian atau yang dikenal dengan produknya, yakni, Avian Paint. Bersama timnya, ia pun sukses mengembangkan bisnis tersebut hingga menjadi salah satu produsen cat nasional terbesar yang mampu bersaing dan mendominasi pasar ditengah maraknya produsen cat internasional di Indonesia.</p>
        <p class="mt-6">Seiring dengan berjalannya waktu, Hermanto Tanoko bertranformasi menjadi sosok yang inovatif, percaya diri, tangguh, dan penuh integritas. Ia pun mulai memberanikan diri untuk mengembangkan kemampuannya dengan melahirkan beberapa subholding yang bergerak di berbagai bidang industri. Mulai dari property, consumer goods, distribusi, hospitality, retail, healthy and beauty, makanan dan minuman, hingga bisnis jaringan. Hal ini dilakukan demi memenuhi kebutuhan masyarakat Indonesia dari hulu hingga ke hilir.</p>
        <p class="mt-6">
            Berkat langkah inovatifnya, Ia pun sukses membawa beberapa subholding tersebut, menjadi yang terdepan di bidangnya. Berbekal kesuksesan tersebut, Hermanto Tanoko pun mulai berinisiatif mendirikan perusahaan induk yang mampu mensupport serta menaungi brand-brand yang dikelola oleh delapan subholding tersebut. Tepat pada 28 November 2015 lahirlah Tancorp Abadi Nusantara.
        </p>
        <div class="mt-10">
            <h1 class="text-4xl font-medium">Meet our team</h1>
            <img class="mt-6 grayscale" src="{{'assets/images/images15.jpeg'}}" alt="">
        </div>
    </div>
</body>
<script>
    ScrollReveal().reveal('.first-paragraph', { duration: 1500 });

    const menubtn = document.getElementById('menu-button');
    const menu = document.getElementById('menu');
    menubtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    })
</script>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</html>