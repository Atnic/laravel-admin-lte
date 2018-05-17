<div class="form-group{{ $errors->has($field['name']) ? ' has-error' : '' }}">
  <label class="control-label">{{ !empty($field['label']) ? $field['label'] : title_case(str_replace('_', ' ', snake_case($field['name']))) }}{{ !empty($field['required']) ? '*' : '' }}</label>
  <textarea class="form-control" name="{{ $field['name'] }}"
    rows="{{ !empty($field['row']) ? $field['row'] : 4 }}"
    cols="{{ !empty($field['cols']) ? $field['cols'] : 80 }}"
    {{ !empty($field['required']) ? 'required' : '' }}>{{ old($field['name'], isset($model) ? $model->{$field['name']} : null) }}</textarea>
  @if ($errors->has($field['name']))
  <span class="help-block">{{ $errors->first($field['name']) }}</span>
  @endif
</div>
