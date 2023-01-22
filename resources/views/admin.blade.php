<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Admin') }}
        </h2>
    </x-slot>
    
    <div class="py-12" id="main">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Navigasi pencarian --}}
            <div class=" md:flex mb-2 p-3 justify-between bg-white rounded-md shadow-sm shadow-black/30 ">
                <div class="flex gap-1 py-1 ">
                    <a href="/register"
                        class="grid items-center px-3 h-8 bg-green-600 text-white text-sm rounded-md hover:bg-opacity-80">Tambah Admin</a>
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
                            <th>Email</th>
                            <th>Tanggal Dibuat</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftarAdmin as $admin)
                            <tr>
                                <td class="text-center">{{ $admin->name }}</td>
                                <td class="text-center">{{ $admin->email }}</td>
                                <td class="text-center">{{ $admin->created_at }}</td>
                                <td class="text-center">
                                    <form action="/admin/{{ $admin->id }}" method="post" class="flex justify-center">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" onclick="return confirm('Apakah anda yakin?')"
                                            class="px-2 p-[2px] bg-red-600 block text-white align-middle text-center rounded-sm">
                                            hapus 
                                        </button>
                                    </form>
                                    {{-- <button class="px-2 py-1 rounded-xl text-xs hover:bg-red-500 bg-red-600 text-white">hapus</button> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $daftarAdmin->links() }}
           
        </div>
    </div>
</x-app-layout>
