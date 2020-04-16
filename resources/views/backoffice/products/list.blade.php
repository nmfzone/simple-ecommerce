@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="flex align-items-center justify-center">
      <div class="products-list">
        <table class="table-auto">
          <thead>
            <tr>
              <th class="px-4 py-2">ID</th>
              <th class="px-4 py-2">Title</th>
              <th class="px-4 py-2">Price</th>
              <th class="px-4 py-2">Stock</th>
              <th class="px-4 py-2">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $index => $product)
              <tr>
                <td class="border px-4 py-2">{{ $index + 1 }}</td>
                <td class="border px-4 py-2">{{ $product->title }}</td>
                <td class="border px-4 py-2">Rp {{ $product->price }}</td>
                <td class="border px-4 py-2">{{ $product->stock }}</td>
                <td class="border px-4 py-2">
                  todo
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        {!! $products->links() !!}
      </div>
    </div>
  </div>
@endsection
