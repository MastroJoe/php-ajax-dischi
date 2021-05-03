<main>
  <div id="root">
    <!-- con v-for ciclo ogni album dell'array -->
    <div class="card"
         v-for="album in albums">
      <div class="card-cover">
        <!-- front deell'album -->
        <div class="card-front"
             :style="`background-image: url('${album.poster}')`">
        </div>
        <!-- back con le info dell'album -->
        <div class="card-back">
          <h1>{{ album.title }}</h1>
          <h2>{{ album.author }}</h2>
          <p>{{ album.year }}</p>
          <br>
          <p class="genre">
            {{ album.genre }}
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
