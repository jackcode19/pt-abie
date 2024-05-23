@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    @php
        if (isset($gallery_image)) {
            $actionUrl = route('gallery.updateGalleryImage', $gallery_image->gallery_image_id);
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
                        <li class="breadcrumb-item active">Gallery Image</li>
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
                           @if(isset($gallery_image))
                           <h3 class="card-title">Edit Gallery</h3>
                           @else
                           <h3 class="card-title">Tambah Gallery</h3>
                           @endif
                            
                        </div>
                        <form id="submitGalleryImage" method="POST" action="{{ $actionUrl }}" enctype="multipart/form-data">
                            @if (@isset($gallery_image))
                                {{ method_field('PUT') }}
                                <input type="hidden" name="user_id" value="{{ $gallery_image->gallery_image_id }}" />
                            @endif
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image">Gallery Image</label>
                                    @if(isset($gallery_image))
                                    <div class="mb-3">
                                        <img src="{{ asset('/storage/gallery/gallery_image/'. $gallery_image->image) }}" alt=""
                                            style="width: 170px;" height="120px" class="img-rounded">
                                    </div>
                                    @endif
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image"
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
                                <button type="submitGalleryImage" submitSlider="submit" class="btn btn-info btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

