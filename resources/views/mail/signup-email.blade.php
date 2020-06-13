Hello {{ $email_data['name'] }}
<br><br>
Welcome to my website
<br>
Please clock the below link to verify your email and verify your account
<br><br>
<a href="http://127.0.0.1:8000/verify?code={{ $email_data['verification_code'] }}">Click here!!!</a>

<br><br>
Thank you!!!
<br>
jwalit.shah