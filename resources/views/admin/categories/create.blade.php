@extends('admin.layouts.add_admin')


@section('content')
    <div class="container">

        @component('admin.components.breadcrumb')
            @slot ('title') Создание категории @endslot
            @slot ('parent') Главная   @endslot
            @slot ('active') Категории @endslot
        @endcomponent
        <hr>

        {{--Форма для записи в БД --}}
            <form  class="form-horizontal" action="{{ route('admin.category.store') }}" method="post">
             {{ csrf_field() }}

        {{--Form Include--}}
            @include('admin.categories.partials.form')
        </form>

    </div>
@endsection