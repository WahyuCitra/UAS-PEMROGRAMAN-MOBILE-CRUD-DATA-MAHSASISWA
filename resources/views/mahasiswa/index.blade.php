@extends('data')

@section('data')

<h1>Data Mahasiswa</h1>
<table class="table mt-3">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">NIM</th>
        <th scope="col" colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    @php
        $i = 1;
    @endphp
        @foreach ($data as $item)
        <tr>
            <th scope="row">@php echo($i); @endphp</th>
            <td>{{$item->name}}</td>
            <td>{{$item->nim}}</td>
            <td>
                <a href="{{ url("data/{$item->id}/edit") }}" class="btn btn-success btn-sm">Edit</a>
            </td>
            <td>
                <form action="{{ url("data/{$item->id}") }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
            @php $i++; @endphp
        @endforeach
    </tbody>
  </table>

  <a href="{{ url('data/create') }}" class="btn btn-primary btn-lg btn-block mt-5"> Add Data </a>


@endsection
