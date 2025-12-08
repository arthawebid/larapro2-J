<label>Nama:</label><br>
<input class="form-control" type="text" name="nama" value="{{ old('nama', $dta->nama ?? '' ) }}"><br><br>

<label>Alamat:</label><br>
<input class="form-control" type="text" name="alamat" value="{{ old('alamat', $dta->alamat ?? '' ) }}"><br><br>

<label>Kota:</label><br>
<input class="form-control" type="text" name="kota" value="{{ old('kota', $dta->kota ?? '' ) }}"><br><br>

<label>No Telpon:</label><br>
<input class="form-control" type="text" name="noTelp" value="{{ old('noTelp', $dta->noTelp ?? '' ) }}"><br><br>

<button class="btn btn-primary" type="submit">{{ $submit ?? 'SimpanData'}}</button>
<a class="btn btn-secondary" href="{{ route('teman.index') }}"> Batal </a>