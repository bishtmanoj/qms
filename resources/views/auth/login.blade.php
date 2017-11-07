@extends('layouts.base')

@section('content')
<div class="col-md-6 col-md-offset-3">
        @include('errors.flash')
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Login</h3>
            </div>
          
                <form role="form" action="" method="POST" novalidate="">
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group {{ $errors->has('username')?'has-error':'' }}">
                  <label for="exampleInputEmail1">Email address or username</label>
                  <input class="form-control" type="text" required="" value="{{ old('username') }}" name="username" placeholder="Email address or Username">
            @if ($errors->has('username'))
            <div class="text text-danger">{{ $errors->first('username') }}</div>
            @endif
                </div>
                <div class="form-group {{ $errors->has('password')?'has-error':'' }}">
                  <input class="form-control" type="password" name="password" value="{{ old('password') }}" required="" placeholder="Password">
            @if ($errors->has('password'))
            <div class="text text-danger">{{ $errors->first('password') }}</div>
            @endif
                </div>
                
                <div class="checkbox">
                  <label>
                    <input  type="checkbox" name="remember" value="1"> Remeber me
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        
        </div>
@endsection
