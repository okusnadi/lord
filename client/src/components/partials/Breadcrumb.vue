<template lang="pug">
#breadcrumbs.breadcrumbs.ace-save-state
  ul.breadcrumb
    li
      i.ace-icon.fa.fa-home.home-icon
      a(href="#") Home
    li
      a(href="#") Tables
    li.active Simple & Dynamic
  #nav-search.nav-search
    form.form-search
      span.input-icon
        input#nav-search-input.nav-search-input(type="text", placeholder="Search ...", autocomplete="off")
        i.ace-icon.fa.fa-search.nav-search-icon
</template>
