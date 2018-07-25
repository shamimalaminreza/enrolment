@extends("layout")
@section('content')


                <!-- @php

                  function val($val){
                   $val=[
                   1=>'CSE',
                   2=>'BBA',
                   3=>'EEE',
                   4=>'ECE',
                   5=>'MBA',
                   ];
               return $val[$val];


              }



                 @endphp-->

<!-- partial -->
        
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
<img src="{{URL::to($student_view_info->student_image)}}" height="80" width="100" style="border-radius: 50%">                 <p class="name">Name: {{$student_view_info->student_name}}</p>
                  <a class="email" href="#">Email: {{$student_view_info->student_email}}</a>
                 <a class="number" href="#">Phone: {{$student_view_info->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>Student information is given belw:</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon"></i>

                      @if($student_view_info->student_department==1)
                      <span>Department : {{'CSE'}} </span>
                      @elseif($student_view_info->student_department==2)
                     <span>Department : {{'BBA'}} </span>
                      @elseif($student_view_info->student_department==3)
                      <span>Department : {{'EEE'}} </span>
                      @elseif($student_view_info->student_department==4)
                      <span>Department : {{'ECE'}} </span>
                       @elseif($student_view_info->student_department==5)
                      <span>Department : {{'MBA'}} </span>
                           @else
                      <span>Department : {{'N/a'}} </span>
                            @endif

                    </a>
                    <a class="social-link">
                      <i class="icon-social-facebook icon"></i>
                      <span>Mothername : {{$student_view_info->student_mothername}}</span>
                    </a>
                    <a class="social-link">
                      <i class="icon-social-linkedin icon"></i>
                      <span>Fathername : {{$student_view_info->student_fathername}}</span>
                    </a>
                    <a class="social-link">
                      <i class="icon-social-linkedin icon"></i>
                      <span>Student_roll : {{$student_view_info->student_roll}}</span>
                    </a>
                    <a class="social-link">
                      <i class="icon-social-linkedin icon"></i>
                      <span>Admission year : {{$student_view_info->student_admissionyear}}</span>
                    </a>
                    <a class="social-link">
                      <i class="icon-social-linkedin icon"></i>
                      <span>Address : {{$student_view_info->student_address}}</span>
                    </a>
                  </div>
                   


                </div>
              </div>
            </div>
            
          </div>
        







@endsection