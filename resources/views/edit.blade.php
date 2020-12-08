@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <button id="open-btn"></button>
                <script src="https://media-library.cloudinary.com/global/all.js"></script>

                <script>
                    window.ml = cloudinary.createMediaLibrary({
                            cloud_name: 'cypherware',
                            api_key: '291892462373614',
                            username: 'ihamasfirm@gmail.com',
                            button_class: 'myBtn btn btn-primary pull-right',
                            button_caption: 'Select Image',
                        }, {
                            insertHandler: function(data) {
                                data.assets.forEach(asset => {
                                    console.log("Inserted asset:",
                                        JSON.stringify(asset, null, 2))
                                })
                            }
                        },
                        document.getElementById("open-btn")
                    )
                </script>
                <!---Media Library widget ends here---->

                <!----Upload button starts here--->
                <button id="upload_widget" class="cloudinary-button btn btn-primary pull-right">Upload
                    files</button>

                <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>

                <script type="text/javascript">
                    var myWidget = cloudinary.createUploadWidget({
                        cloudName: 'cypherware',
                        uploadPreset: 'kulabucket'
                    }, (error, result) => {
                        if (!error && result && result.event === "success") {
                            console.log('Done! Here is the image info: ', result.info);
                        }
                    })

                    document.getElementById("upload_widget").addEventListener("click", function() {
                        myWidget.open();
                    }, false);
                </script>
                <form method="post" action="../update-post" autocomplete="off" class="form-horizontal">
                    @csrf
                    <input type="hidden" value="{{ request()->route('id') }}" name="id">
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Edit Article') }}</h4>
                            <!--p class="card-category">{{ __('User information') }}</p-->
                        </div>
                        <div class="card-body ">
                            <div class="row">
                            </div>


                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control" name="title" id="input-name" type="text" placeholder="{{ __('Title') }}" value="{{ $getArticle->title }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Featured Image') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control" name="post_featured_img" id="input-name" type="text" value="{{ $getArticle->post_featured_img }}" style="z-index:1; position:static; opacity:1" />
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Post Body') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <textarea class="form-control" name="post_body">{{ $getArticle->post_body }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control" name="post_description" type="text" placeholder="{{ __('Post description') }}" value="{{ $getArticle->post_description }}" max="255" />
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Date') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control" name="date" type="date" placeholder="{{ __('Post Date') }}" value="{{ $getArticle->created_at }}"/>
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