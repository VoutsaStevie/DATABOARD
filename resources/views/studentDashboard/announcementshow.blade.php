@extends('layouts.layout')

<style>
  .image-container {
    position: relative; /* Position relative pour permettre le positionnement absolu de la barre d'outils */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh; /* Ajustez la hauteur selon vos besoins */
    background-color: #f8f9fa; /* Couleur de fond */
    border-radius: 20px; /* Bord arrondi */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Ombre */
    overflow: hidden; /* Masquer le contenu qui dépasse */
  }

  .image-container img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain; /* Ajuster la taille de l'image tout en conservant les proportions */
  }

  .toolbar {
    position: absolute;
    top: 10px; /* Ajustez la position verticale */
    width: 100%; /* Largeur de la barre d'outils */
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px; /* Espace intérieur pour les éléments de la barre d'outils */
    box-sizing: border-box; /* Inclure le padding dans la largeur */
    z-index: 1; /* Assurez-vous que la barre d'outils est au-dessus de l'image */
  }

  .back-button,
  .download-button {
    cursor: pointer;
    font-size: 24px; /* Taille de l'icône */
  }

  .back-button {
    color: rgb(240, 9, 9); /* Couleur de l'icône */
  }

  .download-button {
    color: rgb(9, 90, 240); /* Couleur de l'icône */
  }
</style>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="border-0 shadow-lg card">
        <div class="card-body">
          <h1 class="text-center card-title">{{$infos->title}}</h1>
          <div class="toolbar">
            <a href="{{route('studentDashboard.announcements')}}" class="back-button">
              <i class=""></i>&times; Back
            </a>
            <a href="/download/photo/{{$infos->id}}" class="download-button" download>
              <i class="fas fa-download"></i> Download
            </a>
          </div>
          <p class="card-text">{{$infos->content}}</p>
          <div class="image-container">
            <a href="/assets/{{$infos->file}}">
              <img src="/assets/{{$infos->file}}" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mt-4 text-center text-muted">
            Published by: {{$infos->author}} | On: {{$infos->created_at}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
