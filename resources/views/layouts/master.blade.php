<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title','Inventory Database')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lato:900italic' rel='stylesheet' type='text/css'>
    <link href='/css/style.css' type='text/css' rel='Stylesheet'>
</head>
<body>
    <header>
        <h1>Inventory Database</h1>
    </header>

    <nav>
        <ul class='nav nav-pills'>
            <li role='presentation'><a href=''>Home</a></li>
            <li role='presentation'><a href=''>Add a Tech Item</a></li>
            <li role='presentation'><a href=''>Add a Furniture Item</a></li>
            <li role='presentation'><a href=''>Search for an Item</a></li>
        </ul>
    </nav>

    @yield('content')

    <footer class='footer navbar-fixed-bottom'>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>
