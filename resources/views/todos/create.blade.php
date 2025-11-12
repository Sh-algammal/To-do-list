@extends('layouts.app')

@section('content')
    <div class="todo-container">
        <div class="todo-header">
            <h1>مهمة جديدة</h1>
        </div>

        <form action="{{ route('todos.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="اكتب عنوان المهمة هنا..." value="{{ old('title') }}" required autofocus>
            @error('title')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <button type="submit">حفظ المهمة</button>
        </form>

        <a href="{{ route('todos.index') }}" class="back-link">العودة إلى القائمة</a>
    </div>