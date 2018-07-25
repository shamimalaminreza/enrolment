@extends("student_layout")
@section('content')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update Your profile</h2>



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


          <form class="forms-sample" method="post" action="{{URL::to('/student_own_update')}}">
                          {{csrf_field()}}

                          
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student phone</label>
         <input type="text" class="form-control p-input"  name="student_phone" value="{{$all_student_info->student_phone}}">
                              </div>



                          <div class="form-group">
                                  <label for="exampleInputPassword1">Student address</label>
         <input type="text" class="form-control p-input"   name="student_address" value="{{$all_student_info->student_address}}">
                              </div> 



                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student password</label>
         <input type="password" class="form-control p-input"  name="student_password" value="{{$all_student_info->student_password}}">
                              </div> 

              

                         
              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection