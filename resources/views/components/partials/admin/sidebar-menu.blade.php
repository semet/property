@foreach($menus as $menu)
    <li class="side-nav-item">
        <a href="{{ $menu['url'] }}" class="side-nav-link">
            <i class="uil-home-alt"></i>
            <span> {{ $menu['label'] }} </span>
        </a>
    </li>
@endforeach
