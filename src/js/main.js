Vue.config.devtools = true;

var app = new Vue(
  {
    el: '#root',
    data: {
      albums: [],
    },
    // mounted() {
    //   axios.get('https://flynn.boolean.careers/exercises/api/array/music')
    //   .then((response) => {
    //     this.albums = response.data.response;
    //   });
    // }

    // Chiamata per data degli albums PHP
    mounted() {
    axios.get('./call.php')
    .then((response) => {
      this.albums = response.data.response;
      });
    },
  }
);
