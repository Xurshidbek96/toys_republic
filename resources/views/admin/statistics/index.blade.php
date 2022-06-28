@extends('admin.layouts.layout')

@section('statistics')
active
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Statistic</h2><br>
        </div>
    </div>
</div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <?
        $st = DB::table('statistics')->count();

        if($st > 0)
        {?>
            <form action="{{ route('statistics.update',$statistic[0]->id) }}" method="POST">
            @csrf
            @method('PUT')<?
            $v1 = $statistic[0]->info1;
            $v2 = $statistic[0]->info2;
            $v3 = $statistic[0]->info3;
            $v4 = $statistic[0]->info4;
        }

        else {?>
            <form action="{{ route('statistics.store')}}" method="POST">
            @csrf
                <?
            $v1 = '';
            $v2 = '';
            $v3 = '';
            $v4 = '';
        }
    ?>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Info 1 : </strong>
                <input type="number" name="info1" value="{{ $v1 }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Info 2 : </strong>
                <input type="text" name="info2" value="{{ $v2 }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Info 3 : </strong>
                <input type="number" name="info3" value="{{ $v3 }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Info 4 : </strong>
                <input type="number" name="info4" value="{{ $v4 }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>

</form>
@endsection