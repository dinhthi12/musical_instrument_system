<ul class="dropdown-menu">
    @foreach ($subcategory->children as $grandchild)
        <li class="nav-item submenu dropdown">
            <a href="#" class="nav-link dropdown-toggle">{{ $grandchild->category_name }}</a>
            @if ($subcategory->children->count() > 0)

            @endif
        </li>
    @endforeach
</ul>
