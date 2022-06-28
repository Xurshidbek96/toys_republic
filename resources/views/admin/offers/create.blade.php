@extends('admin.layouts.layout')



@section('products')

active

@endsection



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">



        <div class="pull-left">

            <h2>Добавить новую игрушку</h2><br>

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





<form  action="{{ route('offer.store') }}" method="post" enctype="multipart/form-data">

    @csrf



    <div class="row">



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Фильтр:</strong>

                <select name="type" class="form-control">

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

                <input type="text" name="name" class="form-control">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Название Уз:</strong>

                <input type="text" name="title_uz" class="form-control">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Название Рус :</strong>

                <input type="text" name="title_ru" class="form-control">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Название Eng:</strong>

                <input type="text" name="title_en" class="form-control">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Цена :</strong>

                <input type="number" name="price" class="form-control">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Артикул :</strong>

                <input type="text" name="articul" class="form-control">

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>EAN-13 :</strong>

                <input type="number" name="qr" class="form-control">

            </div>

        </div>



      



        <div class="col-xs-12 col-sm-12 col-md-12">

         <div class="form-group">

             <strong>Размер игрушки в собранном виде :</strong>

             <input type="text" name="size_toy" class="form-control">

         </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Вид упаковки Уз :</strong>

                <input type="text" name="case_uz" class="form-control">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Вид упаковки Рус :</strong>

                <input type="text" name="case_ru" class="form-control">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Вид упаковки Eng :</strong>

                <input type="text" name="case_en" class="form-control">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Размер в упаковке :</strong>

                <input type="text" name="size_case" class="form-control">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Вид групповой упаковки Уз :</strong>

                <input type="text" name="casegroup_uz" class="form-control">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Вид групповой упаковки Рус :</strong>

                <input type="text" name="casegroup_ru" class="form-control">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Вид групповой упаковки Eng :</strong>

                <input type="text" name="casegroup_en" class="form-control">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

         <div class="form-group">

             <strong>Примерный объем в упаковке :</strong>

             <input type="text" name="weight" class="form-control">

         </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

         <div class="form-group">

             <strong>Количество в упаковке :</strong>

             <input type="number" name="count" class="form-control">

         </div>

        </div>



        <div class="col-xs-12 mt-5 col-sm-12 col-md-12">

            <label for="mytextarea">Картинки 1</label>

            <input type="file" name="img1" class="form-control"> <br/>

        </div>

        <div class="col-xs-12 mt-5 col-sm-12 col-md-12">

            <label for="mytextarea">Картинки 2</label>

            <input type="file" name="img2" class="form-control"> <br/>

        </div>

        <div class="col-xs-12 mt-5 col-sm-12 col-md-12">

            <label for="mytextarea">Картинки 3</label>

            <input type="file" name="img3" class="form-control"> <br/>

        </div><br>



        <div class="col-xs-12 mt-5 col-sm-12 col-md-12">

            <label for="mytextarea">Файл</label>

            <input type="file" name="file" class="form-control" id="images" multiple="multiple"> <br/>

        </div> <br>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">сохранить</button>

        </div>



    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>



</form>

@endsection

