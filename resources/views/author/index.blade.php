<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Authors') }}
        </h2>
    </x-slot>

<body>
    <div class="p-2 w-full">
    @forelse ($authors as $author)
        
            <p class="text-center mb-2">
            <a href="{{route('authors.show', ['author'=> $author ])}}">{{ $author->name}}</a>
            </p>
        
    @empty
        <div>no books</div>
    @endforelse
       <div class="w-full flex items-center justify-center">
        {{ $authors->links()}}
       </div>
    </div>

    
</x-layout>