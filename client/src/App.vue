<template lang="pug">
#app
  keep-alive
    router-view

</template>

<script>

import common from "./components/partials/Common"
import login from './components/Login'

import "./assets/css/bootstrap.min.css"
import "./assets/font-awesome/4.5.0/css/font-awesome.min.css"
import "./assets/css/fonts.googleapis.com.css"
import "./assets/css/ace.min.css"
import "./assets/css/ace-rtl.min.css"

import "./assets/js/pages/login.js"
export default {
  name: 'app',
  components: {
    login, common
  }
}
</script>
<style>
.sidebar+.main-content {
  margin-left: 190px !important;
}
</style>
