<label for="field_{{ $field_name }}_{{ $field_lang }}" class="col-md-2 control-label"><div class="text-left">{{ $field_label }} <small class="text-muted">[{{$field_name}}]</small></div></label>
<div class="col-md-10">
  <div class="radio radio-inline" style="padding-left: 0;">
    <label class="ui-checks">
      <input type="radio" name="langs[{{$field_lang}}][{{$field_name}}]" value="1" @if($field_value) checked @endif>
      <i></i> {{trans('admin/nodes.yes')}}
    </label>
  </div>

  <div class="radio radio-inline" style="padding-left: 0;">
    <label class="ui-checks">
      <input type="radio" name="langs[{{$field_lang}}][{{$field_name}}]" value="0" @if(!$field_value) checked @endif>
      <i></i> {{trans('admin/nodes.no')}}
    </label>
  </div>
</div>
