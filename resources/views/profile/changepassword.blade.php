@extends('layouts.app', ['title' => 'Ganti Password'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Change Password</h4>
                </div>
                <form action="{{ route('password.edit') }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="old_password">*Password Lama</label>
                            <input type="password" name="old_password" id="old_password" class="form-control @error('old_password') is-invalid @enderror" value="{{ old('old_password') }}" autofocus required>
                            @error('old_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">*Password Baru</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">*Ulangi Password Baru</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('profile.setting', auth()->user()->id) }}" class="btn btn-danger btn-sm">
                            <i class="fa fa-step-backward"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
