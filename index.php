<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./public/assets/css/main.css">
        <title>Facebook - PHP - Clone</title>
    </head>
    <body>
        <div class="bar-top">
            <div class="bar-top__left">
                <div class="logo">
                    <img src="logo--small" alt="logo">
                </div>
                <div class="search search--bar">
                    <form class="form form__search" action="" method="get">
                        <div class="form__control form_control--inline">
                            <input type="search" name="search">
                        </div>
                        <div class="form__control form_control--inline">
                            <input type="submit" value="search" name="search">
                        </div>
                    </form>
                </div>
            </div>
            <div class="bar-top__right">
                <div class="login">
                    <form class="form form__login" action="" method="post">
                        <div class="form__control form_control--inline" id="login-email">
                            <label class="form__label form_label--top" for="email">
                                <p>Email</p>
                            </label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="form__control form_control--inline" id="login-password">
                            <label class="form__label form_label--top" for="password">
                                <p>Password</p>
                            </label>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="form__control form_control--inline" id="login-link">
                            <a href="#" class="form form_link">Forgot account?</a>
                        </div>
                        <div class="form__control form_control--inline" id="login-submit">
                            <input type="submit" name="login" value="login">
                        </div>
                    </form>
                </div>
            </div> 
        </div>
        <div class="content">
            <div class="wrapper">
                <div class="content--left content--inline">
                    <h1 class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <ul class="list">
                        <li class="list__item"><a href="#" class="list__link"><img src="#" alt="icon"></a></li>
                        <li class="list__item"><a href="#" class="list__link"><img src="#" alt="icon"></a></li>
                        <li class="list__item"><a href="#" class="list__link"><img src="#" alt="icon"></a></li>
                    </ul>
                </div>
                <div class="content--right content--inline">
                    <form class="form form__register" action="" method="post">
                        <h2 class="title">Sign UP</h1>
                        <h4 class="title">It's free and aways will be.</h3>
                        <div class="form__control">
                            <input type="text" name="first_name" placeholder="First name">
                            <input type="text" name="last_name" placeholder="Last name">
                        </div>
                        <div class="form__control">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form__control">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form__control">
                            <input type="date" name="birthday">
                        </div>
                        <div class="form__control">
                            <input type="radio" id="gender" name="gender" value="female">
                            <div class="ïnput-title">Female</div>
                            <input type="radio" id="gender" name="gender" value="male">
                            <div class="ïnput-title">Male</div>
                        </div>
                        <div class="form__control">
                            <input type="submit" name="register" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="wrapper">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae aperiam provident voluptates quidem maxime ad inventore ducimus modi libero consequuntur error, quae tempore incidunt necessitatibus eos, aspernatur reiciendis esse dolor.</p>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum blanditiis repellendus voluptatibus, laboriosam laborum dolores, adipisci soluta eos inventore mollitia. Deserunt ab enim consequatur magni aspernatur officia quod alias.</p>
                <p class="copyright">Facebook - php clone &copy; 2019</p>
            </div>
        </div>
    </body>
</html>