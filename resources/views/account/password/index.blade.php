@extends('account.layouts.default')
@section('account.content')
    <div class="card panel-default">
        <div class="card-body">
            <form action="{{ route('account.password.update') }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group mb-3 ">
                    <label for="password_current" class="form-label">Current Password</label>
                    <input type="password" class="form-control {{ $errors->has('password_current') ? ' is-invalid' : '' }}"
                        name="password_current" id="password_current" value="">
                    @error('password_current')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3 ">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                        name="password" id="password" value="">
                    @error('password')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3 ">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password"
                        class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                        name="password_confirmation" id="password_confirmation" value="">
                    @error('password_confirmation')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>




                <div class="form-group">
                    <button type='submit' class="btn btn-primary">Change Password</button>
                </div>

            </form>
        </div>
    </div>
@endsection
