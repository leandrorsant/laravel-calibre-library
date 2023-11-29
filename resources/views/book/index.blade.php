<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

<body>
    @forelse ($books as $book)
        <div class="border-2 border-black"><a href="{{route('books.show', ['book'=>$book])}}">{{ $book->title}}</a></div>
    @empty
        <div>no books</div>
    @endforelse

    {{ $books->links()}}
</x-layout>