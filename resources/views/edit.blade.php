@extends('layout.main')
@section('title','Laravel-webpaste')

@section('main')
@if (isset($success))
    {!! QrCode::size(250)->generate(url()->current()); !!}
@else
<form method="POST">
    @csrf
    <textarea name="message" style="width: 100%; height:70vh">@if (isset($message))
{{   $message  }}@endif</textarea>
    <button>送出</button>
</form>
@endif
@endsection