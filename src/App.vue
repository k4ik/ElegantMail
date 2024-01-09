<template>
  <div>
    <LoadingComponent v-if="showLoading" />

    <RegisterMessage v-if="showRegister" />
  </div>
</template>

<script>
  import LoadingComponent from "./components/Loading/LoadingComponent.vue";
  import RegisterMessage from "./components/RegisterMessage/RegisterMessage.vue";

  export default {
    components: {
      LoadingComponent,
      RegisterMessage,
    },
    data() {
      return {
        showLoading: true,
        showRegister: false,
      }
    },
    mounted() {
      setTimeout(() => {
        this.showLoading = false;
        this.showRegister = true;
      }, 3000);
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