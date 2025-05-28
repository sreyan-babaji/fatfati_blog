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
            <!-- ক্যাটাগরি কার্ড ১ -->
            <div class="col-md-6 col-lg-4">
                <div class="card category-card">
                    <img src="assets/img/feature-1.jpg" class="card-img-top category-img" alt="প্রযুক্তি">
                    <div class="card-body text-center">
                        <h3 class="card-title">প্রযুক্তি</h3>
                        <p class="card-text">ওয়েব ডেভেলপমেন্ট, প্রোগ্রামিং এবং নতুন টেকনোলজি নিয়ে আপডেট</p>
                        <a href="category-posts.html" class="btn btn-primary">পোস্ট দেখুন <span class="badge bg-light text-dark">24</span></a>
                    </div>
                </div>
            </div>
            
            <!-- ক্যাটাগরি কার্ড ২ -->
            <div class="col-md-6 col-lg-4">
                <div class="card category-card">
                    <img src="assets/img/gallery-6.jpg" class="card-img-top category-img" alt="ভ্রমণ">
                    <div class="card-body text-center">
                        <h3 class="card-title">ভ্রমণ</h3>
                        <p class="card-text">বাংলাদেশ ও বিশ্বের বিভিন্ন স্থানের ভ্রমণ গাইড এবং অভিজ্ঞতা</p>
                        <a href="category-posts.html" class="btn btn-success">পোস্ট দেখুন <span class="badge bg-light text-dark">15</span></a>
                    </div>
                </div>
            </div>
            
            <!-- ক্যাটাগরি কার্ড ৩ -->
            <div class="col-md-6 col-lg-4">
                <div class="card category-card">
                    <img src="assets/img/gallery-6.jpg" class="card-img-top category-img" alt="জীবনযাপন">
                    <div class="card-body text-center">
                        <h3 class="card-title">জীবনযাপন</h3>
                        <p class="card-text">দৈনন্দিন জীবনযাপন, প্রোডাক্টিভিটি এবং স্বাস্থ্য টিপস</p>
                        <a href="category-posts.html" class="btn btn-warning">পোস্ট দেখুন <span class="badge bg-light text-dark">12</span></a>
                    </div>
                </div>
            </div>
            
            <!-- ক্যাটাগরি কার্ড ৪ -->
            <div class="col-md-6 col-lg-4">
                <div class="card category-card">
                    <img src="assets/img/gallery-6.jpg" class="card-img-top category-img" alt="স্বাস্থ্য">
                    <div class="card-body text-center">
                        <h3 class="card-title">স্বাস্থ্য</h3>
                        <p class="card-text">ফিটনেস, ডায়েট এবং মেন্টাল হেলথ সম্পর্কিত টিপস</p>
                        <a href="category-posts.html" class="btn btn-danger">পোস্ট দেখুন <span class="badge bg-light text-dark">8</span></a>
                    </div>
                </div>
            </div>
            
            <!-- ক্যাটাগরি কার্ড ৫ -->
            <div class="col-md-6 col-lg-4">
                <div class="card category-card">
                    <img src="assets/img/gallery-6.jpg" class="card-img-top category-img" alt="শিক্ষা">
                    <div class="card-body text-center">
                        <h3 class="card-title">শিক্ষা</h3>
                        <p class="card-text">শিক্ষা সংক্রান্ত তথ্য এবং কার্যকরী লার্নিং টিপস</p>
                        <a href="category-posts.html" class="btn btn-primary">পোস্ট দেখুন <span class="badge bg-light text-dark">6</span></a>
                    </div>
                </div>
            </div>
            
            <!-- ক্যাটাগরি কার্ড ৬ -->
            <div class="col-md-6 col-lg-4">
                <div class="card category-card">
                    <img src="assets/img/gallery-6.jpg" class="card-img-top category-img" alt="রান্না">
                    <div class="card-body text-center">
                        <h3 class="card-title">রান্না</h3>
                        <p class="card-text">বাংলাদেশী ও আন্তর্জাতিক রেসিপি এবং রান্নার টিপস</p>
                        <a href="category-posts.html" class="btn btn-info">পোস্ট দেখুন <span class="badge bg-light text-dark">10</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection