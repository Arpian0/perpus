import Vue from "vue";

new Vue({
  el: "#app",
  data: {
    activeMenuItem: "",
  },
  methods: {
    setActiveMenuItem(item) {
      this.activeMenuItem = item;
    },
  },
});
