@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Main Content Area -->
            <div class="col-md-8">
                <h2>Tin tức hàng đầu</h2>

                <div class="row mb-3">
                    @foreach($newsItems as $news)
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ $news->image_url }}" class="card-img-top" alt="{{ $news->title }}" style="height: 200px; object-fit: cover;">
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
                </div>
            </div>

            <!-- Sidebar Area -->
            <div class="col-md-4">
                <h3>Thể loại</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ url('/category/sports') }}">Các môn thể thao</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('/category/music') }}">Âm nhạc</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('/category/food') }}">Đồ ăn</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('/category/general') }}">Tổng quan</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
