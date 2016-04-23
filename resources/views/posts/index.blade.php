<!DOCTYPE html>
<html>
    <head>
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="content">
                @include('posts.partials.allposts')

                <h2>New Post:</h2>

                @include('posts.partials.form', ['buttonTitle' => 'Create', 'method' => 'POST', 'actionUrl' => '/posts'])
            </div>
        </div>
    </body>
</html>
