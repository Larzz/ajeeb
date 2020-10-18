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
                                <table class="table" id="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Ip Address</th>
                                        <th scope="col">Action</th>
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
          ajax: `{{ route('administrator.get_subscribers') }}`,
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
              data: "email",
            },
            {
              data: "ip_address",
            },
            {
              data: "created_at",
            },
            {
              data: "updated_at",
              visible:false
            },
          ],
          columnDefs: [
          ],
      });
  </script>  
@endsection