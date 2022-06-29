<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="edit{{ $users->id }}" tabindex="-1" role="dialog"
    aria-labelledby="topartistUpdate" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="topartistUpdate">Update Data Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('/users-admin/detail-edit/'.$users->id)}}" method="post" enctype="multipart/form-data">
                    
                    @csrf
                    <div class="form-group">
                        <label for="role_id">Role :</label>
                        <select class="custom-select form-control-border  @error('role_id') is-invalid @enderror"
                            id="role_id" name="role_id" required>
                            @foreach ($roles as $role)
                                @if ($role->id == $users->role_id)
                                    <option selected="Selected" value="{{ $role->id }}">{{ $role->name }}</option>
                                @else
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endif
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
