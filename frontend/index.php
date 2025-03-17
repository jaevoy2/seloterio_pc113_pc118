<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" id="login" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <script>
        document.getElementById('login').addEventListener('submit', function(event) {
            event.preventDefault();

            localStorage.removeItem('token');
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            fetch(`http://backend-folder.test/api/login`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'Application/json',
                    'Accept' : 'Application/json',
                },
                body: JSON.stringify({email, password})
            })
            .then(response => response.json())
            .then(data => {
                if(data.token) {
                    localStorage.setItem('token', data.token);
                    window.location.href = 'dashboard.php';
                }else{
                    console.log(data);
                }
            }).catch(error => {
                console.log('error: ', error);
                alert('lol');
            });

        })

    </script>
</body>
</html>