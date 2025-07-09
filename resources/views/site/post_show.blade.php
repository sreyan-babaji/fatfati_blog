    @extends('site.layout')
    @section('content')
   
   <!-- মূল কন্টেন্ট -->
    <main class="container">
        <div class="row g-5">
            <div class="col-md-11">
                <!-- ব্লগ পোস্ট -->
                <article class="blog-post">
                    <h1 class="blog-post-title">{{$post_data->post_title}}</h1>
                    <p class="blog-post-meta">{{$post_data->created_at}}<a href="#">{{$post_data->author}}</a></p>
                    
                    <div class="mb-4">
                        <img src="{{$post_data->post_img}}" class="img-fluid rounded" alt="ব্লগ পোস্ট ইমেজ">
                    </div>
                    <hr>
                    <div>
                        <p>
                            {{$post_data->post_content}}
                        </p>
                    </div>
                </article>

                <!-- কমেন্ট সেকশন -->
                <section class="mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">মন্তব্য করুন</h5>
                            <form>
                                <div class="mb-3">
                                    <label for="commentName" class="form-label">আপনার নাম</label>
                                    <input type="text" class="form-control" id="commentName">
                                </div>
                                <div class="mb-3">
                                    <label for="commentEmail" class="form-label">ইমেইল</label>
                                    <input type="email" class="form-control" id="commentEmail">
                                </div>
                                <div class="mb-3">
                                    <label for="commentText" class="form-label">মন্তব্য</label>
                                    <textarea class="form-control" id="commentText" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">পোস্ট করুন</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
        @endsection