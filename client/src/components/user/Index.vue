<template lang="pug">
div
  Navbar
  .main-container.ace-save-state#main-container
    Sidebar
    .main-content
      .main-content-inner
        breadcrumb
        .page-content
          #ace-settings-container.ace-settings-container
            #ace-settings-btn.btn.btn-app.btn-xs.btn-warning.ace-settings-btn
              i.ace-icon.fa.fa-cog.bigger-130
            |
            #ace-settings-box.ace-settings-box.clearfix
              .pull-left.width-50
                .ace-settings-item
                  .pull-left
                    select#skin-colorpicker.hide
                      option(data-skin="no-skin", value="#438EB9") #438EB9
                      |
                      option(data-skin="skin-1", value="#222A2D") #222A2D
                      |
                      option(data-skin="skin-2", value="#C6487E") #C6487E
                      |
                      option(data-skin="skin-3", value="#D0D0D0") #D0D0D0
                  |
                  span   Choose Skin
                |
                .ace-settings-item
                  input#ace-settings-navbar.ace.ace-checkbox-2.ace-save-state(type="checkbox", autocomplete="off")
                  |
                  label.lbl(for="ace-settings-navbar")  Fixed Navbar
                |
                .ace-settings-item
                  input#ace-settings-sidebar.ace.ace-checkbox-2.ace-save-state(type="checkbox", autocomplete="off")
                  |
                  label.lbl(for="ace-settings-sidebar")  Fixed Sidebar
                |
                .ace-settings-item
                  input#ace-settings-breadcrumbs.ace.ace-checkbox-2.ace-save-state(type="checkbox", autocomplete="off")
                  |
                  label.lbl(for="ace-settings-breadcrumbs")  Fixed Breadcrumbs
                |
                .ace-settings-item
                  input#ace-settings-rtl.ace.ace-checkbox-2(type="checkbox", autocomplete="off")
                  |
                  label.lbl(for="ace-settings-rtl")  Right To Left (rtl)
                |
                .ace-settings-item
                  input#ace-settings-add-container.ace.ace-checkbox-2.ace-save-state(type="checkbox", autocomplete="off")
                  |
                  label.lbl(for="ace-settings-add-container")
                    | Inside
                    b .container
              // /.pull-left
              .pull-left.width-50
                .ace-settings-item
                  input#ace-settings-hover.ace.ace-checkbox-2(type="checkbox", autocomplete="off")
                  |
                  label.lbl(for="ace-settings-hover")  Submenu on Hover
                |
                .ace-settings-item
                  input#ace-settings-compact.ace.ace-checkbox-2(type="checkbox", autocomplete="off")
                  |
                  label.lbl(for="ace-settings-compact")  Compact Sidebar
                |
                .ace-settings-item
                  input#ace-settings-highlight.ace.ace-checkbox-2(type="checkbox", autocomplete="off")
                  |
                  label.lbl(for="ace-settings-highlight")  Alt. Active Item
              // /.pull-left
            // /.ace-settings-box
          // /.ace-settings-container
          .page-header
            h1
              | Tables
              small
                i.ace-icon.fa.fa-angle-double-right
                | 									Static & Dynamic Tables
          .vuetable-wrapper.ui.container.segment.vuetable-pagination
            vuetable(ref="vuetable", api-url="https://vuetable.ratiw.net/api/users", :fields="['name', 'email', 'birthdate']", pagination-path="", @vuetable:pagination-data="onPaginationData")      
            vuetable-pagination-info(ref="paginationInfo")
            vuetable-pagination(ref="pagination", @vuetable-pagination:change-page="onChangePage")
 

</template>
<script>
import Navbar from "../partials/Navbar"
import Sidebar from "../partials/Sidebar"
import breadcrumb from "../partials/Breadcrumb"
import Vuetable from 'vuetable-2/src/components/Vuetable'
import VuetablePagination from 'vuetable-2/src/components/VuetablePagination'
import VuetablePaginationInfo from 'vuetable-2/src/components/VuetablePaginationInfo'

export default {
  name: 'app',
  components: {
    breadcrumb, Vuetable, VuetablePagination, VuetablePaginationInfo, Navbar,Sidebar
  },
  data () {
    return {

    }
  },
  methods: {
    onPaginationData (paginationData) {
      this.$refs.pagination.setPaginationData(paginationData)
      this.$refs.paginationInfo.setPaginationData(paginationData)   // <----

    },
    onChangePage (page) {
      this.$refs.vuetable.changePage(page)
    },
    getUsers () {
      this.$http.get("http://datatable.app/eloquent/basic-columns-data").then(function(res){
        console.log(res.body.data);
        this.users = res.body.data;
      })
    },
    viewProfile: function(id) {
        console.log('view profile with id:', id)
    },
    events: {
          'vuetable:action': function(action, data) {
              console.log('vuetable:action', action, data)
              if (action == 'view-item') {
                  this.viewProfile(data.id)
              }
          },
          'vuetable:load-error': function(response) {
              console.log('Load Error: ', response)
          }
      }
  }
}
</script>
