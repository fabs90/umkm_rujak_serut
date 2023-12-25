@extends('admin.layouts.master')
@section('title', 'Admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Ubah Promo</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-lg-10 col-sm-12 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <i class="bi bi-file-earmark-plus mr-1"></i>
                                    Ubah promo
                                </h5>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.promo.update', ['slug' => $promo->slug]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row d-lg-flex align-items-center justify-content-center">
                                        {{-- Col --}}
                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <label for="nama" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Nama Menu</label>
                                            <div class="">
                                                <select name="menus" id="nama_menus"
                                                    class="form-control @error('menus')
                                                is-invalid
                                                @enderror">
                                                    <option value=""> == PILIH MENU == </option>
                                                    @foreach ($menu as $data)
                                                        <option value="{{ $data->id }}">
                                                            {{ $data->nama }}</option>
                                                    @endforeach
                                                </select>
                                                @error('menus')
                                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- End Col --}}
                                        {{-- Col --}}
                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <label for="hargapromo" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Harga promo</label>
                                            <input type="number"
                                                class="form-control @error('harga')
                                                is-invalid
                                            @enderror"
                                                id="hargapromo" name="harga" aria-describedby="hargapromo"
                                                autocomplete="off" required value="{{ $promo->harga }}">
                                            @error('harga')
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- End Col --}}
                                        {{-- Start Col --}}
                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <label for="deskripsi" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Deskripsi promo</label>
                                            <textarea
                                                class="form-control @error('deskripsi')
                                        is-invalid
                                    @enderror cols="5"
                                                rows="4" name="deskripsi" id="deskripsi" required>{{ $promo->deskripsi }}</textarea>
                                            @error('deskripsi')
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- End Col --}}
                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <label for="foto" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Foto promo</label>
                                            <div>
                                                <img src="{{ asset('storage/promo/' . $promo->gambar) }}" alt="gambar    "
                                                    class="image-view">
                                            </div>
                                            <input type="file" class="form-control" name="image" id="foto"
                                                accept="image/*">
                                            @error('image')
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            @if ($errors->has('image'))
                                                <ul>
                                                    @foreach ($errors->get('image') as $e)
                                                        <li style="color: red">{{ $e }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>

                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <input class="btn btn-success btn-block" type="submit" value="Ubah promo">
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
