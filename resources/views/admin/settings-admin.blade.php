@if(Session::has('roles'))
@for($i = 0; $i < count(Session::get('roles')); $i++)
    @if(session('roles')[$i]['roles_id'] == 1 || session('roles')[$i]['roles_id'] == 14)
@extends('admin/layout-komponen/master')

@section('title', 'Settings')

@section('css')
    <!-- css internal place -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('settings-admin', 'active')
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
                            <h3 class="card-title">Data Setting Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body px-4">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Key</th>
                                        <th>Url</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($settings as $users)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $users->key }}</td>
                                            <td>{{ $users->value }}</td>
                                            <td class="text-center">
                                                {{-- @if ($users->status == 1) --}}
                                                {{-- <button class="btn btn-danger" alt="Hapus" data-toggle="modal"
                                                    data-target="#delete{{ $users->id }}"><i
                                                        class="fas fa-trash-alt"></i></i></button> --}}
                                                {{-- @endif --}}
                                                <button class="btn btn-success" alt="Edit" data-toggle="modal"
                                                    data-target="#edit{{ $users->id }}"><i
                                                        class="fas fa-pen-square"></i></button>
                                            </td>
                                        </tr>
                                        <!-- Model Update -->
                                        <!-- Modal -->
                                        <div class="modal fade bd-example-modal-lg" id="edit{{ $users->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="newsupdate" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="newsupdate">Update Social Media</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ url('/settings-admin/update/' . $users->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf
                                                            <div class="form-group">
                                                                <fieldset disabled>
                                                                    <label for="key">Key :</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-border @error('key') is-invalid @enderror"
                                                                        id="key" placeholder="Job Name" name="key"
                                                                        value="{{ $users->key }}" required>
                                                                    @error('key')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </fieldset>
                                                            </div>
                                                            <!-- if buat membedakan code biasa dengan bg -->
                                                            <div class="form-group">
                                                                <label for="value">Value :</label>
                                                                @for ($i = 9; $i < $settings->count(); $i++)
                                                                    @if ($users->key == $settings[$i]->key)
                                                                        <input type="file"
                                                                            class="form-control form-control-border @error('value') is-invalid @enderror"
                                                                            id="value" placeholder="Value"
                                                                            name="value" value="{{ $users->value }}"
                                                                            required>
                                                                        @error('value')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    @endif
                                                                @endfor
                                                                @for ($i = 0; $i < 9; $i++)
                                                                    @if ($users->key == $settings[$i]->key)
                                                                        <input type="text"
                                                                            class="form-control form-control-border @error('value') is-invalid @enderror"
                                                                            id="value" placeholder="Value"
                                                                            name="value" value="{{ $users->value }}"
                                                                            required>
                                                                        @error('value')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </form>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Karier Belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Key</th>
                                        <th>Url</th>
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
    {{-- @include('admin.users-admin.users-admin-create') --}}
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
@endif
    @endfor
    @else
@include('admin.nologin')
@endif
