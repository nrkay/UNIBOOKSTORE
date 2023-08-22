@extends('component')
@section('title')
    Page Pengadaan
@endsection
@section('content')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-8">
            <h1 class="text-center my-3">Stok Buku Pengadaan</h1>
            <table class="table mt-3">
                <thead>
                    <tr class="bg-dark text-white rounded-top border border-bottom-0">
                        <th scope="col">ID-BUKU</th>
                        <th scope="col">Judul</th>
                        <th scope="col">ID-Penerbit</th>
                        <th scope="col">Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@endsection
