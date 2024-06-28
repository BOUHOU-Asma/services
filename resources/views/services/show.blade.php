<!-- resources/views/services/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Show Service</title>
</head>
<body>
    <h1>Service Details</h1>
    <p>ID: {{ $service->id }}</p>
    <p>Name: {{ $service->nameser }}</p>
    <p>Description: {{ $service->description }}</p>
    <p>Price: {{ $service->prixser }}</p>
    <p>Created At: {{ $service->created_at }}</p>
    <p>Updated At: {{ $service->updated_at }}</p>
    <a href="{{ route('services.index') }}">Back to List</a>
</body>
</html>
