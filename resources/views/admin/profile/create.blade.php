{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'MYプロフィール'を埋め込む --}}
@section('title', 'MYプロフィール')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>MYプロフィール</h2>
                <form action="{{action("Admin\ProfileController@create")}}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors ->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    
                    
                    <!--氏名-->
                    <div class="form-froup row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="titile" value="{{old("titile")}}">
                        </div>
                    </div>
                    
                    
                    <!--性別-->
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                            <div class="radio">
                                <input type="radio" value="1" name="gender" id="man">
                                    <label for="man">男性</label>
                            </div>
                            <div class="radio">
                                <input type="radio" value="2" name="gender" id="woman">
                                    <label for="woman">女性</label>
                            </div>
                    </div>
                    
                    
                    <!--趣味-->  
                    <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{old("body")}}</textarea>
                        </div>
                    </div>
                    
                    
                    
                    
                    <!--自己紹介-->
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{old("body")}}</textarea>
                    </div>
                    
                    
                   
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection