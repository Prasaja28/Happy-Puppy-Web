@extends('admin/layout-komponen/master')

@section('title', 'Karir')

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
                            <h3 class="card-title">Data Pelamar</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body px-4">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Pendidikan Formal</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Tinggi</th>
                                        <th>Berat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status Martial</th>
                                        <th>Phone</th>
                                        <th>Mobile Phone</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>No. KTP</th>
                                        <th>Gaji Yang Diharapkan</th>
                                        <th>Bahasa</th>
                                        <th>Instrument Musik</th>
                                        <th>Computer</th>
                                        <th>Keahlian Lain</th>
                                        <th>CV</th>
                                        <th>Ijazah</th>
                                        <th>Linkedin</th>
                                        <th>Jobvacancy</th>
                                        <th>Lokasi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($careers as $career)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $career->name }}</td>
                                            <td>{{ $career->formal_education }}
                                            <td>{{ $career->name_place }}</td>
                                            <td>{{ $career->date_birth }}</td>
                                            <td>{{ $career->height }}</td>
                                            <td>{{ $career->weight }}</td>
                                            @if ($career->gender == 0)
                                                <td> Laki-Laki </td>
                                            @else
                                                <td>Perempuan</td>
                                            @endif
                                            @if ($career->status_marital == 0)
                                                <td> Single </td>
                                            @else
                                                <td> Menikah </td>
                                            @endif
                                            <td>{{ $career->phone }}</td>
                                            <td>{{ $career->mobile_phone }}</td>
                                            <td>{{ $career->email }}</td>
                                            <td>{{ $career->address }}</td>
                                            <td>{{ $career->no_ktp }}</td>
                                            <td>{{ $career->expected_salary }}</td>
                                            <td>{{ $career->language }}</td>
                                            <td>{{ $career->instrument_music }}</td>
                                            <td>{{ $career->computer }}</td>
                                            <td>{{ $career->other_expertise }}</td>
                                            <td><a href="/uploads/{{ $career->cv }}" download>{{ $career->cv }}</a>
                                            </td>
                                            <td><a href="/uploads/{{ $career->ijazah }}"
                                                    download>{{ $career->ijazah }}</a>
                                            </td>
                                            <td>{{ $career->linkedin }}</td>
                                            <td>{{ $career->name_job }}</td>
                                            <td>{{ $career->location }}</td>
                                            <td class="text-center">
                                                {{-- @if ($career->status == 1) --}}
                                                <button class="btn btn-danger" alt="Hapus" data-toggle="modal"
                                                    data-target="#delete{{ $career->id }}"><i
                                                        class="fas fa-trash-alt"></i></i></button>
                                                {{-- @endif --}}
                                                <a href="{{ route('career.detail', ['id' => $career->id]) }}"
                                                    class="btn btn-success" alt="Detail"><i
                                                        class="far fa-folder-open"></i></a>
                                            </td>
                                        </tr>
                                        <!-- Model Delete -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete{{ $career->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="usersDelete" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="usersDelete">Delete Data Career
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
                                                        <a href="{{ url('/career-admin/delete/' . $career->id) }}"
                                                            class="btn btn-danger">Delete</a>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Model Update -->
                                        {{-- @include(
                                            'admin.career-admin.users-admin-update'
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
                                        <th>Pendidikan Formal</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Tinggi</th>
                                        <th>Berat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status Martial</th>
                                        <th>Phone</th>
                                        <th>Mobile Phone</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>No. KTP</th>
                                        <th>Gaji Yang Diharapkan</th>
                                        <th>Bahasa</th>
                                        <th>Instrument Musik</th>
                                        <th>Computer</th>
                                        <th>Keahlian Lain</th>
                                        <th>CV</th>
                                        <th>Ijazah</th>
                                        <th>Linkedin</th>
                                        <th>Jobvacancy</th>
                                        <th>Lokasi</th>
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
