@extends('backend.main');
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3><br>
                <a href="/brand/create" class="btn btn-primary sm">Add Brand</a>
              </div>

              @if (session()->has('message'))
              <div class="alert alert-success">
                {{session()->get('message')}}
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Brand Title</th>
                    <th>Brand Description</th>
                    <th>Action</th>
                 
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($category as $cat )
                    <tr>
                      <td>{{$cat->id}}</td>
                      <td>{{$cat->title}}</td>
                      <td>{{$cat->description}}</td>
                    <td><a  href="/brand/edit/{{$cat->id}}" class="btn btn-primary btn">Edit</a> <a href="/brand/delete/{{$cat->id}}" class="btn btn-danger "> delete</a></td>

                    </tr>
                    @endforeach
                
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                  
                  </tr>
                  </tfoot>
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
  </div>
@endsection