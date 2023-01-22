<x-guest-layout>

    <h1>Booking</h1>
    <hr class="p-1">
    <form action="/booking" method="post" class="grid">
        @csrf
        <label for="nama">Nama</label>
        <input class="booking" type="text" name="nama" id="nama" placeholder="masukan nama..." required>

        <label for="alamat">alamat</label>
        <input class="booking" type="text" name="alamat" id="alamat" placeholder="masukan alamat..." required>

        <label for="jenis_kelamin">jenis kelamin</label>
        <select class="booking" name="jenis_kelamin" id="jenis_kelamin">
            <option value="" selected hidden>pilih</option>
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
        </select>

        <div class="grid grid-cols-2 gap-2">
            <div>
                <label for="ktp">nomor ktp</label>
                <input class="booking" type="number" name="ktp" id="ktp" placeholder="masukan nomor ktp..." required>
            </div>

            <div>
                <label for="telepon">nomor telepon</label>
                <input class="booking" type="text" name="telepon" id="telepon" placeholder="masukan nomor telepon..."
                    required>

            </div>

        </div>
        

        <div class="grid grid-cols-2 w-full gap-2">
            <div>
                <label for="tanggal masuk">Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" class="booking">
            </div>
            <div>
                <label for="tanggal masuk">Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" class="booking">
            </div>
        </div>
        <button type="submit" class="bg-slate-400 py-1 rounded-md hover:bg-slate-500 ">Booking</button>
    </form>
</x-guest-layout>
