<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Series') }}
        </h2>
    </x-slot>

<body>
    <div class="m-2 w-full">
    @forelse ($series as $s)
        
            <p class="text-center">
            <a href="{{route('series.show', ['series'=> $s ])}}">{{ $s->name}}</a>
            </p>
        
    @empty
        <div>no books</div>
    @endforelse
       <div class="w-full flex items-center justify-center">
        {{ $series->links()}}
       </div>
    </div>

    
</x-layout>