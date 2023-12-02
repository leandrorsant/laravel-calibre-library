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
            @php
                $files = File::allFiles('storage/calibre_library/'.$book->path);
            @endphp

            <h3 class="text-center">Available files: </h3>
            @foreach ( $files as $file )
                @if($file->getExtension() != 'opf' && $file->getExtension() != 'jpg')
                <p class="text-center font-bold">
                <a class="max-w-xs" href="{{ route( 'download', ['fileName'=> base64_encode('calibre_library/'.$book->path.'/'.$file->getFilename())] ) }}">{{$file->getFilename()}}</a>
                </p>
                @endif
            @endforeach
            
            @if ($book->rating()->first())
                @php
                    $rating = $book->rating()->first()->rating;
                @endphp
                    @for ($x=0; $x < $rating ; $x++)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    @endfor
            @endif
  
            @if ($book->comments()->first())
                <div>{!! $book->comments()->first()['text'] !!}</div>
            @endif
        </div>
    </div>
</x-layout>