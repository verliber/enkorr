<div class="app-header navbar bg-dark">
  <nav class="navbar">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar hidden-xs" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{route('admin.classes.items')}}"><i class="fa fa-terminal"></i> Classes <span class="sr-only">(current)</span></a></li>
          <li><a href="{{route('admin.classes.create')}}"><i class="fa fa-plus"></i> {{trans('admin/classes.create')}}</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
  </nav>
</div>
