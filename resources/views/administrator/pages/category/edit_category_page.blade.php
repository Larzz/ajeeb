@extends('administrator.layouts.default')

@section('uploader')

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/template" id="qq-template-gallery">
        <div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Drop files here">
            <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
            </div>
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span class="qq-upload-drop-area-text-selector"></span>
            </div>
            <div class="qq-upload-button-selector qq-upload-button">
                <div>Upload a file</div>
            </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list" role="region" aria-live="polite" aria-relevant="additions removals">
                <li>
                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                    <div class="qq-progress-bar-container-selector qq-progress-bar-container">
                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                    </div>
                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                    <div class="qq-thumbnail-wrapper">
                        <img class="qq-thumbnail-selector" qq-max-size="120" qq-server-scale>
                    </div>
                    <button type="button" class="qq-upload-cancel-selector qq-upload-cancel">X</button>
                    <button type="button" class="qq-upload-retry-selector qq-upload-retry">
                        <span class="qq-btn qq-retry-icon" aria-label="Retry"></span>
                        Retry
                    </button>

                    <div class="qq-file-info">
                        <div class="qq-file-name">
                            <span class="qq-upload-file-selector qq-upload-file"></span>
                            <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                        </div>
                        <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                        <span class="qq-upload-size-selector qq-upload-size"></span>
                        <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">
                            <span class="qq-btn qq-delete-icon" aria-label="Delete"></span>
                        </button>
                        <button type="button" class="qq-btn qq-upload-pause-selector qq-upload-pause">
                            <span class="qq-btn qq-pause-icon" aria-label="Pause"></span>
                        </button>
                        <button type="button" class="qq-btn qq-upload-continue-selector qq-upload-continue">
                            <span class="qq-btn qq-continue-icon" aria-label="Continue"></span>
                        </button>
                    </div>
                </li>
            </ul>

            <dialog class="qq-alert-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Close</button>
                </div>
            </dialog>

            <dialog class="qq-confirm-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">No</button>
                    <button type="button" class="qq-ok-button-selector">Yes</button>
                </div>
            </dialog>

            <dialog class="qq-prompt-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <input type="text">
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Cancel</button>
                    <button type="button" class="qq-ok-button-selector">Ok</button>
                </div>
            </dialog>
        </div>
    </script>

@endsection

@section('content')
    <section id="start" class="default-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <div class="heading">
                            <h6>Ajeeb - Food & Restauratn Template</h6>
                            <button class="btn btn-success btn-sm pull-right" type="button" style="margin-top:-35px;"  >
                                <a style="color: white;" href="{{ route('administrator.category') }}"> Back</a>
                           </button>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Name</label>
                                                        <input type="text" class="form-control" id="name" value="{{ $category->name}}" aria-describedby="emailHelp" placeholder="e.g Vinegar">
                                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Description</label>
                                                        <textarea name="" id="description" class="form-control" cols="5" rows="6">{{ $category->description }}</textarea>
                                                        </div>                                          
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Arabic Name</label>
                                                    <input type="text"  class="form-control" id="name_ar" value="{{ $category->name_ar }}" aria-describedby="emailHelp" placeholder="e.g Vinegar">
                                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Arabic Description</label>
                                                    <textarea name="" class="form-control" id="description_ar" cols="5" rows="6">{{ $category->description_ar}}</textarea>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Image</label>
                                                <div id="fine-uploader-gallery"></div>
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                            </div>  
                                        </div>

                                        <div class="col-md-6">
                                            <img class="img-responsive" src="http://ajeeb.test/images/products/image_coming_1.png" alt="">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <input type="hidden" id="featured_image" value="{{ $category->featured_image }}">
                                            <input type="hidden" id="category_id" value="{{ $category->id}}">
                                                <button type="submit" id="submit" class="btn btn-primary pull-right">Submit</button>
                                            </div>
                                        </div>
                                     
                                       
                                    </div> 
                                </div>
                              
                            </div>
                          </div>
                     </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
  <script>
    $('#fine-uploader-gallery').fineUploader({
        template: 'qq-template-gallery',
        request: {
            endpoint: `{{ route('administrator.category.upload') }}`,
            customHeaders: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        },
        
        thumbnails: {
            placeholders: {
                waitingPath: '/source/placeholders/waiting-generic.png',
                notAvailablePath: '/source/placeholders/not_available-generic.png'
            }
        },
        validation: {
            allowedExtensions: ['jpeg', 'jpg', 'gif', 'png'],
            itemLimit: 1
        },
     }).on('error', function (event, id, name, reason) {
                // do something
      }).on('complete', function (event, id, name, responseJSON) {
          if(responseJSON.success) {
             $('#featured_image').val(responseJSON.filename)
          }
      });

    $('#submit').click(function() {

        var data = {
            id: $("#category_id").val(),
            name:$('#name').val(),
            name_ar:$('#name_ar').val(),
            description: $.trim($("#description").val()),
            description_ar: $.trim($("#description_ar").val()),
            featured_image: $('#featured_image').val()
        }

        $.ajax({
            type: "POST",
            dataType: "json",
            url: `{{ route('administrator.edit_category') }}`,
            data: data ,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function(response) {
                console.log(response)
            },
            beforeSend: function() {
            },
        });     
    });
  </script>
@endsection