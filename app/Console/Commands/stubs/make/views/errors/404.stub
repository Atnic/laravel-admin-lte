@extends('layouts.app')

@section('content-title', '404 Error Page')
@section('content-subtitle', '')

@section('content')
<div class="error-page">
  <h2 class="headline text-yellow"> 404</h2>

  <div class="error-content">
    <h3><i class="fa fa-warning text-yellow"></i> Oops! {{ class_basename($exception->getPrevious() ? : $exception) }}</h3>

    <p>{{ $exception->getPrevious() ? $exception->getPrevious()->getMessage() : $exception->getMessage() }}</p>

  </div>
  <!-- /.error-content -->
</div>
<!-- /.error-page -->
@endsection
