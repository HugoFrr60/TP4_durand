{extends file='layout.tpl'}
{block name=title}Profil{/block}
{block name=body} 
<div id='main'>
<h1>Mon profil</h1>
<p>Contenu du template profil</p>
<!-- Afficher les données de l'utilisateur -->
<p>Nom : <?php echo $user_data['name']; ?></p>
<p>Adresse email : <?php echo $user_data['email']; ?></p>
</div>
{/block}