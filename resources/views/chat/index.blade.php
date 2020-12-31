@extends('layouts.app')
@section('content')
<chat-component 
:user="{{ json_encode($user)}}">
</chat-component>
@endsection
 
