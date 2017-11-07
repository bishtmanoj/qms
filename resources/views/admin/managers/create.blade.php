@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Manager</h3>
            </div>
            <form role="form" method="POST" action="">
            	{{ csrf_field() }}
              <div class="box-body">
                <div class="form-group {{ $errors->has('username')?'has-error':'' }}">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required="">
                   @if ($errors->has('username'))
            <div class="text text-danger">{{ $errors->first('username') }}</div>
            @endif
                </div>
                <div class="form-group {{ $errors->has('password')?'has-error':'' }}">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
                   @if ($errors->has('password'))
            <div class="text text-danger">{{ $errors->first('password') }}</div>
            @endif
                </div>
                 <div class="form-group {{ $errors->has('password_confirmation')?'has-error':'' }}">
                  <label for="password">Confirm Password</label>
                  <input type="password" class="form-control" id="password_confirm" name="password_confirmation" placeholder="Password Confirmation" required="">
                   @if ($errors->has('password_confirmation'))
            <div class="text text-danger">{{ $errors->first('password_confirmation') }}</div>
            @endif
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create</button>
                &nbsp;&nbsp;&nbsp;
                <a class="btn btn-default" href="{{ route('manager_list') }}">Cancel</a>
              </div>
            </form>
          </div>

        </div>
</div>
@endsection