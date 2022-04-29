@extends('admin/layout-komponen/master')

@section('title', 'Outlet/Waralaba')

@section('css')
    <!-- css internal place -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
    <style>
        table.dataTable td {
            font-size: 14px;
        }

        table.dataTable th {
            font-size: 14px;
        }

    </style>
@endsection
@section('outlet-admin', 'active')
@section('konten')
    <!-- Content Body place -->
    <section class="content">
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12 my-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Outlet / Waralaba</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body px-4">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Tambah
                                Data</button><br><br>
                            <table id="example2" class="table table-bordered table-striped ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Thumbnail</th>
                                        <th>Nama Outlet</th>
                                        <th>Alamat Outlet</th>
                                        <th>Nomor Telepon</th>
                                        <th>Nomor Fax</th>
                                        <th>Link IG</th>
                                        <th>Link Lainnya</th>
                                        <th>Users ID</th>
                                        <th>Provinsi</th>
                                        <th>City </th>
                                        <th>Citysub </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($outlet as $outlet)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="/uploads/{{ $outlet->thumbnail }}" width="100" height="100"
                                                    alt="">
                                            </td>
                                            <td>{{ $outlet->name }}</td>
                                            <td>{{ $outlet->address }}</td>
                                            <td>{{ $outlet->phone }}</td>
                                            <td>{{ $outlet->fax }}</td>
                                            <td>{{ $outlet->link_ig }}</td>
                                            <td>{{ $outlet->link_2 }}</td>
                                            <td>{{ $outlet->users_id }}</td>
                                            <td>{{ $outlet->province_name }}</td>
                                            <td>{{ $outlet->regency_name }}</td>
                                            <td>{{ $outlet->district_name }}</td>
                                            <td class="text-center">
                                                <button class="btn btn-danger" alt="Hapus" data-toggle="modal"
                                                    data-target="#delete{{ $outlet->id }}"><i
                                                        class="fas fa-trash-alt"></i></i></button>

                                                <button class="btn btn-success" alt="Edit" data-toggle="modal"
                                                    data-target="#edit{{ $outlet->id }}"><i
                                                        class="fas fa-pen-square"></i></button>
                                            </td>
                                        </tr>
                                        <!-- Model Delete -->
                                        @include(
                                            'admin.outlet-admin.outlet-admin-delete'
                                        )
                                        <!-- Model Update -->
                                        @include(
                                            'admin.outlet-admin.outlet-admin-update'
                                        )

                                    @empty
                                        <div class="alert alert-danger">
                                            Data Outlet belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Thumbnail</th>
                                        <th>Nama Outlet</th>
                                        <th>Alamat Outlet</th>
                                        <th>Nomor Telepon</th>
                                        <th>Nomor Fax</th>
                                        <th>Link IG</th>
                                        <th>Link Lainnya</th>
                                        <th>Users ID</th>
                                        <th>Provinsi</th>
                                        <th>City </th>
                                        <th>Citysub </th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    @include('admin.outlet-admin.outlet-admin-create')
@endsection

@section('script')
    <script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables  & plugins -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()
            $('#summernote2').summernote()
            $('#summernote3').summernote()
            $('#summernote4').summernote()

            //datatables
            $("#example2").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": true,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script>
        $(function() {
            $('#province').on('change', function() {
                let province_id = $('#province').val();

                $.ajax({
                    url: "{{ route('getKotaById') }}",
                    type: "POST",
                    data: {
                        province_id: province_id,
                        "_token": "{{ csrf_token() }}"
                    },
                    cache: false,
                    success: function(msg) {
                        $('#kota').html(msg);
                        $('#kecamatan').html(' ');
                    },
                    error: function(data) {
                        console.log('error:', data);
                    }
                })

            })
            $('#kota').on('change', function() {
                let city_id = $('#kota').val();

                $.ajax({
                    type: "POST",
                    url: "{{ route('getKecamatanById') }}",
                    data: {
                        city_id: city_id,
                        "_token": "{{ csrf_token() }}"
                    },
                    cache: false,
                    success: function(msg) {
                        $('#kecamatan').html(msg);
                    },
                    error: function(data) {
                        console.log('error:', data);
                    },
                });

            })
        })
    </script>
    <script>
        $(function() {
            $('#province_id').on('change', function() {
                let province_id = $('#province_id').val();
                $.ajax({
                    url: "{{ route('getKotaById') }}",
                    type: "POST",
                    data: {
                        province_id: province_id,
                        "_token": "{{ csrf_token() }}"
                    },
                    cache: false,
                    success: function(msg) {
                        console.log(msg);
                        $('#city_id').html(msg);
                        $('#citysub_id').html(' ');
                    },
                    error: function(data) {
                        console.log('error:', data);
                    }
                })

            })
            $('#city_id').on('change', function() {
                let city_id = $('#city_id').val();

                $.ajax({
                    url: "{{ route('getKecamatanById') }}",
                    type: "POST",
                    data: {
                        city_id: city_id,
                        "_token": "{{ csrf_token() }}",
                    },
                    cache: false,
                    success: function(msg) {
                        $('#citysub_id').html(msg);
                    },
                    error: function(data) {
                        console.log('error:', data);
                    },
                });

            })
        })
    </script>


@endsection
