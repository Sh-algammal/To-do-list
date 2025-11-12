@extends('layouts.app')

@section('content')
<body>
    <div class="todo-container">
        <div class="todo-header">
            <h1>تعديل المهمة</h1>
        </div>

        <form action="{{ route('todos.update', $todo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ old('title', $todo->title) }}" required>
            @error('title')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <button type="submit">تحديث المهمة</button>
        </form>

        <a href="{{ route('todos.index') }}" class="back-link">العودة إلى القائمة</a>
    </div>
</body>
</html>