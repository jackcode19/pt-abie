@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    @php
        if (isset($homeContent)) {
            $actionUrl = route('home.update', $homeContent->id);
        } else {
            $actionUrl = route('home.store');
        }
    @endphp
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Home Content</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Home Content</li>
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
                            <h3 class="card-title">Home Content Perusahaan</h3>
                        </div>
                        <form id="submitHome" method="POST" action="{{ $actionUrl }}" enctype="multipart/form-data">
                            @if (@isset($homeContent))
                                {{ method_field('PUT') }}
                                <input type="hidden" name="user_id" value="{{ $homeContent->id }}" />
                            @endif
                            @csrf
                            <div class="card-body">
                            
                                <div class="form-group">
                                    <label for="name">Tentang Kami</label>
                                    <textarea class="form-control" rows="4" name="about_us_summary" id="about_us_summary" required placeholder="About Summary ...">{{ isset($homeContent) ? $homeContent->about_us_summary : old('about_us_summary') }}</textarea>
                                    @error('about_us_summary')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="name">Visi</label>
                                    <textarea class="form-control" rows="3" name="about_us_vision" id="about_us_vision" placeholder="Sub Deskripsi ...">{{ isset($homeContent) ? $homeContent->about_us_vision : old('about_us_vision') }}</textarea>
                                    @error('about_us_vision')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Misi</label>
                                    <textarea class="form-control" rows="3" name="about_us_mision" id="about_us_mision" required placeholder="Pengenalan ...">{{ isset($homeContent) ? $homeContent->about_us_mision : old('about_us_mision') }}</textarea>
                                    @error('about_us_mision')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Nilai Kami</label>
                                    <textarea class="form-control" rows="3" name="about_us_value" id="about_us_value" required placeholder="Pengenalan ...">{{ isset($homeContent) ? $homeContent->about_us_value : old('about_us_value') }}</textarea>
                                    @error('about_us_value')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" submitHome="submit" class="btn btn-info btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            
            // $('#about_us_summary').summernote({
            // placeholder: 'Tentang Kami',
            // tabsize: 2,
            // height: 100
            // });

            // $('#about_us_vision').summernote({
            // placeholder: 'Visi Misi',
            // tabsize: 2,
            // height: 100
            // });

            // $('#about_us_mision').summernote({
            // placeholder: 'Nilai Nilai Perusahaan',
            // tabsize: 2,
            // height: 100
            // });

            // $('#about_us_value').summernote({
            // placeholder: 'Nilai Nilai Perusahaan',
            // tabsize: 2,
            // height: 100
            // });

        });
    </script>
