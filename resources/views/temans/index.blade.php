<div class="container">
    <h3>Data Teman</h3>
    <a href="{{ route('teman.create') }}">Tambah Data</a>
    <table>      
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
                <td><a href="{{ route('teman.edit', $dt->id)  }}"> Ubah </a> 
                    <form action="{{ route('teman.destroy', $dt->id) }}" method="POST">    
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin Akan Menghapus Data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>

    </table>

</div>