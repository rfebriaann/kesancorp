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
                                                    for="title"
                                                    class="font-medium  text-gray-800"
                                                >
                                                    Judul Berita <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Tambahkan judul beritamu dengan lengkap dan benar
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <input 
                                                    id="title"
                                                    type="text"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[30px]"
                                                    wire:model="title"
                                                    wire:target="store"
                                                    name="title"
                                                    wire:loading.attr="disabled"
                                                ></input>
                                                @error('title')
                                                    <span class="block mt-0 text-xs text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                            <div class="space-y-1">
                                                <label 
                                                    for="date"
                                                    class="font-medium  text-gray-800"
                                                >
                                                    Tanggal Pristiwa <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Inputkan tanggal pristiwa berita yang dituju 
                                                </p>
                                            </div>
                                            <div class="pt-0 lg:pt-3">
                                                <input 
                                                    id="date"
                                                    type="date"
                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[30px]"
                                                    wire:model="date"
                                                    wire:target="store"
                                                    name="date"
                                                    wire:loading.attr="disabled"
                                                ></input>
                                                @error('date')
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
                                                    Tambahkan gambar berita untuk tampilan cover depan
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
                                        <div class="grid grid-cols-">
                                            <div class="space-y-1">
                                                <label 
                                                    for="detail"
                                                    class="font-medium  text-gray-800"
                                                >
                                                    Detail Berita <span class="text-red-600">*</span>
                                                </label>
                                                <p class="text-sm text-gray-600">
                                                    Buatlah rangkuman atau ceritakan tentang berita yang sedang dibuat
                                                </p>
                                            </div>
                                            <div class="pt-0 mt-2 lg:pt-3" wire:ignore>
                                               <textarea 
                                                id="detail"
                                                wire:model="detail"
                                                name="detail"
                                                class="w-full h-80 border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[30px]"></textarea>
                                                @error('detail')
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

        <script>
            ClassicEditor
            .create(document.querySelector('#detail'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                @this.set('detail', editor.getData());
                })
            })
            .catch(error => {
                console.error(error);
            });
        </script>
</div>
