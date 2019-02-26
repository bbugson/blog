@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Комменты @endslot
            @slot('parent') Главная @endslot
            @slot('active') Комменты @endslot
        @endcomponent

        <table class="table table-striped">
            <thead>
            <th>Коммент</th>
            <th>Пойдет ли коммент ?</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse($comments as $comment)
                <tr>
                    <td>{{$comment->comment}}</td>
                    <td>{{$comment->approved}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить ?')){return true}else{return false}"
                              action="{{route('admin.comment.destroy', $comment)}}" method="post">
                            {{ method_field('DELETE') }}
                            {{csrf_field()}}

                            <a class="btn btn-default" href="{{route('admin.comment.edit', $comment)}}">
                                Редактировать
                            </a>

                            <button type="submit" class="btn">Удалить</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$comments->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection