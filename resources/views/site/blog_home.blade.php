@extends('site.layout')
@section('content')

    <!-- ক্যারousel সেকশন -->
    <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <!-- ক্যারousel আইটেম 1 -->
            <div class="carousel-item ">
                <img src="assets/img/carousel-1.png" class="d-block w-100" alt="প্রযুক্তি ব্লগ">
                <div class="carousel-caption">
                    <h2>প্রযুক্তি ব্লগ</h2>
                    <p>আধুনিক প্রযুক্তি নিয়ে সর্বশেষ আপডেট এবং টিউটোরিয়াল</p>
                    <a href="#" class="btn btn-primary btn-lg">পড়ুন</a>
                </div>
            </div>
            
            <!-- ক্যারousel আইটেম 2 -->
            <div class="carousel-item">
                <img src="assets/img/carousel-2.jpg" class="d-block w-100" alt="ভ্রমণ ব্লগ">
                <div class="carousel-caption">
                    <h2>ভ্রমণ ব্লগ</h2>
                    <p>বাংলাদেশের সুন্দর স্থানগুলোর অভিজ্ঞতা শেয়ার</p>
                    <a href="#" class="btn btn-primary btn-lg">পড়ুন</a>
                </div>
            </div>
            
            <!-- ক্যারousel আইটেম 3 -->
            <div class="carousel-item active">
                <img src="assets/img/carousel-3.jpg" class="d-block w-100" alt="জীবনযাপন টিপস">
                <div class="carousel-caption">
                    <h2>জীবনযাপন টিপস</h2>
                    <p>দৈনন্দিন জীবনের জন্য উপকারী টিপস এবং পরামর্শ</p>
                    <a href="#" class="btn btn-primary btn-lg">পড়ুন</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">পূর্ববর্তী</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">পরবর্তী</span>
        </button>
    </div>

    <!-- মূল কন্টেন্ট -->
    <div class="container mt-5">
        <div class="row">
            <!-- ব্লগ পোস্ট -->
            <div class="col-lg-8">
                <h2 class="mb-4">সাম্প্রতিক পোস্ট</h2>
                
                <!-- ব্লগ কার্ড  -->
                 @foreach($post_data as $post)
				<div class="card blog-card overflow-hidden">
					<div class="card-img-container">
						<img src="assets/img/feature-1.jpg" class="card-img-top" alt="ব্লগ পোস্ট ইমেজ">
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between mb-2">
							<span class="badge text-white">প্রযুক্তি</span>
							<small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
						</div>
						<h5 class="card-title">{{$post->post_title}}</h5>
						<p class="card-text">
                        
                            @php
                                $content = $post->short_content;
                                $trimmedContent = '';
                                if (mb_strlen($content) > 7) { 
                                    $trimmedContent = mb_substr($content, 3, mb_strlen($content) -7);
                                } else {
                                    // যদি কন্টেন্ট খুব ছোট হয়, তাহলে এটি খালি দেখান বা আপনার পছন্দমতো কিছু করুন
                                    $trimmedContent = $content; // অথবা ''
                                }
                            @endphp
                            {{ $trimmedContent.'...'}}
                        </p>
						<a href="#" class="btn outline-primary" >পড়ুন</a>
					</div>
				</div>
				 @endforeach
                <!-- পেজিনেশন -->
                    {{ $post_data->onEachSide(2)->links() }}

            </div>

			<div  class="col-lg-1">  </div>

            <!-- সাইডবার -->
            <div class="col-lg-3 homeside p-1">
                <!-- সার্চ বক্স -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">খুঁজুন</h5>
                        <form action="{{ route('search') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="খুঁজুন..." required>
                                <button class="btn bt-primary" name="submit" type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- ক্যাটাগরি -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">ক্যাটাগরি</h5>
                        <ul class="list-group list-group-flush">
                            @foreach($category_data as $category)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{$category->category_name}}
                                <span class="badge bg-primary rounded-pill">{{ $category->post_count }}</span>
                            </li>
                            @endforeach
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
                <div class="card">
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
            </div>
        </div>
    </div>

@endsection