  @extends('admin.layouts.main')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Categories</a></li>
              <li class="breadcrumb-item active">{{ (!isset($category)) ? 'Add category' : 'Edit category' }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <div class="card card-primary">
              <div class="card-header">
              @if(!isset($category))
                <h3 class="card-title">Add category</h3>
              @else
                <h3 class="card-title">Edit category</h3>
              @endif
              </div>
              @if(!isset($category))
                <form action="{{ route('admin.category.store') }}" method="POST">
                  @csrf
              @else
                <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                  @csrf
                  @method('PATCH')
              @endif
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    @if(!isset($category))
                      <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                    @else
                      <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{ $category->title }}">
                    @endif                    
                    @error('title')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection