@extends("layout")
@section('content')



<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Change password</h2>

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

          <form class="forms-sample" method="post" action="{{URL::to('/admin_change_password')}}">
                          {{csrf_field()}}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Admin password</label>
       <input type="text" class="form-control p-input" aria-describedby="emailHelp" name="  admin_password"  value="{{$all_admin_info->admin_password}}">
                              </div>

                         
              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>



@endsection