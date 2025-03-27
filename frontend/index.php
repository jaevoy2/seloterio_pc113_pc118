<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>

    <div class="d-flex justify-content-center mt-5">
        <div class="form-container">
            <form action="" id="login" method="post">
                <p class="title">Login</p>
                <div class="input-group">
                    <label for="username">Email</label>
                    <input type="text" name="email" id="email" placeholder="">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="">
                </div>
                <button type="submit" class="sign btn btn-primary mt-3">Login</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


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
                    alert(data.message);
                }
            }).catch(error => {
                console.log('error: ', error);
                alert('lol');
            });

        })

    </script>
</body>
</html>