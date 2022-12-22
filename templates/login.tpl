{extends file='layout.tpl'}
{block name=title}Login{/block}

{block name=body}
<div id='main'>
<h1>Login</h1>
<p>
Contenu du Template login.tpl
</p>
<form action="" method="post">
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" placeholder="test@gmail.com" required><br>
            <label for="password">Mot de passe</label><br>
            <input type="password" id="password" name="password" placeholder="motdepasse" required><br><br>

            <button type="submit" name="submit">Se connecter</button>
        </form>
</div>
{/block}