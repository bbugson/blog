@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Comment appending @endslot
            @slot('parent') Home @endslot
            @slot('active') Comments @endslot
        @endcomponent
        <hr/>

        <form class="form-horizontal" action="{{route('admin.comment.update', $comment)}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            {{-- Form include--}}
            @include('admin.comments.partials.form')

        </form>
    </div>

@endsection