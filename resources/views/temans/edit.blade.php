<div class="container">
<h2>Form Ubah Data Teman</h2>

<form action="{{ route('teman.update', $dta->id ) }}" method="POST">
    @csrf
    @method('PUT')
    @include('temans.forms', ['submit'=>'Ubah Data'] )

</form>

</div>