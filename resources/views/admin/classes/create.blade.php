@extends('admin.app')
@section('content')

<div class="p-md">
  <div class="panel panel-default">
    <div class="panel-heading bg-white">
      <i class="fa fa-plus"></i> {{trans('admin/classes.creating_class')}}
    </div>
    <div class="panel-body">
      {!! Form::open(array('route' => 'admin.classes.store', 'class' => 'form-horizontal')) !!}
        <fieldset>
          @include('admin.classes.formfields')
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  <button type="submit" class="btn btn-raised btn-primary">{{trans('admin/classes.create')}}</button>
                  <a href="{{route('admin.classes.items')}}" class="btn btn-raised btn-default">{{trans('admin/classes.close')}}</a>
                </div>
              </div>
            </div>
          </div>
        </fieldset>
      {!! Form::close() !!}
    </div>
  </div>
</div>


@stop
