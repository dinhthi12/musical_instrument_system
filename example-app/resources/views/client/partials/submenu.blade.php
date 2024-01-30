
    @foreach ($subcategory->children as $grandchild)
        <li>
            <a href="#">{{ $grandchild->category_name }}</a>
            @if ($subcategory->children->count() > 0)

            @endif
        </li>
    @endforeach
