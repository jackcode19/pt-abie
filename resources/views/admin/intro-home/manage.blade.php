@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    @php
        if (isset($about)) {
            $actionUrl = route('intro.update', $intro->id);
        } else {
            $actionUrl = route('intro.manage');
        }
    @endphp
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Introduction</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-seccond">
                        <div class="card-header">
                            <h3 class="card-title">Data Company</h3>
                        </div>
                        <form id="submitAbout" method="POST" action="{{ $actionUrl }}" enctype="multipart/form-data">
                            @if (@isset($about))
                                {{ method_field('PUT') }}
                                <input type="hidden" name="user_id" value="{{ $about->id }}" />
                            @endif
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Deskripsi</label>
                                    <input type="text" class="form-control" name="description" id="description"
                                        placeholder="Deskripsi" value="{{ isset($about) ? $intro->title : old('description') }}">

                                    @error('title')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Visi</label>
                                    <textarea class="form-control" rows="3" name="visi" id="visi" placeholder="Pengenalan ...">{{ isset($intro) ? $intro->visi : old('visi') }}</textarea>
                                    @error('visi')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="name">Misi</label>
                                    <textarea class="form-control" rows="4" name="misi" id="misi" placeholder="Deskripsi ...">{{ isset($intro) ? $intro->misi : old('misi') }}</textarea>
                                    @error('misi')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label for="name">Deskripsi 2</label>
                                    <textarea class="form-control" rows="3" name="description_2" id="summernote" placeholder="Sub Deskripsi ...">{{ isset($about) ? $about->description_2 : old('description_2') }}</textarea>
                                    @error('description_2')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div> --}}
                            </div>

                            

                            <div class="card-footer">
                                <button type="submit" submitAbout="submit" class="btn btn-info btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection

@if (isset($item))
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
                        @foreach ($object['columns_item_image'] as $column)
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
