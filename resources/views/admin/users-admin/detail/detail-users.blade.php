@extends('admin/layout-komponen/master')

@section('title', 'Roles')

@section('css')
    <!-- css internal place -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('career-admin', 'active')
@section('konten')
    <!-- Content Body place -->
    <section class="content">
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12 my-2">
                    <div class="card">
                        <div class="card-header">
                                <h3 class="card-title">Data Role Users</h3>
                            </div>
                        <!-- /.card-header -->
                        <div class="card-body px-4">
                           <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2"
                           style="display:none;">Tambah Data</button>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($role as $users)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $users->name }}</td>
                                            <td class="text-center">
                                                        <button class="btn btn-danger" alt="Hapus" data-toggle="modal"
                                                            data-target="#delete{{ $users->id }}"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                     <button class="btn btn-success" alt="Edit" data-toggle="modal"
                                                        data-target="#edit{{ $users->id }}"><i
                                                            class="fas fa-pen-square"></i></button>
                                            </td>
                                        </tr>
                                        <!-- Model Delete -->
                                            @include('admin.users-admin.detail.detail-users-delete')
                                            <!-- Model Update -->
                                            @include('admin.users-admin.detail.detail-users-update')
                                    @empty
                                        <div class="alert alert-danger">
                                            Belum Memiliki Role.
                                        </div>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Role</th>
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
        </div>
    </section>
    @include('admin.users-admin.detail.detail-users-create')
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
    <!-- Page specific script -->
    <script>
        $(function() {

            //datatables
            $("#example2").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": true,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
