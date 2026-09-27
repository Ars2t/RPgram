@extends('layouts.main')

@section('main')
    <main class="main">
        <h1 class="add-room-title">Создать комнату</h1>
        <form class="add-room-form" action="{{ route('roomStore') }}" method="post">
            @csrf
            <input class="add-room-form__input" type="text" name="name" placeholder="Название" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input class="add-room-form__input" type="text" name="title" placeholder="Заголовок" required>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <textarea class="add-room-form__input" name="describe" type="text" name="describe" placeholder="описание"></textarea>
            @error('describe')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input class="add-room-form__input" type="submit" value="submit">
        </form>
    </main>
@endsection