<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="edit{{$outlets->id}}" tabindex="-1" role="dialog" aria-labelledby="outletupdate" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="outletupdate">Update Data Outlet</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/outlet-admin/update/'.$outlets->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                        <label for="name">Nama Outlet :</label>
                        <input type="text" class="form-control form-control-border @error('name') is-invalid @enderror" id="name" placeholder="Nama Outlet" name="name" value="{{ $outlets->'name' }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat Outlet :</label>
                        <input type="text" class="form-control form-control-border @error('address') is-invalid @enderror" id="artis" placeholder="Alamat Outlet" name="address" value="{{ $outlets->'address' }}" required>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Nomor Telepon :</label>
                        <input type="text" class="form-control form-control-border @error('phone') is-invalid @enderror" id="phone" placeholder="Nomor Telepon" name="phone" value="{{ $outlets->'phone' }}" required>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fax">Nomor Fax :</label>
                        <input type="text" class="form-control form-control-border @error('fax') is-invalid @enderror" id="fax" placeholder="Nomor Fax" name="fax" value="{{ $outlets->'fax' }}" required>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link_ig">Link IG :</label>
                        <input type="text" class="form-control form-control-border @error('link_ig') is-invalid @enderror" id="link_ig" placeholder="Link IG" name="link_ig" value="{{ $outlets->'link_ig' }}" required>
                        @error('link_ig')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link_2">Link Lainnya :</label>
                        <input type="text" class="form-control form-control-border @error('link_2') is-invalid @enderror" id="link_2" placeholder="Link Lainnya" name="link_2" value="{{ $outlets->'link_2' }}" required>
                        @error('link_2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="city_id">Kota :</label>
                        <select class="form-control" name="city_id" id="city_id" required="" data-dependent="city_id">
                                <option value="">(Pilih Kota)</option>
                                @foreach($city_id as $data)
                                    <option value="{{$data->id}}">{{$data->city_name}}</option>
                                @endforeach
                        </select>
                        @error('city_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="citysub_id">Kecamatan :</label>
                        <select class="form-control" name="citysub_id" id="citysub_id" required="" data-dependent="citysub_id">
                                <option value="">(Pilih Kota)</option>
                                @foreach($citysub_id as $data)
                                    <option value="{{$data->id}}">{{$data->csub_name}}</option>
                                @endforeach
                        </select>
                        @error('citysub_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="item form-group" style="margin-right:-40px;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left; margin-right: -100px;" >Thumbnail Outlet <span class="required">*</span></label>
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