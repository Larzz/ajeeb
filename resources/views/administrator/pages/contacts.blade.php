@extends('administrator.layouts.default')

@section('content')

    <section id="start" class="default-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <div class="heading">
                            <h6>Rescaf - Food & Restauratn Template</h6>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                              <table id="table" class="table table-striped table-bordered" style="width:100%">                                
                                  <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Updated At</th>
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
          ajax: `{{ route('administrator.get_contacts') }}`,
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
              data: "email",
            },
            {
              data: "number",
            },
            {
              data: "message",
            },
            {
              data: "ip_address",
            },
            {
              data: "updated_at",
              visible:false
            },
          ],
          columnDefs: [
              {
                width: "21%",
                render: function(data, type, row) {
                  let button = ``;
                },
                targets: 6,
              },
          ],
      });
  </script>  

@endsection