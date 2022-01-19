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
                <form action="{{ url('/news-admin/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="news_title_en">News Title (EN) :</label>
                        <input type="text" class="form-control form-control-border" id="news_title_en" placeholder="Title News (EN)" name="news_title_en" required>
                    </div>
                    <div class="form-group">
                        <label for="news_title_id">News Title (ID) :</label>
                        <input type="text" class="form-control form-control-border" id="news_title_id" placeholder="Title News (ID)" name="news_title_id" required>
                    </div>
                    <div class="form-group">
                        <label for="news_content_en">Content News (EN) :</label>
                        <textarea id="summernote" name="news_content_en" required>
                            News Content EN
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="news_content_id">Content News (ID) :</label>
                        <textarea id="summernote2" name="news_content_id" required>
                            News Content ID
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="news_category">News Category :</label>
                        <select class="custom-select form-control-border  @error('news_category') is-invalid @enderror" id="news_category" name="news_category" value="{{ old('news_category') }}" required>
                            <option selected="Selected" value="" disabled>Pilih Category</option>
                            <option value="popular">News Popular</option>
                            <option value="lates">News Lates</option>
                        </select>
                        @error('news_category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="news_date">News Date :</label>
                        <input type="date" class="form-control form-control-border" id="news_date" placeholder="News Date" name="news_date" required>
                    </div>
                    <div class="item form-group" style="margin-right:-40px;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left; margin-right: -100px;" >Thumbnail News <span class="required">*</span></label>
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