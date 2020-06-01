@extends('layouts.app')

@section('content')


<!--Dashboard breadcrumb starts-->
<div class="dash-breadcrumb">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="dash-breadcrumb-content">

                </div>
            </div>
        </div>
    </div>
</div>
<!--Dashboard breadcrumb ends-->
<!--Dashboard content Wrapper starts-->
<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="/articles/{{ $article->id }}" enctype="multipart/form-data" method="POST">
                    <!-- Text input-->
                    @method('PUT')
                    @csrf
                    <div class="db-add-list-wrap">
                        <div class="act-title">
                            <h5><i class="ion-ios-information"></i> Edit Article :</h5>
                        </div>


                        <div class="db-add-listing">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Article Title</label>
                                        <input name="title" type="text" value="{{$article->title}}"
                                            class="form-control filter-input" ">
                                    </div>
                                </div>

                                <div class=" col-md-6">
                                        <div class="form-group">
                                            <label>Author</label>
                                            <input name="author" type="text" class="form-control filter-input"
                                                value="{{$article->author}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <form>
                                            <div class="form-group">
                                                <label for="list_info">Text Body</label>
                                                <textarea value="{{$article->body}}" name="body" class="form-control"
                                                    id="article-ckeditor" rows="10">{{$article->body}}</textarea>
                                            </div>
                                        </form>
                                    </div>

                                    <hr>
                                    <button class="btn v7" type="submit">Make Changes</button>
                                </div>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!--Dashboard content ends-->


@endsection
