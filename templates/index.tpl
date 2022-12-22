{extends file='layout.tpl'}
{block name=title}Accueil{/block}
{block name=body}
<div id='main'>
<h1>Home</h1>
Contenu du site, défini dans le template index.tpl
    {if isset($username)}
        <p>Bienvenue, {$username}</p>
        <a href="/profil">Profil</a>
        <a href="/logout">Déconnexion</a>
    {else}
        <a href="/login">Connexion</a>
        <a href="/register">Inscription</a>
    {/if}
</div>
{/block}