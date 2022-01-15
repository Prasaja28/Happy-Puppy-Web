<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="edit{{$topartists->id}}" tabindex="-1" role="dialog" aria-labelledby="topartistUpdate" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="topartistUpdate">Update Data Topartist</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/topartist-admin/update/'.$topartists->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                    <div class="form-group">
                        <label for="name">Artist :</label>
                        <input type="text" class="form-control form-control-border @error('name') is-invalid @enderror" id="artis" placeholder="Name Artis" name="name" value="{{ $topartists->name }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="item form-group" style="margin-right:-40px;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left; margin-right: -100px;" >Thumbnail Top Artist (1x1)</label>
                        <div class="col-md-9 col-sm-6 col-xs-12" style="margin-left:60px;">
                            <input type="file" name="thumbnail" id="thumbnail" accept=".png, .jpg, .jpeg">
                            <img src="{{ asset($topartists->thumbnail) }}" alt="Tidak Ada gambar" style="width:100px; height:100px; margin-top:10px;">
                            <input type="text" hidden class="form-control @error('thumbnail2') is-invalid @enderror" id ="thumbnail2" name="thumbnail2" value="{{$topartists->thumbnail}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status">Status :</label>
                        <select class="custom-select form-control-border  @error('status') is-invalid @enderror" id="status" name="status" required>
                            @if($topartists->status == 1)
                            <option selected="Selected" value="1">Aktif</option>
                            <option value="0">NoAkfit</option>
                            @else
                            <option selected="Selected" value="1">NoAktif</option>
                            <option value="1">Akfit</option>
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