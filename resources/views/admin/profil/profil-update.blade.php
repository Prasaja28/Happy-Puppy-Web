<div class="modal fade bd-example-modal-lg" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="newsupdate" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Update Data Profil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/profil-admin/update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                    <div class="form-group">
                        <label for="title_song">Tahun :</label>
                        <input type="text" class="form-control form-control-border @error('year') is-invalid @enderror" id="year" placeholder="Isikan Tahun berapa" name="year" value="{{ $data->year }}" required>
                        @error('year')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="artis">Keterangan (ID) :</label>
                        <input type="text" class="form-control form-control-border @error('content_history_id') is-invalid @enderror" id="content_history" placeholder="Masukkan cerita di tahun ini" name="content_history_id" value="{{ $data->content_history_id }}" required>
                        @error('content_history_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="artis">Keterangan (EN) :</label>
                        <input type="text" class="form-control form-control-border @error('content_history_en') is-invalid @enderror" id="content_history" placeholder="Masukkan cerita di tahun ini" name="content_history_en" value="{{ $data->content_history_en }}" required>
                        @error('content_history_en')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Status :</label>
                        <select class="custom-select form-control-border  @error('status') is-invalid @enderror" id="status" name="status" required>
                            @if($data->status == 1)
                            <option selected="Selected" value="1">Aktif</option>
                            <option value="0">Non-Aktif</option>
                            @else
                            <option selected="Selected" value="1">Non-Aktif</option>
                            <option value="1">Aktif</option>
                            @endif
                        </select>
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <input type="hidden" class="form-control form-control-border" id="users_id" name="users_id" value="{{ Session::get('user_id') }}" required>
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