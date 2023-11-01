<!DOCTYPE html>
<html>
<head>
    <title>Nouvel utilisateur créé</title>
</head>
<body>
    <p>Bonjour,</p>
    <p>Un nouvel utilisateur a été créé avec les informations suivantes :</p>
    <ul>
        <li>Nom : {{ $user->name }}</li>
        <li>Téléphone : {{ $user->telephone }}</li>
        <li>Description : {{ $user->description }}</li>
    </ul>
    <p>Merci !</p>
</body>
</html>
