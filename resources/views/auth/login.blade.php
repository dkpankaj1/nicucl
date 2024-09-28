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

                @if (Session::has('status'))
                    <div>{{ Session::get('status') }}</div>
                @endif

                <div class="pt-0">
                    <form method="POST" action="{{ route('login') }}" class="my-4">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input class="form-control" type="email" id="emailaddress" required=""
                                value="{{ old('email') }}" placeholder="Enter your email" name="email">
                            @error('email')
                                <x-input-errors :message="$message" />
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" required="" id="password"
                                placeholder="Enter your password" name="password">
                            @error('password')
                                <x-input-errors :message="$message" />
                            @enderror
                        </div>

                        <div class="form-group d-flex mb-3">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                    <label class="form-check-label" for="checkbox-signin" name="remember">Remember
                                        me</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-end">
                                <a class='text-muted fs-14' href='{{ route('password.request') }}'>Forgot
                                    password?</a>
                            </div>
                        </div>

                        <div class="form-group mb-0 row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" type="submit"> Log In </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="saprator my-4"><span>or sign in with</span></div>

                    <div class="text-center text-muted mb-4">
                        <p class="mb-0">Don't have an account ?<a class='text-primary ms-2 fw-medium'
                                href='{{ route('register') }}'>Sing up</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
