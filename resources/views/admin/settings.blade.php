        @extends('admin.layout')
        @section('content')
        <!-- পেজ হেডার -->
        <h3><i class="bi bi-gear me-2"></i> সাইট সেটিংস</h3>
        <p class="text-muted mb-4">আপনার ব্লগ সাইটের সেটিংস কনফিগার করুন</p>

        <!-- সেটিংস ট্যাব -->
        <ul class="nav nav-tabs settings-tabs mb-4" id="settingsTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab">সাধারণ</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo" type="button" role="tab">এসইও</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" type="button" role="tab">সোশ্যাল মিডিয়া</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="email-tab" data-bs-toggle="tab" data-bs-target="#email" type="button" role="tab">ইমেইল</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button" role="tab">সিকিউরিটি</button>
            </li>
        </ul>

        <!-- সেটিংস কন্টেন্ট -->
        <div class="tab-content" id="settingsTabContent">
            <!-- সাধারণ সেটিংস -->
            <div class="tab-pane fade show active" id="general" role="tabpanel">
                <div class="settings-card">
                    <h4><i class="bi bi-globe me-2"></i> সাধারণ সেটিংস</h4>
                    <form action="{{ route('update_site_title') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="siteTitle" class="form-label">সাইট টাইটেল</label>
                            <input type="text" class="form-control" id="siteTitle" name="site_title" value="{{ $settings_data->site_title ?? 'আমার ব্লগ '}}">
                        </div>
                        <button type="submit" class="btn btn-submit">সংরক্ষণ করুন</button>
                    </form>
                    <hr>
                      <form action="{{ route('update_site_slug') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="siteslug" class="form-label">সাইট স্লাগ</label>
                            <input type="text" class="form-control" id="siteslug" name="site_slug" value="আমার ব্লগ">
                        </div>
                        <button type="submit" class="btn btn-submit">সংরক্ষণ করুন</button>
                    </form>
                    <hr>
                    <form action="{{ route('update_site_description') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="siteDescription" class="form-label">সাইট বর্ণনা</label>
                            <textarea class="form-control" id="siteDescription" name="site_description" rows="3">প্রযুক্তি, ভ্রমণ এবং জীবনযাপন নিয়ে আমার চিন্তাভাবনা</textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">সংরক্ষণ করুন</button>
                    </form>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <img src="" alt="">
                         </div>
                        <div class="col-8">
                        <form action="{{ route('update_site_logo') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="siteLogo" class="form-label">সাইট লোগো</label>
                                <input class="form-control" type="file" id="siteLogo" name="site_logo">
                                <div class="form-text">প্রস্তাবিত সাইজ: 200px × 50px</div>
                            </div>
                            <button type="submit" class="btn btn-submit">সংরক্ষণ করুন</button>
                        </form>
                        </div>
                    </div>
                    <hr>
                    <form action="{{ route('update_site_favicon') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="siteFavicon" class="form-label">ফেভিকন</label>
                            <input class="form-control" type="file" id="siteFavicon" name="site_favicon">
                            <div class="form-text">প্রস্তাবিত সাইজ: 32px × 32px</div>
                        </div>
                        <button type="submit" class="btn btn-submit">সংরক্ষণ করুন</button>
                    </form>
                </div>
            </div>

            <!-- এসইও সেটিংস -->
            <div class="tab-pane fade" id="seo" role="tabpanel">
                <div class="settings-card">
                    <h4><i class="bi bi-search me-2"></i> এসইও সেটিংস</h4>
                    <form>
                        <div class="mb-3">
                            <label for="metaTitle" class="form-label">মেটা টাইটেল</label>
                            <input type="text" class="form-control" id="metaTitle" value="আমার ব্লগ - প্রযুক্তি, ভ্রমণ এবং জীবনযাপন">
                        </div>
                        <div class="mb-3">
                            <label for="metaDescription" class="form-label">মেটা বর্ণনা</label>
                            <textarea class="form-control" id="metaDescription" rows="3">প্রযুক্তি, ভ্রমণ এবং জীবনযাপন নিয়ে আমার চিন্তাভাবনা শেয়ার করার একটি প্ল্যাটফর্ম</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="metaKeywords" class="form-label">মেটা কিওয়ার্ডস</label>
                            <input type="text" class="form-control" id="metaKeywords" value="ব্লগ, প্রযুক্তি, ভ্রমণ, জীবনযাপন, বাংলাদেশ">
                            <div class="form-text">কমা দ্বারা পৃথক করুন</div>
                        </div>
                        <div class="mb-3">
                            <label for="canonicalUrl" class="form-label">ক্যানোনিকাল URL</label>
                            <input type="text" class="form-control" id="canonicalUrl" value="https://amarblog.com">
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="enableSitemap" checked>
                            <label class="form-check-label" for="enableSitemap">সাইটম্যাপ সক্রিয় করুন</label>
                        </div>
                        <button type="submit" class="btn btn-submit">সংরক্ষণ করুন</button>
                    </form>
                </div>
            </div>

            <!-- সোশ্যাল মিডিয়া সেটিংস -->
            <div class="tab-pane fade" id="social" role="tabpanel">
                <div class="settings-card">
                    <h4><i class="bi bi-share me-2"></i> সোশ্যাল মিডিয়া</h4>
                    <form>
                        <div class="mb-3">
                            <label for="facebookUrl" class="form-label">Facebook URL</label>
                            <input type="text" class="form-control" id="facebookUrl" value="https://facebook.com/amarblog">
                        </div>
                        <div class="mb-3">
                            <label for="twitterUrl" class="form-label">Twitter URL</label>
                            <input type="text" class="form-control" id="twitterUrl" value="https://twitter.com/amarblog">
                        </div>
                        <div class="mb-3">
                            <label for="instagramUrl" class="form-label">Instagram URL</label>
                            <input type="text" class="form-control" id="instagramUrl" value="https://instagram.com/amarblog">
                        </div>
                        <div class="mb-3">
                            <label for="linkedinUrl" class="form-label">LinkedIn URL</label>
                            <input type="text" class="form-control" id="linkedinUrl" value="https://linkedin.com/company/amarblog">
                        </div>
                        <div class="mb-3">
                            <label for="youtubeUrl" class="form-label">YouTube URL</label>
                            <input type="text" class="form-control" id="youtubeUrl" value="https://youtube.com/amarblog">
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="enableSharing" checked>
                            <label class="form-check-label" for="enableSharing">সোশ্যাল শেয়ারিং বাটন সক্রিয় করুন</label>
                        </div>
                        <button type="submit" class="btn btn-submit">সংরক্ষণ করুন</button>
                    </form>
                </div>
            </div>

            <!-- ইমেইল সেটিংস -->
            <div class="tab-pane fade" id="email" role="tabpanel">
                <div class="settings-card">
                    <h4><i class="bi bi-envelope me-2"></i> ইমেইল সেটিংস</h4>
                    <form>
                        <div class="mb-3">
                            <label for="emailFrom" class="form-label">ইমেইল (From)</label>
                            <input type="email" class="form-control" id="emailFrom" value="noreply@amarblog.com">
                        </div>
                        <div class="mb-3">
                            <label for="emailFromName" class="form-label">ইমেইল নাম (From Name)</label>
                            <input type="text" class="form-control" id="emailFromName" value="আমার ব্লগ">
                        </div>
                        <div class="mb-3">
                            <label for="smtpHost" class="form-label">SMTP হোস্ট</label>
                            <input type="text" class="form-control" id="smtpHost" value="smtp.example.com">
                        </div>
                        <div class="mb-3">
                            <label for="smtpPort" class="form-label">SMTP পোর্ট</label>
                            <input type="number" class="form-control" id="smtpPort" value="587">
                        </div>
                        <div class="mb-3">
                            <label for="smtpUsername" class="form-label">SMTP ইউজারনেম</label>
                            <input type="text" class="form-control" id="smtpUsername" value="your_username">
                        </div>
                        <div class="mb-3">
                            <label for="smtpPassword" class="form-label">SMTP পাসওয়ার্ড</label>
                            <input type="password" class="form-control" id="smtpPassword" value="your_password">
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="smtpSecure" checked>
                            <label class="form-check-label" for="smtpSecure">SSL/TLS ব্যবহার করুন</label>
                        </div>
                        <button type="submit" class="btn btn-submit">সংরক্ষণ করুন</button>
                    </form>
                </div>
            </div>

            <!-- সিকিউরিটি সেটিংস -->
            <div class="tab-pane fade" id="security" role="tabpanel">
                <div class="settings-card">
                    <h4><i class="bi bi-shield-lock me-2"></i> সিকিউরিটি সেটিংস</h4>
                    <form>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="enableCaptcha" checked>
                            <label class="form-check-label" for="enableCaptcha">ক্যাপচা সক্রিয় করুন</label>
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="enable2FA">
                            <label class="form-check-label" for="enable2FA">2-ফ্যাক্টর অথেন্টিকেশন</label>
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="enableLoginAlert" checked>
                            <label class="form-check-label" for="enableLoginAlert">লগইন অ্যালার্ট সক্রিয় করুন</label>
                        </div>
                        <div class="mb-3">
                            <label for="failedLoginAttempts" class="form-label">অসফল লগইন প্রচেষ্টা</label>
                            <input type="number" class="form-control" id="failedLoginAttempts" value="5">
                            <div class="form-text">অ্যাকাউন্ট লক করার আগে অনুমোদিত অসফল লগইন প্রচেষ্টার সংখ্যা</div>
                        </div>
                        <div class="mb-3">
                            <label for="loginLockoutTime" class="form-label">লকআউট সময় (মিনিট)</label>
                            <input type="number" class="form-control" id="loginLockoutTime" value="30">
                        </div>
                        <button type="submit" class="btn btn-submit">সংরক্ষণ করুন</button>
                    </form>
                </div>
            </div>
        </div>
        @endsection