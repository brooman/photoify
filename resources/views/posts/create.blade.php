@extends('layouts.app')

@section('content')

<div class="card has-background-dark">
    <div class="card-body is-transparent">
        @if($errors->any())
        <div class="notification is-warning">
            <button class="delete"></button>
            <p>{{ $errors->first() }}</p>
        </div>
        @endif
        <form method="POST" action="{{ route('posts') }}" enctype="multipart/form-data">

            <!-- CSRF Token -->
            @csrf

            <!-- Image input -->
            <div class="image-upload">
                <div class="file is-boxed">
                    <label class="file-label">
                        <input class="file-input" type="file" name="resume">
                        <span class="file-cta">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                            Choose a file…
                        </span>
                        </span>
                    </label>
                </div>
            </div>


            <!-- Description Input -->
            <div class="field">
                <label class="label has-text-white">{{ __('Description') }}</label>
                <div class="control">
                    <textarea class="textarea" placeholder="e.g. Hello world" required autofocus></textarea>
                </div>
            </div>

            <!-- Submit button -->
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-primary is-fullwidth is-large">
                        {{ __('Upload') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection