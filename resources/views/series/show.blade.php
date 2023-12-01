<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-black leading-tight">
            {{ "Books in the ".$series->name." series" }}
        </h2>
    </x-slot>

<body>
    <div class="flex items-center justify-center">
        <div class="w-5/6">
            @forelse ($series->books()->get() as $book)
                <div><p class="text-center"><a href="{{route('books.show',['book'=>$book])}}">{{$book->title}}</a></p></div>
            @empty
            <div>No books</div>
            @endforelse
        </div>
    </div>
    

</x-layout>