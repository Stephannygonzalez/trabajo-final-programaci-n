<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum Vítae</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1, h2, h3 { color: #333; }
        .section { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>{{ $name }}</h1>
    <p>Email: {{ $email }}</p>
    <p>Teléfono: {{ $phone }}</p>
    <h2>Perfil</h2>
    <p>{{ $profile }}</p>

    <h2>Experiencia Laboral</h2>
    <ul>
        @foreach ($experience as $job)
            <li><strong>{{ $job['title'] }}</strong> en {{ $job['company'] }} ({{ $job['years'] }})</li>
        @endforeach
    </ul>

    <h2>Educación</h2>
    <ul>
        @foreach ($education as $edu)
            <li>{{ $edu['degree'] }} en {{ $edu['institution'] }} ({{ $edu['year'] }})</li>
        @endforeach
    </ul>

    <h2>Habilidades</h2>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
</body>
</html>
