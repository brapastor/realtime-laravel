@extends('layouts.app')
@section('content')
    <h1>Chatroom
    <span class="badge pull-right">@{{usersInRoom.length}}</span>
    </h1>
    <chat-log :messages="messages"></chat-log>
    <chat-composer v-on:messagesent="addMessage"></chat-composer>
    </div>

@endsection
