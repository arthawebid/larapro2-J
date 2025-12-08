<label>Nama:</label><br>
<input type="text" name="nama" value="{{ old('nama', $dta->nama ?? '' ) }}"><br><br>

<label>Alamat:</label><br>
<input type="text" name="alamat" value="{{ old('alamat', $dta->alamat ?? '' ) }}"><br><br>

<label>Kota:</label><br>
<input type="text" name="kota" value="{{ old('kota', $dta->kota ?? '' ) }}"><br><br>

<label>No Telpon:</label><br>
<input type="text" name="noTelp" value="{{ old('noTelp', $dta->noTelp ?? '' ) }}"><br><br>

<button type="submit">{{ $submit ?? 'SimpanData'}}</button>