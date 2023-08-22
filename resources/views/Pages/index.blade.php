@extends('component')
@section('title')
    Index
@endsection
@section('content')
    @foreach ($data as $item)
        <p>{{ $item }}</p>
    @endforeach
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-8">
            <h1 class="text-center my-3">Daftar Buku</h1>
            <table class="table mt-3">
                <thead>
                    <tr class="bg-dark text-white rounded-top border border-bottom-0">
                        <th scope="col">ID-BUKU</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Penerbit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>{{ $item->publisher_id }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
