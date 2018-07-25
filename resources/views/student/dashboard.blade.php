@extends("student_layout")
@section('content')
 <!-- partial -->
       <!-- partial -->
          


            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="text-align: center;">All student</h2>

                     <?php
                    $data=DB::table('student_tbl')->get();
                    $value=count($data);
                     ?>

                  <p style="font-size: 20px; font-weight: bold;font-family: cursive; text-align: center;"><?php echo $value; ?></p>


                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart">
                  </div>
                </div>
              </div>
            </div>



             <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="text-align: center;">All teacher</h2>

                     <?php
                    $data=DB::table('teacher_tbl')->get();
                    $value=count($data);
                     ?>
       <p style="font-size: 20px; font-weight: bold;font-family: cursive; text-align: center;"><?php echo $value; ?></p>

                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart">
                  </div>
                </div>
              </div>
            </div>


          <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="text-align: center;">Tution fee</h2>
        <p style="font-size: 20px; font-weight: bold;font-family: cursive; text-align: center;">Monthly:TK 1200</p>

                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart">
                  </div>
                </div>
              </div>
            </div>


            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="text-align: center;">Txt</h2>
              <p style="font-size: 20px; font-weight: bold;font-family: cursive; text-align: center;">12</p>

                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart">
                  </div>
                </div>
              </div>
            </div>

    








@endsection