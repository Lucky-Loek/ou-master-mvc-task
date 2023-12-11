@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Houses</p>
                <p class="subtitle is-3">Manage Houses</p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="content">
                        <table class="table is-fullwidth">
                            <thead>
                            <tr>
                                <th style="width: 5%">ID</th>
                                <th style="width: 60%">Name</th>
                                <th style="width: 10%">Points</th>
                                <th style="width: 25%">Color</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($houses as $house)
                                <tr>
                                    <td>{{ $house->id }}</td>
                                    <td>
                                        <a href="{{ route('houses.show', $house) }}">
                                        {{ $house->name }}
                                        </a>
                                    </td>
                                    <td><span class="tag">{{ $house->points }}</span></td>
                                    <td>{{ $house->color }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
