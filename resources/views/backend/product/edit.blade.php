@extends('backend.main')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Product</h3>
              </div>

              @if ($errors->any())
              @foreach ($errors->all() as $err)
                 <div class="ml-3"><p style="color: red;">{{$err}}</p></div>
              @endforeach
              @endif

              @if (session()->has('message'))
              <div class="alert alert-success">
                {{session()->get('message')}}
              </div>
              
              @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/product/update/{{$category->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Title</label>
                    <input type="text" name="title" id="exampleInputEmail1" value="{{$category->title}}" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="{{$category->description}}" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputPassword1" value="{{$category->price}}" placeholder="Price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Brand ID</label>
                    <input type="text" name="brand_id" class="form-control" id="exampleInputPassword1" value="{{$category->brand_id}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stock</label>
                    <input type="text" name="stock" class="form-control" id="exampleInputPassword1" value="{{$category->stock}}" placeholder="Stock">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Quantity</label>
                    <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" value="{{$category->quantity}}" placeholder="Quantity">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
 
          </div>
         
@endsection
