@extends('site.layout') 
@section('content')
 <!-- ক্যাটাগরি হেডার -->
    <header class="category-header text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">ব্লগ ক্যাটাগরি</h1>
            <p class="lead">আপনার পছন্দের বিষয়বস্তু অনুযায়ী ব্লগ পোস্ট ব্রাউজ করুন</p>
        </div>
    </header>

    <!-- ক্যাটাগরি গ্রিড -->
    <div class="container">
        <div class="row">
            <!-- ক্যাটাগরি কার্ড  -->
             @foreach($category_data as $category)
            <div class="col-md-6 col-lg-4">
                <div class="card category-card">
                    <img src="assets/img/feature-1.jpg" class="card-img-top category-img" alt="প্রযুক্তি">
                    <div class="card-body text-center">
                        <h3 class="card-title">{{$category->category_name}}</h3>
                        <p class="card-text">{{$category->category_description}}</p>
                        <a href="category-posts.html" class="btn btn-primary">পোস্ট দেখুন <span class="badge bg-light text-dark">{{$postCount}}</span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection