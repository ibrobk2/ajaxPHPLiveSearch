<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Search Using Ajax</title>
    <style>
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            font-family: sans-serif;
        }
        .output{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            font-family: sans-serif;
        }

        input, button{
            padding: 10px;
            /* border: none; */
            outline: none;
            border-radius: 7px;
        }

        button{
            border: none;
            padding: 12px;
            background-color: dodgerblue;
            color: white;
            font-weight: bold;
        }

        button:hover{
            cursor: pointer;
            background-color: blue;
        }

        .output img{
            height: 50px;
            width: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Live Search Engine</h2>
        <div class="search">
            <form action="" method="post" id="">
                <input type="text" placeholder="Enter Search Keyword..." name="search">
                <button name="btn-search" type="submit">Search</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="output">
            <img src="https://th.bing.com/th?id=OIP.wRtvON_8JKRQghdROw5QvQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" alt="">
            <p>How to Code</p>
        </div>
    </div>
</body>
</html>