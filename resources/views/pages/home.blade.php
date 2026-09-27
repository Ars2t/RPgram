@extends('layouts.main')

@section('main')
    <main class="main">
        <h1 class="room-list-title">Комнаты</h1>
        <div class="room">
            <ul class="room__list">
                @foreach ($rooms as $room)
                <li class="room__item">
                    <div class="room__wrapper">
                        <div class="room__name">Название: {{ $room->name }}</div>
                        <div class="room__title">Заголовок: {{ $room->title }}</div>
                        <div class="room__describe">Описание: {{ $room->describe }}</div>
                        <a href="{{ route('show', ['id' => $room->id]) }}" class="link room__link">открыть</a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection