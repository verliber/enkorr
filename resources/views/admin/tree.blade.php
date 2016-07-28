@if($items)
  <ul>
    @foreach($items as $item)
    <li id="{{$item->node_id}}" class="
        @if($parent == 0)
          jstree-open
        @elseif(\App\Runsite\Nodes::where('parent_id', $item->node_id)->whereIn('class_id', $classesToShow->lists('id'))->count())
          jstree-closed
        @else
          jstree-leaf
        @endif">
      <a href="{{route('admin.nodes.edit', $item->node_id)}}">{{$item->name}}</a>
      @if(isset($item->children) and count($item->children))
        @include('admin.tree', ['items'=>$item->children, 'classesToShow'=>$classesToShow, 'parent'=>$item->node_id])
      @endif
    </li>
    @endforeach
  </ul>
@endif
