@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Kết quả tìm kiếm cho: "{{ request('query') }}"</h2>
        <div class="row">
            @if($newsItems->isEmpty())
                <p>Không tìm thấy tin tức nào.</p>
            @else
                @foreach($newsItems as $news)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ $news->image_url }}" class="card-img-top" alt="{{ $news->title }}">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ route('news.show', $news->id) }}">{{ $news->title }}</a>
                                </h5>
                                <p class="card-text">
                                    <small class="text-muted">Views: {{ $news->views }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
