  @extends('admin.layouts.main')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex align-items-center">
            <h1 class="m-0">{{ $tag->title }}</h1>
            <a href="{{ route('admin.tag.edit', $tag->id) }}" title="Edit" class="ml-3 text-success"><i class="fas fa-pencil-alt"></i></a>
            <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST" class="ml-3">
              @csrf
              @method('DELETE')
              <button type="submit" class="border-0 bg-transparent">
                <i class="fas fa-trash text-danger" title="Delete" role="button"></i>
              </button>
              </form>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}">Tags</a></li>
              <li class="breadcrumb-item active">Show tag</li>
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
            <div class="card">
              <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <tbody>
                  <tr>
                    <td>ID</td>
                    <td>{{ $tag->id }}</td>
                  </tr>
                  <tr>
                    <td>Title</td>
                    <td>{{ $tag->title }}</td>
                  </tr>
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