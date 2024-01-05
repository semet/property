<x-layouts.auth title="Admin Login">
    <form action="{{ route('admin.auth.login') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="emailaddress" class="form-label">Email address</label>
            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="emailaddress" placeholder="username@email.com">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <a href="pages-recoverpw.html" class="text-muted float-end"><small>Lupa password?</small></a>
            <label for="password" class="form-label">Password</label>
            <div class="input-group input-group-merge">
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="* * * * * * *">
                <div class="input-group-text" data-password="false">
                    <span class="password-eye"></span>
                </div>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 mb-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkbox-signin" name="remember" value="1" checked>
                <label class="form-check-label" for="checkbox-signin">Ingat saya</label>
            </div>
        </div>

        <div class="mb-3 mb-0 text-center">
            <button class="btn btn-primary" type="submit"> Log In </button>
        </div>

    </form>
</x-layouts.auth>
