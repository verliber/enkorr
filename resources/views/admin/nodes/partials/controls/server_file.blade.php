@if(! ($ignore_language and $lang_key))
  @include('admin.nodes.partials.controls.partials.server_file.' . \App\Runsite\Field_settings::pull($settings, 'type_of_html_control'))
@endif