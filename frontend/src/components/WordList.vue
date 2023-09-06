<template>
  <router-link to="add">
    <button type="button" class="btn btn-success m-1">Add new word</button>
  </router-link>
  <div class="row">
    <WordCard v-for="word in words" :key="word.id" :word=word.word :translation=word.translation />
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
        this.words = response.data.words;
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