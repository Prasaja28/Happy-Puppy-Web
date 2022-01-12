<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="edit{{$newss->id}}" tabindex="-1" role="dialog" aria-labelledby="newsupdate" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="newsupdate">Update Data News</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/news-admin/update/'.$newss->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                    <div class="form-group">
                        <label for="news_title_en">News Title (EN) :</label>
                        <input type="text" class="form-control form-control-border @error('news_title_en') is-invalid @enderror" id="news_title_en" placeholder="Title News (EN)" name="news_title_en" value="{{$newss->news_title_en}}" required>
                        @error('news_title_en')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="news_title_id">News Title (ID) :</label>
                        <input type="text" class="form-control form-control-border @error('news_title_id') is-invalid @enderror" id="news_title_id" placeholder="Title News (ID)" name="news_title_id" value="{{$newss->news_title_id}}" required>
                        @error('news-title_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="news_content_en">Content News (EN) :</label>
                        <textarea id="summernote3" name="news_content_en" required>
                        {{$newss->news_content_en}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="news_content_id">Content News (ID) :</label>
                        <textarea id="summernote4" name="news_content_id" required>
                        {{$newss->news_content_id}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="news_category">News Category :</label>
                        <select class="custom-select form-control-border  @error('news_category') is-invalid @enderror" id="news_category" name="news_category" required>
                            <option selected="Selected" value="{{$newss->news_category}}">News {{$newss->news_category}}</option>
                            @if($newss->news_category == 'popular')
                            <option value="lates">News lates</option>
                            @else
                            <option value="popular">News popular</option>
                            @endif
                        </select>
                        @error('news_category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="news_date">News Date :</label>
                        <input type="date" class="form-control form-control-border" id="news_date" placeholder="News Date" name="news_date" value="{{$newss->news_date}}" required>
                    </div>
                    <div class="item form-group" style="margin-right:-40px;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left; margin-right: -100px;" >Thumbnail News</label>
                        <div class="col-md-9 col-sm-6 col-xs-12" style="margin-left:60px;">
                            <input type="file" name="thumbnail" id="thumbnail" accept=".png, .jpg, .jpeg">
                            <img src="{{ asset($newss->thumbnail) }}" alt="Tidak Ada gambar" style="width:150px; height:100px; margin-top:10px;">
                            <input type="text" hidden class="form-control @error('thumbnail2') is-invalid @enderror" id ="thumbnail2" name="thumbnail2" value="{{$newss->thumbnail}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status">Status :</label>
                        <select class="custom-select form-control-border  @error('status') is-invalid @enderror" id="status" name="status" required>
                            @if($newss->status == 1)
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
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>