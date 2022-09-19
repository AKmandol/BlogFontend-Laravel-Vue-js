@extends('layout.app')

@section('title', 'Blog Fontend')



@section('maincontent')



<!-- BANNER -->
<section class="banner_sec">


    <div class="left-main">
        <div class="left">
            <div class="all-category">
                <h3 class="all-category_h3">All Category</h3>
            </div>
            
            <ul class="fw-bolder">
                @foreach ($categories as $c )
                <li> <a href="/category/{{$c->categoryName}}/{{$c->id}}"><i class="bi bi-bounding-box float-left text-danger ml-1"></i>{{$c->categoryName}} <i class="bi bi-arrow-right-short float-right text-danger"></i></a> </li>
                <hr>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="right-main">
        <div class="left">
            <div class="all-category-right">
                <h3 class="all-category_h3">All Tag</h3>
            </div>
            <ul class="fw-bolder">
                @foreach ($tags as $t )
                <li> <a href="/tag/{{$t->tagName}}/{{$t->id}}"><i class="bi bi-crop float-left text-warning ml-1"></i>{{$t->tagName}} <i class="bi bi-arrow-right-short float-right text-warning"></i></a> </li>
                <hr>
                @endforeach
            </ul>
        </div>
    </div>

   
    <div class="container">
        <div class="row">
            
            <div class="col-12 col-md-10 col-lg-8">
                <div class="row">

                    
                    @if ( count($categories) > 0 )
                    @foreach ($categories as $nav )
                        <div class="col-12 col-md-4 col-lg-4">
                            <a href="/category/{{$nav->categoryName}}/{{$nav->id}}">
                                <div class="banner_box">
                                    <img src="{{ asset($nav->iconImage) }}" alt="">
                                    <span class="banner_box_h3">{{$nav->categoryName}}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach 
                    @endif


                </div>
            </div>
        </div>
    </div>
</section>
<!-- BANNER -->

<!-- BODY -->
<div class="home_body">
    <div class="container">
        <div class="latest_post">
            <div class="latest_post_top">
                <h1 class="latest_post_h1 brdr_line">Latest Blog</h1>
            </div>
            <div class="row">



                @if ( count($blogs) > 0 )
                @foreach ($blogs as $blog )

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="/blog/{{$blog->slug}}">
                            <div class="home_card">
                                <div class="home_card_top">
                                    <img src="{{ asset($blog->featuredImage) }}" alt="image">
                                </div>
                                <div class="home_card_bottom">
                                    <div class="home_card_bottom_text">

                                        @if ( count($blog->cat) > 0 )
                                            <ul class="home_card_bottom_text_ul">
                                           
                                            @foreach ($blog->cat as $c )
                                                <li>
                                                    <a href="/category/{{$c->categoryName}}/{{$c->id}}">{{$c->categoryName}}</a>
                                                    <span><i class="bi bi-chevron-right"></i></span>
                                                </li>
                                            @endforeach

                                            </ul>  
                                        @endif
                    
                                        <a href="/blog/{{$blog->slug}}">
                                            <h2 class="home_card_h2">{{$blog->title}}</h2>
                                        </a>
                                        <p class="post_p">
                                            {{$blog->post_excerpt}}
                                        </p>


                                        <div class="home_card_bottom_tym">
                                            <div class="home_card_btm_left">
                                                <img src="img/me.png" alt="image">
                                            </div>
                                            <div class="home_card_btm_r8">
                                            <a href="/userPost/{{$blog->user->fullName}}/{{$blog->user->id}}"><p class="author_name">{{$blog->user->fullName}}</p></a>
                                                <ul class="home_card_btm_r8_ul">
                                                    <li>Dec 4, 2019</li>
                                                    <li><span class="dot"></span>3 Min Read</li>
                                                </ul>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                @endforeach 
                @endif
            

                
            </div>
        </div>
    </div>
    <!-- PAGINATION -->
     {!! $blogs->links() !!}
    <!-- PAGINATION -->
</div>
<!-- BODY -->




@endsection