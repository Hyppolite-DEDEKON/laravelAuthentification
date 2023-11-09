<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @can("administrateur")
         <div>
        <h1>
            Section 1
        </h1>
    </div>
    @endcan
   
     @can("management")
         <div>
        <h1>
            Section 2
        </h1>
    </div>
    @endcan

     @can("users")
         <div>
        <h1>
            Section 3
        </h1>
    </div>
    @endcan
</body>
</html>