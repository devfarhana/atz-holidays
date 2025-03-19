@extends('layouts.master')
@section('title')
    {{ $settings->system_name }} ||Blog Details
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar text-center"
    style="background: url('{{ asset('storage/' .$banner->blog_banner) }}') no-repeat; background-size: cover; width:100%" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Blog Details</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
    <!-- Page Wrapper -->
    <div class="content">
        <div class="container">

            <!-- Blog Details -->
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card blog-details mb-4 mb-lg-0">
                        <div class="card-body">
                            <div class="blog-content">
                                <div class="blog-image mb-3">
                                    <img src="{{ asset('storage/' . $blog->blog_image) }}" alt="image" class="w-100 rounded">
                                </div>
                                <div class="d-flex  align-items-center flex-wrap row-gap-2 mb-3">
                                    <a href="javascript:void(0);" class=" d-flex align-items-center fs-16 text-gray-9 pe-3 border-end me-3">
                                        <img src="{{ asset('storage/' . $blog->author_image) }}" alt="Img" class="img-fluid avatar avatar-md2 me-2">{{$blog->author}}</a>
                                    <div class="pe-3 border-end me-3">
                                        <span class="d-flex align-items-center fs-16 text-gray-9 "><i class="isax isax-calendar-2 me-1"></i>14 May 2025</span>
                                    </div>
                                    <div>
                                        <span class="badge badge-sm badge-primary">{{$blog->blogCategory->name}}</span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h2>{{$blog->title}}</h2>
                                </div>
                                <div class="mb-3">
                                    <p class="text-gray-6">{!!$blog->description!!}</p>
                                </div>

                                <div class="row">
                                    @foreach ($blog->images as $image)
                                    <div class="col-md-6">
                                        <div class="blog-image mb-3 ">
                                            <img src="{{ asset('storage/' . $image->additional_image) }}"  alt="image" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="mt-3 pb-3 border-bottom d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <p class="fs-16 text-gray-9 mb-0 me-2">Tags:</p>
                                        <?php if (!empty($blog->tags)): ?>
                                            <?php
                                            $tags = array_filter(array_map('trim', explode(',', $blog->tags))); // Trim and remove empty values
                                            foreach ($tags as $tag): ?>
                                                <a href="javascript:void(0);" class="badge badge-sm badge-secondary me-2">
                                                    <?= htmlspecialchars($tag) ?>
                                                </a>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="fs-16.text-gray-9 mb-0 me-2">Share On :</p>
                                        <a href="javascript:void(0);" class="me-2"><img src="{{ asset('frontend/assets') }}/img/icons/facebook.svg" alt="image" class="img-fluid"></a>
                                        <a href="javascript:void(0);" class="me-2"><img src="{{ asset('frontend/assets') }}/img/icons/insta.svg" alt="image" class="img-fluid"></a>
                                        <a href="javascript:void(0);" class="me-2"><img src="{{ asset('frontend/assets') }}/img/icons/twitter.svg" alt="image" class="img-fluid"></a>
                                        <a href="javascript:void(0);"><img src="{{ asset('frontend/assets') }}/img/icons/whatsapp.svg" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <div class="border border-light br-10 p-3 d-md-flex align-items-center">
                                        <div class="blog-user-image me-md-3 mb-3 mb-md-0 flex-shrink-0">
                                            <img src="{{ asset('storage/' . $blog->author_image) }}" alt="image" class="img-fluid rounded">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="fs-14 text-primary mb-1">About Author</h6>
                                            <p class="fs-16 text-gray-6">{{$blog->author_details}}</p>
                                        </div>
                                    </div>
                                </div>
                                <h6>Comments</h6>
                                @foreach ($comments as $comment)
                                <div class="my-3">
                                    <div class="border border-light rounded p-3">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('frontend/assets') }}/img/users/user-21.jpg" alt="image" class="img-fluid rounded-circle avatar avatar-md me-2">
                                                <div>
                                                    <h6>{{$comment->name}}</h6>
                                                    <span class="fs-14 fw-normal text-gray-6">
                                                        {{ \Carbon\Carbon::parse($comment->created_at)->format('d F, Y  h.iA') }}
                                                    </span>

                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="fs-14 fw-medium text-dark d-flex align-items-center"> <i class="isax isax-back-square me-1"></i> Reply</a>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="fs-14 text-gray-6">{!!$comment->message!!}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <h6 class="mb-3">Write A Comment</h6>
                                <div>

                                    <form action="{{route('blog-comment.store',$blog->slug)}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name" id="" aria-describedby="exampleInputEmail1">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail2" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email" id="" aria-describedby="exampleInputEmail2">

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Message</label>
                                                    <textarea class="form-control" name="message" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Post Comment</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 theiaStickySidebar">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pb-3 border-bottom mb-3">
                                <h5 class="d-flex align-items-center "><span class="me-1 fs-16"><i class="isax isax-search-normal text-primary"></i></span> Search</h5>
                            </div>
                            <div class="blog-search">
                                <div class="search-content">
                                    <div class="search-feild position-relative">
                                        <span><i class="isax isax-search-normal"></i></span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header border-0 pb-0">
                            <div class="pb-3 border-bottom">
                                <h5><i class="isax isax-candle text-primary fs-16 me-2"></i>Categories</h5>
                            </div>
                        </div>
                        <div class="card-body pt-3">
                            @foreach($categories as $category)
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h6 class="fw-medium mb-0">
            <a href="#">{{ $category->name }}</a>
        </h6>
        <p>({{ $category->blogs_count }})</p>
    </div>
@endforeach

                        </div>
                    </div>

                    <!-- Related Posts -->
                    <div class="card mb-3">
                        <div class="card-header border-0 pb-0">
                            <div class="pb-3 border-bottom">
                                <h5><i class="ti ti-brand-blogger text-primary fs-16 me-2"></i>Related Posts</h5>
                            </div>
                        </div>
                        <div class="card-body pt-3">
                            @foreach($allBlog as $blog)
                            <div class="blog-post mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex">
                                        <a href="{{ route('blog.details', $blog->slug) }}" class="avatar avatar-xxl me-2">
                                            <img src="{{ asset('storage/' . $blog->blog_image) }}" class="rounded" alt="Img">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="blog-details.html" class="two-line-ellipsis fs-14 fw-medium">{{$blog->title}}</a>
                                        <div class="d-flex align-items-center mt-2">
                                            <a href="javascript:void(0);" class="d-flex align-items-center border-end pe-2 me-2">
                                                <span class="avatar avatar-xs me-1">
                                                    <img src="{{ asset('storage/' . $blog->author_image) }}" class="blog-user-img rounded-circle border border-light" alt="img">
                                                </span>
                                                <p class="fs-14 text-truncate">{{$blog->author}}</p>
                                            </a>
                                            <p class="fs-14 text-truncate"><i class="isax isax-calendar-2 me-2"></i>{{\Carbon\Carbon::parse($blog->date)->format('d
                                F, Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                        </div>
                    </div>
                    <!-- /Related Posts -->

                    <div class="card mb-0">
                        <div class="card-header border-0 pb-0">
                            <div class="pb-3 border-bottom">
                                <h5><i class="isax isax-tag text-primary fs-16 me-2"></i>Popular Tags</h5>
                            </div>
                        </div>
                        <div class="card-body pt-3 pb-2">
                            <div class="d-flex align-items-center flex-wrap category-tag">
                                <?php if (!empty($blog->tags)): ?>
                                            <?php
                                            $tags = array_filter(array_map('trim', explode(',', $blog->tags))); // Trim and remove empty values
                                            foreach ($tags as $tag): ?>
                                            <a href="javascript:void(0);" class="badge badge-md fw-normal me-2 mb-2"> <?= htmlspecialchars($tag) ?></a>

                                            <?php endforeach; ?>
                                        <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Blog Details -->

        </div>
    </div>
    <!-- /Page Wrapper -->


@endsection
