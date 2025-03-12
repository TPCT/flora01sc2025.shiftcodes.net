@extends('layout.account')

@section('title')
    Account
@endsection


@section('main')
    <main>

        <div class="container-fluid">

            <div class="alert alert-success d-none">Settings saved successfully</div>


            <div class="userpanel">

                <div class="userpanel-photo mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70">
                        <defs>
                            <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                                <stop offset="0%" stop-color="#4949E7"></stop>
                                <stop offset="100%" stop-color="#51E3C0"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="none"
                            d="M57.945 61.396a2.035 2.035 0 0 1-.479.415C51.383 66.918 43.546 70 35 70c-8.612 0-16.503-3.132-22.606-8.31a1.895 1.895 0 0 1-.126-.109C4.767 55.157 0 45.628 0 35 0 15.701 15.701 0 35 0c19.3 0 35 15.701 35 35 0 10.526-4.677 19.975-12.055 26.396Z">
                        </path>
                        <path fill="url(#a)"
                            d="M57.945 61.396a2.035 2.035 0 0 1-.479.415C51.383 66.918 43.546 70 35 70c-8.612 0-16.503-3.132-22.606-8.31a1.895 1.895 0 0 1-.126-.109C4.767 55.157 0 45.628 0 35 0 15.701 15.701 0 35 0c19.3 0 35 15.701 35 35 0 10.526-4.677 19.975-12.055 26.396Z">
                        </path>
                    </svg>
                </div>

                <div class="userpanel-email mb-4">
                    <h6>{{ Auth::user()->name }}</h6>
                    <span>{{ Auth::user()->email }}</س>
                </div>




                <div class="mb-4">
                    <div class="mb-2">
                        <a href="{{ ('/change-password') }}" class="btn border rounded-pill">Change password</a>
                    </div>
                    <a href="{{ ('/change-email') }}" class="btn border rounded-pill">Change e-mail</a>
                </div>

                <hr class="mb-4">
                <div class="mb-4">
                    <div class="h6 mb-2">Account balance</div>
                    <h6>
                        <a href="" class="text-reset">
                            ${{ number_format(Auth::user()->balance, 2) }}
                        </a>
                    </h6>
                    <a href="">Payouts</a>
                </div>


                <hr class="mb-4">
                <div class="mb-4">
                    <div class="h6 mb-2">Premium expire</div>
                    <h6>23 February 2025</h6>
                    <a href="">Extend Premium account</a>
                </div>

            </div>

            <div class="nav section-tabs mb-4" role="tablist">
                <a data-bs-toggle="tab" href="#details" class="nav-link active" aria-selected="true" role="tab">Account
                    Details</a>
                <a data-bs-toggle="tab" href="#security" class="nav-link" aria-selected="false" tabindex="-1"
                    role="tab">Security Settings</a>
                <a data-bs-toggle="tab" href="#player" class="nav-link" aria-selected="false" tabindex="-1"
                    role="tab">Player
                    Settings</a>
                <a data-bs-toggle="tab" href="#ads" class="nav-link" aria-selected="false" tabindex="-1"
                    role="tab">Ads mode</a>
            </div>

            <form method="POST" action="{{ route('user.updateSecurity') }}">
                @csrf
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="details" role="tabpanel">
                        <div class="block">
                            <div class="block-bg p-lg-5">



                                <div class="mb-4 row align-items-center">
                                    <label class="col-xl-3 col-form-label">Country:</label>
                                    <div class="col-xl-8 col-xxl-7">
                                        <input type="text" class="form-control" name="unnamed_field"
                                            value="{{ old('unnamed_field', auth()->user()?->securitySetting?->unnamed_field ?? '') }}">
                                    </div>
                                </div>


                                <div class="mb-4 row align-items-center">
                                    <label class="col-xl-3 col-form-label">Payment info:</label>
                                    <div class="col-xl-8 col-xxl-7">
                                        <div class="row">
                                            <div class="col-lg-auto flex-grow-1 flex-shrink-1 mb-4 mb-lg-0">
                                                <input type="text" name="unnamed_field" class="form-control"
                                                    value="{{ old('unnamed_field', auth()->user()?->securitySetting?->unnamed_field ?? '') }}">
                                            </div>
                                            <div class="col-lg-auto">
                                                <select class="form-select" name="unnamed_field" style="width:130px;">

                                                    <option value="PayPal" selected="">PayPal</option>

                                                    <option value="Webmoney">Webmoney</option>

                                                    <option value="Moneybookers">Moneybookers</option>

                                                    <option value="AlertPay">AlertPay</option>

                                                    <option value="Plimus">Plimus</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-4 row align-items-center">
                                    <label class="col-xl-3 col-form-label">Referral Link:</label>
                                    <div class="col-xl-8 col-xxl-7">
                                        <div class="row align-items-center">
                                            <div class="col-auto flex-grow-1 flex-shrink-1">
                                                <input type="text" readonly="" class="form-control" value="">
                                            </div>
                                            <div class="col-auto">
                                                <a href="" class="btn border">0 refs</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="mb-4 row align-items-center">
                                    <label class="col-xl-3 col-form-label">My Playlists:</label>
                                    <div class="col-xl-8 col-xxl-7">
                                        <a href="" class="btn btn-primary">Manage</a>
                                    </div>
                                </div>




                                <div class="mb-4 row align-items-center">
                                    <label class="col-xl-3 col-form-label ">Channel Name:</label>
                                    <div class="col-xl-8 col-xxl-7">
                                        <input class="form-control" type="text" name="unnamed_field"
                                            value="{{ old('unnamed_field', auth()->user()?->securitySetting?->unnamed_field ?? '') }}">
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-xl-3 col-form-label">Channel Avatar:</label>
                                    <div class="col-xl-8 col-xxl-7">


                                        <input type="file" name="unnamed_field" accept="image/*"
                                            class="form-control">



                                    </div>
                                </div>



                                <div class="text-center">
                                    <input type="submit" name="settings_save" value="Save Settings"
                                        class="btn btn-gradient submit-btn">
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="security" role="tabpanel">
                        <div class="block">
                            <div class="block-bg p-lg-5">
                                <form action="{{ route('user.updateSecurity') }}" method="POST"
                                    enctype="application/x-www-form-urlencoded" method="POST"
                                    action="{{ route('user.updateSecurity') }}">
                                    @csrf



                                    <div class="mb-4 row align-items-center">
                                        <label class="col-xl-3 col-form-label">Security lock:</label>
                                        <div class="col-xl-8 col-xxl-7">
                                            <div class="form-switcher align-items-center">
                                                <input type="checkbox" name="two_factor_auth"
                                                    {{ old('two_factor_auth', auth()->user()?->securitySetting?->two_factor_auth ?? false) ? 'checked' : '' }}
                                                    {{ optional(auth()->user()->securitySetting)->two_factor_auth ? 'checked' : '' }}>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-xl-3 col-form-label text-xl-end">Allowed IPs:</label>
                                        <div class="col-xl-8 col-xxl-7">
                                            <input type="text" class="form-control" name="allowed_ips"
                                                value="{{ optional(auth()->user()->securitySetting)->allowed_ips }}">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-xl-3 col-form-label text-xl-end">On login:</label>
                                        <div class="col-xl-8 col-xxl-7">
                                            <label class="form-check-radio mb-2">
                                                <input class="me-2" type="checkbox" name="logout_sessions"
                                                    {{ old('logout_sessions', auth()->user()?->securitySetting?->logout_sessions ?? false) ? 'checked' : '' }}
                                                    value="1">
                                                Logout all current sessions
                                            </label>
                                            <label class="form-check-radio mb-2">
                                                <input class="me-2" type="checkbox" name="email_new_ip"
                                                    {{ old('email_new_ip', auth()->user()?->securitySetting?->email_new_ip ?? false) ? 'checked' : '' }}
                                                    value="1"
                                                    {{ optional(auth()->user()->securitySetting)->email_new_ip ? 'checked' : '' }}>
                                                Email when login from new IP
                                            </label>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-gradient submit-btn">Save Settings</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="player" role="tabpanel">

                        <div class="block">
                            <div class="block-bg p-lg-5">



                                <div class="mb-4 row">
                                    <label class="col-xl-3 col-form-label text-xl-end">Allowed embed domains:</label>
                                    <div class="col-xl-8 col-xxl-7">
                                        <input type="text" name="unnamed_field" class="form-control"
                                            value="{{ old('unnamed_field', auth()->user()?->securitySetting?->unnamed_field ?? '') }}">
                                        <div class="form-text">Site domain where you can put embed codes. Empty to allow
                                            all sites.<br>e.g.:
                                            site1.com, site2.net</div>
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label class="col-xl-3 col-form-label text-xl-end">Banned countries:</label>
                                    <div class="col-xl-8 col-xxl-7">
                                        <input type="text" name="unnamed_field" class="form-control"
                                            value="{{ old('unnamed_field', auth()->user()?->securitySetting?->unnamed_field ?? '') }}"
                                            aria-describedby="banc">
                                        <div class="form-text" id="banc">e.g. US|CA|FR</div>
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label class="col-xl-3 col-form-label text-xl-end">Banned IPs:</label>
                                    <div class="col-xl-8 col-xxl-7">
                                        <input type="text" name="unnamed_field" class="form-control"
                                            value="{{ old('unnamed_field', auth()->user()?->securitySetting?->unnamed_field ?? '') }}"
                                            aria-describedby="banip">
                                        <div class="form-text" id="banip">e.g. 1.1.1.1, 2.3.4.*</div>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-xl-3 col-form-label text-xl-end">Block direct access:</label>
                                    <div class="col-xl-8 col-xxl-7">
                                        <label class="form-check-radio"><input class="me-2" type="checkbox"
                                                name="unnamed_field"
                                                {{ old('unnamed_field', auth()->user()?->securitySetting?->unnamed_field ?? false) ? 'checked' : '' }}
                                                value="{{ old('unnamed_field', auth()->user()?->securitySetting?->unnamed_field ?? '') }}">
                                            Allow embeds only</label>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-xl-3 col-form-label text-xl-end">Video title in Embeds:</label>
                                    <div class="col-xl-8 col-xxl-7">
                                        <label class="form-check-radio"><input class="me-2" type="checkbox"
                                                name="unnamed_field"
                                                {{ old('unnamed_field', auth()->user()?->securitySetting?->unnamed_field ?? false) ? 'checked' : '' }}
                                                value="{{ old('unnamed_field', auth()->user()?->securitySetting?->unnamed_field ?? '') }}">
                                            Show</label>
                                    </div>
                                </div>




                                <div class="mb-4 row align-items-center">
                                    <label class="col-xl-3 col-form-label text-xl-end">Disable video convertion:</label>
                                    <div class="col-xl-8 col-xxl-7">
                                        <label class="form-check-radio"><input class="me-2" type="checkbox"
                                                name="unnamed_field"
                                                {{ old('unnamed_field', auth()->user()?->securitySetting?->unnamed_field ?? false) ? 'checked' : '' }}
                                                value="{{ old('unnamed_field', auth()->user()?->securitySetting?->unnamed_field ?? '') }}">
                                            Enabled</label> <small>(video should be H264+AAC codecs)</small>
                                    </div>
                                </div>







                                <div class="text-center">
                                    <input type="submit" name="settings_save" value="Save Settings"
                                        class="btn btn-gradient submit-btn">
                                </div>


                            </div>
                        </div>


                    </div>

                    <div class="tab-pane fade" id="ads" role="tabpanel">
                        <div class="block">
                            <div class="block-bg p-lg-5">

                                <div class="row mb-4">

                                </div>

                                <div class="text-center">
                                    <input type="submit" name="settings_save" value="Save Settings"
                                        class="btn btn-gradient submit-btn">
                                </div>


                            </div>
                        </div>
                    </div>


                </div>
            </form>


        </div>
    </main>
@endsection
