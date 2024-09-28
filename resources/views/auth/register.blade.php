<x-guest-layout>
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                <div class="mb-4 p-0">
                    <a href="index.html" class="auth-logo">
                        <img src="{{ asset('backend/images/logo-dark.png') }}" alt="logo-dark" class="mx-auto"
                            height="28" />
                    </a>
                </div>

                <div class="pt-0">
                    <form method="POST" action="{{ route('register') }}" class="my-4">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Name</label>
                            <input class="form-control" type="text" id="name" placeholder="Enter your Name"
                                name="name" value="{{ old('name') }}">
                            @error('name')
                                <x-input-errors :message="$message" />
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Phone</label>
                            <input class="form-control" type="text" id="phone" placeholder="Enter your Phone"
                                name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <x-input-errors :message="$message" />
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input class="form-control" name="email" type="email" id="emailaddress"
                                placeholder="Enter your email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <x-input-errors :message="$message" />
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" name="password" type="password" id="password"
                                placeholder="Enter your password" name="password">
                            @error('password')
                                <x-input-errors :message="$message" />
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Confirm Password</label>
                            <input class="form-control" type="password" id="password" placeholder="Enter your password"
                                name="password_confirmation">
                            @error('password_confirmation')
                                <x-input-errors :message="$message" />
                            @enderror
                        </div>

                        <div class="form-group d-flex mb-3">
                            <div class="col-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin"
                                        name="accept_term" value="{{ old('accept_term') }}">
                                    <label class="form-check-label" for="checkbox-signin">I agree to the <a
                                            href="#" class="text-primary fw-medium"> Terms and
                                            Conditions</a></label>
                                </div>
                                @error('accept_term')
                                    <x-input-errors :message="$message" />
                                @enderror
                            </div><!--end col-->
                        </div>

                        <div class="form-group mb-0 row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" type="submit"> Register</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="saprator my-4"><span>or sign in with</span></div>

                    <div class="text-center text-muted mb-4">
                        <p class="mb-0">I have an account ?<a class='text-primary ms-2 fw-medium'
                                href='{{ route('login') }}'>Sing in</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
