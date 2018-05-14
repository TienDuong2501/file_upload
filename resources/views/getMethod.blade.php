@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <form action="{{ url('getMethod') }}" method="" accept-charset="utf-8">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label>tuoi</label>
                        <input type="text" name="tuoi" value="">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
