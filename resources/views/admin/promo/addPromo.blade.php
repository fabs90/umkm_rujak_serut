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
                            <li class="breadcrumb-item active">Tambah Promo</li>
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
                                    Tambah Promo
                                </h5>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
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
                                            <label for="harga" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Harga Promo</label>
                                            <input type="number"
                                                class="form-control @error('harga')
                                                is-invalid
                                            @enderror"
                                                id="harga" name="harga" aria-describedby="harga" autocomplete="off"
                                                value="{{ old('harga') }}" required>
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
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Deskripsi
                                                Promo</label>
                                            <textarea
                                                class="form-control @error('deskripsi')
                                        is-invalid
                                    @enderror cols="5"
                                                rows="4" name="deskripsi" id="deskripsi" required>{{ old('deskripsi') }}</textarea>
                                            @error('deskripsi')
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- End Col --}}
                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <label for="foto" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Foto Menu</label>
                                            <input type="file" class="form-control" name="image" required
                                                id="foto" accept="image/*">
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
                                            <input class="btn btn-success btn-block" type="submit" value="Tambah Promo">
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-lg-10 col-sm-12 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <i class="bi bi-person-lines-fill mr-1"></i>
                                    List Promo
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tab-content p-0">
                                            <table id="all_menu"
                                                class="table table-striped table-bordered text-center table-responsive-sm"
                                                cellpadding="0" cellspacing="0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No.</th>
                                                        <th scope="col">Nama Menu</th>
                                                        <th scope="col">Harga Promo</th>
                                                        <th scope="col">Deskripsi</th>
                                                        <th scope="col">Gambar</th>
                                                        <th scope="col" class="col-2">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>

                                                    @foreach ($datas as $data)
                                                        <tr>
                                                            <td>{{ $i }}</td>
                                                            {{-- Access nama menu --}}
                                                            <td>{{ $data->menu->nama }}</td>
                                                            <td>Rp.{{ number_format($data->harga, 2, ',', '.') }}
                                                            </td>
                                                            <td>
                                                                {{ $data->deskripsi }}
                                                            </td>
                                                            <td>
                                                                <img src="{{ asset('storage/promo/' . $data->gambar) }}"
                                                                    class="image-view">
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-sm btn-success btn-update-promo"
                                                                    href="{{ route('admin.promo.show', ['slug' => $data->slug]) }}"
                                                                    role="button">Ubah</a>
                                                                <form
                                                                    action="{{ route('promo.destroy', ['slug' => $data->slug]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-danger btn-hapus-promo">Hapus</button>
                                                                </form>
                                                            </td>

                                                        </tr>
                                                        <?php $i++; ?>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
