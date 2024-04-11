@extends('cms-layout.main')

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{ $data == null ? 'Tambah' : 'Ubah' }} Experience</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <form action="{{route('experience.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" name="id" value="{{ $data == null ? 'null' : $data->id }}">
                                <div class="form-group">
                                    <label>Nama Perusahaan</label>
                                    <input type="text" class="form-control" name="nama_perusahaan" value="{{ $data == null ? '' : $data->nama_perusahaan }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Posisi</label>
                                    <input type="text" class="form-control" name="posisi" value="{{ $data == null ? '' : $data->posisi }}" required>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Dari</label>
                                            <input type="text" class="form-control" name="dari" value="{{ $data == null ? '' : $data->dari }}" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Sampai</label>
                                            <input type="text" class="form-control" name="sampai" value="{{ $data == null ? '' : $data->sampai }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="summernote-simple" name="deskripsi" required>{{ $data == null ? '' : $data->sampai }}</textarea>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </form>
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
