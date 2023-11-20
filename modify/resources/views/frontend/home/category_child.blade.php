




<ul class="submenu" style="left: 100% !important;">
    @forelse($childs as $child)
        <li class="menu_item_has_child" data-after-content="{{ count($child->child) > 0 ? 'block' : 'none' }}">
            <a href="{{ route('category-wise.list', $child->uuid) }}">{{ $child->name ?? ''
            }}</a>
            @if(count($child->child))
                @include('frontend.home.category_child',['childs' => $child->child])
            @endif
        </li>
    @empty
    @endforelse
</ul>
