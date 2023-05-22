@extends('layout')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Users</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">User Management</a></li>
            <li class="breadcrumb-item active">Users Records</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->

<section class="content">
  
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-12">
          <div class="card shadow">
            <div class="card-header">
                <span class="card-title h6 font-weight-bold text-primary">Users table</span>
                <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
            </div>
            <!-- /.card-header -->

            

            <div class="card-body table-responsive">
              @if (Session::has('message'))
                  <div class="alert alert-success">{{Session::get('message')}}
              @endif
                <table id="generalTable" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
                    <thead class="thead-dark">
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="font-weight-light">
                    @foreach($allUsers as $recipient)
                        <tr>
                            <td>{{$recipient->name ?? 0}}</td>
                            <td>{{$recipient->email ?? 0}}</td>
                            <td>{{$recipient->role ?? 0}}</td>
                            <td class="badge badge-{{$recipient->status == 'Active' ? 'success': ''}}{{$recipient->status == 'Inactive' ? 'danger': '' }}{{$recipient->status == 'Pending' ? 'danger': '' }}">{{$recipient->status ?? 0}}</td>
                            <td>
                              
                            </td>
                          </tr>
                    @endforeach               
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
