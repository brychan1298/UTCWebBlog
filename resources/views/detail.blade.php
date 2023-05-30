@extends('layouts.master')
@section('title', 'Halaman Detail')
@section('content')
    <div class="container mx-auto py-5">
        <a href="/" class="my-10 bg-green-500 px-8 py-3 text-white rounded-md">
            Back to Home
        </a>

        <h1 class="underline py-5 text-lg font-bold">
            {{ $book->subTitle }}
        </h1>
        <p class="text-7xl">
            {{ $book->title }}
        </p>
        <p class="py-3">
            {{ $book->description }}
        </p>
        <div class="flex items-center gap-5">
            <p>
                By <b>{{ $book->author }}</b> | {{ date('j F, Y', strtotime($book->date)) }}
            </p>
            @if ($book->time >= 10 && $book->time < 20)
                <div class="px-5 py-1 text-white bg-red-400 rounded-lg">
                    Quicks Reads
                </div>
            @elseif($book->time >= 20 && $book->time < 30)
                <div class="px-5 py-1 text-white bg-red-500 rounded-lg">
                    Medium Reads
                </div>
            @elseif($book->time >= 30 && $book->time <= 40)
                <div class="px-5 py-1 text-white bg-red-500 rounded-lg">
                    Long Reads
                </div>
            @endif
        </div>
        <img src="https://source.unsplash.com/1200x400/?book" alt="" class="py-3">
        <p class="mb-5 text-lg" style="width:1200px">
            {{ $book->body }}
        </p>
        <div class="flex">
            <img src="{{ $book->image }}" alt="" class="w-6/12">
            <div class="w-6/12">
                <img src="https://source.unsplash.com/500x250/?book" alt="" class="px-2 pb-1">
                <img src="https://source.unsplash.com/500x250/?books" alt="" class="px-2 pt-1">
            </div>
        </div>
        <h2 class="font-bold mt-10 text-xl">
            Video Section
        </h2>
        <div class="my-5">
            <iframe width="1200" height="400" src="https://www.youtube.com/embed/mdg1082XvlM">
            </iframe>
        </div>

        <h1 class="font-bold text-xl">
            Share:
        </h1>
        <div class="flex gap-5 mb-10">
            <a href="https://www.facebook.com/">
                <div
                    class="shadow-2xl rounded-full border-2 w-12 h-12 flex justify-center items-center hover:bg-blue-800 hover:border-white">
                    <svg width="13" height="25" viewBox="0 0 27 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.5 28.75H23.75L26.25 18.75H17.5V13.75C17.5 11.175 17.5 8.75 22.5 8.75H26.25V0.35C25.435 0.2425 22.3575 0 19.1075 0C12.32 0 7.5 4.1425 7.5 11.75V18.75H0V28.75H7.5V50H17.5V28.75Z"
                            fill="black" />
                    </svg>
                </div>
            </a>
            <a href="https://www.instagram.com/">
                <div
                    class="shadow-2xl rounded-full border-2 w-12 h-12 flex justify-center items-center hover:bg-pink-500 hover:border-white">
                    <svg width="25" height="25" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.5 0H35.5C43.5 0 50 6.5 50 14.5V35.5C50 39.3456 48.4723 43.0338 45.753 45.753C43.0338 48.4723 39.3456 50 35.5 50H14.5C6.5 50 0 43.5 0 35.5V14.5C0 10.6544 1.52767 6.96623 4.24695 4.24695C6.96623 1.52767 10.6544 0 14.5 0ZM14 5C11.6131 5 9.32387 5.94821 7.63604 7.63604C5.94821 9.32387 5 11.6131 5 14V36C5 40.975 9.025 45 14 45H36C38.3869 45 40.6761 44.0518 42.364 42.364C44.0518 40.6761 45 38.3869 45 36V14C45 9.025 40.975 5 36 5H14ZM38.125 8.75C38.9538 8.75 39.7487 9.07924 40.3347 9.66529C40.9208 10.2513 41.25 11.0462 41.25 11.875C41.25 12.7038 40.9208 13.4987 40.3347 14.0847C39.7487 14.6708 38.9538 15 38.125 15C37.2962 15 36.5013 14.6708 35.9153 14.0847C35.3292 13.4987 35 12.7038 35 11.875C35 11.0462 35.3292 10.2513 35.9153 9.66529C36.5013 9.07924 37.2962 8.75 38.125 8.75ZM25 12.5C28.3152 12.5 31.4946 13.817 33.8388 16.1612C36.183 18.5054 37.5 21.6848 37.5 25C37.5 28.3152 36.183 31.4946 33.8388 33.8388C31.4946 36.183 28.3152 37.5 25 37.5C21.6848 37.5 18.5054 36.183 16.1612 33.8388C13.817 31.4946 12.5 28.3152 12.5 25C12.5 21.6848 13.817 18.5054 16.1612 16.1612C18.5054 13.817 21.6848 12.5 25 12.5ZM25 17.5C23.0109 17.5 21.1032 18.2902 19.6967 19.6967C18.2902 21.1032 17.5 23.0109 17.5 25C17.5 26.9891 18.2902 28.8968 19.6967 30.3033C21.1032 31.7098 23.0109 32.5 25 32.5C26.9891 32.5 28.8968 31.7098 30.3033 30.3033C31.7098 28.8968 32.5 26.9891 32.5 25C32.5 23.0109 31.7098 21.1032 30.3033 19.6967C28.8968 18.2902 26.9891 17.5 25 17.5Z"
                            fill="black" />
                    </svg>
                </div>
            </a>
            <a href="https://id.linkedin.com/?original_referer=https%3A%2F%2Fwww.google.com%2F">
                <div
                    class="shadow-2xl rounded-full border-2 w-12 h-12 flex justify-center items-center hover:bg-blue-500 hover:border-white">
                    <svg width="24" height="23" viewBox="0 0 48 46" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 5.0025C9.99934 6.32858 9.47192 7.60009 8.53377 8.5373C7.59562 9.47452 6.32358 10.0007 4.9975 10C3.67142 9.99934 2.39991 9.47192 1.4627 8.53377C0.525486 7.59562 -0.000662415 6.32358 6.25904e-07 4.9975C0.000663667 3.67142 0.528084 2.39991 1.46623 1.4627C2.40439 0.525486 3.67642 -0.000662415 5.0025 6.25904e-07C6.32858 0.000663667 7.60009 0.528084 8.5373 1.46623C9.47452 2.40439 10.0007 3.67642 10 5.0025ZM10.15 13.7025H0.15V45.0025H10.15V13.7025ZM25.95 13.7025H16V45.0025H25.85V28.5775C25.85 19.4275 37.775 18.5775 37.775 28.5775V45.0025H47.65V25.1775C47.65 9.7525 30 10.3275 25.85 17.9025L25.95 13.7025Z"
                            fill="black" />
                    </svg>
                </div>
            </a>
            <a href="https://twitter.com/?lang=id">
                <div
                    class="shadow-2xl rounded-full border-2 w-12 h-12 flex justify-center items-center hover:bg-blue-300 hover:border-white">
                    <svg width="26" height="21" viewBox="0 0 53 43" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M52.3 5C50.375 5.875 48.3 6.45 46.15 6.725C48.35 5.4 50.05 3.3 50.85 0.775C48.775 2.025 46.475 2.9 44.05 3.4C42.075 1.25 39.3 0 36.15 0C30.275 0 25.475 4.8 25.475 10.725C25.475 11.575 25.575 12.4 25.75 13.175C16.85 12.725 8.925 8.45 3.65 1.975C2.725 3.55 2.2 5.4 2.2 7.35C2.2 11.075 4.075 14.375 6.975 16.25C5.2 16.25 3.55 15.75 2.1 15V15.075C2.1 20.275 5.8 24.625 10.7 25.6C9.12682 26.0305 7.47524 26.0904 5.875 25.775C6.55402 27.9062 7.88384 29.771 9.67754 31.1073C11.4712 32.4436 13.6386 33.1842 15.875 33.225C12.0841 36.2261 7.38499 37.8483 2.55 37.825C1.7 37.825 0.85 37.775 0 37.675C4.75 40.725 10.4 42.5 16.45 42.5C36.15 42.5 46.975 26.15 46.975 11.975C46.975 11.5 46.975 11.05 46.95 10.575C49.05 9.075 50.85 7.175 52.3 5Z"
                            fill="black" />
                    </svg>
                </div>
            </a>
        </div>
    </div>
@endsection
