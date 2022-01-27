@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/stamp.css') }}">
@endsection

@section('title')

@endsection


@section('nav')
    <nav>
        <ul class="header-ul">
            <li class="header-list bold"><a href="{{ route('stamp.index') }}">ホーム</a></li>
            <li class="header-list bold"><a href="{{ route('attendance.index') }}">日付一覧</a></li>
            <li class="header-list bold"><a href="{{ route('auth.show') }}">ログアウト</a></li>
        </ul>
    </nav>
@endsection


@section('content')
    <h2 class="sec-title center">{福場凜太郎さん}お疲れ様です！</h2>
    <div class="contents">
        <form action="">
        @csrf
            <button class="content bold">勤務開始</button>
        </form>
        <form action="">
        @csrf
            <button class="content bold">勤務終了</button>
        </form>
        <form action="">
        @csrf
            <button class="content bold">休憩開始</button>
        </form>
        <form action="">
        @csrf
            <button class="content bold">休憩終了</button>
        </form>
    </div>
@endsection
