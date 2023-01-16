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
                        <h1 class="text-sm font-medium">Pengunjung Hari Ini</h1>
                        <p class="font-semibold  text-sm">{{ $hari_ini }}</p>
                    </div>
                    <i class="ri-user-received-2-line flex-none "></i>
                </div>
                <div class="card text-blue-800 relative">
                    <div class="flex-none w-2 h-2 bg-blue-800 rounded-full"></div>
                    <div class="flex-grow  leading-none">


                        <h1 class="text-sm font-medium">Permintaan Masuk</h1>
                        <p class="font-semibold  text-sm">{{ $permintaan }}</p>
                    </div>
                    <i class="ri-user-received-2-line flex-none "></i>
                </div>
                <div class="card text-green-800">
                    <div class="flex-none w-2 h-2 bg-green-800 rounded-full"></div>
                    <div class="flex-grow leading-none">
                        <h1 class="text-sm font-medium">Sedang Naik</h1>
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
               
            </div>
            <div class="w-full h-24 mt-3 bg-slate-500">

            </div>
            {{-- end of card --}}
        </div>
    </div>
</x-app-layout>
