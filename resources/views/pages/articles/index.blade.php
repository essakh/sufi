@extends('layouts.app')

@section('content')
<!--Breadcrumb section starts-->
<div class="breadcrumb-section logo-bar" style="background-image: url(images/breadcrumb/green.jpg)">
    <div class="overlay op-5"></div>
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
                        <li><a href="#">Articles & Announcement</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb section ends-->
<!--Listing filter starts-->
<div class="filter-wrapper style1 section-padding" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="item-wrapper">
                    <div class="tab-content" >
                        @if(count($articles) > 0)
                        @foreach($articles as $article)
                        <div id="list-view" class="tab-pane active product-list" >
                            <div class="row trending-place-item" style="background-color: #fffce0">
                                <div class="col-md-6 no-pad-lr">
                                    <div class="trending-title-box" >
                                        <h4><a href="/articles/{{$article->id}}">{{$article->title}}</a></h4>
                                        <hr>
                                        <ul class="trending-address">
                                            <li><i>by</i>
                                                <p>{{$article->author}}</p>
                                            </li>
                                            
                                                <p>{{$article->created_at}}</p>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6 no-pad-lr">
                                    <div class="trending-title-box">
                                        <h6>Preview</h6>
                                        <div class="comment more">
                                            @php
                                            $string = $article->body;
                                            if (strlen($string) > 300) {
    
                                            // truncate string
                                            $stringCut = substr($string, 0, 300);
                                            $endPoint = strrpos($stringCut, ' ');
    
                                            //if the string doesn't contain any space then it will cut without word basis.
                                            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                            $string .= '...';
                                            }
                                            echo $string;
            
                                            @endphp
                                            <a  style="color:blue" href="/articles/{{$article->id}}"><br> ...Read More</a>
                                        </div>
                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--pagination starts-->
                        <div class="post-nav nav-res pad-top-10">
                            <div class="row">
                                <div class="col-md-8 offset-md-2  col-xs-12 ">
                                    <div class="page-num text-center">
                                        {{$articles->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--pagination ends-->
                        @else
                        <p> No articles found</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Listing filter ends-->

{{-- @if(count($articles) > 0)
@foreach($articles as $article)
<div class="list-group-item">
    <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
</div>
@endforeach
<!--pagination starts-->
<div class="post-nav nav-res pad-top-10">
    <div class="row">
        <div class="col-md-8 offset-md-2  col-xs-12 ">
            <div class="page-num text-center">
                {{$articles->links()}}
            </div>
        </div>
    </div>
</div>
<!--pagination ends-->
@else
<p> No posts found</p>
@endif --}}



@endsection
