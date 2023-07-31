<template>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <router-link to="/"><span class="navbar-brand mb-0 h1">{{ title }}</span></router-link>
    </div>
  </nav>
  <router-link to="add">
    <button type="button" class="btn btn-primary">Primary</button>
  </router-link>
</template>

<script>
  export default  {
    name: 'NavBar',
    props: {
      title: String
    }
  }
</script>

<style scoped>

</style>