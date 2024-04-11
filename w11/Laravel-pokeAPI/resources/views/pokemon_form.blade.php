<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon API search</title>
</head>
<body>
    <h1>Pokemon name</h1>

    <form method="POST" action="{{ route('get-pokemon-info') }}">
        @csrf
        <label for="pokemonName">Please enter pokemon name</label><br> <br>

        <!-- requiredを入れておくことで、入力が必須と表示される -->
        <input type="text" name="pokemonName" id="pokemonName" maxlength="50" oninput="this.value = this.value.toLowerCase()" required><br><br>
        <button type="submit">Get the pokemon info!!</button>

        <!-- <script>
            document.getElementById('pokemonName').addEventListener('input', function(event) {
            this.value = this.value.toLowerCase();
            });
        </script> -->

    </form>
</body>
</html>