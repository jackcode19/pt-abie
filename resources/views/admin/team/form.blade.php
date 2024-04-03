@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    @php
        if (isset($team)) {
            $actionUrl = route('team.update', $team->id);
        } else {
            $actionUrl = route('team.store');
        }
    @endphp
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Team</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Team</li>
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
                            <h3 class="card-title">Tambah Team</h3>
                        </div>
                        <form id="submitTeam" method="POST" action="{{ $actionUrl }}" enctype="multipart/form-data">
                            @if (@isset($team))
                                {{ method_field('PUT') }}
                                <input type="hidden" name="user_id" value="{{ $team->id }}" />
                            @endif
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Nama Anggota" value="{{ isset($team) ? $team->name : old('name') }}">

                                    @error('name')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Foto Profile</label>
                                    @if (isset($team))
                                        <div class="mb-3">
                                            <img src="{{ asset('/images/teams/' . $team->team_image) }}" alt=""
                                                style="width: 170px;" height="120px" class="img-rounded">
                                        </div>
                                    @endif
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="team_image" id="team_image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    @error('team_image')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Jabatan</label>
                                    <input type="text" class="form-control" name="position" id="position"
                                        placeholder="Jabatan Anggota" value="{{ isset($team) ? $team->position : old('position') }}">

                                    @error('position')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" submitTeam="submit" class="btn btn-info btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection