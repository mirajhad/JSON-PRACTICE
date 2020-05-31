<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json</title>
</head>
<body>
    <script>
        // var jsonobject = {
        //     "firstname" : "Miraj",
        //     "lastname" : "Ansari",
        //     "age" : 24,
        //     "profession" : "webdeveloper"
        // }
        // // modify value
        // jsonobject.firstname = "Miraj Ansari";

        // //add new key value pair
        // jsonobject.middlename = "MD";

        // //DELETE KEY VALUE PAIR
        // delete jsonobject.middlename;



        // for(showalldata in jsonobject){
        //     document.write(jsonobject[showalldata]+ "<br>");
        // }

        // var jsonobject = {
        //     "array" : ["miraj", "ansari", "md"]
        // }
        // document.write(jsonobject.array);

            var jsonobject = {
                "fifa" : [
                    {
                        "countryname" : "brazil",
                        "bestPlayer" : "Neymar"

                    },
                    {
                        "countryname" : "Protugal",
                        "bestPlayer" : "Ronaldo"
                    },
                    {
                        "countryname" : "Argentina",
                        "bestPlayer" : "Messi"
                    }
                ]
            }

            // document.write(jsonobject.fifa[1].bestPlayer);

            for(x in jsonobject.fifa){
                // document.write(x);
                for(inner_x in jsonobject.fifa[x]){
                    document.write(jsonobject.fifa[x][inner_x]+"<br>");
                }
            }

    </script>
</body>
</html>