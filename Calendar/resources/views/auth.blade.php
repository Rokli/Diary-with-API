@vite(['node_modules/bootstrap/scss/bootstrap.scss','node_modules/bootstrap/js/index.esm.js'])
<form method="post" action="/register/exit">
    @CSRF
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
