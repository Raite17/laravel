@extends ('admin.layouts.add_admin')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-sm-3">
               <div class="jumbotron">
                   <p><span class="label label-primary">Категорий 0</span></p>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="jumbotron">
                   <p><span class="label label-primary">Материалы 0</span></p>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="jumbotron">
                   <p><span class="label label-primary">Посетители 0</span></p>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="jumbotron">
                   <p><span class="label label-primary">Сегодня 0</span></p>
               </div>
           </div>
       </div>

       <div class="row">
           <div class="col-sm-6">
               <a class="btn btn-block btn-default" href="{{ route('admin.category.store') }}">Создать категорию</a>
               <a class="list-group-item" href="">
                   <h4 class="list-group-item-heading">Категория первая</h4>
                   <p class="list-group-item-text">
                       Кол-во материалов
                   </p>
               </a>
           </div>
           <div class="col-sm-6">
               <a class="btn btn-block btn-default" href="{{ route('admin.article.store') }}">Создать материал</a>
               <a class="list-group-item" href="">
                   <h4 class="list-group-item-heading">Материал первый</h4>
                   <p class="list-group-item-text">
                       Категория
                   </p>
               </a>
           </div>
       </div>

   </div>
@endsection