@extends('admin.layouts.layout')



@section('products')

active

@endsection

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Редактировать</h2><br>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('offer.index') }}"> Назад</a>

            </div>

        </div>

    </div>

   

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  

    <form action="{{ route('offer.update',$offer[0]->id) }}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('PUT')

   

         <div class="row">



            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Фильтр:</strong>

                <select name="type" class="form-control" value="{{ $offer[0]->type }}">

                    <option>{{ $offer[0]->type }}</option>

                    <option>Машинки</option>

                    <option>Конструкторы</option>

                    <option>девчонок</option>

                    <option>уморазвития</option>

                    <option>плашадок</option>

                    <option>Спортивные</option>

                </select>

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Имя :</strong>

                <input type="text" name="name" class="form-control" value="{{ $offer[0]->name }}">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Название Уз :</strong>

                <input type="text" name="title_uz" class="form-control" value="{{ $offer[0]->title_uz }}">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Название Рус :</strong>

                <input type="text" name="title_ru" class="form-control" value="{{ $offer[0]->title_ru }}">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Название Eng:</strong>

                <input type="text" name="title_en" class="form-control" value="{{ $offer[0]->title_en }}">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Цена :</strong>

                <input type="number" name="price" class="form-control" value="{{ $offer[0]->price }}">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

         <div class="form-group">

             <strong>Артикул :</strong>

             <input type="text" name="articul" class="form-control" value="{{ $offer[0]->articul }}">

         </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

         <div class="form-group">

             <strong>EAN-13:</strong>

             <input type="number" name="qr" class="form-control" value="{{ $offer[0]->qr }}">

         </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

         <div class="form-group">

             <strong>Размер игрушки в собранном виде :</strong>

             <input type="text" name="size_toy" class="form-control" value="{{ $offer[0]->size_toy }}">

         </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Вид упаковки Уз :</strong>

                <input type="text" name="case_uz" class="form-control" value="{{ $offer[0]->case_uz }}">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Вид упаковки Рус :</strong>

                <input type="text" name="case_ru" class="form-control" value="{{ $offer[0]->case_ru }}">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Вид упаковки Eng :</strong>

                <input type="text" name="case_en" class="form-control" value="{{ $offer[0]->case_en }}">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Размер в упаковке :</strong>

                <input type="text" name="size_case" class="form-control" value="{{ $offer[0]->size_case }}">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Вид групповой упаковки Уз :</strong>

                <input type="text" name="casegroup_uz" class="form-control" value="{{ $offer[0]->casegroup_uz }}">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Вид групповой упаковки Рус :</strong>

                <input type="text" name="casegroup_ru" class="form-control" value="{{ $offer[0]->casegroup_ru }}">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Вид групповой упаковки Eng :</strong>

                <input type="text" name="casegroup_en" class="form-control" value="{{ $offer[0]->casegroup_en }}">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

         <div class="form-group">

             <strong>Примерный объем в упаковке :</strong>

             <input type="text" name="weight" class="form-control" value="{{ $offer[0]->weight }}">

         </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

         <div class="form-group">

             <strong>Количество в упаковке :</strong>

             <input type="number" name="count" class="form-control" value="{{ $offer[0]->count }}">

         </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

         <div class="form-group">
            <strong>Картинки 1 :</strong>

             <img src="{{ URL::to($offer[0]->img1)}}" alt="" width="100">

             <input type="file" name="img1" class="form-control" value="{{ $offer[0]->img1 }}">

         </div> <br>

          <div class="form-group">
            <strong>Картинки 2 :</strong>

             <img src="{{ URL::to($offer[0]->img2)}}" alt="" width="100">

             <input type="file" name="img2" class="form-control" value="{{ $offer[0]->img2 }}">

         </div>

        </div><br>

        <div class="form-group">
            <strong>Картинки 3 :</strong>

             <img src="{{ URL::to($offer[0]->img3)}}" alt="" width="100">

             <input type="file" name="img3" class="form-control" value="{{ $offer[0]->img3 }}">

         </div>

        </div><br>

        <div class="col-xs-12 mt-5 col-sm-12 col-md-12">

            <label for="mytextarea">Файл</label>

            <input type="file" name="file" class="form-control" value="{{ $offer[0]->file }}">

        </div> <br>

            

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">сохранить</button>

        </div>



    </div>

   

    </form>

@endsection