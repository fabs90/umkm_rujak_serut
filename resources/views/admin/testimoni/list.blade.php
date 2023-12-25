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
                            <li class="breadcrumb-item active">List Testimoni</li>
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
                                    <i class="bi bi-person-lines-fill mr-1"></i>
                                    List Testimoni
                                </h5>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
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
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">No.Telp</th>
                                                        <th scope="col">Gambar</th>
                                                        <th scope="col" class="col-2">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>

                                                    @foreach ($testimoni as $data)
                                                        <tr>
                                                            <td>{{ $i }}</td>
                                                            {{-- Access nama menu --}}
                                                            <td>{{ $data->name }}</td>
                                                            <td>{{ $data->no_telp }}</td>
                                                            <td>
                                                                <img src="{{ asset('storage/testimoni/' . $data->gambar) }}"
                                                                    class="image-view">
                                                            </td>
                                                            <td>
                                                                <form
                                                                    action="{{ route('testimoni.destroy', ['id' => $data->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-danger btn-hapus-testimoni">Hapus</button>
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
            </div>
        </section>
    </div>


@endsection
