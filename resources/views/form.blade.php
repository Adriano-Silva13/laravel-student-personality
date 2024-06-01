<form action="/save-study-record" method="POST">
    @csrf
    <label for="subject">Matéria:</label>
        <select name="subject" id="subject">
            @foreach($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
        </select>
    <label for="date">Data:</label>
    <input type="date" name="date" id="date" required>
    <label for="hours">Horas Estudadas:</label>
    <input type="number" name="hours" id="hours" step="0.1" required>
    <button type="submit">Salvar</button>
</form>

<form action="/set-daily-goal" method="POST">
    @csrf
    <label for="date">Data:</label>
    <input type="date" name="date" id="date" required>
    <label for="hours">Meta de Horas:</label>
    <input type="number" name="hours" id="hours" step="0.1" required>
    <button type="submit">Salvar Meta</button>
</form>

