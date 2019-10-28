@extends('layout.main')
@section('title','Laravel-webpaste')

@section('main')
@if (isset($msg_key))
{{ $msg_key }}
@endif
<form method="POST">
    @csrf
    <textarea name="message" style="width: 100%; height:70vh">@if (isset($message))
{{   $message  }}@endif</textarea>
    <button>送出</button>
</form>
@endsection