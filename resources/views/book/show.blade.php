<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-black leading-tight">
            {{ $book->title }}
        </h2>
    </x-slot>

<body>
    @if ($book)
        <div>{!! $book->comments()->first()['text'] !!}</div>
    @endif
</x-layout>