<div class="box">
  @if(isset($header) || isset($title))
  <div class="box-header">
    @if(isset($header))
    {{ $header }}
    @else
    <span class="box-title">{{ $title }}</span>
    @isset($tools)
    <div class="pull-right">
      {{ $tools }}
    </div>
    @endisset
    @endif
  </div>
  @endif
  <div class="box-body">
    {{ !empty($body) ? $body : $slot }}
  </div>
  @isset($footer)
  <div class="box-footer clearfix">
    {{ $footer }}
  </div>
  @endisset
</div>
