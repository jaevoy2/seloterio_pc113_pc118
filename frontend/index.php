<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>

    <div class="form-container">
        <p class="title" style="padding-bottom: 30px">
            <img src="http://backend-folder.test/images/padeliber.png" style="height:40px" alt="">
            <span class="" style="font-size: 30px">Login</span>
        </p>
        <form action="" method="post" class="form" id="login">
            <small class="d-flex justify-content-center text-danger mb-2" style="font-size: 12px" id="login_error"></small>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="">
            </div>
            <button class="login fw-semibold" style="font-size: 12px" type="submit">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        const token = localStorage.getItem('token');
        if(token) {
            window.location.href = 'dashboard.php';
        }else {
            if (window.history && window.history.pushState) {
                window.history.pushState(null, null, location.href);
                window.onpopstate = function () {
                    window.history.pushState(null, null, location.href); // Prevent back
                };
            }
        }
    </script>

    <script>
        document.getElementById('login').addEventListener('submit', function(event) {
            event.preventDefault();

            localStorage.removeItem('token');
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            fetch(`https://backend-folder.test/api/login`, {
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
                    document.getElementById('login_error').textContent = data.error;
                }
            }).catch(error => {
                document.getElementById('login_error').textContent = data.error;
            });

        })

    </script>
</body>
</html>