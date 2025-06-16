  @extends('site.layout')
  @section('content')
  <!-- ব্লগ হেডার -->
    <header class="blog-header text-center mb-5">
        <div class="container ">
            <h1 class="display-4 fw-bold">আমাদের ব্লগ</h1>
            <p class="lead">প্রযুক্তি, ভ্রমণ এবং জীবনযাপন নিয়ে নতুন নতুন পোস্ট</p>
        </div>
    </header>

    <!-- মূল কন্টেন্ট -->
    <div class="container">
        <div class="row">
            <!-- ব্লগ পোস্ট লিস্ট -->
            <div class="col-lg-8">
                <!-- ব্লগ পোস্ট ১ -->
                 @foreach($post_data as $post)
                <article class="blog-post border p-1 overflow-hidden">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="assets/img/feature-1.jpg" alt="ব্লগ পোস্ট ইমেজ" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-primary">প্রযুক্তি</span>
                                <small class="text-muted">২ দিন আগে</small>
                            </div>
                            <h3 class="text-muted">{{$post->post_title}}</h3>
                            <p class="text-muted">
                                @php
                                $content = $post->post_content;
                                $trimmedContent = '';
                                if (mb_strlen($content) > 7) { // 3 + 4 = 7 অক্ষর এর বেশি হলে
                                    $trimmedContent = mb_substr($content, 3, mb_strlen($content) - 7);
                                } else {
                                    // যদি কন্টেন্ট খুব ছোট হয়, তাহলে এটি খালি দেখান বা আপনার পছন্দমতো কিছু করুন
                                    $trimmedContent = $content; // অথবা ''
                                }
                                @endphp
                                {{ $trimmedContent }}
                            </p>
                            <a href="single-post.html" class="btn btn-outline-primary">পড়ুন</a>
                        </div>
                    </div>
                </article>
                @endforeach
                
                <!-- পেজিনেশন -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mt-5">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">পূর্ববর্তী</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">১</a></li>
                        <li class="page-item"><a class="page-link" href="#">২</a></li>
                        <li class="page-item"><a class="page-link" href="#">৩</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">পরবর্তী</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-1">
            </div>

            
            <!-- সাইডবার -->
            <div class="col-lg-3  homeside">
                <!-- সার্চ বক্স -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">খুঁজুন</h5>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="খুঁজুন...">
                            <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
                
                <!-- ক্যাটাগরি -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">ক্যাটাগরি</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#" class="text-decoration-none">প্রযুক্তি</a>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#" class="text-decoration-none">ভ্রমণ</a>
                                <span class="badge bg-primary rounded-pill">8</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#" class="text-decoration-none">জীবনযাপন</a>
                                <span class="badge bg-primary rounded-pill">5</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#" class="text-decoration-none">স্বাস্থ্য</a>
                                <span class="badge bg-primary rounded-pill">3</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- জনপ্রিয় পোস্ট -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">জনপ্রিয় পোস্ট</h5>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">বুটস্ট্রাপ 5 ব্যবহার করে ওয়েবসাইট ডিজাইন</a>
                            <a href="#" class="list-group-item list-group-item-action">সেন্ট মার্টিন দ্বীপে একটি অবিস্মরণীয় সফর</a>
                            <a href="#" class="list-group-item list-group-item-action">প্রোডাক্টিভিটি বাড়ানোর ১০টি সহজ উপায়</a>
                            <a href="#" class="list-group-item list-group-item-action">রিয়াক্ট জেএস শেখার সম্পূর্ণ গাইড</a>
                        </div>
                    </div>
                </div>
                
                <!-- ট্যাগ ক্লাউড -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">ট্যাগ</h5>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="btn btn-sm btn-outline-secondary">প্রযুক্তি</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">ওয়েব ডেভেলপমেন্ট</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">ভ্রমণ</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">বুটস্ট্রাপ</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">জাভাস্ক্রিপ্ট</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">জীবনযাপন</a>
                        </div>
                    </div>
                </div>
                
                <!-- নিউজলেটার -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">নিউজলেটার সাবস্ক্রাইব</h5>
                        <p>আমাদের নতুন পোস্টের নোটিফিকেশন পেতে সাবস্ক্রাইব করুন</p>
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="আপনার ইমেইল">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">সাবস্ক্রাইব</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection