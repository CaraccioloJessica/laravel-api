<script >
import axios from 'axios';
const API_URL = 'http://localhost:8000/api/';

export default {
  data() {

    return {
      movies: [],
      genres: [],
      tags: [],
    }
  },

  methods: {

    getData() {
      axios.get(API_URL + 'v1/movie')
        .then(res => {
          const data = res.data;
          const success = data.success;
          const response = data.response;
          const movies = response.movies;
          const genres = response.genres;
          const tags = response.tags;

          if (success) {
            this.movies = movies;
            this.genres = genres;
            this.tags = tags;
          }
        })
        .catch(err => console.error(err));
    }
  },

  mounted() {
    this.getData();
  }
};
</script>

<template>
  <div>
    <h1>Lista film</h1>
    <ul>
      <li v-for="movie in movies" :key="movie.id">
        <h4>Film:</h4>
        <span>Nome:</span> {{ movie.name }} <br>
        <span>Anno:</span> {{ movie.year }} <br>
        <span>Incassi:</span> {{ movie.cashOut }} &dollar;

        <div id="tags">
          <span>Tags:</span>
          <span v-for="tag in movie.tags" :key="tag.id" class="tags"> #{{ tag.name }} </span>
        </div>
      </li>
    </ul>
  </div>
</template>

<style>
ul {
  list-style: none;
}

li {
  margin-bottom: 20px;
}

h4 {
  color: #000083;
  font-weight: bold;
  margin-bottom: 10px;
}

span {
  color: #1f8d25;
}

.tags {
  margin-right: 5px;
  color: #9bacab;
}
</style>
