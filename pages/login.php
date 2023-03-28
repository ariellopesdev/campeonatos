<section id="login-sign">
    <article id="login">
        <h1>Login</h1>
        <form action="">
            <div class="box-login">
                <p>&#64;</p> 
                <input type="email" name="email" id="email-login" placeholder="Email">
            </div>
            <div class="box-login">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="password-login" id="password-login" placeholder="Senha">
            </div>
            <div id="logged-password">
                <div class="box-checkbox">
                    <input type="checkbox" name="checkbox" value="Continuar Logado" id="logged-login"  class="left">
                    <label for="continuelogged" class="left">Continuar Logado</label>
                </div>
                <a href="" class="right">Esqueceu a senha?</a>
            </div>
            <button type="submit" name="submit-login-btn" id="submit-login-btn">ENTRAR NA MINHA CONTA</button>
        </form>
    </article>
    <article id="sign">
        <h1>Cadastrar</h1>
        <form action="">
            <input type="text" name="name" placeholder="Nome*">
            <input type="text" name="surname" placeholder="Apelido*">
            <input type="email" name="email-sign" placeholder="Email*">
            <input type="checkbox" name="gender" id="gender">
            <label for="">
                Masculino
            </label>
            <input type="checkbox" name="gender" id="gender" value="Feminino">
            <label for="">
                Feminino
            </label>
            <input type="password" name="password-sign" id="password-sign" placeholder="Senha*">
            <input type="password" name="password-sign-confirm" id="password-sign-confirm" placeholder="Confirmar Senha*">
            <p>* Campo obrigatório</p>
            <input type="checkbox" name="checkbox" id="terms-agree">
            <label for="">
                Li e concordo com os <a href="">Termos de Uso</a>
            </label>
            <button type="submit" name="submit-login-btn" id="submit-login-btn">CADASTRAR</button>
        </form>
    </article>
</section>