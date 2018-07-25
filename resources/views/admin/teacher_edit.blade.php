@extends("layout")
@section('content')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Basic form elements</h2>






    <form class="forms-sample" method="post" action=" {{URL::to('/update_teacher',$teacher_info->teacher_id)}}">
                          {{csrf_field()}}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher name</label>
       <input type="text" class="form-control p-input"  aria-describedby="emailHelp"  name="teacher_name"  value="{{$teacher_info->teacher_name}}" required="">
                              </div>



                             
                              <div class="form-group">
                            <label for="exampleInputPassword1">Teacher address</label>
         <input type="text" class="form-control p-input"  name="teacher_address" value="{{$teacher_info->teacher_address}}" required="">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher phone</label>
         <input type="text" class="form-control p-input"   name="teacher_phone" value="{{$teacher_info->teacher_phone}}" required="">
                              </div>

                            
                          
         

                         
              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection