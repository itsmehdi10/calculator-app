<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    @isset($result)
    <h1>Result</h1>
    <p>The result is: {{ $result }}</p>
    @endisset
    @isset($error)
    <h1>Error</h1>
    <p>{{ $error }}</p>
    @endisset
</body>
</html>
