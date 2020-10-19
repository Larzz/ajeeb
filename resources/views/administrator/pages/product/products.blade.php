@extends('administrator.layouts.default')

@section('content')

    <section id="start" class="default-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <div class="heading">
                            <h6>Rescaf - Food & Restauratn Template</h6>
                            <button class="btn btn-success btn-sm pull-right" type="button" style="margin-top:-35px;"  >
                                <a  class="text-white" href="{{ route('administrator.add_products') }}"> Add Product</a>
                            </button>
                       </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                              <table id="table" class="table table-striped table-bordered" style="width:100%">                                
                                <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Last</th>
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
          ajax: `{{ route('administrator.get_products') }}`,
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
              data: "filename",
                visible:false
            },
            {
              data: "category_name",
            },
            {
              data: "created_at",
            },
          ],
          columnDefs: [
               {
                render: function(data, type, row) {
                   let src_path = `{{ asset('images/product') }}`
                   return `<img width="250x" class="img-response" src="${src_path}/${row['filename']}" />`
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
                  let button = row['id'];
                  return button
                },
                targets: 7,
              },
          ],
      });


      function delete() {

      }

      
  </script>  
@endsection