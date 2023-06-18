@extends('template.main')

@section('container')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
          <div class="card-header">
              <h5 class="m-0" style="font-weight:bold">Customers</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title" style="font-size:30px;">{{ $customers }}</h6>

              <p class="card-text"></p>
              <a href="/customers" class="btn btn-primary">Manage Customers</a>
            </div>
          </div>

          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0" style="font-weight:bold">Employee</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title" style="font-size:30px;">4</h6>

              <p class="card-text"></p>
              <a href="/dashboard" class="btn btn-primary">Manage</a>
            </div>
          </div><!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h5 class="m-0" style="font-weight:bold">Unsettled Transactions</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title" style="font-size:30px;">{{ $trx_unsettled }}</h6>

              <p class="card-text"></p>
              <a href="/transactions/unsettled" class="btn btn-primary">Manage Unsettled Transactions</a>
            </div>
          </div>

          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0" style="font-weight:bold">Settled Transactions</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title" style="font-size:30px;">{{ $trx_settled }}</h6>

              <p class="card-text"></p>
              <a href="/transactions" class="btn btn-primary">Manage Settled Transactions</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
