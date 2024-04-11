@extends('cms-layout.main')

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><h1>{{ $data == null ? 'Tambah' : 'Ubah' }} Project</h1></h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" name="id" value="{{ $data == null ? 'null' : $data->id }}">
                                
                                <div class="form-group">
                                    <label class="mt-4">Thumbnail</label>
                                    <div class="file-upload">
                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type="file" onchange="readURL(this);" accept="image/*" name="thumbnail" required />
                                            <div class="drag-text">
                                                <i class="fas fa-upload"></i>
                                                <h3>Seret Gambar atau Klik untuk input gambar</h3>
                                            </div>
                                        </div>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="#" alt="your image" />
                                            <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload()" class="remove-image">Hapus '<span class="image-title">Uploaded Image</span>'</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Thumbnail</label>
                                    <input type="text" class="form-control" name="thumbnail" value="{{ $data == null ? '' : $data->thumbnail }}">
                                </div> --}}
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" name="judul" value="{{ $data == null ? '' : $data->judul }}">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="summernote-simple" name="deskripsi" >{{ $data == null ? '' : $data->deskripsi }}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Link Local</label>
                                            <input type="text" class="form-control" name="link_local" value="{{ $data == null ? '' : $data->link_local }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Link Asli</label>
                                            <input type="text" class="form-control" name="link_asli" value="{{ $data == null ? '' : $data->link_asli }}">
                                        </div>
                                    </div>
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

<script>

    function readURL(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
        $('.image-upload-wrap').hide();

        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();

        $('.image-title').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
    });

</script>

@endsection
