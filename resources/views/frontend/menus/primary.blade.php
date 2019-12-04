<?php 
    $menu = [
        'Why Us?' => 'why-us',
        'Services' => 'services',
        'Careers' => 'careers',
        'Get a Free Quote' => 'get-a-free-quote',
];
?>
@foreach ($menu as $key => $item)
    @if (\Request::is($item))
        <li class="nav-item active">
            <a class="nav-link" href="{{$item}}">{{$key}} <span class="sr-only">(current)</span></a>
        </li>
    @else
        <li class="nav-item ">
            <a class="nav-link" href="{{$item}}">{{$key}} <span class="sr-only">(current)</span></a>
        </li>
    @endif

@endforeach
