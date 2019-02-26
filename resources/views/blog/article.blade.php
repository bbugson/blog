@extends('layouts.app')

@section('title', $article->meta_title)
@section('meta_keyword', $article->meta_keyword)
@section('meta_description', $article->meta_description)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>{{$article->title}}</h1>
				<p>{!!$article->description!!}</p>
			</div>
		</div>
	</div>
	<div class="blog">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-lg-8 " >
                <div class="card">
                    <div class="card-block">

                        <h4 class="card-title">Добавить комментарий</h4>

                        <form method="post" action="{{route('newComment', $article->slug)}}">
                            {{ csrf_field() }}

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="comment" rows="5" style="overflow:hidden" placeholder="Ваш комментарий"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-default">
                                    <span>Отправить</span>
                                </button>
                            </div>

                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="mx-auto col-lg-8 " >
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Комменты</h4>
                       		@foreach($comments as $comment)
                       		<div class="media-body">
                       		{{ $comment->comment }}
                       		</div>
                       		 @endforeach

                            
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection