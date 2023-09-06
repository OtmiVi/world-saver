<template>
  <div class="col-3 mb-1">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{ word }}</h5>
        <p class="card-text text-muted">{{ translation }}</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  </div>
</template>

<script>
export default  {
  name: 'WordCard',
  props:{
    word: String,
    translation: String
  }
}
</script>

<style scoped>

</style>