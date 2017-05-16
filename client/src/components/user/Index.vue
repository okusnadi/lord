<template lang="pug">
div
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
    // /.page-header
    .row
      .col-xs-12
        .row
          .col-xs-12
            .table-header
              | Results for "Latest Registered Domains"
            div
                vuetable(api-url="/users",table-wrapper="#dynamic-table.table.table-striped.table-bordered.table-hovert", :fields="columns", :item-actions="itemActions")

        |
        #modal-table.modal.fade(tabindex="-1")
          .modal-dialog
            .modal-content
              .modal-header.no-padding
                .table-header
                  button.close(type="button", data-dismiss="modal", aria-hidden="true")
                    span.white ×
                  | 													Results for "Latest Registered Domains
              |
              .modal-body.no-padding
                table.table.table-striped.table-bordered.table-hover.no-margin-bottom.no-border-top
                  thead
                    tr
                      th Domain
                      |
                      th Price
                      |
                      th Clicks
                      |
                      th
                        i.ace-icon.fa.fa-clock-o.bigger-110
                        | 																Update
                  |
                  tbody
                    tr
                      td
                        a(href="#") ace.com
                      |
                      td $45
                      |
                      td 3,330
                      |
                      td Feb 12
                    |
                    tr
                      td
                        a(href="#") base.com
                      |
                      td $35
                      |
                      td 2,595
                      |
                      td Feb 18
                    |
                    tr
                      td
                        a(href="#") max.com
                      |
                      td $60
                      |
                      td 4,400
                      |
                      td Mar 11
                    |
                    tr
                      td
                        a(href="#") best.com
                      |
                      td $75
                      |
                      td 6,500
                      |
                      td Apr 03
                    |
                    tr
                      td
                        a(href="#") pro.com
                      |
                      td $55
                      |
                      td 4,250
                      |
                      td Jan 21
              |
              .modal-footer.no-margin-top
                button.btn.btn-sm.btn-danger.pull-left(data-dismiss="modal")
                  i.ace-icon.fa.fa-times
                  | 													Close
                |
                ul.pagination.pull-right.no-margin
                  li.prev.disabled
                    a(href="#")
                      i.ace-icon.fa.fa-angle-double-left
                  |
                  li.active
                    a(href="#") 1
                  |
                  li
                    a(href="#") 2
                  |
                  li
                    a(href="#") 3
                  |
                  li.next
                    a(href="#")
                      i.ace-icon.fa.fa-angle-double-right
            // /.modal-content
          // /.modal-dialog
        // PAGE CONTENT ENDS
      // /.col
    // /.row
  | <

</template>
<script>
import breadcrumb from "../partials/Breadcrumb"
import Vuetable from '../../../node_modules/vuetable-2/src/components/Vuetable.vue';
import VuetablePagination from '../../../node_modules/vuetable-2/src/components/VuetablePagination.vue';
import VuetablePaginationDropdown  from '../../../node_modules/vuetable-2/src/components/VuetablePaginationDropdown.vue';
export default {
  name: 'app',
  components: {
    breadcrumb, Vuetable, VuetablePagination, VuetablePaginationDropdown
  },
  data () {
    return {
      users: "",
      columns: [
	                'name',
	                'nickname',
	                'email',
	                'birthdate',
	                'gender',
	                '__actions'
				],
        itemActions: [
            { name: 'view-item', label: '', icon: 'zoom icon', class: 'ui teal button' },
            { name: 'edit-item', label: '', icon: 'edit icon', class: 'ui orange button'},
            { name: 'delete-item', label: '', icon: 'delete icon', class: 'ui red button' }
        ]
    }
  },
  created () {
    this.getUsers();
  },
  methods: {
    getUsers () {
      this.$http.get("users").then(function(res){
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
