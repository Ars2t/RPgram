@extends('layouts.main')

@section('main')
    <main class="main">
        <div class="message">
            <ul class="message__list">
                @if (!$content == null)
                    @foreach ($content as $e)
                        <li class="message__item">
                            <div class="message__username">{{ $e['username'] }}</div>
                            <div class="message__content">{{ $e['content'] }}</div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        <form class="add-message-form" action="{{ route('messageStore', ["id" => $message->id]) }}" method="post">
            @csrf
            <input class="add-message-form__input" type="text" name="username" placeholder="имя пользователя" required>
            <textarea class="add-message-form__input" type="text" name="content" placeholder="сообшения"
                required></textarea>
            <input class="add-message-form__input" type="submit" value="отправить">
        </form>
    </main>
@endsection