<label for="">Пойдет ?</label>
<select class="form-control" name="approved">

    @if(isset($comment->id))
        <option value="0" @if($comment->approved == 0) selected="" @endif>
            Не пойдет
        </option>
        <option value="1" @if($comment->approved == 1) selected="" @endif>
            Пойдет
        </option>
    @else
        <option value="0">
            Не пойдет
        </option>
        <option value="1">
            Пойдет
        </option>
    @endif
</select>



<label for="">Коммент</label>
<input class="form-control" type="text" name="comment" placeholder="automatic generation"
       value="{{$comment->comment ?? ""}}" readonly="">

<label for="">Статья</label>
<input class="form-control" type="text" name="article_id" placeholder="automatic generation"
       value="{{$comment->article_id ?? ""}}" readonly="">
<input class="form-control" type="text" name="article_title" placeholder="automatic generation"
       value="{{$comment->article->title ?? ""}}" readonly="">



<hr/>

<input class="btn btn-primary" type="submit" value="Save">