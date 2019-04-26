@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-6">
                <div class="col">
                    <div class="card" style="width:30rem">
                      <div class="card-body">
                          <div class="row">
                              <div class="col">
                                  <h5>Current Balance</h5>
                                  <h2 class="card-title" style="text-align:center"><b>9,200</b> <sup style="color:gray"><small>PHP</small><sup></h2>
                              </div>
                              <div class="col" style="text-align:center"><br>
                                  <button  style="border-radius:80px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">+ Add Balance</button>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
                <br><br>
                <div class="col">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 14rem;">
                          <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    30 Days Until Due Date
                                </div>
                                <div class="col-4">
                                    <i style="font-size:2.7em" class="far fa-calendar"></i>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title">2000 <sup style="color:gray"><small>PHP</small><sup></h4>
                                    <h6 class="card-subtitle mb-2 text-muted">Matthew Alviz</h6>
                                </div>
                                <div class="col-5">
                                    <br>
                                    <button  style="border-radius:80px" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal2">Pay Loan</button>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 14rem;">
                          <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    30 Days Until Due Date
                                </div>
                                <div class="col-4">
                                    <i style="font-size:2.7em" class="far fa-calendar"></i>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title">2000 <sup style="color:gray"><small>PHP</small><sup></h4>
                                    <h6 class="card-subtitle mb-2 text-muted">Matthew Alviz</h6>
                                </div>
                                <div class="col-5">
                                    <br>
                                    <button  style="border-radius:80px" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal2">Pay Loan</button>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <br>
                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 14rem;">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        30 Days Until Due Date
                                    </div>
                                    <div class="col-4">
                                        <i style="font-size:2.7em" class="far fa-calendar"></i>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">2000 <sup style="color:gray"><small>PHP</small><sup></h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Matthew Alviz</h6>
                                    </div>
                                    <div class="col-5">
                                        <br>
                                        <button  style="border-radius:80px" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal2">Pay Loan</button>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 14rem;">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        30 Days Until Due Date
                                    </div>
                                    <div class="col-4">
                                        <i style="font-size:2.7em" class="far fa-calendar"></i>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">2000 <sup style="color:gray"><small>PHP</small><sup></h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Matthew Alviz</h6>
                                    </div>
                                    <div class="col-5">
                                        <br>
                                        <button  style="border-radius:80px" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal2">Pay Loan</button>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col">
                <h4>Loan Requests</h4>
                <div style="overflow:auto; height:300px">
                    <!-- LOOP HERE -->
                    <div class="card" style="width:30rem">
                      <div class="card-body">
                          <div class="row">
                              <div class="col" style="padding-right:0px">
                                <i style="font-size:1.5em" class="fas fa-user-circle"></i>
                              </div>
                              <div class="col" style="padding-left:0px">
                                  Matthew Alviz
                              </div>
                              <div class="col">
                                  <span style="color:#efca04">3</span><span style="color:gray"> / 5</span>
                              </div>
                              <div class="col">
                                  2000 <sup style="color:gray">PHP</sup>
                              </div>
                              <div class="col" style="padding-right:2px">
                                <button  style="border-radius:80px" type="button" class="btn btn-primary btn-sm">Accept</button>
                              </div>
                              <div class="col" style="padding-left:0px">
                                <button  style="border-radius:80px" type="button" class="btn btn-secondary btn-sm">Decline</button>
                              </div>
                          </div>
                      </div>
                    </div>
                    <!-- UP TO HERE -->

                </div>
            </div>
                <div class="col">
                    <h4>History</h4>
                    <div style="overflow:auto; height:300px">
                        <!-- LOOP HERE -->
                        <div class="card" style="width:30rem">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col" style="padding-right:0px">
                                    <i style="font-size:1.5em" class="fas fa-user-circle"></i>
                                  </div>
                                  <div class="col" style="padding-left:0px">
                                      Matthew Alviz
                                  </div>
                                  <div class="col">
                                      <span style="color:#efca04">3</span><span style="color:gray"> / 5</span>
                                  </div>
                                  <div class="col">
                                      2000 <sup style="color:gray">PHP</sup>
                                  </div>
                                  <div class="col" style="padding-right:2px">
                                    <span class="badge badge-primary" style="border-radius:80px; padding:7px">Borrowed</span>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- UP TO HERE -->


                        <div class="card" style="width:30rem">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col" style="padding-right:0px">
                                    <i style="font-size:1.5em" class="fas fa-user-circle"></i>
                                  </div>
                                  <div class="col" style="padding-left:0px">
                                      Matthew Alviz
                                  </div>
                                  <div class="col">
                                      <span style="color:#efca04">3</span><span style="color:gray"> / 5</span>
                                  </div>
                                  <div class="col">
                                      2000 <sup style="color:gray">PHP</sup>
                                  </div>
                                  <div class="col" style="padding-right:2px">
                                    <span class="badge badge-primary" style="border-radius:80px; padding:7px">Lent</span>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment Details</h5>&nbsp;&nbsp;&nbsp;
                <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form class="" action="index.html" method="post">
                          <div class="form-group">
                            <label for="exampleInputPassword1">AMOUNT</label>
                            <input type="text" class="form-control" id="text1">
                          </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">CARD NUMBER</label>
                        <input type="text" class="form-control" id="text1">
                      </div>
                      <div class="row">
                          <div class="col">
                              <div class="form-group">
                                <label for="exampleInputPassword1">EXPIRATION DATE</label>
                                <input type="text" class="form-control" id="text1">
                              </div>
                          </div>
                          <div class="col">
                              <div class="form-group">
                                <label for="exampleInputPassword1">CV CODE</label>
                                <input type="text" class="form-control" id="text1">
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Add Balance</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment Details</h5>&nbsp;&nbsp;&nbsp;
                <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form class="" action="index.html" method="post">
                      <div class="form-group">
                        <label for="exampleInputPassword1">CARD NUMBER</label>
                        <input type="text" class="form-control" id="text1">
                      </div>
                      <div class="row">
                          <div class="col">
                              <div class="form-group">
                                <label for="exampleInputPassword1">EXPIRATION DATE</label>
                                <input type="text" class="form-control" id="text1">
                              </div>
                          </div>
                          <div class="col">
                              <div class="form-group">
                                <label for="exampleInputPassword1">CV CODE</label>
                                <input type="text" class="form-control" id="text1">
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Pay Loan</button>
              </div>
            </div>
          </div>
        </div>
</div>
<script type="text/javascript" src="{{ asset('js/js/jquery-3.3.1.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{ asset('js/js/mdb.min.js') }}"></script>

<script type="text/javascript">
var ctx = document.getElementById('myChart').getContext("2d")
    var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
    gradientStroke.addColorStop(0, "#80b6f4");
    gradientStroke.addColorStop(1, "#f49080");
    var gradientFill = ctx.createLinearGradient(500, 0, 100, 0);
    gradientFill.addColorStop(0, "rgba(128, 182, 244, 0.6)");
    gradientFill.addColorStop(1, "rgba(244, 144, 128, 0.6)");

    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL"],
        datasets: [{
          label: "Lend Profit",
          borderColor: gradientStroke,
          pointBorderColor: gradientStroke,
          pointBackgroundColor: gradientStroke,
          pointHoverBackgroundColor: gradientStroke,
          pointHoverBorderColor: gradientStroke,
          pointBorderWidth: 10,
          pointHoverRadius: 10,
          pointHoverBorderWidth: 1,
          pointRadius: 3,
          fill: true,
          backgroundColor: gradientFill,
          borderWidth: 4,
          data: [2000, 1000, 5000, 0, 0, 2000, 0]
        }]
      },
      options: {
        legend: {
          position: "bottom"
        },
        scales: {
          yAxes: [{
            ticks: {
              fontColor: "rgba(0,0,0,0.5)",
              fontStyle: "bold",
              beginAtZero: true,
              maxTicksLimit: 5,
              padding: 20
            },
            gridLines: {
              drawTicks: false,
              display: false
            }
          }],
          xAxes: [{
            gridLines: {
              zeroLineColor: "transparent"
            },
            ticks: {
              padding: 20,
              fontColor: "rgba(0,0,0,0.5)",
              fontStyle: "bold"
            }
          }]
        },
        animation: {
          easing: "easeInOutBack"
        }
      }
    });
</script>
@endsection
