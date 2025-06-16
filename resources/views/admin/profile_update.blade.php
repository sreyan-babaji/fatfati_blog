@extends('admin.layout')

@section('content')
<div class="container">
    <!-- পেজ হেডার -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><i class="bi bi-person-gear me-2"></i> প্রোফাইল এডিট করুন</h2>
        <a href="" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-2"></i> প্রোফাইলে ফিরে যান
        </a>
    </div>

    <!-- প্রোফাইল এডিট ফর্ম -->
    <div class="row">
        <div class="col-lg-4">
            <!-- প্রোফাইল ছবি সেকশন -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5><i class="bi bi-image"></i> প্রোফাইল ছবি</h5>
                </div>
                <div class="card-body text-center">
                    <div class="profile-picture-container mb-3">
                        <img src="https://via.placeholder.com/200" id="profileImagePreview" class="profile-picture" alt="প্রোফাইল ছবি">
                    </div>
                    <div class="d-flex justify-content-center gap-2">
                        <button class="btn btn-sm btn-primary" id="uploadNewImage">
                            <i class="bi bi-upload me-1"></i> নতুন ছবি
                        </button>
                        <button class="btn btn-sm btn-danger" id="removeImage">
                            <i class="bi bi-trash me-1"></i> অপসারণ
                        </button>
                    </div>
                    <input type="file" id="profileImageInput" accept="image/*" style="display: none;">
                    <div class="mt-2 text-muted small">
                        <p>JPEG বা PNG ফরমেট, সর্বোচ্চ 2MB</p>
                    </div>
                </div>
            </div>

            <!-- পাসওয়ার্ড পরিবর্তন সেকশন -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5><i class="bi bi-shield-lock"></i> পাসওয়ার্ড পরিবর্তন</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="currentPassword" class="form-label">বর্তমান পাসওয়ার্ড</label>
                        <input type="password" class="form-control" id="currentPassword">
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">নতুন পাসওয়ার্ড</label>
                        <input type="password" class="form-control" id="newPassword">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">পাসওয়ার্ড নিশ্চিত করুন</label>
                        <input type="password" class="form-control" id="confirmPassword">
                    </div>
                    <button class="btn btn-primary w-100" id="updatePassword">
                        <i class="bi bi-check-circle me-1"></i> পাসওয়ার্ড আপডেট করুন
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <!-- ব্যক্তিগত তথ্য ফর্ম -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5><i class="bi bi-person-lines-fill"></i> ব্যক্তিগত তথ্য</h5>
                </div>
                <div class="card-body">
                    <form id="profileForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">নামের প্রথম অংশ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" value="আহসান" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">নামের শেষ অংশ</label>
                                <input type="text" class="form-control" id="lastName" value="হাবীব">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">ইমেইল <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" value="ahsan@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">ফোন নম্বর</label>
                            <input type="tel" class="form-control" id="phone" value="+880 1XXX XXXXXX">
                        </div>
                        <div class="mb-3">
                            <label for="birthDate" class="form-label">জন্ম তারিখ</label>
                            <input type="date" class="form-control" id="birthDate" value="1990-01-15">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">ঠিকানা</label>
                            <textarea class="form-control" id="address" rows="2">১২৩/বি, ধানমন্ডি, ঢাকা-১২০৫</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="bio" class="form-label">ব্যক্তিগত বর্ণনা</label>
                            <textarea class="form-control" id="bio" rows="3">আমি একজন ওয়েব ডেভেলপার এবং ব্লগার। নতুন প্রযুক্তি নিয়ে কাজ করতে ভালোবাসি।</textarea>
                        </div>
                    </form>
                </div>
            </div>

            <!-- সোশ্যাল মিডিয়া লিংক -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5><i class="bi bi-share"></i> সোশ্যাল মিডিয়া লিংক</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                <input type="url" class="form-control" id="facebook" placeholder="https://facebook.com/username" value="https://facebook.com/ahsanhabib">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-twitter"></i></span>
                                <input type="url" class="form-control" id="twitter" placeholder="https://twitter.com/username" value="https://twitter.com/ahsanhabib">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="linkedin" class="form-label">LinkedIn</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-linkedin"></i></span>
                                <input type="url" class="form-control" id="linkedin" placeholder="https://linkedin.com/in/username" value="https://linkedin.com/in/ahsanhabib">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                <input type="url" class="form-control" id="instagram" placeholder="https://instagram.com/username" value="https://instagram.com/ahsanhabib">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- সাবমিট বাটন -->
            <div class="d-flex justify-content-end gap-3">
                <button type="button" class="btn btn-secondary" id="cancelChanges">
                    <i class="bi bi-x-circle me-1"></i> বাতিল করুন
                </button>
                <button type="submit" class="btn btn-primary" form="profileForm">
                    <i class="bi bi-save me-1"></i> পরিবর্তনসমূহ সংরক্ষণ করুন
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // প্রোফাইল ছবি আপলোড ফাংশনালিটি
        const profileImageInput = document.getElementById('profileImageInput');
        const profileImagePreview = document.getElementById('profileImagePreview');
        const uploadNewImage = document.getElementById('uploadNewImage');
        const removeImage = document.getElementById('removeImage');

        if (uploadNewImage && profileImageInput) {
            uploadNewImage.addEventListener('click', function() {
                profileImageInput.click();
            });
        }

        if (profileImageInput && profileImagePreview) {
            profileImageInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    // ফাইল সাইজ চেক (2MB)
                    if (file.size > 2 * 1024 * 1024) {
                        alert('ছবির সাইজ 2MB এর বেশি হতে পারবে না');
                        return;
                    }

                    const reader = new FileReader();
                    reader.onload = function(e) {
                        profileImagePreview.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        if (removeImage) {
            removeImage.addEventListener('click', function() {
                profileImagePreview.src = 'https://via.placeholder.com/200';
                profileImageInput.value = '';
            });
        }

        // পাসওয়ার্ড আপডেট ফাংশনালিটি
        const updatePassword = document.getElementById('updatePassword');
        if (updatePassword) {
            updatePassword.addEventListener('click', function() {
                const currentPassword = document.getElementById('currentPassword').value;
                const newPassword = document.getElementById('newPassword').value;
                const confirmPassword = document.getElementById('confirmPassword').value;

                // ভ্যালিডেশন
                if (!currentPassword || !newPassword || !confirmPassword) {
                    alert('সব ফিল্ড পূরণ করুন');
                    return;
                }

                if (newPassword !== confirmPassword) {
                    alert('নতুন পাসওয়ার্ড এবং নিশ্চিতকরণ পাসওয়ার্ড মিলছে না');
                    return;
                }

                if (newPassword.length < 8) {
                    alert('পাসওয়ার্ডে কমপক্ষে ৮টি অক্ষর থাকা আবশ্যক');
                    return;
                }

                // এখানে AJAX রিকুয়েস্ট পাঠানো যাবে
                alert('পাসওয়ার্ড সফলভাবে আপডেট করা হয়েছে');
                document.getElementById('currentPassword').value = '';
                document.getElementById('newPassword').value = '';
                document.getElementById('confirmPassword').value = '';
            });
        }

        // ফর্ম সাবমিশন
        const profileForm = document.getElementById('profileForm');
        if (profileForm) {
            profileForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // এখানে ফর্ম ডাটা সংগ্রহ করে AJAX রিকুয়েস্ট পাঠানো যাবে
                alert('প্রোফাইল তথ্য সফলভাবে আপডেট করা হয়েছে');
            });
        }

        // বাতিল বাটন
        const cancelChanges = document.getElementById('cancelChanges');
        if (cancelChanges) {
            cancelChanges.addEventListener('click', function() {
                if (confirm('আপনি কি নিশ্চিত যে আপনি পরিবর্তনগুলি বাতিল করতে চান?')) {
                    window.location.href = "{{ route('profile') }}";
                }
            });
        }
    });
</script>
@endpush

@push('styles')
<style>
    /* প্রোফাইল এডিট স্পেসিফিক স্টাইল */
    .profile-picture-container {
        width: 200px;
        height: 200px;
        margin: 0 auto 20px;
    }

    .profile-picture {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid var(--primary-light);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* কার্ড হেডার স্টাইল */
    .card-header {
        font-weight: 600;
    }

    /* ইনপুট গ্রুপ স্টাইল */
    .input-group-text {
        background-color: var(--primary-light);
        color: var(--primary-dark);
    }

    /* বাটন স্টাইল */
    .btn {
        transition: all 0.3s;
    }

    .btn-primary {
        background-color: var(--primary-dark);
        border-color: var(--primary-dark);
    }

    .btn-primary:hover {
        background-color: var(--primary-medium);
        border-color: var(--primary-medium);
    }

    .btn-outline-secondary {
        color: var(--primary-dark);
        border-color: var(--primary-dark);
    }

    .btn-outline-secondary:hover {
        background-color: var(--primary-dark);
        color: white;
    }

    /* রেস্পন্সিভ স্টাইল */
    @media (max-width: 768px) {
        .profile-picture-container {
            width: 150px;
            height: 150px;
        }
        
        .d-flex.justify-content-end {
            justify-content: center !important;
        }
        
        .btn {
            width: 100%;
            margin-bottom: 10px;
        }
    }
</style>
@endpush
@endsection