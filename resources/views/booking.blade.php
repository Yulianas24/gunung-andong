<x-guest-layout>
  <form action="/booking" method="post" class="grid">
    @csrf
    <label for="nama">Nama</label>
    <input class="booking" type="text" name="nama" id="nama" placeholder="masukan nama..." required>
    
    <label for="alamat">Alamat</label>
    <input class="booking" type="text" name="alamat" id="alamat" placeholder="masukan alamat..." required>
    
    <div class="grid gap-2 grid-cols-2">
      <div class="w-full">
        <label for="ktp">Nomor KTP</label>
      <input class="booking" type="text" minlength="15" maxlength="18" name="ktp" id="ktp" placeholder="nomor ktp..." required>
      </div>
      <div class=" w-full">
        <label for="telepon">Nomor Telepon</label>
      <input class="booking" type="text" minlength="10" maxlength="15" name="telepon" id="telepon" placeholder=" nomor telepon..." required>
      </div>
    </div>
    <div class="grid grid-cols-2 gap-2">
    <div>
      <label for="tanggal">Tanggal Booking</label>
    <input class="booking" name="tanggal" type="date" min="<?php  echo date("Y-m-d") ?>" required>
    </div>
    <div>
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <select class="booking" name="jenis_kelamin" id="jenis_kelamin">
        <option value="" selected hidden>Pilih</option>
        <option value="laki-laki">Laki-Laki</option>
        <option value="perempuan">Perempuan</option>
      </select>

    </div>
    </div>
    
    <button type="submit" class="bg-green-600 py-1 rounded-md text-white hover:bg-green-500 ">Booking</button>
  </form>
</x-guest-layout>
