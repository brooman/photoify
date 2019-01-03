@extends('layouts.app')

@section('content')
<div class="card has-background-dark">
    <div class="card-body is-transparent">
        <h1 class="is-size-2 is-size-4-touch has-text-white">My account</h1>
        <form method="POST" action="{{ route('/account/settings') }}" enctype="multipart/form-data">

            <!-- CSRF Token -->
            @csrf

            <!-- Method -->
            @method('PATCH')

            <div class="profile-settings">

                <!-- Image Input -->
                <div class="image-upload profile-image" data-image="{{ asset('images/1545389242.jpg') }}">
                    <div class="file is-boxed">
                        <label class="file-label">
                            <input class="file-input" type="file" name="image">
                            <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                            </span>
                        </label>
                    </div>
                </div>

                <div class="profile-inputs">
                    <!-- Display Name Input -->
                    <div class="field">
                        <label class="label has-text-white">{{ __('Display name') }}</label>
                        <div class="control">
                            <input class="input" type="text" name="display_name" value="{{ isset($user->display_name) ? $user->display_name : '' }}"
                                required autofocus>
                        </div>
                    </div>

                    <!-- Email Input -->
                    <div class="field">
                        <label class="label has-text-white">{{ __('E-Mail Address') }}</label>
                        <div class="control">
                            <input class="input" type="email" name="email" placeholder="john.doe@example.com" value="{{ $user->email }}"
                                required autofocus>
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div class="field">
                        <label class="label has-text-white">{{ __('Password') }}</label>
                        <div class="control">
                            <input class="input" type="password" name="password" required>
                        </div>
                    </div>

                    <!-- New Password Input -->
                    <div class="field is-hidden">
                        <label class="label has-text-white">{{ __('New Password') }}</label>
                        <div class="control">
                            <input class="input" type="password" name="new_password">
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-primary is-fullwidth is-large">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection