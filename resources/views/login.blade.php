<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
</head>
<body>
    <div class="grid grid-cols-3 h-screen p-10 gap-10">
        <div class="grid grid-rows-1">
            <div class="flex flex-col items-left justify-center">
                <img class="w-[120px]" src="{{'assets/images/logo/logo1.png'}}" alt="">
                <h1 class="text-5xl font-bold p-2">admin login</h1>
                <div class="p-2 w-full">
                    <form action="">
                        {{-- <div class="mt-4">
                            <input type="text" class="border h-12 p-4 border-[#d4d4d4] rounded-2xl w-full" placeholder="masukkan email">
                        </div> --}}
                        <div class="mt-4">
                            <div class="w-full">
                                <div class="relative h-12 w-full min-w-[200px]">
                                    <div class="absolute top-2/4 right-3 grid h-5 w-5 -translate-y-2/4 place-items-center text-blue-gray-500">
                                    <i class="fas fa-heart" aria-hidden="true"></i>
                                    </div>
                                    <input
                                    class="peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 !pr-9 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-[#010202] focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                    placeholder=" "
                                    />
                                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-2xl before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-2xl after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-[#010202] peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-[#010202] peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-[#010202] peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    Email
                                    </label>
                                </div>
                                </div>
                        </div>
                        <div class="mt-4">
                            <div class="w-full">
                                <div class="relative h-12 w-full min-w-[200px]">
                                    <div class="absolute top-2/4 right-3 grid h-5 w-5 -translate-y-2/4 place-items-center text-blue-gray-500">
                                    <i class="fas fa-heart" aria-hidden="true"></i>
                                    </div>
                                    <input
                                    class="peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 !pr-9 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-[#010202] focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                    placeholder=" "
                                    />
                                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-2xl before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-2xl after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-[#010202] peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-[#010202] peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-[#010202] peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    Password
                                    </label>
                                </div>
                                </div>
                        </div>
                        <div class="mt-10">
                            <button type="submit" class="w-full h-12 bg-[#010202] text-white rounded-2xl">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-red-500 col-span-2 rounded-3xl">
            <img class="object-cover h-full rounded-3xl" src="{{asset('assets/images/images6.jpg')}}" alt="">
        </div>
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