<template>
  <div class="”container”">
    <h1>Hallo {{ currentUser.name }} . . . welcome to your work space.</h1>
    <button @click="getdata()"> GetAll </button>
  </div>
</template><script>
export default {
  methods:{
      getdata(){

         
       this.axios.get("/api/get").then(res => { 
         console.log(res)
       });
      }
  },
  computed: {
    currentUser() {
      return this.$store.getters.currentUser;
    }
  }
};
</script>