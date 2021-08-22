@extends('layout.admin')

@section('content')

@section('title','Forum Diskusi')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
            <div class="panel-body">
                <div class="col-md-12">
                    <!-- PANEL HEADLINE -->
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $forum->judul }}e</h3>
                            <p class="panel-subtitle">{{ $forum->created_at->diffForHumans() }}</p>
                        </div>
                        <div class="panel-body">
                            {{ $forum->konten }}
                        </div>
                        <hr>
                        <h1>Komentar</h1>
                        <div class="card">
                            <div class="card-header">
                                <h4>Recent Activities</h4>
                            </div>
                            <div class="card-body">
                              <ul class="list-unstyled list-unstyled-border">
                                <li class="media">
                                  <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
                                  <div class="media-body">
                                    <div class="float-right text-primary">Now</div>
                                    <div class="media-title">Farhan A Mujib</div>
                                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                  </div>
                                </li>
                                <li class="media">
                                  <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
                                  <div class="media-body">
                                    <div class="float-right">12m</div>
                                    <div class="media-title">Ujang Maman</div>
                                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                  </div>
                                </li>
                                <li class="media">
                                  <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-3.png" alt="avatar">
                                  <div class="media-body">
                                    <div class="float-right">17m</div>
                                    <div class="media-title">Rizal Fakhri</div>
                                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                  </div>
                                </li>
                                <li class="media">
                                  <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png" alt="avatar">
                                  <div class="media-body">
                                    <div class="float-right">21m</div>
                                    <div class="media-title">Alfa Zulkarnain</div>
                                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                  </div>
                                </li>
                              </ul>
                              <div class="text-center pt-1 pb-1">
                                <a href="#" class="btn btn-primary btn-lg btn-round">
                                  View All
                                </a>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PANEL HEADLINE -->
                </div>
          </div>
        </div>
      </div>
  </div>
</div>


@endsection