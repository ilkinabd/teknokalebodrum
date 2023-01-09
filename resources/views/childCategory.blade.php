@foreach($childs as $child)
  <div class="list-group-item list-group-item-action" style="cursor: pointer"
     @if(count($child['children_recursive'])) data-bs-toggle="collapse" href="#collapse-{{$child['slug']}}"
     @else href="javascript:void(0)" @endif>
    <div class="d-flex justify-content-between align-items-center">
      <span>{{ $child['title'] }}</span>
      @if(count($child['children_recursive']))
        <span class="badge bg-primary">❯</span>
      @endif
    </div>
  </div>
  @if(count($child['children_recursive']))
    <div class="list-group list-group-flush collapse" id="collapse-{{$child['slug']}}">
      @include('childCategory',['childs' => $child['children_recursive'],'depth'=> $depth])
    </div>
  @endif
  {{--    <div class="accordion" id="accordion-menu-{{$child['slug']}}">--}}
  {{--      <div class="accordion-item">--}}
  {{--        <h2 class="accordion-header" id="heading-{{$child['slug']}}">--}}
  {{--          <button class="accordion-button" type="button" data-bs-toggle="collapse"--}}
  {{--                  data-bs-target="#collapse-{{$child['slug']}}" aria-expanded="true"--}}
  {{--                  aria-controls="collapseKaleKilit">--}}
  {{--            {{$child['title']}} {{$depth}}--}}
  {{--          </button>--}}
  {{--        </h2>--}}
  {{--        <div id="collapse-{{$child['slug']}}" class="accordion-collapse collapse show"--}}
  {{--             aria-labelledby="heading-{{$child['slug']}}"--}}
  {{--             data-bs-parent="#accordion-menu-{{$child['slug']}}">--}}
  {{--          <div class="accordion-body">--}}
  {{--            <div class="list-group list-group-flush">--}}
  {{--              @if(count($child['children_recursive']))--}}
  {{--                @include('childCategory',['childs' => $child['children_recursive'],'depth'=> $depth++])--}}
  {{--              @endif--}}
  {{--            </div>--}}
  {{--          </div>--}}
  {{--        </div>--}}
  {{--      </div>--}}
  {{--    </div>--}}
@endforeach