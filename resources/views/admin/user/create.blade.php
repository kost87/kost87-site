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
              <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Users</a></li>
              <li class="breadcrumb-item active">{{ (!isset($user)) ? 'Add user' : 'Edit user' }}</li>
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
              @if(!isset($user))
                <h3 class="card-title">Add user</h3>
              @else
                <h3 class="card-title">Edit user</h3>
              @endif
              </div>
              @if(!isset($user))
                <form action="{{ route('admin.user.store') }}" method="POST">
                  @csrf
              @else
                <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                  @csrf
                  @method('PATCH')
              @endif
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    @if(!isset($user))
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{ old('name') }}">
                    @else
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{ $user->name }}">
                    @endif                    
                    @error('name')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">E-mail</label>
                    @if(!isset($user))
                      <input type="text" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}">
                    @else
                      <input type="text" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ $user->email }}">
                    @endif                    
                    @error('email')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group w-50">
                    <label>Choose role</label>
                    <select name="role" class="form-control select2" style="width: 100%;">
                      @foreach($roles as $id => $role)
                        @if(!isset($user))
                          <option value="{{ $id }}" {{ ($id == old('role')) ? ' selected' : '' }}>{{ $role }}</option>
                        @else
                          <option value="{{ $id }}" {{ ($id == $user->role) ? ' selected' : '' }}>{{ $role }}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>
                  @if(isset($user))
                    <div class="form-group w-50">
                      <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </div>
                  @endif
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