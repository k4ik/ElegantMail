<template>
  <div>
    <!-- <LoadingComponent/> -->
    <!--<ConfirmationComponent/>-->
  </div>
</template>

<script>
  import LoadingComponent from "./components/Loading/LoadingComponent.vue";
  import ConfirmationComponent from "./components/Confirmation/ConfirmationComponent.vue";

  export default {
    components: {
      LoadingComponent,
      ConfirmationComponent
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