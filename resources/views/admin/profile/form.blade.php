@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    @php
        if (isset($profile)) {
            $actionUrl = route('profile.update', $profile->id);
        } else {
            $actionUrl = route('profile.store');
        }
    @endphp
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
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
                            <h3 class="card-title">Tambah Profile Perusahaan</h3>
                        </div>
                        <form id="submitProfile" method="POST" action="{{ $actionUrl }}" enctype="multipart/form-data">
                            @if (@isset($profile))
                                {{ method_field('PUT') }}
                                <input type="hidden" name="user_id" value="{{ $profile->id }}" />
                            @endif
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Judul Artikel</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Judul Profile" value="{{ isset($profile) ? $profile->title : old('title') }}">

                                    @error('title')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Konten</label>
                                    <textarea class="form-control" rows="3" name="content" id="summernote" placeholder="Konten ...">{{ isset($article) ? $profile->content : old('content') }}</textarea>
                                    @error('content')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" submitProfile="submit" class="btn btn-info btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection