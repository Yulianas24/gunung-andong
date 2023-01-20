<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- card --}}
            <div class="flex justify-between sm:rounded-lg">
                <div class="card text-blue-800">
                    <div class="flex-none w-2 h-2 bg-blue-800 rounded-full"></div>
                    <div class="flex-grow leading-none">
                        <h1 class="text-sm font-medium">Permintaan Hari Ini</h1>
                        <p class="font-semibold  text-sm">{{ $hari_ini }}</p>
                    </div>
                    <i class="ri-user-received-2-line flex-none "></i>
                </div>
                <div class="card text-blue-800 relative">
                    <div class="flex-none w-2 h-2 bg-blue-800 rounded-full"></div>
                    <div class="flex-grow  leading-none">


                        <h1 class="text-sm font-medium">Total Permintaan</h1>
                        <p class="font-semibold  text-sm">{{ $permintaan }}</p>
                    </div>
                    <i class="ri-user-received-2-line flex-none "></i>
                </div>
                <div class="card text-green-800">
                    <div class="flex-none w-2 h-2 bg-green-800 rounded-full"></div>
                    <div class="flex-grow leading-none">
                        <h1 class="text-sm font-medium">Naik Hari Ini</h1>
                        <p class="font-semibold  text-sm">{{ $pendaki_naik }}</p>
                    </div>
                    <i class="ri-user-received-2-line flex-none "></i>
                </div>
                <div class="card text-green-800">
                    <div class="flex-none w-2 h-2 bg-green-800 rounded-full"></div>
                    <div class="flex-grow leading-none">
                        <h1 class="text-sm font-medium">Riwayat Pendakian</h1>
                        <p class="font-semibold  text-sm">{{ $riwayat }}</p>
                    </div>
                    <i class="ri-user-received-2-line flex-none "></i>
                </div>
               
                {{-- end of card --}}
            </div>
            <div class="w-full h-24 mt-8 ">
                {{-- Navigasi pencarian --}}
                <div class=" md:flex mb-2 p-3 items-center justify-between gap-4 bg-white rounded-md shadow-sm shadow-black/30 ">
                    <h1 class="">Permintaan hari ini</h1>
                    <div class="flex gap-3">
                        <x-dropdown align="right" class="justify-self-end">
                            <x-slot name="trigger">
                                <button
                                    class="flex justify-center items-center px-3  h-8 border border-blue-600 text-sm rounded-md hover:cursor-pointer ">
                                    {{ request('status') == null ? 'status' : request('status') }}
                                    <i class="ri-arrow-down-s-line"></i>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link href="/dashboard?status=belum masuk">
                                    {{ __('belum masuk') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="/dashboard?status=sudah masuk">
                                    {{ __('sudah masuk') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                        <form method="get" class="flex ">
                            <input type="text" class="h-8 rounded-l-md border-r-0 text-sm w-full md:w-auto" name="nama"
                                placeholder="cari nama">
                            <button
                                class="grid items-center px-3 h-8 border border-blue-600 text-black  hover:bg-blue-600 hover:text-white text-sm rounded-r-md"><i
                                    class="ri-search-2-line"></i></button>
                        </form>
                    </div>
                </div>
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
                                    <p class="py-[2px] px-3 justify-center rounded-full text-[11px]  flex {{ $data->status == 'sudah masuk' ? 'bg-green-200' : 'bg-yellow-200' }}">
                                        {{ $data->status }}
                                    </p>
                                </td>
                                <td>
                                    @if ($data->status == 'belum masuk')
                                    <a href="/data/{{ $data->id }}/masuk" class="py-[2px] px-3 justify-center  rounded-full text-[11px]  flex bg-green-600 hover:bg-green-700 text-white">
                                        masuk
                                    </a>
                                    @else
                                    <a href="/data/{{ $data->id }}/pending" class="py-[2px]  px-3 justify-center  rounded-full text-[11px]  flex bg-blue-600 hover:bg-blue-700 text-white">
                                        undo
                                    </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $datas->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
