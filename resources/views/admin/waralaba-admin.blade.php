@extends('admin/layout-komponen/master')

@section('title', 'Waralaba')

@section('css')
    <!-- css internal place -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('waralaba-admin', 'active')
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
                            <h3 class="card-title">Data Waralaba</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body px-4">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Usia</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Status Marital</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Provinsi</th>
                                        <th>Telepon Rumah</th>
                                        <th>Telepon Kantor</th>
                                        <th>No Hp</th>
                                        <th>Email</th>
                                        <th>Pekerjaan</th>
                                        <th>Bidang Usaha</th>
                                        <th>Lain-lain</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Jabatan</th>
                                        <th>Lain-lain</th>
                                        <th>Alamat Pekerjaan</th>
                                        <th>Kota</th>
                                        <th>Provinsi</th>
                                        <th>Status Penguasaan Tempat</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Provinsi</th>
                                        <th>Dikenal Sebagai Daerah</th>
                                        <th>Lain-lain</th>
                                        <th>Luas Bangunan</th>
                                        <th>Nama Usaha Tetangga Kiri</th>
                                        <th>Bidang Usaha Tetangga Kiri</th>
                                        <th>Nama Usaha Tetangga Kanan</th>
                                        <th>Bidang Usaha Tetangga Kanan</th>
                                        <th>Nama Usaha Tetangga Belakang</th>
                                        <th>Bidang Usaha Tetangga Belakang</th>
                                        <th>Nama Usaha Tetangga Depan</th>
                                        <th>Bidang Usaha Tetangga Depan</th>
                                        <th>Lebar Jalan Depan</th>
                                        <th>Lalu Lintas Jalan Depan</th>
                                        <th>Konfirmasi Ketersediaan</th>
                                        <th>Konfirmasi Register</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($waralaba as $users)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $users->name }}</td>
                                            @if ($users->gender == 0)
                                                <td> Laki-Laki </td>
                                            @else
                                                <td>Perempuan</td>
                                            @endif
                                            <td>{{ $users->age }}</td>
                                            <td>{{ $users->last_education }}</td>
                                            @if ($users->status_marital == 0)
                                                <td> Single </td>
                                            @else
                                                <td> Menikah </td>
                                            @endif
                                            <td>{{ $users->official_address }}</td>
                                            <td>{{ $users->regency_name }}</td>
                                            <td>{{ $users->province_name }}</td>
                                            <td>{{ $users->home_phone }}</td>
                                            <td>{{ $users->official_phone }}</td>
                                            <td>{{ $users->mobile_phone }}</td>
                                            <td>{{ $users->email }}</td>
                                            <td>{{ $users->job }}</td>
                                            <td>{{ $users->bussiness_field }}</td>
                                            <td>{{ $users->other }}</td>
                                            <td>{{ $users->company_name }}</td>
                                            <td>{{ $users->postion_company }}</td>
                                            <td>{{ $users->other_2 }}</td>
                                            <td>{{ $users->address_2 }}</td>
                                            <td>{{ $users->regency_name2 }}</td>
                                            <td>{{ $users->province_name2 }}</td>
                                            <td>{{ $users->status_penguasaan }}</td>
                                            <td>{{ $users->address_3 }}</td>
                                            <td>{{ $users->regency_name3 }}</td>
                                            <td>{{ $users->province_name3 }}</td>
                                            <td>{{ $users->known_as_area }}</td>
                                            <td>{{ $users->other_3 }}</td>
                                            <td>{{ $users->building_area }}</td>
                                            <td>{{ $users->left_business_name }}</td>
                                            <td>{{ $users->left_business_field }}</td>
                                            <td>{{ $users->right_business_name }}</td>
                                            <td>{{ $users->right_business_field }}</td>
                                            <td>{{ $users->front_business_name }}</td>
                                            <td>{{ $users->front_business_field }}</td>
                                            <td>{{ $users->behind_business_name }}</td>
                                            <td>{{ $users->behind_business_field }}</td>
                                            <td>{{ $users->front_road_width }}</td>
                                            <td>{{ $users->front_road_traffic }}</td>
                                            @if ($users->confirm_completenes == 0)
                                                <td> Ya </td>
                                            @else
                                                <td> Tidak </td>
                                            @endif
                                            @if ($users->confirm_register == 0)
                                                <td> Ya </td>
                                            @else
                                                <td> Tidak </td>
                                            @endif
                                            <td class="text-center">
                                                {{-- @if ($users->status == 1) --}}
                                                <button class="btn btn-danger" alt="Hapus" data-toggle="modal"
                                                    data-target="#delete{{ $users->id }}"><i
                                                        class="fas fa-trash-alt"></i></i></button>
                                                {{-- @endif --}}
                                                {{-- <button class="btn btn-success" alt="Edit" data-toggle="modal"
                                                    data-target="#edit{{ $users->id }}"><i
                                                        class="fas fa-pen-square"></i></button> --}}
                                            </td>
                                        </tr>
                                        <!-- Model Delete -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete{{ $users->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="usersDelete" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="usersDelete">Delete Data Waralaba
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <h3>Apakah Anda yakin untuk Menghapus ?</h3>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{ url('/waralaba-admin/delete/' . $users->id) }}"
                                                            class="btn btn-danger">Delete</a>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Model Update -->
                                        {{-- @include(
                                            'admin.users-admin.users-admin-update'
                                        ) --}}
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Karier Belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Usia</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Status Marital</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Provinsi</th>
                                        <th>Telepon Rumah</th>
                                        <th>Telepon Kantor</th>
                                        <th>No Hp</th>
                                        <th>Email</th>
                                        <th>Pekerjaan</th>
                                        <th>Bidang Usaha</th>
                                        <th>Lain-lain</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Jabatan</th>
                                        <th>Lain-lain</th>
                                        <th>Alamat Pekerjaan</th>
                                        <th>Kota</th>
                                        <th>Provinsi</th>
                                        <th>Status Penguasaan Tempat</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Provinsi</th>
                                        <th>Dikenal Sebagai Daerah</th>
                                        <th>Lain-lain</th>
                                        <th>Luas Bangunan</th>
                                        <th>Nama Usaha Tetangga Kiri</th>
                                        <th>Bidang Usaha Tetangga Kiri</th>
                                        <th>Nama Usaha Tetangga Kanan</th>
                                        <th>Bidang Usaha Tetangga Kanan</th>
                                        <th>Nama Usaha Tetangga Belakang</th>
                                        <th>Bidang Usaha Tetangga Belakang</th>
                                        <th>Nama Usaha Tetangga Depan</th>
                                        <th>Bidang Usaha Tetangga Depan</th>
                                        <th>Lebar Jalan Depan</th>
                                        <th>Lalu Lintas Jalan Depan</th>
                                        <th>Konfirmasi Ketersediaan</th>
                                        <th>Konfirmasi Register</th>
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
