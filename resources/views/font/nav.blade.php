<!-- HEADER -->
<div style="position: relative;">
    <div class="header">
        <div class="menu_all menu_fixed" id="myHeader">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-4 col-md-4 col-lg-4">
                        <div class="logo">
                            <a href="/">
                                <div class="logo_img">
                                    <img src="{{asset('img/logo.png')}}" alt="image">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-8 col-md-8 col-lg-8">
                        <div class="menu_right d-flex">
                            <div class="menu_right_list">
                                <ul class="menu_right_ul d-flex">


                                    <li class="{{ '/' == request()->path() ? 'active-li' : ''}}">
                                        <a class="{{ '/' == request()->path() ? 'active1' : ''}}" href="/">HOME</a>
                                    </li>
                                   

                                    @if ( count($cat) > 0 )
                                    @foreach ($cat as $nav )


                                    @if(Request::segment(2) == $nav->categoryName)
                                    <li class="active-li">
                                        <a class="active1" aria-current="page" href="/category/{{$nav->categoryName}}/{{$nav->id}}">{{$nav->categoryName}}</a>
                                    </li>
                                    @else
                                    <li>
                                        <a aria-current="page" href="/category/{{$nav->categoryName}}/{{$nav->id}}">{{$nav->categoryName}}</a>
                                    </li>
                                    @endif
                                    
                
                                    @endforeach
                                    @endif

                                    
                                </ul>
                            </div>
                            <search></search>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HEADER -->



