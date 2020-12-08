@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <form method="post" action="savearticle" autocomplete="off" class="form-horizontal">
                    @csrf

                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('New Article') }}</h4>
                            <!--p class="card-category">{{ __('User information') }}</p-->
                        </div>
                        <div class="card-body ">
                            <div class="table-responsive">

                                <table class="table">
                                    <tr>
                                        <th>SN</th>
                                        <th>Post Title</th>
                                        <th>Actions</th>
                                    </tr>
                                    @foreach($articles as $article)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$article->post_description}}</td>
                                        <td><button class="btn btn-success">View Article</button>
                                           <a href="edit/{{$article->id}}" <button class="btn btn-primary">Edit Article</button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                {{$article->links}}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection