@extends('admin.layout')
@section('content')
 <!-- পেজ হেডার এবং নতুন ক্যাটাগরি বাটন -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3><i class="bi bi-grid me-2"></i> ক্যাটাগরি ম্যানেজমেন্ট</h3>
           <a href="{{ route('category_create_view') }}" class="btn" style="background-color: var(--primary-dark); color: white;">
                <i class="bi bi-plus-circle me-2"></i>নতুন ক্যাটাগরি যোগ
            </a>
        </div>

        <!-- সার্চ সেকশন -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="ক্যাটাগরি খুঁজুন...">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- ক্যাটাগরি লিস্ট -->
        <div class="row ">
            <!--সব ক্যাটাগরি লোপে দেখা -->
             @foreach($all_category as $category)
            <div class="col-md-6 col-lg-4 ">
                <div class="category-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h4>{{$category->category_name}}</h4>
                        <span class="category-count">iu</span>
                    </div>
                    <p class="text-muted mb-4">{{ $category->category_description }}</p>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-sm btn-edit btn-action" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                            <i class="bi bi-pencil"></i> এডিট
                        </button>
                        <button class="btn btn-sm btn-delete btn-action">
                            <i class="bi bi-trash"></i> ডিলিট
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
            
            

        <!-- পেজিনেশন -->
        <nav aria-label="Page navigation" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">পূর্ববর্তী</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">পরবর্তী</a>
                </li>
            </ul>
        </nav>
        @endsection