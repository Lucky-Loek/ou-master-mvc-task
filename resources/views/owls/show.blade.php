@extends('common.master')

@section('content')
    <section class="hero  is-large  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">{{ $owl->name }}</p>
                <p class="subtitle is-3"></p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="content">
                        <p><strong>Points:</strong> {{ $owl->version_nr }}</p>
                        <p><strong>Color:</strong> {{ $owl->scheduled_at }}</p>
                        <p><strong>Topics:</strong> {{ $owl->topics }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
