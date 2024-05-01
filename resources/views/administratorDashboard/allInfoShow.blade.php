@extends('layouts.layout')

<style>
  .image-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh; /* Ajustez la hauteur selon vos besoins */
    background-color: #f8f9fa; /* Couleur de fond */
    border-radius: 20px; /* Bord arrondi */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Ombre */
    overflow: hidden; /* Masquer le contenu qui dépasse */
    position: relative; /* Position relative pour le positionnement absolu de l'icône */
  }

  .image-container img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain; /* Ajuster la taille de l'image tout en conservant les proportions */
  }

  .back-button {
    position: absolute;
    top: 23px; /* Ajustez la position verticale */
    right: 40px; /* Ajustez la position horizontale */
    cursor: pointer;
    color: rgb(240, 9, 9); /* Couleur de l'icône */
    font-size: 40px; /* Taille de l'icône */
  }
</style>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="border-0 shadow-lg card">
        <div class="card-body">
          <h1 class="text-center card-title">{{$infos->title}}</h1>
          <a href="{{route('allInfos')}}" class="back-button">
            <i class="fas fa-arrow-left"></i>&times;
          </a>
          <p class="card-text">{{$infos->content}}</p>
          <div class="image-container">
            <img src="/assets/{{$infos->file}}" alt="Image" class="img-fluid">
          </div>
          <div class="mt-4 text-center text-muted">
            Published by: {{$infos->author}} | On: {{$infos->created_at}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
