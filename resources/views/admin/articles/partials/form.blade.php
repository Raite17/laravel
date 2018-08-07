<label for="">Статус</label>

<select class="form-control" name="published">
    @if (isset($article->id))
        <option value="0" @if ($article->published ==0) @endif> Не опубликовано </option>
        <option value="1" @if ($article->published ==1) @endif> Опубликовано </option>
    @else
        <option value="0"> Не опубликовано </option>
        <option value="1"> Опубликовано </option>
    @endif
</select>

<label for="">Загаловок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{ $article->title or "" }}" required>

<label for="">Slug(Уникальное значение)</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{ $article-> slug or "" }}" readonly="">

<label for=""> Родительская категория </label>
<select class="form-control" name="categories[]" multiple="">
    <option value="0">-- Без родительской категории -- </option>
    @include('admin.articles.partials.categories', ['categories'=> $categories])
</select>

<label for="">Краткое описание</label>
<textarea class="form-control"  id="description_short" name="description_short" >{{$article->description_short or ""}}</textarea>

<label for="">Полное описание</label>
<textarea class="form-control"  id="description" name="description" >{{$article->description or ""}}</textarea>
<hr />

<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{ $article->meta_title or "" }}">

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{ $article->meta_description or "" }}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова,через запятую" value="{{ $article->meta_keyword or "" }}"><br><br>

<input  class="btn btn-primary" type="submit" value="Сохранить">