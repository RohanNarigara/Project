<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: white;
            justify-content: center;
        }
        
        ul{
            display: flex;
            gap: 2.5rem;
        }

        li{
            display: block;
            transition: .5s;
            cursor: pointer;
        }

        ul:hover li{
            filter: blur(5px);
        }

        ul li:hover{
            filter: blur(0px);
        }
    </style>
</head>
<body>
    <ul>
        <li>ABCD</li>
        <li>EFGH</li>
        <li>IJKL</li>
    </ul>
    <section class="home"></section>
</body>

</html>