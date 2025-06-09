@extends('admin.layout')
@section('content')
<!-- পেজ হেডার এবং নতুন ব্যবহারকারী বাটন -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3><i class="bi bi-people me-2"></i> ব্যবহারকারী ম্যানেজমেন্ট</h3>
            <a href="add-user.html" class="btn" style="background-color: var(--primary-dark); color: white;">
                <i class="bi bi-plus-circle me-2"></i>নতুন ব্যবহারকারী
            </a>
        </div>

        <!-- ফিল্টার সেকশন -->
        <div class="filter_section">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <form action="{{ route('user_search') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="search_user" class="form-control" placeholder="ব্যবহারকারী খুঁজুন...">
                            <button class="btn btn-outline-secondary" type="submit" name="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 mb-2 mb-md-0">
                            <select class="form-select">
                                <option selected>সব রোল</option>
                                <option>এডমিন</option>
                                <option>লেখক</option>
                                <option>সাধারণ ব্যবহারকারী</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select">
                                <option selected>সব স্ট্যাটাস</option>
                                <option>এক্টিভ</option>
                                <option>নিষ্ক্রিয়</option>
                                <option>ব্লকড</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ব্যবহারকারী টেবিল -->
        <div class="user-table">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="20%">ব্যবহারকারী</th>
                            <th width="15%">রোল</th>
                            <th width="20%">ইমেইল</th>
                            <th width="15%">জয়েন তারিখ</th>
                            <th width="10%">স্ট্যাটাস</th>
                            <th width="15%">একশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user_data as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40" class="user-avatar me-2" alt="User">
                                    <div>
                                        <div class="fw-bold">{{$user->name}}</div>
                                        <div class="text-muted small">@admin</div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge badge-admin">এডমিন</span></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td><span class="badge bg-success">এক্টিভ</span></td>
                            <td>
                                <button class="btn btn-sm btn-edit btn-action">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-delete btn-action">
                                    <i class="bi bi-trash"></i>
                                </button>
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
        @endsection