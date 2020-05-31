<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<script, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
    var sendata = {
        name: "miraj",
        lastname : "Ansari"
    };
    var changedata = JSON.stringify(sendata);
    var jsobject = JSON.parse(changedata);

    document.write(jsobject.lastname);
    </script>
</body>
</html>