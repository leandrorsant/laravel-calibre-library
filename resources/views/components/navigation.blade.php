<div class="w-full text-right text-white bg-gray-400 text-lg">
    <a class="{{ Route::is('books.index')? 'text-blue-600 font-bold': '' }}" href="{{route('books.index')}}">Books</a>
    <a class="{{ Route::is('authors.index')? 'text-blue-600 font-bold': '' }}" href="{{route('authors.index')}}">Authors</a>
</div>