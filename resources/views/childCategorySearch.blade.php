@foreach($childs as $child)
  <a class="list-group-item list-group-item-action"
     @if(count($child['children'])) data-bs-toggle="collapse" href="#collapse-{{$child['slug']}}"
     @else href="{{route('products.list', ['category' => $child['slug']])}}" @endif>
    <div class="d-flex justify-content-between align-items-center">
      <span>{{ $child['title'] }}</span>
      @if(count($child['children']))
        <img class="arrow" src="{{asset('storage/assets/img/arrow-up-primary.svg')}}" alt="">
      @endif
    </div>
  </a>
  @if(count($child['children']))
    <div class="list-group list-group-flush collapse" id="collapse-{{$child['slug']}}">
      @include('childCategorySearch',['childs' => $child['children']])
    </div>
  @endif
@endforeach