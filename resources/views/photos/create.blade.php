@extends('core.main')

@section('content')
    <div class="grid grid-cols-2 gap-0 my-32 mx-auto">
        <div class="flex mx-8 max-w-full">
            <img class="flex phopre max-w-full mx-auto rounded-md drop-shadow-xl" src="{{ asset('nothing/nothing.jpg') }}">
        </div>
        <div class="p-8 mx-8 mb-auto static bg-slate-400 bg-opacity-30 rounded-lg shadow-xl">
            <h1 class="text-4xl text-center font-bold">
                Upload
            </h1>
            <form method="POST" action="{{ route('photos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 my-auto">
                    <div class="px-16 my-8 w-full mx-auto">
                        <div class="grid grid-cols-1 items-center">
                            <input type="hidden" id="id" name="id" value="{{ $number }}">
                            <label for="photos" class="text-xl">Photo</label>
                            <input id="photos" type="file"
                                class="file:text-lg text-lg file:py-2 file:px-2 file:border-gray-500 file:rounded-md bg-none ring-0 focus:outline-none @error('photos') is-invalid @enderror"
                                name="photos" onchange="previewImage()">
                            @error('photos')
                                <div class="text-lg text-red-700">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="grid grid-cols-1 items-center">
                            <label for="title" class="text-xl">Title</label>
                            <input id="title" type="text"
                                class="form-input rounded-md @error('title') is-invalid @enderror" name="title"
                                value="{{ old('title') }}">
                            @error('title')
                                <div class="text-lg text-red-700">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit"
                        class="mx-auto flex text-center bg-teal-700 text-xl px-5 py-2 rounded-md text-white no-underline">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#photos');
            const phoPre = document.querySelector('.phopre');

            phoPre.style.display = ['block', 'border'];

            const oFReader = new FileReader();
            oFReader.readAsDataURL(photos.files[0]);

            oFReader.onload = function(oFREvent) {
                phoPre.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
