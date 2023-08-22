@extends('component')
@section('title')
    admin
@endsection
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-8">
            <h1 class="text-center my-3">Selamat Datang, Admin UNIBOOKSTOREK</h1>
            <table class="table mt-3">
                <thead>
                    <tr class="bg-dark text-white rounded-top border border-bottom-0">
                        <th scope="col">ID-Penerbit</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Ket</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>3</td>
                        <td>083167075729</td>
                        <td>
                            <button type="button"
                                class="btn bg-secondary p-1 text-white fs-6 fw-light mx-auto">Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
