@extends('backend.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
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
                <h3 class="card-title">Products List</h3><br>
                <a href="/product/create" class="btn btn-primary sm">Add Product</a>
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
                      <th>ID</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Brand ID</th>
                      <th>Stock</th>
                      <th>Quantity</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($category as $product)
                    <tr>
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->title }}</td>
                      <td>{{ $product->description }}</td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->brand_id }}</td>
                      <td>{{ $product->stock }}</td>
                      <td>{{ $product->quantity }}</td>
                      <td>
                        @if($product->image)
                          <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }}" width="100">
                        @endif
                      </td>
                      <td>
                        <a href="/product/edit/{{ $product->id }}" class="btn btn-primary btn">Edit</a>
                        <a href="/product/delete/{{ $product->id }}" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Brand ID</th>
                      <th>Stock</th>
                      <th>Quantity</th>
                      <th>Image</th>
                      <th>Action</th>
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
