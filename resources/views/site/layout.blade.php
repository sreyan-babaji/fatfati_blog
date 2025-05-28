<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>euphoria-{{$title}}</title>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    
    <!-- নেভিগেশন বার -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-top mb-4" id="mainNavbar">
        <div class="container-fluid ">
            <a class="navbar-brand fw-bold" href="#"><img src="assets/img/logo.png" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href=" {{ route('home') }} ">হোম</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site_article')}}">ব্লগ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('site_category') }} ">ক্যাটাগরি</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site_about') }}">আমার সম্পর্কে</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site_contact') }}">যোগাযোগ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">লগইন/রেজিস্ট্রেশন</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
@yield('content')

     <!-- ফুটার -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>আমার ব্লগ</h5>
                    <p>প্রযুক্তি, ভ্রমণ এবং জীবনযাপন নিয়ে আমার চিন্তাভাবনা শেয়ার করার একটি প্ল্যাটফর্ম।</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>লিংক</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="text-white text-decoration-none">হোম</a></li>
                        <li><a href="blog.html" class="text-white text-decoration-none">ব্লগ</a></li>
                        <li><a href="categories.html" class="text-white text-decoration-none">ক্যাটাগরি</a></li>
                        <li><a href="about.html" class="text-white text-decoration-none">আমার সম্পর্কে</a></li>
                        <li><a href="contact.html" class="text-white text-decoration-none">যোগাযোগ</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>সোশ্যাল মিডিয়া</h5>
                    <a href="#" class="btn btn-outline-light me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="btn btn-outline-light me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="btn btn-outline-light me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="btn btn-outline-light"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <p class="mb-0 text-center">&copy; ২০২৩ আমার ব্লগ। সকল স্বত্ব সংরক্ষিত।</p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="assets/js/blog_site.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>