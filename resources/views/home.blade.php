@extends('layout.main')
@section('title','Laravel-webpaste')

@section('main')
<div class="home__note">
<h1>使用說明</h1>
<ol>
<li> 資料最長保留 5 分鐘</li>
<li> 請到  <a href="{{ url('/' . $demo_str) }}">{{ url('/' . $demo_str) }}</a></li>
</ul>
</div>
@endsection