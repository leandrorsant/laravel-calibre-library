<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-black leading-tight">
            {{ $author->name }}
        </h2>
    </x-slot>

<body>
    <div class="flex items-center justify-center">
        <div class="w-5/6">
            @if ($author)
                <div>{{$author->name}}</div>
            @endif
        </div>
    </div>
    

</x-layout>