
<div class="container border border-dark vh-100" style="width: 90%;text-align:center; justify-content:space-evenly;">
      
  <div class="container ">
        <h4>Publier par: {{$infos -> autheur}} </h4>
        <h4>Le: {{$infos -> created_at}} </h4>
  </div>
  <div class="text-center mt-5" style="width: 100%; ">
        
          <h1 class="card-title mb-5"> {{$infos -> title}} </h1>
          <p class="card-text"> {{$infos -> content}} </p>
        
  </div>
      
</div>