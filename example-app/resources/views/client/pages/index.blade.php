@extends('client.master')
@section('title', getPageTitle(__('trans.welcome')))
@section('content')

    <div class="container-main">
        <div class="container">
            <section class="big-banner">
             @include('client/partials/_slides')
             @include('client/partials/_newsfeed')
             @include('client/partials/_video')
            </section>
        </div>
    </div>

@endsection
