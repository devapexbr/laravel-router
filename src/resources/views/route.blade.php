@php /**  @var \DevApex\LaravelRouter\Models\RouteModel $item */ @endphp
//{{ $item->as }}
Route::match({!! $item->method !!}, '{{ $item->url }}',
{!! $item->getProps() !!}
);
