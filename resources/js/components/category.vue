<template>
    <div>
    <div class="left-main">
        <div class="left">
            <div class="all-category">
                <h3 class="all-category_h3">All Category</h3>
            </div>
            
            <ul>
                @foreach ($categories as $c )
                <!-- <li> <a href="/category/{{$c->categoryName}}/{{$c->id}}"><i class="bi bi-bounding-box float-left text-danger ml-1"></i>{{$c->categoryName}} <i class="bi bi-arrow-right-short float-right text-danger"></i></a> </li>
                <hr> -->
                @endforeach
            </ul>
        </div>
    </div>
    </div>
</template>