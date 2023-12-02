<div class="w-full lg:text-right text-center  text-white bg-gray-400 text-lg p-2">

    <a class="{{ Route::is('books.index')? 'text-black font-bold': '' }}" href="{{route('books.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline-block" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
        </svg>
        Books
    </a>

    <a class="{{ Route::is('authors.index')? 'text-black font-bold': '' }}" href="{{route('authors.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline-block" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
        </svg>
        Authors
    </a>
    <a class="{{ Route::is('series.index')? 'text-black font-bold': '' }}" href="{{route('series.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline-block" viewBox="0 0 20 20" fill="currentColor">
            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
        </svg>
        Series
    </a>
    <a class="{{ Route::is('publishers.index')? 'text-black font-bold': '' }}" href="{{route('publishers.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline-block" viewBox="0 0 20 20" fill="currentColor">
            <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
            <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
        Publishers
    </a>
</div>