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

              @if (session('message'))
                  <div class="alert alert-success">
                      {{session('message')}}
                  </div>
              @endif

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-sucess" role="alert">
                        {{session('status')}}
                    </div>
                @endif

    <table id="generalTable" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="font-weight-light">
            @foreach($users as $recipient)
                        <tr>
                            <td>{{$recipient->name}}</td>
                            <td>{{$recipient->email}}</td>
                            <td>{{$recipient->role}}</td>
                            <td>@if($recipient->status == 0) <div class="badge badge-danger">Inactive</div> @else <div class="badge badge-success">Active</div>    @endif</td>
                            <td>
                              <a href="{{ route('status', ['id'=>$recipient->id])}}">@if ($recipient->status == 1) <button class="btn btn-primary btn-sm btn-block">Reject</button> @else <button class="btn btn-primary btn-sm btn-block">Approve</button> @endif</a>
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