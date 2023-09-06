<template>
  <router-link to="add">
    <button type="button" class="btn btn-success m-1">Add new word</button>
  </router-link>
  <div class="row">
    <WordCard word="Test" translation="Some quick example text to build on the card title and make up the bulk of the card's content."/>
    <WordCard word="Test" translation="Some quick example text to build on the card title and make up the bulk of the card's content."/>
    <WordCard word="Test" translation="Some quick example text to build on the card title and make up the bulk of the card's content."/>
    <WordCard word="Test" translation="Some quick example text to build on the card title and make up the bulk of the card's content."/>
    <WordCard word="Test" translation="Some quick example text to build on the card title and make up the bulk of the card's content."/>
    <WordCard word="Test" translation="Some quick example text to build on the card title and make up the bulk of the card's content."/>
    <WordCard word="Test" translation="Some quick example text to build on the card title and make up the bulk of the card's content."/>
    <WordCard word="Test" translation="Some quick example text to build on the card title and make up the bulk of the card's content."/>
    <WordCard word="Test" translation="Some quick example text to build on the card title and make up the bulk of the card's content."/>

  </div>


</template>

<script>
import WordCard from "@/components/WordList/WordCard.vue";
import axios from "axios";

export default  {
  name: 'WordList',
  data() {
    return {
      words: Array,
    }
  },
  created() {
    this.getWords();
  },
  methods: {
    async getWords() {
      let url = "http://127.0.0.1:8000/api/words";
      await axios.get(url).then(response => {
        this.words = response.data;
        console.log(this.words);
      }).catch(error => {
        console.log(error);
      });
    }
  },
  mounted() {
    console.log('mounted');
  },
  components: {
    WordCard
  },
}
</script>

<style scoped>

</style>