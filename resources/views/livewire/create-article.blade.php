<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card" style="min-height: 650px">
                    <div class="card-header bg-info text-white">{{ __('Buat Artikel') }}</div>
                    <form class="m-4">
                        <div class="form-group">
                          <label for="judul">Judul</label>
                          <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul">
                        </div>
                        <div class="form-group">
                          <label for="kategori">Kategori</label>
                          <select class="form-control js-example-basic-multiple" name="kategori[]" id="kategori" multiple="multiple">
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="konten">Konten</label>
                            <textarea class="form-control" name="konten" id="konten"></textarea>
                        </div>
      
                        {{-- <script type="text/javascript">
                            tinymce.init({
                                selector: 'textarea',
                                plugins: ['link', 'image', 'autoresize', 'media', 'paste','wordcount', 'table','preview','emoticons','code'],
                                // image_list: [
                                //     {title: 'My image 1', value: 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png'},
                                //     {title: 'My image 2', value: 'https://www.w3schools.com/w3css/img_lights.jpg'}
                                // ]
                                // menubar: 'insert',
                                // toolbar: 'link'
                            });
                        </script> --}}
                        <script>
                            var options = {
                              filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                              filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                              filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                              filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                            };
                        </script>
                        
                        <script>
                            CKEDITOR.replace('konten', options);
                        </script>

                        <div class="form-group">
                            <label for="thumbnail">Foto Thumbnail</label>
                            <input type="file" class="form-control" id="thumbnail">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

