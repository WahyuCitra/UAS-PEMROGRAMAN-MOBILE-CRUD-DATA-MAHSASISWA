@extends('data')

@section('data')
<h1>Add Data</h1>
<form action="{{url('/data')}}" method="post">
  @csrf
    <div class="form-group mt-4">

        <label for="name">Nama</label>
        <input type="text" name="name" required class="form-control" placeholder="Nama Mahasiswa">

    </div>

    <div class="form-group">

        <label for="nim">NIM</label>
        <input type="text" name="nim" required class="form-control" placeholder="Nomor Induk Mahasiswa">

    </div>

    <button class="btn btn-primary" type="submit" name="submit">Add</button>
</form>

@endsection
