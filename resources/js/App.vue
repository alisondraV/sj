<template>
  <vue-scroll-snap :fullscreen="true">
  <div>
      <div class="item"><app-navigation/></div>
      <div class="item" id="main"><home-main/></div>
      <div class="item" id="about"><about-us/></div>
  </div>
  </vue-scroll-snap>
</template>

<script>
  import AppNavigation from './components/AppNavigation';
  import AboutUs from './components/AboutUs';
  import HomeMain from './components/MainPage';
  import VueScrollSnap from 'vue-scroll-snap';

  export default {
    name: 'App',
    components:{
      AppNavigation,
      AboutUs,
      HomeMain,
      VueScrollSnap
    }
  };
</script>

<style>
@import url('https://fonts.googleapis.com/css?family=Comfortaa&display=swap');

  * {
    @apply tracking-widest leading-relaxed;
    font-family: 'Comfortaa', regular, serif;
    padding: 0;
    margin: 0;
    scroll-behavior: smooth;
  }
  ::-webkit-scrollbar {
    width: 0px;
    background: transparent; /* make scrollbar transparent */
  }
</style>
