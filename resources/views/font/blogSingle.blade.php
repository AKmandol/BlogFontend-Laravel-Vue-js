@extends('layout.app')

@section('title', $blogs->title)



@section('maincontent')

<!-- BANNER -->
<div class="blog_banner">
    <img src="{{ asset($blogs->featuredImage) }}" alt="">
</div>
<!-- BANNER -->


		<!-- BODY -->
		<div class="blog_post_sec_all">
			<div class="container">
				<div class="row">
					<div class="cl-12 col-md-12 col-lg-9">
						<div class="blog_post_left">
							<div class="blog_post_sec">

								<div class="blog_post_top">
									<ul class="blog_post_top_ul">
                                        @if ( count($blogs->cat) > 0 )
                                            @foreach ($blogs->cat as $c)
                                            <li>
                                                <a href="/category/{{$c->categoryName}}/{{$c->id}}">{{$c->categoryName}}</a>
                                            </li>
                                             @endforeach
                                             <li class="datePost">1 Aug, 2022</li> 
                                        @endif
									</ul>
								</div>

								<div class="blog_post">
									<h1 class="blog_post_h1">{{$blogs->title}}</h1>
									
                                    <div class="post_author_sec">
										<div class="post_author_left">
											<div class="post_author_img">
												<img src="/img/me.png" alt="image">
											</div>
											<div class="post_author_info">
											<a href="/userPost/{{$blogs->user->fullName}}/{{$blogs->user->id}}"><h4 class="post_author_title">{{$blogs->user->fullName}}</h4></a>
												<P>{{$blogs->user->fullName}} is a ragular writer on this blog. He is web-developer in profession.</P>
											</div>
										</div>
										<div class="post_author_r8">
											<i class="bi bi-share-fill text-primary"></i>
										</div>
									</div>

                                    {!!$blogs->post!!}

									<div class="riview_post">
										<ul class="riview_post_ul">
											<li><i class="bi bi-hand-thumbs-up"></i>{{$blogs->views}} Like</li>
											<li><i class="bi bi-pencil-square"></i>10 Comment</li>
											<li><i class="bi bi-share"></i>4 Share</li>
										</ul>
									</div>	
								</div>	
							</div>

							
							<comment></comment>

							
						</div>
					</div>


					<div class="col-12 col-md-12 col-lg-3">
						<div class="blog_post_r8">
								<h4 class="trnd_artcl_h4">RELADTED ARTICLES</h4>
							<div class="blog_post_r8_all">

                                @if ( count($relatedBlog) > 0 )
                                   @foreach ($relatedBlog as $rb)
                            
								<!-- iteam -->
                                    <div class="blog_post_r8_item">
                                        <div class="blog_post_item_lft">
                                            <img src="{{ asset($rb->featuredImage) }}" alt="image">
                                        </div>
                                        <div class="blog_post_item_r8">
                                            <a href="/blog/{{$rb->slug}}">
                                                <h4 class="blog_post_item_r8_h4">
                                                   {{$rb->title}}
                                                </h4>
                                            </a>
                                            <a href="/userPost/{{$blogs->user->fullName}}/{{$blogs->user->id}}"><p class="author_name2">- {{$rb->user->fullName}}</p></a>
                                        </div>
                                    </div>
								<!-- iteam -->
                                   @endforeach
                                @endif
								
							</div>


							<div class="course_price mar_t60">
								<div class="course_price_top">
									<p>Share this post</p>
								</div>
								<div class="course_price_main" style="padding: 30px 0px 30px 17px">
									<ul class="share_social_ul dis_flx">
										<li>
											<a class="fb" href="">
												<i class="bi bi-facebook"></i>
											</a>
										</li>
										<li>
											<a class="google" href="">
												<i class="bi bi-google"></i>
											</a>
										</li>
										<li>
											<a class="instgrm" href="">
												<i class="bi bi-instagram"></i>
											</a>
										</li>
										<li>
											<a class="twtr" href="">
												<i class="bi bi-twitter"></i>
											</a>
										</li>
										<li>
											<a class="skpye" href="">
												<i class="bi bi-skype"></i>
											</a>
										</li>
										<li>
											<a class="utube" href="">
												<i class="bi bi-youtube"></i>
											</a>
										</li>
								        <li>
											<a class="lnkdn" href="">
												<i class="bi bi-linkedin"></i>
											</a>
										</li>
										<li>
											<a class="pinstr" href="">
												<i class="bi bi-pinterest"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>


							<div class="post_tags">
								<h3 class="post_tags_h3">Tags</h3>
								<ul class="post_tags_ul">

                                    @if ( count($blogs->tag) > 0 )
                                        @foreach ($blogs->tag as $t)
                                        <li>
                                            <a href="/tag/{{$t->tagName}}/{{$t->id}}">{{$t->tagName}}</a>
                                        </li>
                                        @endforeach
                                    @endif

								</ul>
							</div>







						</div>
					</div>


				</div>
			</div>
		</div>
		<!-- BODY -->





@endsection