@extends('layouts.master')
@section('title', 'Halaman Home')
@section('content')
    <div class="border-[6px] border-orange-950 my-2 mx-10">
        <div class="container mx-auto py-5">
            <div class="flex gap-5">
                {{-- <img src="https://source.unsplash.com/450x250/?book" alt="" class=""> --}}
                <img src="{{ $mostLikeBook->image }}" alt="" class="w-4/12">
                <div class="w-8/12">
                    <h2 class="border-b-2 border-stone-900 text-lg">
                        {{ $mostLikeBook->subTitle }}
                    </h2>
                    <p class="text-5xl">
                        {{ $mostLikeBook->title }}
                    </p>
                    <p class="text-lg my-5">
                        {{ $mostLikeBook->description }}
                    </p>
                    <a href="/detail/{{ $mostLikeBook->id }}"
                        class="px-6 py-2 border-2 border-stone-900 hover:bg-stone-900 hover:text-white hover:border-white">
                        Read Post
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="border-[6px] border-orange-950 my-5 mx-10">
        <div class="container mx-auto py-5">
            <h1 class="border-b-2 border-stone-900 mb-4 font-bold">
                LATEST BOOK REVIEWS
            </h1>
            <div class="grid grid-cols-4 gap-10">
                @foreach ($latestBooks as $book)
                    <a href="/detail/{{ $book->id }}">
                        <div>
                            {{-- <img src="https://source.unsplash.com/250x250/?books"> --}}
                            <img src="{{ $book->image }}" alt="">
                            <p class="text-lg leading-5 my-2">
                                {{ $book->title }}
                            </p>
                            <p class="text-sm">
                                {{ $book->description }}
                            </p>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </div>

    <div class="px-10 bg-stone-200 py-10 text-stone-900">
        <div class="border-[6px] border-stone-950 my-2 ">
            <div class="container mx-auto py-5">
                <h1 class="text-xl mb-4 font-bold">
                    Book Series Review
                </h1>
                <div class="grid grid-cols-3 gap-10">
                    @foreach ($books as $book)
                        <div>
                            {{-- <img src="https://source.unsplash.com/250x250/?book" alt="Books"> --}}
                            <img src="{{ $book->image }}" alt="">
                            <p class="mb-5">
                                {{ $book->title }}
                            </p>
                            <a href="/detail/{{ $book->id }}"
                                class="px-6 py-2 border-stone-900 border-2 hover:bg-stone-900 hover:border-bg-stone-200 hover:text-white">
                                Read Post
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="text-white">
            {{ $books->links() }}
        </div>
    </div>
@endsection
