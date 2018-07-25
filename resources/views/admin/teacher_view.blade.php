@extends("layout")
@section('content')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Basic form elements</h2>






  <form class="forms-sample" method="post" action=" {{URL::to('/view_teacher',$teacher_view_info->teacher_id)}}">
                          {{csrf_field()}}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher name</label>
       <input type="text" class="form-control p-input"  aria-describedby="emailHelp"  name="teacher_name"  value="{{$teacher_view_info->teacher_name}}" required="">
                              </div>



                             
                              <div class="form-group">
                            <label for="exampleInputPassword1">Teacher address</label>
         <input type="text" class="form-control p-input"  name="teacher_address" value="{{$teacher_view_info->teacher_address}}" required="">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher phone</label>
         <input type="text" class="form-control p-input"   name="teacher_phone" value="{{$teacher_view_info->teacher_phone}}" required="">
                              </div>


                       <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher department</label>
                <input type="text" class="form-control p-input"   name="teacher_department" 

                value="@if($teacher_view_info->teacher_department==1)

                                  {{'CSE'}}
                            @elseif($teacher_view_info->teacher_department==2)
                         {{'BBA'}}                           
                          @elseif($teacher_view_info->teacher_department==3)
                         {{'EEE'}}
                            @elseif($teacher_view_info->teacher_department==4)teacher_department
                         {{'ECE'}}
                         @elseif($teacher_view_info->teacher_department==5)
                         {{'MBA'}}
                           @else
                         {{'N/A'}}
                          @endif">
                              </div>
                            
                          
         

                         
              <button type="submit" class="btn btn-success btn-block">View</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection