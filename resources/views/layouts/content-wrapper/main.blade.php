<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      @yield('content-title', 'Title')
      <small>@yield('content-subtitle', 'Subtitle')</small>
    </h1>
    @section('breadcrumbs')
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Title</li>
    </ol>
    @show
  </section>

  <!-- Main content -->
  <section class="content">

    @yield('content')

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
