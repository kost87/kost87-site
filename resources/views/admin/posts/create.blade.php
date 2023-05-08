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
              <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
              <li class="breadcrumb-item active">Add post</li>
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
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add post</h3>
              </div>
                <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{ old('title') }}">                   
                    @error('title')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="content">Content</label>
                      <textarea id="content" name="content">{{ old('content') }}</textarea>                
                    @error('content')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group w-50">
                    <label for="preview_image">Add preview</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="preview_image" name="preview_image">
                        <label class="custom-file-label" for="preview_image">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                  </div>
                  @error('preview_image')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                  </div>
                  <div class="form-group w-50">
                    <label for="main_image">Add main image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="main_image" name="main_image">
                        <label class="custom-file-label" for="main_image">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                    @error('main_image')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group w-50">
                    <label>Choose category</label>
                    <select name="category_id" class="form-control select2" style="width: 100%;">
                      @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? ' selected' : '' }}>{{ $category->title }}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="form-group w-50">
                  <label>Choose tags</label>
                  <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Choose tags" style="width: 100%;">
                    @foreach($tags as $tag)
                        <option {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                  </select>
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