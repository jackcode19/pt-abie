@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    @php
        if (isset($testimonial)) {
            $actionUrl = route('testimonial.update', $testimonial->id);
        } else {
            $actionUrl = route('testimonial.store');
        }
    @endphp
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Testimonial</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Testimonial</li>
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
                            <h3 class="card-title">Tambah Karir</h3>
                        </div>
                        <form id="submitCareer" method="POST" action="{{ $actionUrl }}" enctype="multipart/form-data">
                            @if (@isset($testimonial))
                                {{ method_field('PUT') }}
                                <input type="hidden" name="user_id" value="{{ $testimonial->id }}" />
                            @endif
                            @csrf
                            <div class="card-body">
                              <div class="form-group">
                                    <label>Klien</label>
                                    <select class="form-control" name="client_id" id="client_id" style="width: 100%;">
                                        <option value="">Pilih Klien</option>
                                    @foreach($clients as $client)
                                    <option {{ isset($testimonial) && $client->client_id == $client->client_id ? 'selected' : '' }} value="{{ $client->client_id }}">{{ $client->title }}</option>
                                    @endforeach
                                    </select>
                                    @error('provinces_id')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Deskripsi</label>
                                    <textarea class="form-control" rows="3" name="description" id="description" placeholder="Deskripsi ...">{{ isset($testimonial) ? $testimonial->description : old('description') }}</textarea>
                                    @error('description')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" submitCareer="submit" class="btn btn-info btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection