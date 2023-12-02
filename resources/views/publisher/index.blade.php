<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Publishers') }}
        </h2>
    </x-slot>

<body>
    <div class="p-2 w-full">
    @forelse ($publishers as $publisher)
        
            <p class="text-center mb-2">
            <a href="{{route('publishers.show', ['publisher'=>$publisher])}}">{{ $publisher->name}}</a>
            </p>
        
    @empty
        <div>no publishers</div>
    @endforelse
       <div class="w-full flex items-center justify-center">
        {{ $publishers->links()}}
       </div>
    </div>

    
</x-layout>