@extends('core.main')

@section('content')
    <div class="items-center flex flex-col p-8 m-32 bg-slate-400 bg-opacity-30 rounded-lg shadow-xl">
        <h1 class="text-4xl text-center font-bold">
            Memento Mori
        </h1>
        <a class="bg-teal-700 my-8 text-xl px-5 py-2 rounded-md text-white no-underline"
        href="{{ route('photos.create') }}">Upload
    </a>
        <div class="grid grid-cols-3 gap-4 ">
            @if ($photos->count())
                @foreach ($photos as $photo)
                <img class="rounded-md drop-shadow-xl max-h-[560px] border flex mx-auto" src="{{ asset('storage/'. $photo->photos) }}" alt="">
                @endforeach
            @else
                <span class="font-mono text-2xl">Nothing. Upload something</span>
            @endif
        </div>

    </div>
@endsection
