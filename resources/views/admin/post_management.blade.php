@extends('admin.layout')
@section('content')

        <!-- পেজ হেডার এবং নতুন পোস্ট বাটন -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3> {{$title}} </h3>
            <a href="{{ route('post_create_view') }}" class="btn" style="background-color: var(--primary-dark); color: white;">
                <i class="bi bi-plus-circle me-2"></i>নতুন পোস্ট তৈরি করুন
            </a>
        </div>

        <!-- সার্চ এবং ফিল্টার সেকশন -->
        <div class="filter_section mb-4 ">
            <div class="row ">
                <div class="col-md-6 mb-3 mb-md-0">
                    <form action="{{ route('post_search') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="search_text" class="form-control" placeholder="পোস্ট খুঁজুন...">
                            <button class="btn btn-outline-secondary" type="submit" name="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 mb-2 mb-md-0">
                          <select class="form-select" onchange="redirectToCategory(this)">
                                <option value="" selected>সব ক্যাটাগরি</option>
                                @foreach($categories as $category)
                                    <option value="{{ route('category_search', $category->id) }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-6">
                            <select class="form-select" onchange="redirectToStatus(this)">
                                <option selected value="{{ route('status_search','all_post') }}">সব স্ট্যাটাস</option>
                                <option value="{{ route('status_search','publish') }}">প্রকাশিত</option>
                                <option value="{{ route('status_search','draft') }}">খসড়া</option>
                                <option value="{{ route('status_search','archive') }}">আর্কাইভড</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- পোস্ট টেবিল -->
        <div class="post-table">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="30%">শিরোনাম</th>
                            <th width="15%">লেখক</th>
                            <th width="15%">ক্যাটাগরি</th>
                            <th width="10%">স্ট্যাটাস</th>
                            <th width="15%">তারিখ</th>
                            <th width="10%">একশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($post_data as $postdata)
                        <tr>
                            <td>{{$postdata->id}}</td>
                            <td>{{$postdata->post_title}}</td>
                            <td>{{$postdata->author}}</td>
                            <td>{{$postdata->post_category}}</td>
                            @if($postdata->post_status == 'public')
                            <td class="badge-published ">Publish</td>
                            @elseif($postdata->post_status == 'draft')
                            <td class="badge-draft ">Draft</td>
                            @elseif($postdata->post_status == 'archive')
                            <td class="bg-success">Archive</td>
                            @else
                            <td class="">No Status</td>
                            @endif
                            <td>{{ $postdata->created_at->format('d-m-Y H:i:s') }}</td>
                            <td>
                                <a href="{{ route('blog_post_view',$postdata->id) }}" class="btn btn-sm btn-view btn-action" target="_blank">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('post_edit_view',$postdata->id) }}" class="btn btn-sm btn-edit btn-action" target="_blank">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="{{ route('post_delete',$postdata->id) }}" class="btn btn-sm btn-delete btn-action">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- পেজিনেশন -->
            <nav aria-label="Page navigation" class="p-3">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">পূর্ববর্তী</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">পরবর্তী</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <script>
    function redirectToCategory(select) {
        const url = select.value;
        if (url) {
            window.location.href = url;
        }
    }

       function redirectToStatus(select) {
        const url = select.value;
        if (url) {
            window.location.href = url;
        }
    }
    </script>
@endsection