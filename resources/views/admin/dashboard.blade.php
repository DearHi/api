@extends('admin.layouts.app_admin')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-sm-3">
               <div class="jumbotron">
                   <p>
                       <span class="label label-primary"> Категории</span>
                   </p>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="jumbotron">
                   <p>
                       <span class="label label-primary"> Материалов</span>
                   </p>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="jumbotron">
                   <p>
                       <span class="label label-primary"> Посетителей</span>
                   </p>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="jumbotron">
                   <p>
                       <span class="label label-primary"> Сегодня</span>
                   </p>
               </div>
           </div>

           <div class="row">
               <div class="col-sm-6">
                   <a href="#" class="btn btn-block "> Create kat</a>
                   <a href="#" class="list-group-item">
                   <h4 class="list-group-item-heading"> Категория первая</h4>
                       <p class="list-group-item-text"> количество материалов</p>
                   </a>
               </div>
               <div class="col-sm-6">
                   <a href="#" class="btn btn-block"> Create mat</a>
                   <a href="#" class="list-group-item">
                       <h4 class="list-group-item-heading"> Материал первая</h4>
                       <p class="list-group-item-text"> Материал материалов</p>
                   </a>
               </div>
           </div>
       </div>
   </div>
@endsection
