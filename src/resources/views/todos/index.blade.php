<!DOCTYPE html>
<html>

<head>
    <title>Todo List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Todos</h1>
            <a href="{{ url('/') }}" class="text-blue-500 hover:text-blue-600 transition duration-200">
                トップに戻る
            </a>
        </div>

        <form action="{{ route('todos.store') }}" method="POST" class="mb-6">
            @csrf
            <div class="flex gap-4">
                <input type="text" name="title" required placeholder="新しいTodoを入力してください"
                    class="flex-1 rounded-md border border-gray-300 px-3 py-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                    追加
                </button>
            </div>
        </form>

        <ul class="space-y-3">
            @foreach ($todos as $todo)
                <li class="flex items-center justify-between bg-white p-4 rounded-lg shadow">
                    <span class="text-gray-800">{{ $todo->title }}</span>
                    <div class="flex gap-2 ml-4">
                        <a href="{{ route('todos.edit', $todo->id) }}"
                            class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-sm">
                            編集
                        </a>
                        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                削除
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
