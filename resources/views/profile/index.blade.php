@extends('layouts.front')

@section('content')
    <div class="container">
    <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ str_limit($post->name, 30) }}
                                </div>
                                <div class="gender">
                                    {{ str_limit($post->gender, 5) }}
                                </div>
                                <div class="hobby">
                                    {{ str_limit($post->body, 100) }}
                                </div>
                                <div class="introduction">
                                    {{ str_limit($post->introduction, 150) }}
                               </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>    
@endsection