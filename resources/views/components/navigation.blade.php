<div class="w-full text-right text-white bg-gray-700 ">
    <a class="{{ Route::is('books.index')? 'text-black': '' }}" href="{{route('books.index')}}">Books</a>
    <a class="{{ Route::is('authors.index')? 'text-black': '' }}" href="{{route('authors.index')}}">Authors</a>
</div>