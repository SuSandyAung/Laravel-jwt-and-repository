<template>
    <div>
        <adminMenu></adminMenu>
        <hr/>
        <router-view></router-view>
    </div>
</template>
<script>
import adminMenu from "../menu/adminMenu";

export default {
  data() {
    return {
     
    };
  },
  components: {
    adminMenu,
    
  },
  mounted() {}
};
</script>
