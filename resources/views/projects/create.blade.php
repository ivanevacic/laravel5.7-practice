<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Create a new project</h1>

    <form method="POST" action='/projects'>
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>

        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>

        <div>
            <button type="submit">Create new project</button>
        </div>
    </form>
</body>
</html>