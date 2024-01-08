<template>
  <div>
    <LoadingComponent/>
  </div>
</template>

<script>
  import LoadingComponent from "./components/Loading/LoadingComponent.vue";

  export default {
    components: {
      LoadingComponent
    }
  }
</script>

<style lang="scss">
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
</style>