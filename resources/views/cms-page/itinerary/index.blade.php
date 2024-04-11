@extends('cms-layout.main')

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Project</h1>
        </div>
        <div class="section-body">
            <a href="" class="btn btn-primary mb-4">Tambah Project</a>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Thumbnail</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Link-Local</th>
                                        <th>Link-Asli</th>
                                        <th>Setting</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            6
                                        </td>
                                        <td style="padding: 20px">
                                            <a class="btn btn-warning mb-2" href="">Edit</a> <br>
                                            <a class="btn btn-danger" href="">Delete</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- @include('page-admin.banner.modal') --}}

</div>

@endsection

@section('js')

@endsection
