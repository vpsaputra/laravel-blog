@extends('layout.main') 
@section('container')

<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-12 ">
                <h1 class="mt-3">Data Wedding</h1>
            <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Slug</th>
                <th scope="col">Waktu Akad</th>
                <th scope="col">Lokasi Akad</th>
                <th scope="col">Waktu Resepsi</th>
                <th scope="col">Lokasi Resepsi</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Nama Panggilan</th>
                <th scope="col">J/K</th>
                <th scope="col">Nama Ayah</th>
                <th scope="col">Nama Ibu</th>
                <th scope="col">Keluarga</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- @foreach($data as $detail)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$detail->waktu_akad}}</td>
                    <td>{{$detail->lokasi_akad}}</td>
                    <td>{{$detail->waktu_resepsi}}</td>
                    <td>{{$detail->lokasi_resepsi}}</td>
                    <td>{{$detail->nama_lengkap}}</td>
                    <td>{{$detail->nama_panggilan}}</td>
                    <td>{{$detail->jenis_kelamin}}</td>
                    <td>{{$detail->ayah}}</td>
                    <td>{{$detail->ibu}}</td>
                    <td>{{$detail->keluarga}}</td>
                    <td>
                        <a href="" class="d-md-flex badge badge-success text-bg-dark">Edit</a>
                        <a href="" class="badge badge-error text-bg-dark">Hapus</a>
                    </td>
                </tr>
                @endforeach -->

                @foreach($data as $a)
                <tr>
                    <td rowspan="2">{{$loop->iteration}}</td>
                    <td rowspan="2">{{$a->slug}}</td>
                    <td rowspan="2">{{$a->waktu_akad}}</td>
                    <td rowspan="2">{{$a->lokasi_akad}}</td>
                    <td rowspan="2">{{$a->waktu_resepsi}}</td>
                    <td rowspan="2">{{$a->lokasi_resepsi}}</td>
                    @foreach($a->cantens as $t)
                        <td>{{$t->nama_lengkap}}</td> 
                        <td>{{$t->nama_panggilan}}</td> 
                        <td>{{$t->jenis_kelamin}}</td> 
                        <td>{{$t->ayah}}</td> 
                        <td>{{$t->ibu}}</td> 
                        <td>{{$t->keluarga}}</td> 
                    @if($loop->odd)
                            <td>
                        <a href="/admin/edit" class="d-md-flex badge badge-info text-bg-dark">Edit</a>
                        <a href="" class="badge badge-error text-bg-dark">Hapus</a>
                    </td>
                    @endif   
                    </tr></tr>
                        
                    @endforeach
                            
                </tr>
                @endforeach



            </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
