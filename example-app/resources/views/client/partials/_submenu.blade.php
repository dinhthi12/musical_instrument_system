@foreach ($subcategory['children'] as $grandchild)
    <li>
        <a href="#">{{ $grandchild['category_name'] }}</a>
        @if (!empty($subcategory['children']))
        @endif
    </li>
@endforeach
