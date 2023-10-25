@extends('core.main')

@section('content')
    <div class="items-center flex flex-col p-8 m-32 bg-slate-400 bg-opacity-30 rounded-lg shadow-xl">
        <h1 class="text-4xl text-center font-bold">
            {{ $photo->title }}
        </h1>
        <div class="grid grid-cols-1 my-8">
            @if ($photo->photos)
                <img src="{{ asset('storage/'. $photo->photos) }}" alt="" class="flex mx-auto w-5/6 rounded-md drop-shadow-2xl">
            @else
                <span>Where?</span>
            @endif
        </div>
        <div class="grid grid-cols-2 gap-4 text-center">
            <a href="{{ route('photos.edit', $photo->id) }}"
                class="bg-yellow-700  px-5 py-2 rounded-md text-white no-underline">
                <i class="bi bi-pen text-2xl"></i>
            </a>
            <form action="{{ route('photos.destroy', $photo->id) }}" method="post">
                @method('delete')
                @csrf
                <button class="bg-red-700 px-5 py-2 rounded-md text-white no-underline"
                    onclick="return confirm('Yakin dek?')">
                    <i class="bi bi-trash text-2xl"></i>
                </button>
            </form>
        </div>
    </div>
@endsection
