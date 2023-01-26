@extends('layout.main')
@section('container')


<div class="row">
    <div class="col-12">
        <h3 class="mt-3 text-bg-dark" >Data Acara dan Penganten</h3>
        <div class="container">
            <form class="gorm-inline" action="" method="post">
            @csrf
            <div class="row">
                <div class="col-8">
                   <h4>Data Pengantin</h4>
                   <div class="row">
                    <div class="col">
                        <h5>Pria</h5>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap Pengantin</label>
                            <input type="text" class="form-control" name_lengkap="nama_lengkap" id="nama_lengkap"
                            placeholder="Masukkan nama">
                            <label for="nama_panggilan">Nama Panggilan Pengantin</label>
                            <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan"
                            placeholder="Masukkan nama panggilan">
                            <label for="Slug">Nama Ayah</label>
                            <input type="text" class="form-control" name="nama_ayah" id="nama_ayah"
                            placeholder="Masukkan nama ayah">
                            <label for="Slug">Nama Ibu</label>
                            <input type="text" class="form-control" name="nama_ibu" id="nama_ibu"
                            placeholder="Masukkan nama ibu">
                            <label for="Slug">Keluarga</label>
                            <textarea class="form-control" name="keluarga_pria" id="keluarga_pria"
                            placeholder="Masukkan Anggota Keluarga" rows="5"></textarea>
                        </div>

                    </div>
                    <div class="col">
                        <h5>Wanita</h5>
                        
                        <div class="form-group">
                            <label for="Slug">Nama Lengkap Pengantin</label>
                            <input type="text" class="form-control" name_lengkap="nama_lengkap" id="nama_lengkap"
                            placeholder="Masukkan nama">
                            <label for="Slug">Nama Panggilan Pengantin</label>
                            <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan"
                            placeholder="Masukkan nama pengantin">
                            <label for="Slug">Nama Ayah</label>
                            <input type="text" class="form-control" name="nama_ayah" id="nama_ayah"
                            placeholder="Masukkan nama ayah">
                            <label for="Slug">Nama Ibu</label>
                            <input type="text" class="form-control" name="nama_ibu" id="nama_ibu"
                            placeholder="Masukkan nama ibu">
                            <label for="Slug">Keluarga</label>
                            <textarea class="form-control" name="keluarga_pria" id="keluarga_pria"
                            placeholder="Masukkan Anggota Keluarga" rows="5"></textarea>
                        </div>
                    </div>
                   </div>
                </div>
                <div class="col">
                    <h4>Data Acara</h4>
                    <h5>.</h5>
                    <div class="form-group">
                        <div class="form-group">
                        <label for="slug">Slug Undangan</label>
                            <select class="form-control " name="slug" id="slug">
                                <option>1</option>
                                <option>1</option>
                                <option>1</option>
                            </select>
                            <small id="slugHelpBack" class="text-muted">
                                Pilih Kode Unik yang akan ditampilkan pada alamat URL undangan kamu.
                            </small>
                            
                        </div>
                        <div class="form-inline form-group">

                        </div>
                            <br>
                            <label for="lokasi_akad">Lokasi Akad</label>
                            <input type="text" class="form-control" name="lokasi_akad" id="lokasi_akad"
                            placeholder="Lokasi Akad">

                            <label for="waktu_akad">Waktu Akad</label>
                            <input type="date" class="form-control" name="waktu_akad" id="waktu_akad"
                            placeholder="Pilih Waktu akad">
                            <label for="lokasi_resepsi">Lokasi Resepsi</label>
                            <input type="text" class="form-control" name="lokasi_resepsi" id="lokasi_resepsi"
                            placeholder="Masukkan lokasi resepsi">
                            <label for="waktu_resepsi">Waktu Resepsi</label>
                            <input type="date" class="form-control" name="waktu_resepsi" id="waktu_resepsi"
                            placeholder="Pilih Waktu Resepsi">
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>