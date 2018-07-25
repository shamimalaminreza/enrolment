@extends("student_layout")
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
                          <th>St. name</th>
                          <th>St roll</th>
                          <th>St email</th>
                          <th>St phone</th>
                           
                          <th>St password</th>

                           <th>St image</th>
                          <th>St department</th>
                


                      </tr>
                    </thead>
                    <tbody>
                    	 
                            <tr>
                          <td>{{$student_profiles->student_name}}</td>
                          <td>{{$student_profiles->student_roll}}</td>
                          <td>{{$student_profiles->student_email}}</td>
                          <td>{{$student_profiles->student_phone}}</td>
                          <td>{{$student_profiles->student_password}}</td>


                        <td><img src="{{URL::to($student_profiles->student_image)}}" height="80" width="100" style="border-radius: 50%"></td>

                           <td>
                             @if($student_profiles->student_department==1)
                         <span class="label label-success">{{'CSE'}}</span>
                            @elseif($student_profiles->student_department==2)
                         <span class="label label-success">{{'BBA'}}</span>
                            @elseif($student_profiles->student_department==3)
                         <span class="label label-success">{{'EEE'}}</span>
                            @elseif($student_profiles->student_department==4)
                         <span class="label label-success">{{'ECE'}}</span>
                         @elseif($student_profiles->student_department==5)
                         <span class="label label-success">{{'MBA'}}</span>
                           @else
                         <span class="label label-success">{{'N/A'}}</span>
                          @endif
                          </td>
                
                          <td>

                          </td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        






@endsection