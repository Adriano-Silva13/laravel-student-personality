<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Matérias</title>
</head>
<body>
    <h1>Gerenciar Matérias</h1>

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="/subjects" method="POST">
        @csrf
        <label for="name">Nome da Matéria:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Adicionar Matéria</button>
    </form>

    <h2>Matérias Existentes</h2>
    <ul>
        @foreach($subjects as $subject)
            <li>{{ $subject->name }}</li>
        @endforeach
    </ul>
</body>
</html>
