@extends("layout")
@section('content')
 <!-- partial -->
        
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
                      	  <th>Sl.no</th>
                          <th>St.roll</th>
                          <th>St.name</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>St.image</th>

                          <th>Dept</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	 @foreach($allstudent_info as $v_value)
                      <tr>
                        <td>{{$v_value->student_id}}</td>
                          <td>{{$v_value->student_roll}}</td>
                          <td>{{$v_value->student_name}}</td>
                          <td>{{$v_value->student_phone}}</td>
                          <td>{{$v_value->student_address}}</td>
                <td><img src="{{URL::to($v_value->student_image)}}" height="80" width="100" style="border-radius: 50%"></td>

                          <td>
                             @if($v_value->student_department==1)
                         <span class="label label-success">{{'CSE'}}</span>
                            @elseif($v_value->student_department==2)
                         <span class="label label-success">{{'BBA'}}</span>
                            @elseif($v_value->student_department==3)
                         <span class="label label-success">{{'EEE'}}</span>
                            @elseif($v_value->student_department==4)
                         <span class="label label-success">{{'ECE'}}</span>
                         @elseif($v_value->student_department==5)
                         <span class="label label-success">{{'MBA'}}</span>
                           @else
                         <span class="label label-success">{{'N/A'}}</span>
                          @endif
                          </td>
                          <td>

<a href="{{URL::to('/student_delete/'.$v_value->student_id)}}" class="btn btn-outline-danger" id="delete">Delete</a>
<a href="{{URL::to('/student_view/'.$v_value->student_id)}}" class="btn btn-outline-warning" id="view">View</a>


  <a href="{{URL::to('/student_edit/'.$v_value->student_id)}}" class="btn btn-outline-primary" style="margin-left: 50px" id="edit">Edit</a>

  
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