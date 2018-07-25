@extends("layout")
@section('content')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Basic form elements</h2>





  <form class="forms-sample" method="post" action="{{URL::to('/updte_student',$all_student_info->student_id)}}" enctype="multipart/form-data">
                          {{csrf_field()}}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student name</label>
       <input type="text" class="form-control p-input"  aria-describedby="emailHelp"  name="student_name"  value="{{$all_student_info->student_name}}">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputPassword1">Student roll</label>
      <input type="text" class="form-control p-input"   name="student_roll" value="{{$all_student_info->student_roll}}">
                              </div>

                              <div class="form-group">
                        <label for="exampleInputPassword1">Student fathername</label>
         <input type="text" class="form-control p-input"  name="student_fathername" value="{{$all_student_info->student_fathername}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student mothername</label>
         <input type="text" class="form-control p-input"   name="student_mothername" value="{{$all_student_info->student_mothername}}">
                              </div>
                             
                              <div class="form-group">
                            <label for="exampleInputPassword1">Student email</label>
         <input type="email" class="form-control p-input"  name="student_email" value="{{$all_student_info->student_email}}">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student phone</label>
         <input type="text" class="form-control p-input"  placeholder="Student phone" name="student_phone" value="{{$all_student_info->student_phone}}">
                              </div>


 <div class="form-group">
                                  <label for="exampleInputPassword1">Student address</label>
         <input type="text" class="form-control p-input"   name="student_address" value="{{$all_student_info->student_address}}">
                              </div> 

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student password</label>
         <input type="password" class="form-control p-input"  name="student_password" value="{{$all_student_info->student_password}}">
                              </div> 

                              <div class="form-group">
               <label for="exampleInputPassword1">Student admissionyear</label>
         <input type="date" class="form-control p-input"  name="student_admissionyear" value="{{$all_student_info->student_admissionyear}}">
                              </div>


         <div class="form-group">
               <label for="exampleInputPassword1">Student department</label>
                <select class="form-control p-input" name="student_department" value="{{$all_student_info->student_department}}">
                	<option>Select department</option>
                	<option value="1">CSE</option>
                	<option value="2">BBA</option>
                	<option value="3">ECE</option>
                	<option value="4">EEE</option>
                	<option value="5">MBA</option>
                </select>
                              </div>


                         
              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection