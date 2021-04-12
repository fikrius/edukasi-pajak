@extends('layouts.app')

@section('styles')
    {{-- <style>
        .ck-editor__editable {
            min-height: 400px !important;
        }
    </style> --}}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script> --}}
    {{-- <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/ckfinder/ckfinder.js') }}"></script> --}}

@endsection

@section('content')
    @livewire('create-article')
@endsection

@section('javascript')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script>
        $('#kategori').select2({
            placeholder: 'Cari Kategori',
            ajax: {
                url: '/get-data-kategori',
                dataType: 'JSON',
                delay: 250,
                processResults: function (data) {     
                    console.log(data);
                    return {
                        results:  $.map(data, function (item) {
                            return {
                                text: item.kategori,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });
        
    </script>

@endsection