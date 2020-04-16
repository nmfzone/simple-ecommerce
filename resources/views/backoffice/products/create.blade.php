@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="flex align-items-center justify-center">
      <form action="{{ route('backoffice.products.create') }}" method="POST" class="w-full max-w-lg my-10">
        @csrf

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Title
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="title" type="text" placeholder="e.g. Jual Sepeda gunung">
        </div>
        <div class="w-full md:w-1/2 px-3 mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Price
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" name="price" type="number" min="0">
        </div>
        <div class="w-full md:w-1/2 px-3 mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Stock
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" name="stock" type="number" min="0">
        </div>
        <div class="w-full md:w-1/2 px-3 mt-5">
          <button class="w-40 bg-blue-400 px-5 py-2 text-white rounded-lg">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
