@component('mail::message')
<img src="{{ asset('storage/images/padeliber.png') }}" alt="Padeliber Logo" width="150">

Hi, {{$firstname}}!

Here are your credentials for the Padeliber company system. Click the login button to redirect to the padeliber system and login using these credentials.

Email: {{$email}}

Password: {{$password}}

<div style="display: flex; justify-content: center;">
    <a href="{{ url('/frontend-folder.test') }}"
       style="padding: 10px 20px; background-color: #ffbf00; color: #000000; text-decoration: none; border-radius: 5px;">
       Login Now!
    </a>
</div>


Thanks, <br>
<h3>Padeliber</h3>

@endcomponent
