@extends('layouts.mainlayout')
<div class="col"></div>


@section('content')
<div class="col-md-8">
    <div class="feature-img">
        <img class="img-fluid" src="{{ $getArticle->featured_img }}" alt="">
    </div>
    <div class="blog_details">
        <h2 style="color: #2d2d2d;">{{ $getArticle->post_body }}
        </h2>
    </div>
</div>

<div class="col">

</div>

@endsection