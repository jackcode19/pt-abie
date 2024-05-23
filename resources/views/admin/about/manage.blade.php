@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    @php
        if (isset($about)) {
            $actionUrl = route('about.update', $about->id);
        } else {
            $actionUrl = route('about.manage');
        }
    @endphp
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">About</h1>
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
                            <h3 class="card-title">About Perusahaan</h3>
                        </div>
                        <form id="submitAbout" method="POST" action="{{ $actionUrl }}" enctype="multipart/form-data">
                            @if (@isset($about))
                                {{ method_field('PUT') }}
                                <input type="hidden" name="user_id" value="{{ $about->id }}" />
                            @endif
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image">Gambar Produk</label>
                                    @if (isset($about))
                                        <div class="mb-3">
                                            {{-- <img src="{{ asset('/images/about/' . $about->image) }}" alt=""
                                                style="width: 170px;" height="120px" class="img-rounded"> --}}
                                                <img src="{{ Storage::url('abouts/'. $about->image) }}" alt=""
                                                style="width: 170px;" height="120px" class="img-rounded">
                                        </div>
                                    @endif
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="image">
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
                            
                                <div class="form-group">
                                    <label for="name">Tentang Kami</label>
                                    <textarea class="form-control" rows="4" name="aboutme" id="aboutme" required placeholder="Deskripsi ...">{{ isset($about) ? $about->aboutme : old('aboutme') }}</textarea>
                                    @error('aboutme')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="name">Visi Misi</label>
                                    <textarea class="form-control" rows="3" name="visi_misi" id="visiMisi" placeholder="Sub Deskripsi ...">{{ isset($about) ? $about->visi_misi : old('visi_misi') }}</textarea>
                                    @error('visi_misi')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Nilai Kami</label>
                                    <textarea class="form-control" rows="3" name="ourvalue" id="ourvalue" required placeholder="Pengenalan ...">{{ isset($about) ? $about->ourvalue : old('ourvalue') }}</textarea>
                                    @error('ourvalue')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Aktivitas Kami</label>
                                    <textarea class="form-control" rows="3" name="ouractivity" id="ouractivity" required placeholder="Pengenalan ...">{{ isset($about) ? $about->ouractivity : old('ouractivity') }}</textarea>
                                    @error('ouractivity')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            
            $('#aboutme').summernote({
            placeholder: 'Hello Bootstrap 5',
            tabsize: 2,
            height: 100
            });

            $('#visiMisi').summernote({
            placeholder: 'Visi Misi',
            tabsize: 2,
            height: 100
            });

            $('#ourvalue').summernote({
            placeholder: 'Nilai Nilai Perusahaan',
            tabsize: 2,
            height: 100
            });

            $('#ouractivity').summernote({
            placeholder: 'Aktivitas Kami',
            tabsize: 2,
            height: 100
            });
        });
    </script>
