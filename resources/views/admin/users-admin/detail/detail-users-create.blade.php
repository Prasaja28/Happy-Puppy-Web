<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog"
    aria-labelledby="topartistUpdate" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2">Tambah Data Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('/users-admin/detail-add/'.$users->id)}}" method="post" enctype="multipart/form-data">
                    
                    @csrf
                    <div class="form-group">
                        <label for="roles_id">Role :</label>
                        <input type="hidden" name="users_id" value="{{$users->users}}">
                        <select class="custom-select form-control-border  @error('roles_id') is-invalid @enderror"
                            id="roles_id" name="roles_id" required>
                            @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
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
