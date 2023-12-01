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

            @if ($book)
                <div>{!! $book->comments()->first()['text'] !!}</div>
            @endif
        </div>
    </div>
    

</x-layout>