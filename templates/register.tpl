{extends file='layout.tpl'}
{block name=title}Register{/block}
{block name=body}
<h1>Register</h1>
<div id='main'>
<p>Contenu du template register.tpl</p>

<form action="/register" method="post">
<style>
  form {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 500px;
  margin: 0 auto;
}

label {
  margin: 10px 0;
}

input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
}

button {
  width: 100%;
  background-color: #00BFFF;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #1E90FF;
}

.error {
  color: red;
}
</style>

  <label for="name">Nom :</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="password">Mot de passe :</label><br>
  <input type="password" id="password" name="password"><br>
  <label for="city">Ville :</label><br>
  <input type="text" id="city" name="city"><br>
  <label for="country">Pays :</label><br>
  <input type="text" id="country" name="country"><br><br>
  <button type="submit">Sign in</button>
</form> 

</div>
{/block}