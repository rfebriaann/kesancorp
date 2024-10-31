<div>
     <div class="p-4 rounded-lg dark:border-gray-700">
         <div class="relative ml-0">
              Selamat Datang <strong>{{ auth()->user()->name }}</strong>
         <a wire:click="logout" class="list-group-item active" style="cursor: pointer">LOGOUT<i class="fas fa-sign-out-alt"></i></a>
         </div>
         <div class="text-left">
            <button class="button-tambah text-white bg-gray-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-gray-700 dark:hover:bg-gray-900 focus:outline-none dark:focus:ring-gray-800" type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example">
            Tambah data
            </button>
         </div>
         {{-- <div x-data="{ open: true }" @name-updated.window="open = true">
    <!-- Modal with a Livewire name update form -->
            <h1>asd</h1>
        </div> --}}
     </div>
    {{-- In work, do what you enjoy. --}}

<!-- drawer init and toggle -->

<!-- drawer component -->
<div x-data="{ open: true }" @name-updated.window="open = true" id="drawer-right-example" class="drawer-tambah fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-96 dark:bg-[#ffffff] border border-gray-100" tabindex="-1" aria-labelledby="drawer-right-label">
    <h5 id="drawer-right-label" class="inline-flex text-lg items-center mb-4 font-bold text-gray-800 "><svg class="w-6 h-6 mr-2 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
    </svg>
    Tambah data</h5>
   <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
      <span class="sr-only">Tambah data</span>
   </button>
   <p class="mb-6 text-sm text-gray-500 dark:text-gray-400">Halo👋!! Bagaimana kabar hari ini? Saat Anda menginput data, pastikan semuanya sudah diinput agar berjalan dengan lancar untuk Anda 😊.</p>
   <form class="mb-6"  enctype="multipart/form-data">
      <div class="mb-6">
         <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Bisnis</label>
        <input
            wire:model="business_name"
            class="form-control @error('business_name') is-invalid @enderror peer h-full w-full rounded-[7px] transition-all border border-blue-gray-200 bg-transparent px-3 py-2.5 !pr-9 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 focus:border-2 focus:border-[#010202]"
            placeholder="Masukkan nama bisnis"
            />
             @error('business_name')
                <div class="mt-1 p-4 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">
                    {{ $message }}
                </div>
            @enderror
      </div>
      <div class="mb-6">
         <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 ">Logo Bisnis</label>
         {{-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label> --}}
            <input 
                wire:model="image"
                class="form-control @error('image') is-invalid @enderror block h-full w-full rounded-[7px] transition-all border border-blue-gray-200 bg-transparent px-3 py-2.5 !pr-9 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 focus:border-2 focus:border-[#010202] cursor-pointer" aria-describedby="user_avatar_help" id="user_avatar" type="file">
            @error('image')
                <div class="mt-1 p-4 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">
                    {{ $message }}
                </div>
            @enderror
      </div>
      <button type="submit" class="w-full h-12 bg-[#010202] text-white rounded-2xl">Submit Data</button>
   </form>
    </div>
    
</div>
