<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-black leading-tight">
            {{ $book->title }}
        </h2>
    </x-slot>

<body>
    <div class="flex items-center justify-center">
        <img class="max-w-xs" src="{{ asset('storage/calibre_library/'.$book->path.'/cover.jpg' ) }}">
    </div>
    <div class="flex items-center justify-center">
        <div class="w-5/6">
            @if ($book)
                <div>{!! $book->comments()->first()['text'] !!}</div>
            @endif
        </div>
    </div>
    

</x-layout>