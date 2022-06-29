<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="edit{{$users->id}}" tabindex="-1" role="dialog" aria-labelledby="newsupdate" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="newsupdate">Update Data News</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/users-admin/update/'.$users->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                    <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text" class="form-control form-control-border @error('name') is-invalid @enderror" id="artis" placeholder="Name User" name="name" value="{{ $users->name }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control form-control-border @error('email') is-invalid @enderror" id="artis" placeholder="Email User" name="email" value="{{ $users->email }}" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password" class="form-control form-control-border @error('password') is-invalid @enderror" id="artis" placeholder="Password User" name="password" value="{{ $users->password }}" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirmation Password :</label>
                        <input type="password" class="form-control form-control-border @error('password_confirmation') is-invalid @enderror" id="artis" placeholder="Confirmation Password" name="password_confirmation" required>
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Status :</label>
                        <select class="custom-select form-control-border  @error('status') is-invalid @enderror" id="status" name="status" required>
                            @if($users->status == 1)
                            <option selected="Selected" value="1">Aktif</option>
                            <option value="0">NoAktif</option>
                            @else
                            <option selected="Selected" value="1">NoAktif</option>
                            <option value="1">Aktif</option>
                            @endif
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