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
                <article class="blog-post border p-1">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="assets/img/feature-1.jpg" alt="ব্লগ পোস্ট ইমেজ" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-primary">প্রযুক্তি</span>
                                <small class="text-muted">২ দিন আগে</small>
                            </div>
                            <h3 class="text-muted">বুটস্ট্রাপ 5 ব্যবহার করে ওয়েবসাইট ডিজাইন</h3>
                            <p class="text-muted">বুটস্ট্রাপ 5 হল সবচেয়ে জনপ্রিয় ফ্রন্ট-এন্ড ফ্রেমওয়ার্ক যা দিয়ে দ্রুত এবং রেস্পন্সিভ ওয়েবসাইট বানানো যায়। এই আর্টিকেলে আমরা শিখব কিভাবে বুটস্ট্রাপ 5 ব্যবহার করে...</p>
                            <a href="single-post.html" class="btn btn-outline-primary">পড়ুন</a>
                        </div>
                    </div>
                </article>
                
                <!-- ব্লগ পোস্ট ২ -->
                <article class="blog-post border p-1">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="assets/img/gallery-6.jpg" alt="ব্লগ পোস্ট ইমেজ" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-success">ভ্রমণ</span>
                                <small class="text-muted">১ সপ্তাহ আগে</small>
                            </div>
                            <h3 class="text-muted">সেন্ট মার্টিন দ্বীপে একটি অবিস্মরণীয় সফর</h3>
                            <p class="text-muted">সেন্ট মার্টিন বাংলাদেশের একমাত্র প্রবাল দ্বীপ যা তার নৈসর্গিক সৌন্দর্যের জন্য বিখ্যাত। এই ব্লগ পোস্টে আমি শেয়ার করব আমার সেন্ট মার্টিন ভ্রমণের অভিজ্ঞতা...</p>
                            <a href="single-post.html" class="btn btn-outline-primary">পড়ুন</a>
                        </div>
                    </div>
                </article>
                
                <!-- ব্লগ পোস্ট ৩ -->
                <article class="blog-post border p-1">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="assets/img/blog-3.jpg" alt="ব্লগ পোস্ট ইমেজ" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-warning text-dark">জীবনযাপন</span>
                                <small class="text-muted">২ সপ্তাহ আগে</small>
                            </div>
                            <h3 class="text-muted">প্রোডাক্টিভিটি বাড়ানোর ১০টি সহজ উপায়</h3>
                            <p class="text-muted">আপনার দৈনন্দিন কাজের উৎপাদনশীলতা বাড়াতে এই সহজ কৌশলগুলো অনুসরণ করুন। এই টিপসগুলো বিজ্ঞানসম্মত এবং অনেক সফল মানুষ দ্বারা পরীক্ষিত...</p>
                            <a href="single-post.html" class="btn btn-outline-primary">পড়ুন</a>
                        </div>
                    </div>
                </article>
                
                <!-- ব্লগ পোস্ট ৪ -->
                <article class="blog-post border p-1">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="assets/img/blog-2.jpg" alt="ব্লগ পোস্ট ইমেজ" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-info">স্বাস্থ্য</span>
                                <small class="text-muted">৩ সপ্তাহ আগে</small>
                            </div>
                            <h3 class="text-muted">ঘরে বসে ব্যায়াম: সম্পূর্ণ গাইড</h3>
                            <p class="text-muted">জিমে যাওয়ার সময় না পেলে ঘরেই করতে পারেন কার্যকরী ব্যায়াম। এই গাইডে আমরা শিখব কিভাবে কোন যন্ত্রপাতি ছাড়াই ঘরে ফিটনেস রুটিন মেইনটেইন করা যায়...</p>
                            <a href="single-post.html" class="btn btn-outline-primary">পড়ুন</a>
                        </div>
                    </div>
                </article>
                
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