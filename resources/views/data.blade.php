<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Pendaki') }}
        </h2>
    </x-slot>

    <div class="py-12" id="main">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Navigasi pencarian --}}
            <div class=" md:flex mb-2 p-3 justify-between bg-white rounded-md shadow-sm shadow-black/30 ">
                <div class="flex gap-1 py-1 ">
                    <a href="/data?sort=today"
                        class="grid items-center px-3 h-8 bg-green-600 text-white text-sm rounded-md hover:bg-opacity-80">Hari ini</a>
                    <a href="/data"
                        class="grid items-center px-3 h-8 bg-blue-600 text-white text-sm rounded-md hover:bg-opacity-80">Semua</a>
                    <x-dropdown align="left">
                        <x-slot name="trigger">
                            <button
                                class="flex justify-center items-center px-3  h-8 border border-blue-600 text-sm rounded-md hover:cursor-pointer ">
                                {{ request('status') == null ? 'status' : request('status') }}
                                <i class="ri-arrow-down-s-line"></i>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="/data?status=belum masuk">
                                {{ __('belum masuk') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="/data?status=sudah masuk">
                                {{ __('sudah masuk') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="/data?status=batal naik">
                                {{ __('batal naik') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                    <form method="get" class="flex">
                        <input type="date" class="h-8 rounded-l-md border-r-0 text-sm w-full md:w-auto caret-pink-500" name="date"
                        value="{{ request('date') }}">
                        <button
                            class="grid items-center px-3 h-8 border rounded-r-md border-blue-600 text-black  hover:bg-blue-600 hover:text-white text-sm"><i
                                class="ri-search-2-line"></i></button>
                    </form>
                </div>



                <form method="get" class="flex  py-1">
                    <input type="text" class="h-8 rounded-l-md border-r-0 text-sm w-full md:w-auto" name="nama"
                        placeholder="cari nama">
                    <button
                        class="grid items-center px-3 h-8 border border-blue-600 text-black  hover:bg-blue-600 hover:text-white text-sm rounded-r-md"><i
                            class="ri-search-2-line"></i></button>
                </form>
            </div>
            {{-- Navigasi Pencarian --}}
            <div class="bg-white overflow-auto md:w-full p-3 mb-2 rounded-md shadow-sm border-gray-300 border">
                <table class="table-style table-auto">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>nomor KTP</th>
                            <th>nomor telepon</th>
                            <th class="w-[80px]">Gender</th>
                            <th class="">Tanggal Naik</th>
                            <th class="">Tanggal Turun</th>
                            <th>Status</th>
                            <th class="">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->ktp }}</td>
                            <td>{{ $data->telepon }}</td>
                            <td class="text-center">{{ $data->jenis_kelamin }}</td>
                            <td class="text-center">{{ $data->tanggal_masuk }}</td>
                            <td class="text-center">{{ $data->tanggal_keluar }}</td>
                            <td class="text-center">
                                @if ($data->status != 'batal naik')
                                <x-dropdown align="right">
                                    <x-slot name="trigger">
                                        <button
                                        class="py-[2px] px-3 justify-between  rounded-full text-[11px]  flex {{ $data->status == 'sudah masuk' ? 'bg-green-200' : 'bg-yellow-200' }}">
                                            {{ $data->status }}
                                            <i class="ri-arrow-down-s-line"></i>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link href="/data/{{ $data->id }}/pending" class="rounded-none">
                                            {{ __('belum masuk') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link href="/data/{{ $data->id }}/masuk" class="rounded-none">
                                            {{ __('sudah masuk') }}
                                        </x-dropdown-link>
                                    </x-slot>
                                </x-dropdown>
                                @else
                                <button
                                class="py-[2px] px-3 justify-between  rounded-full text-[11px]  flex bg-red-200">
                                    {{ $data->status }}
                                </button>
                                @endif
                                
                                
                            </td>
                            <td>
                                <div class="flex w-full justify-items-center gap-2">
                                    <button onclick="detail({{ $data }})" 
                                    class="px-2 p-[2px] bg-blue-600 block text-xs align-middle rounded-lg text-white">
                                    detail
                                </button>
                                
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $datas->links() }}
           
        </div>
    </div>

    {{-- popup --}}
    
</x-app-layout>

<script>
   
    function detail(data){
        var main = document.getElementById("main")
        main.innerHTML += `
        <div class="fixed top-0 left-0 w-screen h-screen bg-black/20" id="detail">
            <div class="relative mx-auto mt-[15%] w-[50%] min-h-[40%] bg-white shadow-md shadow-black/25 p-7  border rounded-md gap-3" > 
                <button class="absolute right-3 top-2  hover:text-red-700" onclick="closeDetail()">
                    <i class="ri-close-circle-line text-2xl"></i>
                </button>
                <h1 class="w-full">Detail</h1>
                <hr>
                <div class="w-full flex gap-3 h-[calc(100%-24px)] text-sm">
                    <div class="flex-none w-[55%]">
                        {{-- Nama --}}
                        <div class="flex my-4">
                            <div class="w-[30%] flex-none">Nama</div>
                            <p class="pr-2">:</p>
                            <p>${data.nama}</p>
                        </div>
                        {{-- Alamat --}}
                        <div class="flex my-4">
                            <div class="w-[30%] flex-none">Alamat</div>
                            <p class="pr-2">:</p>
                            <p class="text-xs">${data.alamat}</p>
                        </div>
                        {{-- Jenis Kelamin --}}
                        <div class="flex my-4">
                            <div class="w-[30%] flex-none">Jenis Kelamin</div>
                            <p class="pr-2">:</p>
                            <p>${data.jenis_kelamin}</p>
                        </div>
                        {{-- NIK --}}
                        <div class="flex my-4">
                            <div class="w-[30%] flex-none">NIK</div>
                            <p class="pr-2">:</p>
                            <p>${data.ktp}</p>
                        </div>
                        {{-- Telepon --}}
                        <div class="flex my-4">
                            <div class="w-[30%] flex-none">Telepon</div>
                            <p class="pr-2">:</p>
                            <p>${data.telepon}</p>
                        </div>
                    </div>
                    <div class="relative flex-none w-[45%]">
                        {{-- Tanggal Naik --}}
                        <div class="flex my-4">
                            <div class="w-1/2 flex-none">Tanggal Naik</div>
                            <p class="pr-2">:</p>
                            <p>${data.tanggal_masuk}</p>
                        </div>
                        {{-- Tanggal Turun --}}
                        <div class="flex my-4">
                            <div class="w-1/2 flex-none">Tanggal Turun</div>
                            <p class="pr-2">:</p>
                            <p>${data.tanggal_keluar}</p>
                        </div>
                        {{-- Status --}}
                        <div class="flex my-4 items-center">
                            <div class="w-1/2 flex-none">Status</div>
                            <p class="pr-2">:</p>
                            <p class="text-blue-800 font-semibold bg-blue-100 py-1 px-3 rounded-xl text-[10px]">${data.status}</p>
                        </div>
                        <div class="">
                            <form action="/data/${data.id}" method="post">
                                @csrf
                                @method("delete")
                                <button type="submit" onclick="return confirm('Apakah anda yakin?')"
                                    class="px-2 p-[2px] bg-red-600 block text-white align-middle text-center rounded-sm">
                                    hapus 
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `
       
    }

    function closeDetail(){
        // console.log('test')
        document.getElementById("detail").outerHTML = "";
    }
    
</script>

