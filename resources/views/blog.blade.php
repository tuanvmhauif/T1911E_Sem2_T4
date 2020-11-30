@extends("layouts.shop")
@section("content")
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>TIN TỨC</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
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
                            @foreach($lsBlog as $blog)
                                <div class="card mb-4">
                                    <img class="card-img-top" src="{{$blog->cover}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h2 class="card-title">{{$blog->title}}</h2>
                                        <p class="card-text">{{strip_tags(substr($blog->content, 0,100))}}</p>
                                        <a href="{{route('blogDetail', $blog->id)}}" class="btn btn-primary">Read More
                                            &rarr;</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Posted on {{date('d/m/Y H:i:s', strtotime($blog->created_at))}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12">
                            <!-- Search Widget -->
                            <div class="card my-4">
                                <h5 class="card-header">Search</h5>
                                <div class="card-body">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-append"><button class="btn btn-secondary"
                                                                                 type="button">Go!</button></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Categories Widget -->
                            <div class="card my-4">
                                <h5 class="card-header">Categories</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a href="#">Web Design</a>
                                                </li>
                                                <li>
                                                    <a href="#">HTML</a>
                                                </li>
                                                <li>
                                                    <a href="#">Freebies</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a href="#">JavaScript</a>
                                                </li>
                                                <li>
                                                    <a href="#">CSS</a>
                                                </li>
                                                <li>
                                                    <a href="#">Tutorials</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog  -->
@endsection
