@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    @php
        if (isset($gallery)) {
            $actionUrl = route('gallery.update', $gallery->gallery_id);
        } else {
            $actionUrl = route('gallery.store');
        }
    @endphp
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gallery</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-seccond">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Gallery</h3>
                        </div>
                        <form id="submitSlider" method="POST" action="{{ $actionUrl }}" enctype="multipart/form-data">
                            @if (@isset($gallery))
                                {{ method_field('PUT') }}
                                <input type="hidden" name="user_id" value="{{ $gallery->id }}" />
                            @endif
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Judul Gallery</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Judul Galley" value="{{ isset($gallery) ? $gallery->title : old('title') }}">

                                    @error('title')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Cover</label>
                                    @if(isset($gallery))
                                    <div class="mb-3">
                                        <img src="{{ Storage::url('gallery/covers/'. $gallery->cover_image) }}" alt=""
                                            style="width: 170px;" height="120px" class="img-rounded">
                                    </div>
                                    @endif
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="cover_image" id="cover_image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    @error('cover_image')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Gallery Image</label>

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image[]" multiple
                                                id="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    @error('image')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" submitSlider="submit" class="btn btn-info btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>

                    @if (isset($gallery))
                        <div class="card card-primary">
                            <div class="card-header p-0 border-bottom-0">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dataItemImages" class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                @foreach ($object['columns_gallery_image'] as $column)
                                                    <th>{{ $column['label'] }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection

@if (isset($gallery))
    @push('script')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#dataItemImages').DataTable({

                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json',
                    },

                    ajax: '{{ $object['url'] }}',

                    processing: true,
                    serverSide: true,
                    ordering: true,
                    searching: false,
                    paging: true,
                    autoWidth: true,
                    scrollY: false,
                    // lengthChange: false,
                    info: true,

                    columns: [
                        @foreach ($object['columns_gallery_image'] as $column)
                            {
                                data: '{{ $column['name'] }}',
                                name: '{{ $column['name'] }}'
                            },
                        @endforeach
                    ],
                    drawCallback: function() {
                        // Delete Confirmation
                        $(".delete-form").on("click", function() {
                            var form = $(this).parent().find("form");
                            Swal.fire({
                                title: 'Are you sure?',
                                text: "Apakah kamu yakin ingin menghapus item ini?",
                                type: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes!'
                            }).then((result) => {
                                if (result.value) {
                                    form.submit();
                                }
                            })
                        });
                    }
                });
            });
        </script>
    @endpush
@endif