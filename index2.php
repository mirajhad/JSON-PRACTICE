<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       
       console.log(xhttp.responseText);
       var response = JSON.parse(xhttp.responseText);
       console.log(response.employee);

       var employees = response.employee;
       var showdata = "";

       for(var i=0; i < employees.lenght; i++){
       showdata += employees[i].name + "<br>";
       
    }
    document.write(showdata);
    }
    };
    xhttp.open("GET", "index.json", true);
    xhttp.send();
    </script>
</body>
</html>