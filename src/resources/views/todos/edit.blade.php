<!DOCTYPE html>
<html>
<head>
    <title>Edit Todo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Edit Todo</h1>
            <a 
                href="{{ route('todos.index') }}" 
                class="text-blue-500 hover:text-blue-600 transition duration-200"
            >
                Back to List
            </a>
        </div>
        
        <form action="{{ route('todos.update', $todo->id) }}" method="POST" class="mb-6">
            @csrf
            @method('PUT')
            <div class="flex gap-4">
                <input 
                    type="text" 
                    name="title" 
                    required
                    value="{{ $todo->title }}"
                    class="flex-1 rounded-md border border-gray-300 px-3 py-2"
                >
                <button 
                    type="submit"
                    class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md"
                >
                    更新
                </button>
            </div>
        </form>
    </div>
</body>
</html>