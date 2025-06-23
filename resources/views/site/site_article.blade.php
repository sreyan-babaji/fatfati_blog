  @extends('site.layout')
  @section('content')
  <!-- ব্লগ হেডার -->
    <header class="blog-header text-center mb-5">
        <div class="container ">
            @if(Route::is('site_article'))
             <h1 class="display-4 fw-bold">আমাদের ব্লগ</h1>
             <p class="lead">প্রযুক্তি, ভ্রমণ এবং জীবনযাপন নিয়ে নতুন নতুন পোস্ট</p>
            @elseif(Route::is('search'))
             <h1 class="display-4 fw-bold">সার্চ রিজাল্ট</h1>
             @else
            @endif
        </div>
        <div class="row justify-content-end">
            <div class="col-3">
                <form action="{{ route('search') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="খুঁজুন..." required>
                        <button class="btn outline-primary" name="submit" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <!-- মূল কন্টেন্ট -->
    <div class="container">
        <div class="row">
                <!-- ব্লগ পোস্ট ১ -->
                @foreach($post_data as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="card category-card">
                        <img src="assets/img/feature-1.jpg" class="card-img-top category-img" alt="প্রযুক্তি">
                        <div class="card-body text-center">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge">প্রযুক্তি</span>
                                <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
						    </div>
                            <h5 class="card-title">{{$post->post_title}}</h5>
                            <p class="card-text">
                                    @php
                                    $content = $post->short_content;
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
                            <a href="category-posts.html" class="btn outline-primary">পোস্ট দেখুন </a>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <!-- পেজিনেশন -->
                <nav aria-label="Page navigation">
                    {{ $post_data->onEachSide(2)->links() }}
                </nav>
            
        </div>
    </div>
    @endsection