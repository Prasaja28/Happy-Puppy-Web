<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="edit{{ $users->id }}" tabindex="-1" role="dialog"
    aria-labelledby="newsupdate" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newsupdate">Update Data Job</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/jobvacancy-admin/update/' . $users->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="name_job">Job :</label>
                        <input type="text"
                            class="form-control form-control-border @error('name_job') is-invalid @enderror"
                            id="name_job" placeholder="Job Name" name="name_job" value="{{ $users->name_job }}"
                            required>
                        @error('name_job')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="location">Location :</label>
                        <input type="text"
                            class="form-control form-control-border @error('location') is-invalid @enderror"
                            id="location" placeholder="Location" name="location" value="{{ $users->location }}"
                            required>
                        @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Status :</label>
                        <select class="form-control form-control-border @error('status') is-invalid @enderror"
                            id="status" name="status" required>
                            <option value="1">Aktif</option>
                            <option value="0">NonAktif</option>
                        </select>
                        @error('status')
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
