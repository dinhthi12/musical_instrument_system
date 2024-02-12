@extends('client.master')
@section('title', getPageTitle(__('trans.welcome')))
@section('content')

    <div class="container-main">
        <div class="container">
            <section class="big-banner">
             @include('client/pages/partials/_slides')
             @include('client/pages/partials/_newsfeed')
             @include('client/pages/partials/_video')
            </section>
        </div>
    </div>

@endsection
