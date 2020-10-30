@extends('layouts.page')
@section('content')
<chat-component 
:user="{{ json_encode($user)}}">
</chat-component>
@endsection
 
