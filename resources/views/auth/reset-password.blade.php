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
                    <form method="POST" action="{{ route('password.store') }}" class="my-4">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="form-group mb-3">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input class="form-control" name="email" type="email" id="emailaddress"
                                placeholder="Enter your email" name="email"
                                value="{{ old('email', $request->email) }}">
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

                        <div class="form-group mb-0 row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit"> Recover Password </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="text-center text-muted">
                        <p class="mb-0">Change the mind ?<a class="text-primary ms-2 fw-medium"
                                href="{{ route('login') }}">Back to Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
