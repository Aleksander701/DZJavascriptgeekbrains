<div class="login-page">
    <div class="login-form">
        <form method="post" action="<?=$_SERVER["REQUEST_URI"]?>/send">
            <input 
                class="login-form--input"
                type="text" 
                name="username"
                placeholder='login' 
            />
            <input 
                class="login-form--input"
                type="text"
                name="password"
                placeholder='password' 
                />
            <input  
                class="login-form--input"                       
                type="text"
                placeholder='confirm password' />
            <button 
                class="login-form--button"
                type="submit">SignUp</button>
        </form>
        <p>
            Already have a accout? I proud of you :)
            <a href='auth/login'>SignIn</a>
        </p>
    </div>
</div>