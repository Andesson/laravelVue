<template>
    <div>
    <sidebar/>

    <container/>
    <Footer/>    
    </div>
</template>


<script>

  import sidebar from './layout/sidebarComponent.vue';
  import container from './layout/containerComponent.vue';
  import Footer from './layout/footerComponent.vue';
  import bar from './layout/Bar.vue';

  export default {
    components: {
        sidebar,
        Footer,
        container,
        bar
    },
    props: {
      source: String,
    },
    data: () => ({
      drawer: null,
    }),
    created () {
      this.$vuetify.theme.dark = true
    },
  }
</script>