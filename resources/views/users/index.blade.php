@extends('layouts.app')

@section('content')

<h2>ABSEN PEGAWAI NEGERI SIPIL</h2>

<a href="{{ url('users/create') }}" style = "text-decoration : none;">Tambah Absen</a>

<table class="table table-bordered">
    <tr>
        <th>NIP</th>
        <th>E-MAIL</th>
        <th>NO. ABSEN</th>
        <th>NAMA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ( $rows as $row )
    <tr>
        <td>{{ $row->user_id}} </td>
        <td>{{ $row->user_email}} </td>
        <td>{{ $row->user_noabsen}} </td>
        <td>{{ $row->user_nama}} </td>
        
        <td><a href="{{ url('users/edit/' . $row->user_id) }}"class="btn btn-danger" >EDIT</a> </td>
        <td>
            <form action="{{ url('users/'. $row->user_id)}}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-warning" >
                
            </form>
        </td>
    </tr>
    @endforeach
    
</table>

@endsection