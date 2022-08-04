<div class="d-block mb-3">
  <div class="d-flex w-100 justify-content-between">
    <span class="d-inline-block">
      <strong>{{ $item->title }}</strong>
    </span>
    <span class="d-inline-block">
      <strong>€ {{ number_format($item->price, 2, ',', '.') }}</strong>
    </span>
  </div>
  <span class="d-block text-start mt-1">{{ $item->description }}</span>
</div>
