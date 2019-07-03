<!DOCTYPE html>

    <head>

        <title>Document</title>

    </head>

    <body>

        <h1>Survey Page</h1>

        <form method="POST" action="/survey">

            {{ csrf_field() }}

            <div>
                <input type="text" name="name" placeholder="Project Title">
            </div>

            <div>
                <button type="submit">Create</button>
            </div>
        </form>
        
    </body>

</html>