  @extends('personal.layouts.main')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Comments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
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
                @foreach($comments as $comment)
                  <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->message }}</td>
                    <td class="d-flex">
                      <a href="{{ route('personal.comment.edit', $comment->id) }}" title="Edit" class="ml-3"><i class="fas fa-pencil-alt"></i></a>
                      <form action="{{ route('personal.comment.delete', $comment->id) }}" method="POST" class="ml-3">
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