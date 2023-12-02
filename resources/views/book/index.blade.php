<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

<body>
    <div class="p-2 w-full">
        <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            @forelse ($books as $book)
                <div class="flex items-center justify-center ">
                    <div class="w-fit text-center">
                        <a href="{{route('books.show', ['book'=>$book])}}">
                            <div class="flex items-center justify-center">
                                <img class="w-40" src="{{ asset('storage/calibre_library/'.$book->path.'/cover.jpg' ) }}">
                            </div>
                            <p class="mb-2">
                                {{ $book->title}}
                            </p>
                        </a>
                    </div>
                </div>
            @empty
                <div>no books</div>
            @endforelse

        </div>

        <div class="w-full flex items-center justify-center">
            {{ $books->links()}}
        </div>
    </div>

    
</x-layout>