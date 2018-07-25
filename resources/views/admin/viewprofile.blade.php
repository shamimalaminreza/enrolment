@extends("layout")
@section('content')


 <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
                
                     <p class="alert-success" style="font-size: 20px">
                             <?php
                              //f0 sh0ng message
                              $message=Session::get('message');
                               if ($message) {
                                 echo $message;
                                 Session::put('message',null);
                                }
                          ?>
                         </p>


              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                      	  <th>Admin id</th>
                          <th>Admin name</th>
                          <th>Admin email</th>
                          <th>Admin Phone</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	 @foreach($viewprofile_info as $v_value)
                      <tr>
                        <td>{{$v_value->admin_id}}</td>
                          <td>{{$v_value->admin_name}}</td>
                          <td>{{$v_value->admin_email}}</td>
                          <td>{{$v_value->admin_phone}}</td>
                
                          <td>

<a href="{{URL::to('/admin_edit/'.$v_value->admin_id)}}" class="btn btn-outline-primary"  id="edit">Edit</a>
<a href="{{URL::to('/admin_delete/'.$v_value->admin_id)}}" class="btn btn-outline-danger" id="delete">Delete</a>

                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        






@endsection