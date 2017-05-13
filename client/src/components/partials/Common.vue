<template lang="pug">
div
  navbar
  .main-container.ace-save-state#main-container
    sidebar
    .main-content
      .main-content-inner
</template>
<script type="text/ecmascript-6">
  import navbar from "./Navbar"
  import sidebar from "./Sidebar"
  import breadcrumb from "./Breadcrumb"

  export default {
    data () {
      return {

      }
    },
    components: {
      navbar, sidebar, breadcrumb
    },
    methods: {

    }
  }
</script>
