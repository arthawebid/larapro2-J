@extends('template.app')
@section('TITLE','Data Teman')
@section('KONTEN')
<div class="container">
    <h3>Data Teman</h3>
    <a class="btn btn-primary bnt-sm" href="{{ route('teman.create') }}">Tambah Data</a>
    <table class="table table-hover">      
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dta as $dt)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dt->nama }}</td>
                <td><a class="btn btn-warning btn-sm" href="{{ route('teman.edit', $dt->id)  }}"> Ubah </a> 
                    <form action="{{ route('teman.destroy', $dt->id) }}" method="POST" style="display: inline-block;">    
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin Akan Menghapus Data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>

    </table>

</div>
@endsection