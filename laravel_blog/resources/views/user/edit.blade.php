@extends('layouts.app')

@section('content')
    <div class="container">

        @if(session('update_message'))
            <div>
                {{ session('update_message') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/user/{{$user->id}}" enctype="multipart/form-data">
            @csrf
            <div>
                @isset($user->icon)
                    <div>
                        <img src="{{asset('/storage/icon/' . $user->icon)}}" alt="">
                    </div>
                @endisset
            </div>
            <div>
                <input
                    type="file"
                    name="image"
{{--                    accept=".jpg,.jpeg,.png"--}}
                >
            </div>
            <div>
                {{$user->name}}
            </div>
            <div>
                <label for="nickname">ニックネーム</label>
                <input id="nickname" type="text" name="nickname" value="{{$user->nickname}}">
            </div>
            <div>
                <input type="submit" value="登録する">
            </div>
        </form>
    </div>
@endsection
