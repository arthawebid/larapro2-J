@extends('template.app')
@section('TITLE','Tambah Data Teman')
@section('KONTEN')
<div class="container">
<h2>Form Tambah Teman</h2>

<form action="{{ route('teman.store') }}" method="POST">
    @csrf
    @include('temans.forms', ['submit'=>'Tambah Data'] )

</form>

</div>
@endsection