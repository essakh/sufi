@extends('layouts.app')

@section('content')
  <!--Breadcrumb section starts-->
  <div class="breadcrumb-section" style="background-image: url(images/breadcrumb/breadcrumb-10.jpg)">
    <div class="overlay op-3"></div>
    <div class="container">
        <div class="row align-items-center  pad-top-80">
            <div class="col-md-6 col-12">
                <div class="breadcrumb-menu">
                    <h2 class="page-title">Articles & Announcements</h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="breadcrumb-menu text-right sm-left">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Articles</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb section ends-->
<!--Blog Details section starts-->
<div class="blog-area section-padding mar-top-20">
    <div class="container">
        <div class="row">
            <!--Blog post starts-->
            <div class="col-md-10 offset-md-1">
                <article class="post-single">
                    <div class="post-content-wrap">
                        <div class="post-content">
                            <h1 class="post-title text-center">{{$article->title}}</h1>
                            <div class="post-meta text-center">
                                <p class="date mar-top-0">{{$article->created_at}} by <a href="#" class="text-dark">{{$article->author}}</a></p>
                            </div>
                            <br>
                            {!!$article->body!!}  
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="post-nav">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="page-prev">
                                    <a href="/articles">
                                        <span>Back to Articles</span>
                                    </a>
                                </div>
                                
                            </div>
                           <a style="color:blue" href="/articles/{{$article->id}}/edit"> <h6> Edit</h6> </a>
                            <hr>
                            <form action="/articles/{{$article->id}}" method="POST" class="float-right">
                                {{ method_field('DELETE') }}
        
                                <div class="form-group">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        
        
                                </div>
                                <button type="submit" class="btn btn-danger">Delete this article</button>
                                <!-- Edit button -->
                               
                            </form>
                           
                        </div>
                    </div>
                </article>
            </div>
            <!--Blog post ends-->
        </div>
    </div>
</div>
<!--Blog Details section  ends-->



@endsection