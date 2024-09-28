<x-app-layout>
    <div class="container-xxl">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Profile</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">

                        <div class="align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('backend/images/users/user-11.jpg') }}"
                                    class="rounded-circle avatar-xxl img-thumbnail float-start" alt="image profile">

                                <div class="overflow-hidden ms-4">
                                    <h4 class="m-0 text-dark fs-20">{{ $user->name }}</h4>
                                    <p class="my-1 text-muted fs-16">{{ $user->email }}</p>

                                </div>
                            </div>

                        </div>


                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title mb-0">Personal Information</h4>
                                </div><!--end col-->
                            </div>
                        </div>

                        <div class="card-body">

                            <form method="post" action="{{ route('profile.update') }}">
                                @csrf
                                @method('patch')

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3 row">
                                            <label class="form-label">First Name</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control" type="text"
                                                    value="{{ old('name', $user->name) }}" name="name">
                                            </div>
                                        </div>
                                        @error('name')
                                            <x-input-errors :message="$message" />
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3 row">
                                            <label class="form-label">Phone</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i
                                                            class="mdi mdi-phone-outline"></i></span>
                                                    <input class="form-control" type="text" placeholder="Phone"
                                                        aria-describedby="basic-addon1"
                                                        value="{{ old('phone', $user->phone) }}" name="phone">
                                                </div>
                                            </div>
                                            @error('phone')
                                                <x-input-errors :message="$message" />
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3 row">
                                            <label class="form-label">Email Address</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="mdi mdi-email"></i></span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Email"aria-describedby="basic-addon1"
                                                        value="{{ old('email', $user->email) }}" name="email">
                                                </div>
                                            </div>
                                            @error('email')
                                                <x-input-errors :message="$message" />
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3 row">
                                            <label class="form-label">Company name</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control"
                                                    type="text"value="{{ old('company', $user->company) }}"
                                                    name="company">
                                            </div>
                                            @error('company')
                                                <x-input-errors :message="$message" />
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3 row">
                                            <label class="form-label">Address</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control" type="text"
                                                    value="{{ old('address', $user->address) }}" name="address">
                                            </div>
                                            @error('address')
                                                <x-input-errors :message="$message" />
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3 row">
                                            <label class="form-label">City</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control" type="text"
                                                    value="{{ old('city', $user->city) }}" name="city">
                                            </div>
                                            @error('city')
                                                <x-input-errors :message="$message" />
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3 row">
                                            <label class="form-label">State</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control" type="text"
                                                    value="{{ old('state', $user->state) }}" name="state">
                                            </div>
                                            @error('state')
                                                <x-input-errors :message="$message" />
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3 row">
                                            <label class="form-label">Postal Code</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control" type="text"
                                                    value="{{ old('postal_code', $user->postal_code) }}"
                                                    name="postal_code">
                                            </div>
                                            @error('postal_code')
                                                <x-input-errors :message="$message" />
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12">
                                                <button type="submit" class="btn btn-primary">Update
                                                    Profile</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </form>

                        </div>

                    </div> <!-- Tab panes -->
                </div>

                <div class="card  mb-0">

                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title mb-0">Change Password</h4>
                            </div><!--end col-->
                        </div>
                    </div>

                    <div class="card-body mb-0">
                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3 row">
                                        <label class="form-label">Old Password</label>
                                        <div class="col-lg-12 col-xl-12">
                                            <input class="form-control" type="password" placeholder="Old Password"
                                                name="current_password">
                                        </div>
                                        @error('current_password', 'updatePassword')
                                            <x-input-errors :message="$message" />
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="form-label">New Password</label>
                                        <div class="col-lg-12 col-xl-12">
                                            <input class="form-control" type="password" placeholder="New Password"
                                                name="password">
                                        </div>
                                        @error('password', 'updatePassword')
                                            <x-input-errors :message="$message" />
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="form-label">Confirm Password</label>
                                        <div class="col-lg-12 col-xl-12">
                                            <input class="form-control" type="password"
                                                placeholder="Confirm Password" name="password_confirmation">
                                        </div>
                                        @error('password', 'updatePassword')
                                            <x-input-errors :message="$message" />
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12 col-xl-12">
                                    <button type="submit" class="btn btn-primary">Change
                                        Password</button>
                                </div>
                            </div>

                        </form>

                    </div><!--end card-body-->
                </div>

            </div>
        </div>
    </div>

    @push('script')
        @if (session('status') === 'profile-updated')
            <script>
                toastr.success("Profile updated.")
            </script>
        @endif

        @if (session('status') === 'password-updated')
            <script>
                toastr.success("Password updated")
            </script>
        @endif
    @endpush

</x-app-layout>
