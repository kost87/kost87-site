  @extends('admin.layouts.main')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tags</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Tags</li>
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
          <div class="col-1 mb-3">
            <a href="{{ route('admin.tag.create') }}" class="btn btn-block btn-primary">Add</a>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                  <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->title }}</td>
                    <td class="d-flex">
                      <a href="{{ route('admin.tag.show', $tag->id) }}" title="Show"><i class="far fa-eye"></i></a>
                      <a href="{{ route('admin.tag.edit', $tag->id) }}" title="Edit" class="ml-3"><i class="fas fa-pencil-alt"></i></a>
                      <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST" class="ml-3">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                          <i class="fas fa-trash text-danger" title="Delete" role="button"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach  
                </tbody>
              </table>
              </div>

            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection