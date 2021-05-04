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

    // chiamata database PHP
    mounted() {
      axios.get('http://localhost/php/php-ajax-dischi/api/music.php')
      .then((response) => {
        this.albums = response.data.response;
      });
    }
  }
);
