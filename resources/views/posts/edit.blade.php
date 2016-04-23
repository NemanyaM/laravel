<!DOCTYPE html>
<html>
    <head>
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h2>Edit Post:</h2>

                @include('posts.partials.form', ['buttonTitle' => 'Save', 'method' => 'PUT', 'actionUrl' => '/posts/' . $post->id])
            </div>
        </div>
    </body>
</html>
