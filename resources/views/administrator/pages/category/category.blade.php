@extends('administrator.layouts.default')

@section('content')

    <section id="start" class="default-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <div class="heading">
                            <h6>Ajeeb - Food & Restauratn Template</h6>
                            <button class="btn btn-success btn-sm pull-right" type="button" style="margin-top: -35px;"  >
                                <a style="color: white;" href="{{ route('administrator.add_category') }}"> Add Category</a>
                           </button>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                    <table id="table" class="table table-striped table-bordered" style="width:100%">                                
                                          <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Name </th>
                                          <th scope="col">Description</th>
                                          <th scope="col">Description </th>
                                          <th scope="col">Featured Image</th>
                                          <th scope="col">Created At</th>
                                          <th scope="col">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                    </table>
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

      var table = $("#table").DataTable({
          processing: true,
          serverSide: true,
          ajax: `{{ route('administrator.get_categories') }}`,
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
              data: "name",

            },
            {
              data: "name_ar",
            },
            {
              data: "description",
            },
            {
              data: "description_ar",
              visible:false
            },
            {
              data: "featured_image",
              visible:false
            },
            {
              data: "created_at",
            },
            {
              data: "updated_at",
              visible:true
            },
          ],
          columnDefs: [
              {
                render: function(data, type, row) {
                   let src_path = `{{ asset('images/category') }}`
                   if(row['featured_image']) {
                     return `<img width="250x" class="img-response" src="${src_path}/${row['featured_image']}" />`

                   } else {
                    
                    return `<img width="250x" class="img-response" src="${src_path}/image_coming_1.png" />`
                   }
                },
                targets: 1,
              },
              {
                render: function(data, type, row) {
                  let english_name = row['name'];
                  let arabic_name = row['name_ar'] ?? 'No Name'
                  let format = `${english_name} <br/> ${arabic_name}`
                  return format
                },
                targets: 2,
              },
              {
                render: function(data, type, row) {
                  let english_name = row['description'];
                  let arabic_name = row['description_ar'] ?? 'No Description'
                  let format = `${english_name} <br/> ${arabic_name}`
                  return format
                },
                targets: 3,
              },
              {
                render: function(data, type, row) {
                  let edit_link = `{{ route('administrator.edit_category_page') }}`
                  let edit = `<a href="${edit_link}/${row['id']}" class="btn btn-sm primary"> Edit </a>`
                  let deletes = `<a href="javascript:deletes(${row['id']})" class="btn btn-sm danger"> Delete </a>`
                  return `${edit} ${deletes}`
                },
                targets: 7,
              },
          ],
        
      });

      function deletes(id) {
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
              url: `{{ route('administrator.delete_category') }}`,
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

        console.log(id)
      }
    
  </script>  

@endsection