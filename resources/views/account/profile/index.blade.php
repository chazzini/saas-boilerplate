@extends('account.layouts.default')
@section('account.content')
    <div class="card panel-default">
        <div class="card-body">
            <form action="{{ route('account.profile.update') }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group mb-3 ">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                        id="name" aria-describedby="helpId" value="{{ old('name', auth()->user()->name) }}">
                    @error('name')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3 ">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        name="email" id="email" aria-describedby="helpId"
                        value="{{ old('email', auth()->user()->email) }}">
                    @error('email')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>



                <div class="form-group">
                    <button type='submit' class="btn btn-primary">Update</button>
                </div>

            </form>
        </div>
    </div>
@endsection
