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
                                                    for="event_id"
                                                    class="font-medium  text-gray-800"
                                                >
                                                    Event yang bersangkutan <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Pilih event yang bersangkutan dengan foto ini, jikalau tidak ada silahkan tambahkan event terlebih dahulu
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <select 
                                                    id="event_id"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                                                    wire:model="event_id"
                                                    wire:target="store"
                                                    name="event_id"
                                                    wire:loading.attr="disabled"
                                                >
                                                <option value=""></option>
                                                @foreach ($events as $event)
                                                    <option value="{{$event->id}}">{{$event->event_name}}</option>
                                                @endforeach
                                            </select>
                                                @error('event_id')
                                                    <span class="block mt-0 text-xs text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                            <div class="space-y-1">
                                                <label 
                                                    for="image"
                                                    class="font-medium text-gray-800"
                                                >
                                                    Galeri event <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Tambahkan dokumentasi event 
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
                                                @if ($image)
                                                    <h3>Uploaded Images:</h3>
                                                    @foreach ($image as $img)
                                                        <img src="{{ $img->temporaryUrl() }}" width="200">
                                                    @endforeach
                                                @endif
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