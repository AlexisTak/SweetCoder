<!--
    Le welcome porte bien sont nom c'est un peut comme l'index de votre site !
-->
@extends('layouts.app')

@section('content')
    <img class="displayed" src=" {{asset('image/sweeto.gif') }} " />
    <h1>Bonjour et bienvenue sur SweetCoder</h1>
    <p class="welcome">Ici vous allez pouvoir coder votre site de rêve grace à Laravel et une structure déjà définie !</p>
    <a href="https://discord.gg/zne3EeH3rJ" class="discord"> Rejoignez-nous sur Discord ! </a>
    <p class="footer">&copy Sweetoky 2020</p>