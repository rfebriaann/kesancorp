<div>
    <div class= rounded-lg dark:border-gray-700">
        <div class="p-10 mx-10">
            <h1 class="font-bold text-4xl text-black">🧐 Tambah Project </h1>
            <p class="ml-12 mb-4 mt-2 text-black/50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure provident quas nihil necessitatibus eaque magni et temporibus? Recusandae unde, quasi atque assumenda eius, error rem dignissimos dicta ipsam possimus obcaecati?</p>
            <div class=" w-full bg-white rounded-xl">
                <section class="px-10 p-4">
                    <div class="max-w-screen-xl p-2 mx-auto lg:px-1">
                        <div class="bg-white w-full relative sm:rounded-lg overflow-hidden">
                            <div class="flex items-center justify-between d p-4">
                                
                            </div>
                            <div class="overflow-x-auto">
                                <form action="" wire:submit="store" enctype="multipart/form-data">
                                    <div class="space-y-6">
                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                            <div class="space-y-1">
                                                <label 
                                                    for="project_name"
                                                    class="font-medium  text-gray-800"
                                                >
                                                    Nama projek <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Tambahkan nama Project dengan lengkap dan benar
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <input 
                                                    id="project_name"
                                                    type="text"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[30px]"
                                                    wire:model="project_name"
                                                    wire:target="store"
                                                    name="project_name"
                                                    wire:loading.attr="disabled"
                                                ></input>
                                                @error('project_name')
                                                    <span class="block mt-0 text-xs text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                            <div class="space-y-1">
                                                <label 
                                                    for="project_detail"
                                                    class="font-medium  text-gray-800"
                                                >
                                                    Detail projek <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Tuliskan detail singkat mengenai projek anda
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <input 
                                                    id="project_detail"
                                                    type="text"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[30px]"
                                                    wire:model="project_detail"
                                                    wire:target="store"
                                                    name="project_detail"
                                                    wire:loading.attr="disabled"
                                                ></input>
                                                @error('project_detail')
                                                    <span class="block mt-0 text-xs text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                            <div class="space-y-1">
                                                <label 
                                                    for="project_vision"
                                                    class="font-medium  text-gray-800"
                                                >
                                                    Visi projek <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Tuliskan visi projek anda
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <input 
                                                    id="project_vision"
                                                    type="text"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[30px]"
                                                    wire:model="project_vision"
                                                    wire:target="store"
                                                    name="project_vision"
                                                    wire:loading.attr="disabled"
                                                ></input>
                                                @error('project_vision')
                                                    <span class="block mt-0 text-xs text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                            <div class="space-y-1">
                                                <label 
                                                    for="busines_id"
                                                    class="font-medium  text-gray-800"
                                                >
                                                    Bisnis yang bersangkutan <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Pilih bisnis yang bersangkutan dengan projek ini, jikalau tidak ada silahkan tambahkan bisnis terlebih dahulu
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <select 
                                                    id="busines_id"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                                                    wire:model="busines_id"
                                                    wire:target="store"
                                                    name="busines_id"
                                                    wire:loading.attr="disabled"
                                                >
                                                <option value=""></option>
                                                @foreach ($business as $busines)
                                                    <option value="{{$busines->id}}">{{$busines->business_name}}</option>
                                                @endforeach
                                            </select>
                                                @error('busines_id')
                                                    <span class="block mt-0 text-xs text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                            <div class="space-y-1">
                                                <label 
                                                    for="category_id"
                                                    class="font-medium  text-gray-800"
                                                >
                                                    Kategori Projek yang bersangkutan <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Pilih kategori yang bersangkutan dengan projek ini, jikalau tidak ada silahkan tambahkan kategori terlebih dahulu
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <select 
                                                    id="category_id"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                                                    wire:model="category_id"
                                                    wire:target="store"
                                                    name="category_id"
                                                    wire:loading.attr="disabled"
                                                >
                                                <option value=""></option>
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                                @error('category_id')
                                                    <span class="block mt-0 text-xs text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                            <div class="space-y-1">
                                                <label 
                                                    for="project_image"
                                                    class="font-medium text-gray-800"
                                                >
                                                    Gambar Cover <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Tambahkan gambar projek untuk tampilan cover depan
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <input 
                                                    type="file"
                                                    id="project_image"
                                                    name="project_image"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                                                    wire:model="project_image"
                                                    wire:target="store"
                                                    wire:loading.attr="disabled"
                                                ></input>
                                                @error('project_image')
                                                    <span class="block mt-0 text-xs text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                            <div class="space-y-1">
                                                <label 
                                                    for="project_logo"
                                                    class="font-medium text-gray-800"
                                                >
                                                    Logo Projek <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Tambahkan logo projek untuk tampilan cover depan
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <input 
                                                    type="file"
                                                    id="project_logo"
                                                    name="project_logo"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                                                    wire:model="project_logo"
                                                    wire:target="store"
                                                    wire:loading.attr="disabled"
                                                ></input>
                                                @error('project_logo')
                                                    <span class="block mt-0 text-xs text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <button type="submit" class=" w-28 rounded-xl p-3 bg-[#0365FE] text-lg text-white hover:bg-[#2678fc]">simpan</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>