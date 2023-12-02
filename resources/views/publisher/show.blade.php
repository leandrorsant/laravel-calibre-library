<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Books by '.$publisher->name) }}
        </h2>
    </x-slot>

<body>
    <div class="p-2 w-full">
    @forelse ($books as $book)
        
            <p class="text-center mb-2">
            <a href="{{route('books.show', ['book'=>$book])}}">{{ $book->title}}</a>
            </p>
        
    @empty
        <div>no books</div>
    @endforelse
       <div class="w-full flex items-center justify-center">
        {{ $books->links()}}
       </div>
    </div>

    
</x-layout>