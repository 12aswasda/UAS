@extends('layouts.app')

@section('content')

<h2>TAMBAH ABSEN PEGAWAI NEGERI SIPIL</h2>

<form action="{{ url('users') }}" method="post">
    @csrf


    <div class="mb-3">
        <label for="">NIP</label>
        <input type="text" name="user_id" id="" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">E-MAIL</label>
        <input type="text" name="user_email" id="" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">NO. ABSEN</label>
        <input type="text" name="user_noabsen" id="" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">NAMA</label>
        <input type="text" name="user_nama" id="" class="form-control">
    </div>

    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
        
    </div>


</form>

@endsection