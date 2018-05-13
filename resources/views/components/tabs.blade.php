<div class="panel panel-default">
  <ul class="nav nav-tabs">
    {{ $nav_tabs }}
  </ul>
  <div class="tab-content">
    {{ !empty($tab_panes) ? $tab_panes : $slot }}
  </div>
</div>
