<!-- Modal Tambah Bidang -->
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/users-admin/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text"
                            class="form-control form-control-border @error('name') is-invalid @enderror" id="artis"
                            placeholder="Name User" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="role">Role :</label>
                        <select class="custom-select newRow form-control-border  @error('role') is-invalid @enderror"
                            id="role" name="role[]" multiple value="{{ old('role') }}" required>
                            <option selected="Selected" value="">Pilih Role</option>
                            @foreach ($role as $roles)
                                <option value="{{ $roles->id }}">{{ $roles->name }}</option>
                            @endforeach
                        </select>
                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email"
                            class="form-control form-control-border @error('email') is-invalid @enderror"
                            placeholder="Email User" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password"
                            class="form-control form-control-border @error('password') is-invalid @enderror"
                            id="artis" placeholder="Password User" name="password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirmation Password :</label>
                        <input type="password"
                            class="form-control form-control-border @error('password_confirmation') is-invalid @enderror"
                            id="artis" placeholder="Confirmation Password" name="password_confirmation" required>
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End modal Tambah -->
