@if ($breadcrumbs)
<ol class="breadcrumb">
  @foreach ($breadcrumbs as $breadcrumb)
  @if ($breadcrumb->first)
  <li><a href="{{ $breadcrumb->url }}"><i class="fa fa-dashboard"></i> {{ $breadcrumb->title }}</a></li>
  @else
  <li class="active"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
  @endif
  @endforeach
</ol>
@endif
