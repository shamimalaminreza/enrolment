@extends("layout")
@section('content')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Basic form elements</h2>



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


     <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}" enctype="multipart/form-data">
                          {{csrf_field()}}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student name</label>
       <input type="text" class="form-control p-input"  aria-describedby="emailHelp" placeholder="Enter Student name" name="student_name" required="">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputPassword1">Student roll</label>
      <input type="text" class="form-control p-input"  placeholder="Student roll" name="student_roll" required="">
                              </div>

                              <div class="form-group">
                        <label for="exampleInputPassword1">Student fathername</label>
         <input type="text" class="form-control p-input"  placeholder="Student fathername" name="student_fathername" required="">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student mothername</label>
         <input type="text" class="form-control p-input"  placeholder="Student mothername" name="student_mothername" required="">
                              </div>
                             
                              <div class="form-group">
                            <label for="exampleInputPassword1">Student email</label>
         <input type="email" class="form-control p-input"  placeholder="Student email" name="student_email" required="">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student phone</label>
         <input type="text" class="form-control p-input"  placeholder="Student phone" name="student_phone" required="">
                              </div>


 <div class="form-group">
                                  <label for="exampleInputPassword1">Student address</label>
         <input type="text" class="form-control p-input"  placeholder="Student address" name="student_address" required="">
                              </div> 

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student password</label>
         <input type="password" class="form-control p-input"  placeholder="Student password" name="student_password" required="">
                              </div> 

                              <div class="form-group">
               <label for="exampleInputPassword1">Student admissionyear</label>
         <input type="date" class="form-control p-input"  placeholder="Student admissionyear" name="student_admissionyear" required="">
                              </div>


         <div class="form-group">
               <label for="exampleInputPassword1">Student department</label>
                <select class="form-control p-input" name="student_department" required="">
                	<option>Select department</option>

                	<option value="1">CSE</option>
                	<option value="2">BBA</option>
                	<option value="3">ECE</option>
                	<option value="4">EEE</option>
                	<option value="5">MBA</option>
                </select>
                              </div>


                         <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">

           <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
            <input type="file" class="form-control-file"  aria-describedby="fileHelp" name="student_image" id="exampleInputFile2" required="">

              <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>

                                    </div>
                                  </div>
                              </div>
              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection