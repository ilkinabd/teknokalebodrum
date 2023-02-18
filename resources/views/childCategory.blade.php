@foreach($childs as $child)
  @php($isActive = in_array($currentCategory['id'],$child['descendants']))
  <a
    class="list-group-item list-group-item-action @if($isActive) active @elseif(count($child['children'])) collapsed @endif "
    @if(count($child['children'])) data-bs-toggle="collapse" href="#collapse-{{$child['slug']}}"
    @else href="{{route('products.list', ['category' => $child['slug']])}}" @endif>
    <div class="d-flex justify-content-between align-items-center">
      <span>{{ $child->getTranslatedAttribute('title') }}</span>
      @if(count($child['children']))
        <img class="arrow" src="{{asset('storage/assets/img/arrow-up-primary.svg')}}" alt="">
      @endif
    </div>
  </a>
  @if(count($child['children']))
    <div class="list-group list-group-flush collapse @if($isActive) show @endif" id="collapse-{{$child['slug']}}">
      @include('childCategory',['childs' => $child['children'],'depth'=> $depth,'currentCategory' =>$currentCategory])
    </div>
  @endif
@endforeach