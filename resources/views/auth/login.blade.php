<style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

   body {
    background: url('{{ asset('admin/login') }}/1.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed; /* Keeps the background fixed */
    margin: 0; /* Ensure no margin to prevent scrolling of body */
}

.container {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    position: relative; /* To allow content to scroll if necessary */
}
    .screen {
        background: linear-gradient(90deg, #6A9C89, #F0A04B);
        position: fixed;
        height: 600px;
        width: 460px;
        box-shadow: 0px 0px 24px #cedadf;
    }

    .screen__content {
        z-index: 1;
        position: relative;
        height: 100%;
    }

    .screen__background {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        -webkit-clip-path: inset(0 0 0 0);
        clip-path: inset(0 0 0 0);
    }

    .screen__background__shape {
        transform: rotate(45deg);
        position: absolute;
    }

    .screen__background__shape1 {
        height: 520px;
        width: 520px;
        background: #ffffff;
        top: -50px;
        right: 120px;
        border-radius: 0 72px 0 0;
    }

    .screen__background__shape2 {
        height: 220px;
        width: 220px;
        background: #E8B86D;
        top: -172px;
        right: 0;
        border-radius: 32px;
    }

    .screen__background__shape3 {
        height: 540px;
        width: 190px;
        background: linear-gradient(270deg, #C1D8C3, #CD5C08);
        top: -24px;
        right: 0;
        border-radius: 32px;
    }

    .screen__background__shape4 {
        height: 400px;
        width: 200px;
        background: #6A9C89;
        top: 420px;
        right: 50px;
        border-radius: 60px;
    }

    .login {
        width: 320px;
        padding: 30px;
        padding-top: 180px;
    }

    .login__field {
        padding: 20px 0px;
        position: relative;
    }

    .login__icon {
        position: absolute;
        top: 30px;
        color: #4a5e4a;
    }

    .login__input {
        border: none;
        border-bottom: 2px solid #D1D1D4;
        background: none;
        padding: 10px;
        padding-left: 24px;
        font-weight: 500;
        width: 100%;
        transition: .2s;
        flex: 1;
        padding-right: 40px;
    }


    .toggle-password {
        position: absolute;
        right: 10px;
        cursor: pointer;
        color: #4a5e4a;
        font-size: 18px;
        margin-top: 8px;
    }

    .toggle-password:hover {
        color: #4a5e4a;
    }

    .login__input:active,
    .login__input:focus,
    .login__input:hover {
        outline: none;
        border-bottom-color: #677a9a;
    }

    .login__submit {
        background: linear-gradient(135deg, #CD5C08, #C1D8C3);
        font-size: 16px;
        margin-top: 30px;
        padding: 16px 24px;
        border-radius: 15px;
        border: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60%;
        color: #fff;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        position: relative;
        overflow: hidden;
    }

    .login__submit:hover {
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
    }

    .login__submit:active {
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .login__submit::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
        top: 0;
        left: 0;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .login__submit:hover::after {
        opacity: 1;
    }

    .social-login {
    position: absolute;
    top: 75px; /* Adjust this if needed */
    left: 0;
    width: 100%;
    text-align: center;
    z-index: 2; /* Ensure it's above other content */
}

    .social-login__icon {
        display: inline-block;
        width: 40px;
        height: 40px;
        background-size: cover;
    }

    .social-icons {
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .social-login__icon {
        padding: 20px 10px;
        color: #fff;
        text-decoration: none;
        text-shadow: 0px 0px 8px #677a9a;
    }

    .social-login__icon:hover {
        transform: scale(1.5);
    }
    </style>
    <!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Dashboard Login</title>
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>

    </head>
    <body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="screen">
             <div class="social-login">
                    <br>
                    {{-- <h3>Welcome To</h3> --}}
                    <div class="social-icons">
                            <img src="{{ asset('storage/' . $settings->system_logo)}}" alt="logo" width="200">
                    </div>
                </div>
            <div class="screen__content">
                <form class="login" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" name="user_id" id="user_id" class="login__input" placeholder="User ID">
                        @error('user_id ') <span class="text-danger mb-2"> {{ $messages }} </span> @enderror
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" name="password" id="password" placeholder="Password">
                        <i class="toggle-password fas fa-eye" onclick="togglePassword()"></i>
                    </div>
                    <button type="submit" class="button login__submit">
                        <span class="button__text">Log In</span>
                    </button>
                </form>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script>
        function togglePassword() {
            let passwordInput = document.getElementById("password");
            let toggleIcon = document.querySelector(".toggle-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }
    </script>

    </body>
    </html>
