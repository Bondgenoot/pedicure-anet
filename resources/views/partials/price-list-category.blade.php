<div class="mb-5">
  <span class="d-block text-start h4 text-primary mb-4">
    {{ $category->name }}
  </span>

  @foreach ($category->items as $item)
    @include('partials.price-list-item', compact('item'))
  @endforeach
</div>
