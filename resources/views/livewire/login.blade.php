<div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title mb-4">Please sign in</h3>
            <form wire:submit="login">
                <div class="mb-4">
                    <label for="Email" class="form-label">Email</label>
                    <input wire:model="email" type="text" class="form-control @error('email') is-invalid @enderror" id="Email"
                        aria-describedby="EmailFeedback">
                    @error('email')
                        <div id="EmailFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="Password" class="form-label">Password</label>
                    <input wire:model="password" type="password" class="form-control @error('password') is-invalid @enderror" id="Password"
                        aria-describedby="PasswordFeedback">
                    @error('password')
                        <div id="PasswordFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>
