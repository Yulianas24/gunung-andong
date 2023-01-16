<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Pendaki') }}
        </h2>
    </x-slot>

    <div class="py-12">
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
                                class="flex justify-center items-center px-3 h-8 border border-blue-600 text-sm rounded-md hover:cursor-pointer ">
                                {{ request('status') == null ? 'status' : request('status') }}
                                <i class="ri-arrow-down-s-line"></i>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="/data?status=pending">
                                {{ __('pending') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="/data?status=masuk">
                                {{ __('masuk') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="/data?status=keluar">
                                {{ __('keluar') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                    <form method="get" class="flex">
                        <input type="date" class="h-8 rounded-l-md border-r-0 text-sm w-full md:w-auto caret-pink-500" name="date">
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
                            <th>Alamat</th>
                            <th>nomor KTP</th>
                            <th>nomor telepon</th>
                            <th class="w-[80px]">Gender</th>
                            <th class="w-[100px]">Tanggal</th>
                            <th>Status</th>
                            <th class="w-[80px]">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->ktp }}</td>
                            <td>{{ $data->telepon }}</td>
                            <td class="text-center">{{ $data->jenis_kelamin }}</td>
                            <td class="text-center">{{ $data->tanggal }}</td>
                            <td class="text-center text-xs">
                                <span
                                    class="py-1 px-3 rounded-lg {{ $data->status == 'masuk' ? 'bg-green-200' : 
                              ($data->status == 'keluar' ? 'bg-red-200' : 'bg-blue-200') }}">{{ $data->status }}</span>
                            </td>
                            <td class="grid justify-items-center w-[80px] gap-2">
                                @if ($data->status == 'pending')
                                <div class="flex gap-2">
                                    <a href="/data/{{ $data->id }}/terima"
                                        class="px-2 p-[2px] bg-green-600 block w-7 align-middle text-center rounded-sm">
                                        <i class="ri-check-line text-gray-200"></i>
                                    </a>
                                    <a href="/data/{{ $data->id }}/tolak"
                                        class="px-2 p-[2px] bg-orange-600 block w-7 align-middle text-center rounded-sm">
                                        <i class="ri-close-line text-gray-200"></i>
                                    </a>
                                </div>
                                @else
                                    @if ($data->status != 'masuk')
                                    <div class="flex gap-2">
                                        <a href="/data/{{ $data->id }}/terima"
                                            class="px-2 p-[2px] bg-green-600 block w-7 align-middle text-center rounded-sm">
                                            <i class="ri-check-line text-gray-200"></i>
                                        </a>
                                        <a href="/data/{{ $data->id }}/pending"
                                            class="px-2 p-[2px] bg-yellow-600 block w-7 align-middle text-center rounded-sm">
                                            <i class="ri-pause-mini-line text-gray-200"></i>
                                        </a>
                                    </div>
                                    @else
                                    <div class="flex gap-2">
                                        <a href="/data/{{ $data->id }}/tolak"
                                            class="px-2 p-[2px] bg-orange-600 block w-7 align-middle text-center rounded-sm">
                                            <i class="ri-close-line text-gray-200"></i>
                                        </a>
                                        <a href="/data/{{ $data->id }}/pending"
                                            class="px-2 p-[2px] bg-yellow-600 block w-7 align-middle text-center rounded-sm">
                                            <i class="ri-pause-mini-line text-gray-200"></i>
                                        </a>
                                    </div>
                                    @endif
                                @endif
                                <form action="/data/{{ $data->id }}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" onclick="return confirm('Apakah anda yakin?')"
                                        class="px-2 p-[2px] bg-red-600 block w-16 align-middle text-center rounded-sm">
                                        <i class="ri-delete-bin-line text-gray-200"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $datas->links() }}
        </div>
    </div>
</x-app-layout>

