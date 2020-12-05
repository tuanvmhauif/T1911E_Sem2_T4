@extends("layouts.shop")
@section("content")
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>TIN TỨC</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('blog')}}">Tin tức</a></li>
                        <li class="breadcrumb-item active">Tin tức</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Blog  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12">
                            <!-- Title -->
                            <h1 class="mt-4">{{$blog->title}}</h1>

                            <!-- Author -->
                            <p class="lead">
                                by
                                <a href="#">...</a>
                            </p>

                            <hr>

                            <!-- Date/Time -->
                            <p>Posted on {{date('d/m/Y H:i:s', strtotime($blog->created_at))}}</p>

                            <hr>

                            <!-- Preview Image -->
                            <img class="img-fluid" src="{{asset($blog->cover)}}" alt="">

                            <hr>

                            <!-- Post Content -->
                            <p class="lead"> {!!$blog->content!!}</p>

                            <!-- Comments Form -->
                            <div class="card my-4">
                                <h5 class="card-header">Leave a Comment:</h5>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Single Comment -->
                            <div class="media mb-4">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0">Commenter Name</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                                    faucibus.
                                </div>
                            </div>

                            <!-- Comment with nested comments -->
                            <div class="media mb-4">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0">Commenter Name</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                                    faucibus.
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12">
                            <!-- Search Widget -->
                            <div class="search-product">
                                <form action="{{route('blog')}}" method="get" name="search">
                                    @csrf
                                    <input class="form-control" placeholder="Tìm kiếm..." type="text"
                                           name="name"
                                           value="{{$name}}">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>

                            <!-- Categories Widget -->
                            <div class="filter-sidebar-left">
                                <div class="title-left">
                                    <h3>Danh Mục</h3>
                                </div>
{{--                                <div class="blog-menu list-group list-group-collapse list-group-sm list-group-tree"--}}
                                {{--                                     id="list-group-men" data-children=".sub-men">--}}
                                {{--                                    <a href="" class="active list-group-item list-group-item-action"--}}
                                {{--                                       data-filter="*">Tất cả <small--}}
                                {{--                                            class="text-muted"> ({{$promotion->count()}})</small></a>--}}
                                {{--                                    @foreach($lsTag as $tag)--}}
                                {{--                                        <a href="" class="list-group-item list-group-item-action"--}}
                                {{--                                           data-tag_id=".{{$tag->id}}"> {{$tag->name}} <small--}}
                                {{--                                                class="text-muted"> ({{$tag->promotions()->count()}})</small></a>--}}
                                {{--                                    @endforeach--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog  -->
@endsection
