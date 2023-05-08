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
              <li class="breadcrumb-item active">Edit post</li>
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
                <h3 class="card-title">Edit post</h3>
              </div>
                <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{ $post->title }}">                   
                    @error('title')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="content">Content</label>
                      <textarea id="content" name="content">{{ $post->content }}</textarea>                
                    @error('content')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group w-50">
                    <label for="preview_image">Add preview</label>
                    <div class="w-25 mb-2">
                      <img src="{{ asset('storage/' . $post->preview_image) }}" alt="{{ $post->preview_image }}" class="w-50">
                    </div>
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
                    <div class="w-25 mb-2">
                      <img src="{{ asset('storage/' . $post->main_image) }}" alt="{{ $post->main_image }}" class="w-50">
                    </div>
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
                        <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? ' selected' : '' }}>{{ $category->title }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group w-50">
                  <label>Choose tags</label>
                  <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Choose tags" style="width: 100%;">
                    @foreach($tags as $tag)
                        <option {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
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