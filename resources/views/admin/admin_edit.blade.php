@extends("layout")
@section('content')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Basic form elements</h2>


 


          <form class="forms-sample" method="post" action=" {{URL::to('/updte_admin',$admin_info->admin_id)}}">
                          {{csrf_field()}}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Admin name</label>
       <input type="text" class="form-control p-input"  aria-describedby="emailHelp"  name="admin_name"  value="{{$admin_info->admin_name}}" required="">
                              </div>



                             
                              <div class="form-group">
                            <label for="exampleInputPassword1">Admin email</label>
         <input type="email" class="form-control p-input"  name="admin_email" value="{{$admin_info->admin_email}}" required="">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Admin phone</label>
         <input type="text" class="form-control p-input"   name="admin_phone" value="{{$admin_info->admin_phone}}" required="">
                              </div>

                            
                          
         

                         
              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection