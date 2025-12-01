<div class="container">
<h2>Form Tambah Teman</h2>

<form action="{{ route('teman.store') }}" method="POST">
    @csrf

    <label>Nama:</label><br>
    <input type="text" name="nama"><br><br>

    <label>Alamat:</label><br>
    <input type="text" name="alamat"><br><br>

    <label>Kota:</label><br>
    <input type="text" name="kota"><br><br>

    <label>No Telpon:</label><br>
    <input type="text" name="noTelp"><br><br>

    <button type="submit">Simpan</button>
</form>

</div>