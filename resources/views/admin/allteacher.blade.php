@extends("layout")
@section('content')
 <!-- partial -->
        
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
                
                  
 
                            <p style="color: green;">
                              
                              <?php 


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
                      	  <th>T.no</th>
                          <th>Name</th>
                          <th>Phone</th>
                           <th>Address</th>
                           <th>Image</th>
                          <th>Dept</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	 @foreach($allteacher_info as $v_value)
                      <tr>
                        <td>{{$v_value->teacher_id}}</td>
                          <td>{{$v_value->teacher_name}}</td>
                          <td>{{$v_value->teacher_phone}}</td>
                          <td>{{$v_value->teacher_address}}</td>
                <td><img src="{{URL::to($v_value->teacher_image)}}" height="80" width="100" style="border-radius: 50%"></td>

                          <td>
                             @if($v_value->teacher_department==1)
                         <span class="label label-success">{{'CSE'}}</span>
                            @elseif($v_value->teacher_department==2)
                         <span class="label label-success">{{'BBA'}}</span>
                            @elseif($v_value->teacher_department==3)
                         <span class="label label-success">{{'EEE'}}</span>
                            @elseif($v_value->teacher_department==4)
                         <span class="label label-success">{{'ECE'}}</span>
                         @elseif($v_value->teacher_department==5)
                         <span class="label label-success">{{'MBA'}}</span>
                           @else
                         <span class="label label-success">{{'N/A'}}</span>
                          @endif
                          </td>
                          <td>

<a href="{{URL::to('/teacher_delete/'.$v_value->teacher_id)}}" class="btn btn-outline-danger" id="delete">Delete</a>
<a href="{{URL::to('/teacher_view/'.$v_value->teacher_id)}}" class="btn btn-outline-warning" id="view">View</a>


  <a href="{{URL::to('/teacher_edit/'.$v_value->teacher_id)}}" class="btn btn-outline-primary" style="margin-left: 50px" id="edit">Edit</a>

  
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