<div class="panel panel-default">
  @if(isset($header) || isset($title))
  <div class="panel-heading">
    @if(isset($header))
    {{ $header }}
    @else
    <span class="panel-title">{{ $title }}</span>
    @isset($tools)
    <div class="pull-right">
      {{ $tools }}
    </div>
    @endisset
    @endif
  </div>
  @endif
  <div class="panel-body">
    {{ !empty($body) ? $body : $slot }}
  </div>
  @isset($footer)
  <div class="panel-footer">
    {{ $footer }}
  </div>
  @endisset
</div>
