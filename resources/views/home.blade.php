@extends('layouts.master')
@section('title', 'Halaman Home')
@section('content')
    <div class="border-[6px] border-orange-950 my-2 mx-10">
        <div class="container mx-auto py-5">
            <div class="flex">
                <img src="" alt="" class="">
                <div class="">
                    <h2>Tes</h2>
                    <p>
                        Post Title
                    </p>
                    <p>
                        Post Description
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="border-[6px] border-orange-950 my-2 mx-10">
        <div class="container mx-auto py-5">
            <h1>
                LATEST BOOK REVIEWS
            </h1>
            <div class="grid grid-cols-4">
                <div>
                    <img src="" alt="Books">
                    <p>
                        Post Title
                    </p>
                    <p>
                        Post Description
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="px-10 bg-stone-800 py-3 text-white">
        <div class="border-[6px] border-orange-950 my-2 ">
            <div class="container mx-auto py-5">
                <h1>
                    Book Series Review
                </h1>
                <div class="grid grid-cols-3">
                    <div>
                        <img src="" alt="Books">
                        <p>
                            Post Title
                        </p>
                        <button class="px-6 py-2 border-white border-2">
                            Read Post
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
