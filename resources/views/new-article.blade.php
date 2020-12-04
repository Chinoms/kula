@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <form method="post" action="savearticle" autocomplete="off" class="form-horizontal">
                    @csrf

                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('New Article') }}</h4>
                            <!--p class="card-category">{{ __('User information') }}</p-->
                        </div>
                        <div class="card-body ">
                            <div class="row">
                            </div>


                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control" name="title" id="input-name" type="text" placeholder="{{ __('Title') }}" value="{{ old('name') }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Featured Image') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control" name="post_featured_img" id="input-name" type="text" value="{{ old('post_featured_image') }}" style="z-index:1; position:static; opacity:1" />
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Post Body') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <textarea class="form-control" name="post_body">{{ old('post_body') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control" name="post_description" type="text" placeholder="{{ __('Post description') }}" value="{{ old('post_description') }}" max="255" />
                                    </div>
                                </div>
                            </div>

                            <!--div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Keywords') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control" name="post_keywords" type="text" placeholder="{{ __('Post keywords') }}" value="{{ old('post_keywords') }}" max="255" />
                                    </div>
                                </div>
                            </div-->

                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection