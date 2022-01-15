<!-- Modal Tambah Bidang -->
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Tambah Data News</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/songlist-admin/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="title_song">Title Song :</label>
                        <input type="text" class="form-control form-control-border @error('title_song') is-invalid @enderror" id="title_song" placeholder="Title Song" name="title_song" value="{{ old('title_song') }}" required>
                        @error('title_song')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="artis">Artist :</label>
                        <input type="text" class="form-control form-control-border @error('artis') is-invalid @enderror" id="artis" placeholder="Name Artis" name="artist" value="{{ old('artis') }}" required>
                        @error('artis')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori_lagu">Song Category :</label>
                        <select class="custom-select form-control-border  @error('kategori_lagu') is-invalid @enderror" id="kategori_lagu" name="kategori_lagu" value="{{ old('kategori_lagu') }}" required>
                            <option selected="Selected" value="">Pilih Category</option>
                            <option value="terlaris">Lagu Terlaris</option>
                            <option value="terbaru">Lagu Terbaru</option>
                        </select>
                        @error('kategori_lagu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="item form-group" style="margin-right:-40px;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left; margin-right: -100px;" >Thumbnail Song <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-6 col-xs-12" style="margin-left:60px;">
                            <input type="file" name="thumbnail" id="thumbnail" accept=".png, .jpg, .jpeg" required>
                        </div>
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