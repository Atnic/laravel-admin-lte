<div class="form-group{{ $errors->has($field['name']) ? ' has-error' : '' }}">
  <label class="control-label">{{ !empty($field['label']) ? $field['label'] : title_case(str_replace('_', ' ', snake_case($field['name']))) }}{{ !empty($field['required']) ? '*' : '' }}</label>
  <select class="form-control" name="{{ $field['name'] }}">
    @foreach ($field['options'] as $option)
    <option value="{{ $option['value'] }}" {{ $option['value'] == old($field['name'], isset($model) ? $model->{$field['name']} : null) ? 'selected' : '' }}>{{ $option['text'] }}</option>
    @endforeach
  </select>
  @if ($errors->has($field['name']))
  <span class="help-block">{{ $errors->first($field['name']) }}</span>
  @endif
</div>
