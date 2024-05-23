@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    @php
        if (isset($slider)) {
            $actionUrl = route('slider.update', $slider->id);
        } else {
            $actionUrl = route('slider.store');
        }
    @endphp
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Slider</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Slider</li>
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
                            <h3 class="card-title">Tambah Slider</h3>
                        </div>
                        <form id="submitSlider" method="POST" action="{{ $actionUrl }}" enctype="multipart/form-data">
                            @if (@isset($slider))
                                {{ method_field('PUT') }}
                                <input type="hidden" name="user_id" value="{{ $slider->id }}" />
                            @endif
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Judul Slider</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Judul Slider" value="{{ isset($slider) ? $slider->title : old('title') }}">

                                    @error('title')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Gambar Produk</label>
                                    @if (isset($slider))
                                        <div class="mb-3">
                                            <img src="{{ Storage::url('sliders/'. $slider->slider_image) }}" alt=""
                                                style="width: 170px;" height="120px" class="img-rounded">
                                        </div>
                                    @endif
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="slider_image" id="slider_image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>

                                    @error('slider_image')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Deskripsi</label>
                                    <textarea class="form-control" rows="3" name="description" id="description" placeholder="Deskripsi ...">{{ isset($slider) ? $slider->description : old('description') }}</textarea>
                                    @error('description')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" submitSlider="submit" class="btn btn-info btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection