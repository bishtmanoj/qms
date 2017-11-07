@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Managers</h3>
              <a class="btn btn-primary pull-right" href="{{ route('manager_add') }}"><i class="fa fa-plus"></i> Add New Manager</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	@if($managers->count())
              <table class="table table-bordered">
                <thead>
                	<tr>
                  <th>Username</th>
                  <th>Created At</th>
                </tr>
            </thead>
                <tbody>
                @foreach($managers as $manager)
                <tr>
                	<td>{{ $manager->username }}</td>
                	<td>{{ $manager->created_at->toFormattedDateString() }}</td>
                </tr>
                @endforeach
              </tbody>
          </table>
          @else 
          <div class="alert laert-danger">No record found.</div>
          @endif
            </div>
            @if($managers->count())
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                {{ $managers->render() }}
              </ul>
            </div>
            @endif
          </div>
          <!-- /.box -->

        </div>
</div>
{{ $managers }}
@endsection