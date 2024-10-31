<div>
    <div class= rounded-lg dark:border-gray-700">
        <div class="p-10 mx-10">
            <h1 class="font-bold text-4xl text-black">🎉 Tambah Event </h1>
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
                                                    for="event_name"
                                                    class="font-medium  text-gray-800"
                                                >
                                                    Nama Event <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Tambahkan nama event mu dengan lengkap dan benar
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <input 
                                                    id="event_name"
                                                    type="text"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[30px]"
                                                    wire:model="event_name"
                                                    wire:target="store"
                                                    name="event_name"
                                                    wire:loading.attr="disabled"
                                                ></input>
                                                @error('event_name')
                                                    <span class="block mt-0 text-xs text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                            <div class="space-y-1">
                                                <label 
                                                    for="event_date"
                                                    class="font-medium  text-gray-800"
                                                >
                                                    Tanggal Event <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Inputkan tanggal event 
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <input 
                                                    id="event_date"
                                                    type="date"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[30px]"
                                                    wire:model="event_date"
                                                    wire:target="store"
                                                    name="event_date"
                                                    wire:loading.attr="disabled"
                                                ></input>
                                                @error('event_date')
                                                    <span class="block mt-0 text-xs text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                            <div class="space-y-1">
                                                <label 
                                                    for="event_detail"
                                                    class="font-medium  text-gray-800"
                                                >
                                                    Detail Event <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Buatlah rangkuman atau ceritakan tentang event yang sedang dibuat
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <input 
                                                    id="event_detail"
                                                    type="text"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[30px]"
                                                    wire:model="event_detail"
                                                    wire:target="store"
                                                    name="event_detail"
                                                    wire:loading.attr="disabled"
                                                ></input>
                                                @error('event_detail')
                                                    <span class="block mt-0 text-xs text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                            <div class="space-y-1">
                                                <label 
                                                    for="project_id"
                                                    class="font-medium  text-gray-800"
                                                >
                                                    Projek yang bersangkutan <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Pilih projek yang bersangkutan dengan event ini, jikalau tidak ada silahkan tambahkan projeknya terlebih dahulu
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <select 
                                                    id="project_id"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                                                    wire:model="project_id"
                                                    wire:target="store"
                                                    name="project_id"
                                                    wire:loading.attr="disabled"
                                                >
                                                <option value=""></option>
                                                @foreach ($projects as $project)
                                                    <option value="{{$project->id}}">{{$project->project_name}}</option>
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
                                                    for="detail"
                                                    class="font-medium text-gray-800"
                                                >
                                                    Gambar cover <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Tambahkan gambar event untuk tampilan cover depan
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <input 
                                                    type="file"
                                                    id="image"
                                                    name="image"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                                                    wire:model="image"
                                                    wire:target="store"
                                                    wire:loading.attr="disabled"
                                                ></input>
                                                @error('image')
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