
<template>
  <h1>add word</h1>
  <router-link to="/">
    <button type="button" class="btn btn-secondary m-1">Back</button>
  </router-link>
  <WordForm />
</template>

<script>
import WordForm from "@/components/WordList/WordForm.vue";

export default  {
  name: 'AddWord',
  components: {WordForm},
}
</script>

<style scoped>

</style>