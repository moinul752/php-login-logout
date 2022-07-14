<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style type="text/css">
        table{
            margin-top: 150px;
            border: 1px solid;
            background-color: #eee;
        }
        td{
            border: 0;
            padding: 10px;
        }
        th{
            border-bottom: 1px solid;
            background-color: #ddd;
        }

    </style>
</head>
<body>
    <form action="welcome.php" method="post">
        <table align="center">
            <tr>
                <th colspan="2"><h2 align="center">Login</h2></th>
            </tr>
            <tr>
                <th>Username:</th>
                <td><input type="text" name="uname"></td>
            </tr> 
            <tr>
                <th>Password</th>
                <td><input type="password" name="pwd"></td>
            </tr> 
            <tr>
                <th align="right" colspan="2"><input type="submit" name="login"></th>
            </tr>

        </table>
    </form>
    
</body>
</html>