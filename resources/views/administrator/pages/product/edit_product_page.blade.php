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
                                <a style="color: white;" href="{{ route('administrator.products') }}"> Back</a>
                           </button>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">

                                    <div class="detail_section" id="detail_section">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Category</label>
                                                <select class="form-control" id="category">
                                                    <option disabled>Select Category</option>
                                                    @foreach ($categories as $category)
                                                       <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? "selected" : ""}}>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                              </div>
                                        </div>
    
                                        <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Name</label>
                                                            <input type="text" class="form-control" id="name" value="{{ $product->name }}" aria-describedby="emailHelp" placeholder="e.g Vinegar">
                                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Description</label>
                                                                <textarea name="" class="form-control" id="description" cols="5" rows="6">{{ $product->description }}</textarea>
                                                            </div>                                          
                                                    </div>
                                                </div>
                                        </div>
    
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Arabic Name</label>
                                                            <input type="text" class="form-control" id="name_ar" value="{{ $product->name_ar }}" aria-describedby="emailHelp" placeholder="e.g Vinegar">
                                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Arabic Description</label>
                                                            <textarea name="" class="form-control" id="description_ar" cols="5" rows="6">{{ $product->name_ar }}</textarea>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" id="submit" class="btn btn-primary pull-right">Submit</button>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row" id="image_section" style="">
                                   
                                        <div class="col-md-7">

                                            <table id="table" class="table table-striped table-bordered" style="width:100%">                                
                                                <thead>
                                                      <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Action</th>
                                                        <th scope="col">Action</th>
                                                        <th scope="col">Action</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                             </table>

                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Image</label>
                                                <div id="fine-uploader-gallery"></div>
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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

<input type="hidden" class="product_id" id="product_id" value="{{ $product->id }}">

@endsection

@section('script')
  <script>

var table = $("#table").DataTable({
          processing: true,
          serverSide: true,
          ajax: `{{ route('administrator.get.images') }}/${$('#product_id').val()}`,
          headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          },
          order: [[0, "desc"]],
          columns: [
            {
              data: "id",
              visible: false,
            },
            {
              data: "filename",
            },
            {
              data: "product_id",
              visible:false
            },
            {
              data: "created_at",
              visible:false
            },
            {
              data: "created_at",
              visible:true
            },
          ],
          columnDefs: [
               {
                render: function(data, type, row) {
                   let src_path = `{{ asset('images/product') }}`
                   if(row['filename']) {
                      return `<img width="250x" class="img-response" src="${src_path}/${row['filename']}" />`
                   } else {
                      return `<img width="250x" class="img-response" src="${src_path}/image_coming_1.png" />`
                   }
                },
                targets: 1,
              },
                 {
                render: function(data, type, row) {
                  let deletes = `<a href="javascript:deletes(${row['id']})" class="btn btn-sm danger"> Delete </a>`
                  return `${deletes}`
                },
                targets: 4,
              },
          ],
      });

    
    var id_s = $('#product_id').val();

    var defaultParams = {
        task: 'upload'
    }

    function deletes(id) {

var table = $("#table").DataTable();


const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {

      $.ajax({
      type: "DELETE",
      dataType: "json",
      url: `{{ route('administrator.delete.image') }}`,
      data: {  id: id} ,
      headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
      success: function(response) {
        table.draw();
          swalWithBootstrapButtons.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      },
      beforeSend: function() {
      },
  });  
 
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})


}


   $('#fine-uploader-gallery').fineUploader({

        template: 'qq-template-gallery',
        request: {
            endpoint: `{{ route('administrator.upload.product') }}`,
            customHeaders: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        },
        callbacks: {
            onSubmit: function (id, fileName, id_s) {

                let table = $('#table').DataTable();

                var newParams = {
                    product_id: $('#product_id').val()
                },

                finalParams = defaultParams;

                qq.extend(finalParams, newParams);
                this.setParams(finalParams);
                table.draw();
            }
        },
        thumbnails: {
            placeholders: {
                waitingPath: '/source/placeholders/waiting-generic.png',
                notAvailablePath: '/source/placeholders/not_available-generic.png'
            }
        },
        validation: {
            allowedExtensions: ['jpeg', 'jpg', 'gif', 'png'],
            itemLimit: 5
        },
     }).on('error', function (event, id, name, reason) {
     }).on('complete', function (event, id, name, responseJSON) {
          if(responseJSON.success) 
          {
            console.log(id_s)
         }
   });


    $('#submit').click(function() {

        var data = {
            id: $('#product_id').val(), 
            name:$('#name').val(),
            name_ar:$('#name_ar').val(),
            description: $.trim($("#description").val()),
            description_ar: $.trim($("#description_ar").val()),
            category_id: $('#category :selected').val(),
        }

        $.ajax({
            type: "POST",
            dataType: "json",
            url: `{{ route('administrator.edit_products') }}`,
            data: data,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function(response) {
                if(response.status) {
                    $('#product_id').val(response.product_id)
                    $('#image_section').show();
                    $('#detail_section').hide();
                }
            },
            beforeSend: function() {
            },
        });     
    });

  </script>

    
@endsection