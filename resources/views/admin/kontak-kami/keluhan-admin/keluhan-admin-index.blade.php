@if (Session::get('status_user') == '1' || Session::get('status_user') == '9')
    @extends('admin/layout-komponen/master')

    @section('title', 'Keluhan')

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
    @section('keluhan-admin', 'active')
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
                                <h3 class="card-title">Keluhan User</h3>
                            </div>
                            <div class="card-body px-4">
                                <table id="example2" class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama User</th>
                                            <th>Member ID</th>
                                            <th>E-Mail</th>
                                            <th>Nomor Handphone</th>
                                            <th>Outlet</th>
                                            <th>Pesan Keluhan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($keluhan as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->member_id }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->phone }}</td>
                                                <td>{{ $data->outlet }}</td>
                                                <td>{{ $data->keluhan }}</td>
                                                @if ($data->status == 1)
                                                    <td>Aktif</td>
                                                @else
                                                    <td>NonAktif</td>
                                                @endif


                                            </tr>
                                            <!-- Model Delete -->
                                            <!-- @include('admin.profil.profil-delete') -->
                                            <!-- Model Update -->
                                            <!-- @include('admin.profil.profil-update')
                              @empty -->
                                            <div class="alert alert-danger">
                                                Data Kontak belum Ada Inputan.
                                            </div>
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama User</th>
                                            <th>Member ID</th>
                                            <th>E-Mail</th>
                                            <th>Nomor Handphone</th>
                                            <th>Outlet</th>
                                            <th>Pesan Keluhan</th>
                                            <th>Status</th>
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
    @endsection

    @section('script')
        <!-- script internal place -->
        <!-- bs-custom-file-input -->
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
    @endsection
@else
    @include('admin.nologin')
@endif
