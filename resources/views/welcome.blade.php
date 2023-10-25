@extends('core.main')

@section('content')
    <div class="flex flex-col p-8 m-32 bg-slate-400 bg-opacity-30 rounded-lg shadow-xl">
        <h1 class="text-4xl text-center font-bold">
            Welcome, Eburinyan!
        </h1>
        <br>
        <article class="prose text-black prose-xl  max-w-none my-4">
            <p>
                I for real have no idea what the fuck am I doing
            <p>
                This is a placeholder and not intended for final release
            </p>
        </article>
    </div>
    <script>
        // document.addEventListener("DOMContentLoaded", function(event) {
        //     var toolbarOptions = [
        //     ['bold', 'italic', 'underline', 'strike'],
        //     ['blockquote', 'code-block'],
    
        //     [{ 'header': 1 }, { 'header': 2 }],
        //     [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        //     [{ 'script': 'sub'}, { 'script': 'super' }],
        //     [{ 'indent': '-1'}, { 'indent': '+1' }],
        //     [{ 'direction': 'rtl' }],
    
        //     [{ 'size': ['small', false, 'large', 'huge'] }],
        //     [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
    
        //     [{ 'color': [] }, { 'background': [] }],
        //     [{ 'font': [] }],
        //     [{ 'align': [] }],
    
        //     ['clean']
        //     ];
    
        //     var quill = new Quill('#editor', {
        //                     modules: {
        //                     syntax: false,
        //                     toolbar: toolbarOptions
        //                     },
        //                     theme: 'snow'
        //                 });
    
        //     window.quill = quill
        // });
    </script>
@endsection
