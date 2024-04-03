@extends('admin.components.layouts.dashboard')
@section('title')
Product Add
@endsection
{{-- @section('breadcrumbs')
{{ Breadcrumbs::render('product-create') }}
@endsection --}}
@section('content')
<div class="row">
    <div class="col-12 col-md-12">
        <form action="{{route('product.store')}}" method="POST">
            @csrf
            <div class="card mb-4">
                <h5 class="card-header">Product Add</h5>
                <div class="card-body">
                    <!-- title -->
                    <div class="col-xl-12">
                        <div class="nav-align-top mb-4">

                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                                    <div class="mb-3">
                                        <label for="input_post_title" class="form-label">Title</label>
                                        <input id="input_post_title" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" />
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <!-- slug -->
                                    <div class="mb-3">
                                        <label for="input_post_slug" class="form-label">Slug</label>
                                        <input id="input_post_slug" name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" readonly value="{{ old('slug') }}" />
                                        @error('slug')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="input_post_city" class="form-label">City</label>
                                        <input id="input_post_city" name="city" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title')}}" />
                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="input_post_image" class="form-label">Image</label>
                                        <div class="input-group">
                                            <button id="button_post_image" data-input="input_post_image" class="btn btn-outline-primary" type="button">
                                                Browse
                                            </button>
                                            <input id="input_post_image" name="images1" value="{{ old('images1') }}" type="text" class="form-control @error('images1') is-invalid @enderror" placeholder="" readonly />
                                            @error('images1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib diisi</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <input type="hidden" name="lang[]" value="en">
                                    <div class="mb-3">
                                        <label for="input_post_content" class="form-label">Content</label>
                                        <textarea id="input_post_content" name="content" class="form-control @error('content') is-invalid @enderror" rows="20">
                                        {{old('content')}}

                                        </textarea>
                                        @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>







                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success px-4"><i class="menu-icon bx bx-save"></i>Save</button>
                    </div>
                </div>
            </div>

    </div>

    @endsection


    @push('javascript-external')
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script src="{{ asset('vendor/tinymce5/jquery.tinymce.min.js') }}"></script>
    <script src="{{ asset('vendor/easy-number-separator-master/easy-number-separator.js') }}"></script>
    <script src="{{ asset('vendor/tinymce5/tinymce.min.js') }}"></script>
    @endpush
    @push('javascript-internal')
    <script>
        $(document).ready(function() {
            $("#input_post_title").change(function(event) {
                $("#input_post_slug").val(
                    event.target.value
                    .trim()
                    .toLowerCase()
                    .replace(/[^a-z\d-]/gi, "-")
                    .replace(/-+/g, "-")
                    .replace(/^-|-$/g, "")
                );
            });
            // event : input thumbnail with file manager and description
            // $('#button_post_thumbnail').filemanager('image');
            $('#button_post_thumbnail').filemanager('image');
            $('#button_post_image').filemanager('image');
            $('#button_post_image2').filemanager('image');
            $('#button_post_pdf').filemanager('application');
            // event :  description

            easyNumberSeparator({
                selector: '#input_post_price',
                separator: '.'
            })



            $("#input_post_content").tinymce({
                relative_urls: false,
                language: "en",
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table directionality",
                    "emoticons template paste textpattern",
                ],
                forced_root_block: '',
                toolbar1: "fullscreen preview",
                toolbar2: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                file_picker_callback: function(callback, value, meta) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document
                        .getElementsByTagName('body')[0].clientWidth;
                    let y = window.innerHeight || document.documentElement.clientHeight || document
                        .getElementsByTagName('body')[0].clientHeight;

                    let cmsURL = "{{ route('unisharp.lfm.show') }}" + '?editor=' + meta.fieldname;
                    if (meta.filetype == 'image') {
                        cmsURL = cmsURL + "&type=Images";
                    } else {
                        cmsURL = cmsURL + "&type=Files";
                    }
                    tinyMCE.activeEditor.windowManager.openUrl({
                        url: cmsURL,
                        title: 'Filemanager',
                        width: x * 0.8,
                        height: y * 0.8,
                        resizable: "yes",
                        close_previous: "no",
                        onMessage: (api, message) => {
                            callback(message.content);
                        }
                    });
                }
            });

            $("#input_post_content1").tinymce({
                relative_urls: false,
                language: "en",
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table directionality",
                    "emoticons template paste textpattern",
                ],
                forced_root_block: '',
                toolbar1: "fullscreen preview",
                toolbar2: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                file_picker_callback: function(callback, value, meta) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document
                        .getElementsByTagName('body')[0].clientWidth;
                    let y = window.innerHeight || document.documentElement.clientHeight || document
                        .getElementsByTagName('body')[0].clientHeight;

                    let cmsURL = "" + '?editor=' + meta.fieldname;
                    if (meta.filetype == 'image') {
                        cmsURL = cmsURL + "&type=Images";
                    } else {
                        cmsURL = cmsURL + "&type=Files";
                    }
                    tinyMCE.activeEditor.windowManager.openUrl({
                        url: cmsURL,
                        title: 'Filemanager',
                        width: x * 0.8,
                        height: y * 0.8,
                        resizable: "yes",
                        close_previous: "no",
                        onMessage: (api, message) => {
                            callback(message.content);
                        }
                    });
                }
            });

            $("#input_post_content2").tinymce({
                relative_urls: false,
                language: "en",
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table directionality",
                    "emoticons template paste textpattern",
                ],
                forced_root_block: '',
                toolbar1: "fullscreen preview",
                toolbar2: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                file_picker_callback: function(callback, value, meta) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document
                        .getElementsByTagName('body')[0].clientWidth;
                    let y = window.innerHeight || document.documentElement.clientHeight || document
                        .getElementsByTagName('body')[0].clientHeight;

                    let cmsURL = "" + '?editor=' + meta.fieldname;
                    if (meta.filetype == 'image') {
                        cmsURL = cmsURL + "&type=Images";
                    } else {
                        cmsURL = cmsURL + "&type=Files";
                    }
                    tinyMCE.activeEditor.windowManager.openUrl({
                        url: cmsURL,
                        title: 'Filemanager',
                        width: x * 0.8,
                        height: y * 0.8,
                        resizable: "yes",
                        close_previous: "no",
                        onMessage: (api, message) => {
                            callback(message.content);
                        }
                    });
                }
            });

            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".control-group").remove();
            });
        });
    </script>
    @endpush