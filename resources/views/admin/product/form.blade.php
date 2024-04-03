@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    @php
        if (isset($product)) {
            $actionUrl = route('product.update', $product->id);
        } else {
            $actionUrl = route('product.store');
        }
    @endphp
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
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
                            <h3 class="card-title">Tambah Product</h3>
                        </div>
                        <form id="submitProduct" method="POST" action="{{ $actionUrl }}" enctype="multipart/form-data">
                            @if (@isset($product))
                                {{ method_field('PUT') }}
                                <input type="hidden" name="user_id" value="{{ $product->id }}" />
                            @endif
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Produk</label>
                                    <input type="text" class="form-control" name="product_name" id="product_name"
                                        placeholder="Nama Produk" value="{{ isset($product) ? $product->product_name : old('product_name') }}">

                                    @error('product_name')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" name="category_id" id="category_id" style="width: 100%;">
                                        <option value="">Pilih kategori</option>
                                    @foreach($categoryList as $category)
                                    <option {{ isset($product) && $product->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                    </select>
                                    @error('category')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Gambar Produk</label>
                                    @if (isset($product))
                                        <div class="mb-3">
                                            <img src="{{ asset('/images/products/' . $product->product_image) }}" alt=""
                                                style="width: 170px;" height="120px" class="img-rounded">
                                        </div>
                                    @endif
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="product_image" id="product_image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>

                                    @error('product_image')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Deskripsi</label>
                                    <textarea class="form-control" rows="3" name="description" id="description" placeholder="Deskripsi ...">{{ isset($product) ? $product->description : old('description') }}</textarea>
                                    @error('description')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" submitProduct="submit" class="btn btn-info btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection