<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="edit{{$songlists->id}}" tabindex="-1" role="dialog" aria-labelledby="newsupdate" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="newsupdate">Update Data News</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/songlist-admin/update/'.$songlists->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                        <label for="title_song">Title Song :</label>
                        <input type="text" class="form-control form-control-border @error('title_song') is-invalid @enderror" id="title_song" placeholder="Title Song" name="title_song" value="{{ $songlists->title_song }}" required>
                        @error('title_song')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="artist">Artist :</label>
                        <input type="text" class="form-control form-control-border @error('artis') is-invalid @enderror" id="artist" placeholder="Name Artis" name="artist" value="{{ $songlists->artist }}" required>
                        @error('artist')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori_lagu">Song Category :</label>
                        <select class="custom-select form-control-border  @error('kategori_lagu') is-invalid @enderror" id="kategori_lagu" name="kategori_lagu" value="{{ $songlists->kategori_lagu }}" required>
                        @if($songlists->kategori_lagu == 'terlaris')    
                        <option selected="Selected" value="">Lagu {{$songlists->kategori_lagu}}</option>
                        <option value="terbaru">Lagu Terbaru</option>
                        @else
                        <option selected="Selected" value="{{ $songlists->kategori_lagu }}">Lagu {{$songlists->kategori_lagu}}</option>
                        <option value="terlaris">Lagu Terlaris</option>
                        @endif
                        </select>
                        @error('kategori_lagu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="item form-group" style="margin-right:-40px;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left; margin-right: -100px;" >Thumbnail Song</label>
                        <div class="col-md-9 col-sm-6 col-xs-12" style="margin-left:60px;">
                            <input type="file" name="thumbnail" id="thumbnail" accept=".png, .jpg, .jpeg">
                            <img src="{{ asset($songlists->thumbnail) }}" alt="Tidak Ada gambar" style="width:150px; height:100px; margin-top:10px;">
                            <input type="text" hidden class="form-control @error('thumbnail2') is-invalid @enderror" id ="thumbnail2" name="thumbnail2" value="{{$songlists->thumbnail}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status">Status :</label>
                        <select class="custom-select form-control-border  @error('status') is-invalid @enderror" id="status" name="status" required>
                            @if($songlists->status == 1)
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