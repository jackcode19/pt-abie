@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    @php
        if (isset($banner)) {
            $actionUrl = route('banner.update', $banner->id);
        } else {
            $actionUrl = route('banner.store');
        }
    @endphp
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Banner</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Banner</li>
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
                            <h3 class="card-title">Tambah Banner</h3>
                        </div>
                        <form id="submitBanner" method="POST" action="{{ $actionUrl }}" enctype="multipart/form-data">
                            @if (@isset($banner))
                                {{ method_field('PUT') }}
                                <input type="hidden" name="user_id" value="{{ $banner->id }}" />
                            @endif
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Judul Banner</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Judul Banner" value="{{ isset($banner) ? $banner->title : old('title') }}">

                                    @error('title')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    @if (isset($banner))
                                        <div class="mb-3">
                                            <img src="{{ Storage::url('banners/'. $banner->image) }}" alt=""
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
                                    <label for="name">Halaman</label>
                                    <input type="text" class="form-control" name="page" id="page"
                                        placeholder="Halaman Banner" value="{{ isset($banner) ? $banner->page : old('page') }}">

                                    @error('page')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label for="name">Status</label>
                                    <input type="text" class="form-control" name="status" id="status"
                                        placeholder="Status" value="{{ isset($banner) ? $banner->status : old('status') }}">

                                    @error('page')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div> --}}
                            </div>
                            <div class="card-footer">
                                <button type="submit" submitBanner="submit" class="btn btn-info btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection