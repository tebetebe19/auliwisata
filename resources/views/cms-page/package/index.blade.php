@extends('cms-layout.main')

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Experience</h1>
        </div>

        <div class="section-body">
            <a href="{{route('experience.show','create-experience')}}" class="btn btn-primary mb-4">Tambah Experience</a>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md text-center" id="tableExperience">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Jabatan</th>
                                        <th>Dari</th>
                                        <th>Sampai</th>
                                        <th>Deskripsi</th>
                                        <th>Setting</th>
                                    </tr>
                                    @foreach ($library as $library)
                                    <tr>
                                        <td>
                                            {{$library->id}}
                                        </td>
                                        <td>
                                            {{$library->nama_perusahaan}}
                                        </td>
                                        <td>
                                            {{$library->posisi}}
                                        </td>
                                        <td>
                                            {{$library->dari}}
                                        </td>
                                        <td>
                                            {{$library->sampai}}
                                        </td>
                                        <td class="text-left">
                                            {!!$library->deskripsi!!}
                                        </td>
                                        <td style="padding: 20px">
                                            <a class="btn btn-warning mb-2" href="{{route('experience.show',$library->id)}}">Edit</a> <br>
                                            <a class="btn btn-danger deleteExperience" data-toggle="modal" data-id="{{$library->id}}" href="">Delete</a>
                                            <button class="btn btn-info deleteExperience" data-toggle="modal" data-id="{{$library->id}}">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
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

<script>

    $(document).ready(function(){
    
        $('#tableExperience tbody').on('click','.deleteExperience',function(){
    
        let id = $(this).data('id');
    
            swal({
                title: "Are you sure?",
                text: "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location ="../experience/delete/"+id+""
                }
            });
        });
    });
    
</script>
    

@endsection
