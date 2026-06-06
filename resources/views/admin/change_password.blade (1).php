@include('admin.header')
<br>
<br>
<br>
<br>

<div class="content-wrapper">
    <div class="container-fluid">
        @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Password</h5>

                        <form action="{{ route('admin.update.password') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="oldPasswordInput">Current Password:</label>
                                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror"
                                    id="oldPasswordInput" placeholder="Old Password">
                                @error('old_password')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="newPasswordInput">New Password:</label>
                                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror"
                                    id="newPasswordInput" placeholder="New Password">
                                @error('new_password')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="confirmNewPasswordInput">Confirm New Password:</label>
                                <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                    placeholder="Confirm New Password">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
