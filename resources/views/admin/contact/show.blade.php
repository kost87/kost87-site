  @extends('admin.layouts.main')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex align-items-center">
            <h1 class="m-0">{{ $message->subject }}</h1>
            <form action="{{ route('admin.contact.delete', $message->id) }}" method="POST" class="ml-3">
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
              <li class="breadcrumb-item"><a href="{{ route('admin.contact.index') }}">Messages</a></li>
              <li class="breadcrumb-item active">Show message</li>
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
            <div class="card">
              <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <td>ID</td>
                    <td>{{ $message->id }}</td>
                  </tr>
                  <tr>
                    <td>Name</td>
                    <td>{{ $message->name }}</td>
                  </tr>
                  <tr>
                    <td>E-mail</td>
                    <td>{{ $message->email }}</td>
                  </tr>
                  <tr>
                    <td>Phone</td>
                    <td>{{ $message->phone }}</td>
                  </tr>
                  <tr>
                    <td>Subject</td>
                    <td>{{ $message->subject }}</td>
                  </tr>
                  <tr>
                    <td>Message</td>
                    <td>{{ $message->message }}</td>
                  </tr>
                  <tr>
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