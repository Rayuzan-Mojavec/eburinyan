@extends('core.main')

@section('content')
    <div class="items-center flex flex-col p-8 m-32 bg-slate-400 bg-opacity-30 rounded-lg shadow-xl">
        <h1 class="text-4xl text-center font-bold">
            Memento Mori
        </h1>
        <a class="bg-teal-700 my-8 mx-auto px-5 py-2 rounded-md text-white no-underline"
            href="{{ route('photos.create') }}">
            <i class="bi bi-plus-lg text-2xl"></i>
        </a>
            @if ($photos->count())
            <div class="grid grid-cols-3 gap-4 mx-auto justify-items-center">
                @foreach ($photos as $photo)
                    <a href="{{ route('photos.show', $photo->id) }}" class="mx-auto self-start">
                        <img class="rounded-md drop-shadow-xl mx-auto max-h-[560px] border" src="{{ asset('storage/' . $photo->photos) }}" alt=""/>
                    </a>
                @endforeach
            </div>
            @else
            <div class="text-center flex">
                <h2 class="font-mono text-2xl flex text-center">Nothing. Upload something</h2>
            </div>
            @endif
        <div class="mt-6">
        {{ $photos->links() }}
        </div>
    </div>
@endsection
