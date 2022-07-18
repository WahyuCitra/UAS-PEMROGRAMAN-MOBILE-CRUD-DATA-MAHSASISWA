@extends('data')

@section('data')
<h1>Edit Data</h1>
<form action="{{url("/data/{$mData->id}")}}" method="post">
  @method('PATCH')
  @csrf

    <div class="form-group mt-4">

        <label for="name">Nama</label>
        <input value="{{$mData->name}}" type="text" name="name" required class="form-control" placeholder="Nama Mahasiswa">

    </div>

    <div class="form-group">

        <label for="nim">NIM</label>
        <input type="text" name="nim" required class="form-control" placeholder="Nomor Induk Mahasiswa" value="{{$mData->nim}}">

    </div>

    <button class="btn btn-primary" type="submit" name="submit">Edit</button>
</form>

@endsection
