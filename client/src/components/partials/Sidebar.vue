<template lang="pug">
#sidebar.sidebar.responsive.ace-save-state
  #sidebar-shortcuts.sidebar-shortcuts
    #sidebar-shortcuts-large.sidebar-shortcuts-large
      button.btn.btn-success
        i.ace-icon.fa.fa-signal
      |
      button.btn.btn-info
        i.ace-icon.fa.fa-pencil
      |
      button.btn.btn-warning
        i.ace-icon.fa.fa-users
      |
      button.btn.btn-danger
        i.ace-icon.fa.fa-cogs
    |
    #sidebar-shortcuts-mini.sidebar-shortcuts-mini
      span.btn.btn-success
      |
      span.btn.btn-info
      |
      span.btn.btn-warning
      |
      span.btn.btn-danger
  // /.sidebar-shortcuts
  ul.nav.nav-list
    li.active
      a(href="index.html")
        i.menu-icon.fa.fa-tachometer
        |
        span.menu-text  Dashboard
      |
      b.arrow
    |
    li
      a.dropdown-toggle(href="#")
        i.menu-icon.fa.fa-desktop
        |
        span.menu-text
          | UI & Elements
        |
        b.arrow.fa.fa-angle-down
      |
      b.arrow
      |
      ul.submenu
        li
          a.dropdown-toggle(href="#")
            i.menu-icon.fa.fa-caret-right
            | 									Layouts
            |
            b.arrow.fa.fa-angle-down
          |
          b.arrow
          |
          ul.submenu
            li
              a(href="top-menu.html")
                i.menu-icon.fa.fa-caret-right
                | 											Top Menu
              |
              b.arrow
            |
            li
              a(href="two-menu-1.html")
                i.menu-icon.fa.fa-caret-right
                | 											Two Menus 1
              |
              b.arrow
            |
            li
              a(href="two-menu-2.html")
                i.menu-icon.fa.fa-caret-right
                | 											Two Menus 2
              |
              b.arrow
            |
            li
              a(href="mobile-menu-1.html")
                i.menu-icon.fa.fa-caret-right
                | 											Default Mobile Menu
              |
              b.arrow
            |
            li
              a(href="mobile-menu-2.html")
                i.menu-icon.fa.fa-caret-right
                | 											Mobile Menu 2
              |
              b.arrow
            |
            li
              a(href="mobile-menu-3.html")
                i.menu-icon.fa.fa-caret-right
                | 											Mobile Menu 3
              |
              b.arrow
        |
        li
          a(href="typography.html")
            i.menu-icon.fa.fa-caret-right
            | 									Typography
          |
          b.arrow
        |
        li
          a(href="elements.html")
            i.menu-icon.fa.fa-caret-right
            | 									Elements
          |
          b.arrow
        |
        li
          a(href="buttons.html")
            i.menu-icon.fa.fa-caret-right
            | 									Buttons & Icons
          |
          b.arrow
        |
        li
          a(href="content-slider.html")
            i.menu-icon.fa.fa-caret-right
            | 									Content Sliders
          |
          b.arrow
        |
        li
          a(href="treeview.html")
            i.menu-icon.fa.fa-caret-right
            | 									Treeview
          |
          b.arrow
        |
        li
          a(href="jquery-ui.html")
            i.menu-icon.fa.fa-caret-right
            | 									jQuery UI
          |
          b.arrow
        |
        li
          a(href="nestable-list.html")
            i.menu-icon.fa.fa-caret-right
            | 									Nestable Lists
          |
          b.arrow
        |
        li
          a.dropdown-toggle(href="#")
            i.menu-icon.fa.fa-caret-right
            | 									Three Level Menu
            |
            b.arrow.fa.fa-angle-down
          |
          b.arrow
          |
          ul.submenu
            li
              a(href="#")
                i.menu-icon.fa.fa-leaf.green
                | 											Item #1
              |
              b.arrow
            |
            li
              a.dropdown-toggle(href="#")
                i.menu-icon.fa.fa-pencil.orange
                | 											4th level
                |
                b.arrow.fa.fa-angle-down
              |
              b.arrow
              |
              ul.submenu
                li
                  a(href="#")
                    i.menu-icon.fa.fa-plus.purple
                    | 													Add Product
                  |
                  b.arrow
                |
                li
                  a(href="#")
                    i.menu-icon.fa.fa-eye.pink
                    | 													View Products
                  |
                  b.arrow
    |
    li
      a.dropdown-toggle(href="#")
        i.menu-icon.fa.fa-list
        |
        span.menu-text   用户
        |
        b.arrow.fa.fa-angle-down
      |
      b.arrow
      |
      ul.submenu
        li
          a(href="tables.html")
            i.menu-icon.fa.fa-caret-right
            | 									Simple & Dynamic
          |
          b.arrow
        |
        li
          a(href="jqgrid.html")
            i.menu-icon.fa.fa-caret-right
            | 									jqGrid plugin
          |
          b.arrow
    |
    li
      a.dropdown-toggle(href="#")
        i.menu-icon.fa.fa-pencil-square-o
        |
        span.menu-text  Forms
        |
        b.arrow.fa.fa-angle-down
      |
      b.arrow
      |
      ul.submenu
        li
          a(href="form-elements.html")
            i.menu-icon.fa.fa-caret-right
            | 									Form Elements
          |
          b.arrow
        |
        li
          a(href="form-elements-2.html")
            i.menu-icon.fa.fa-caret-right
            | 									Form Elements 2
          |
          b.arrow
        |
        li
          a(href="form-wizard.html")
            i.menu-icon.fa.fa-caret-right
            | 									Wizard & Validation
          |
          b.arrow
        |
        li
          a(href="wysiwyg.html")
            i.menu-icon.fa.fa-caret-right
            | 									Wysiwyg & Markdown
          |
          b.arrow
        |
        li
          a(href="dropzone.html")
            i.menu-icon.fa.fa-caret-right
            | 									Dropzone File Upload
          |
          b.arrow
    |
    li
      a(href="widgets.html")
        i.menu-icon.fa.fa-list-alt
        |
        span.menu-text  Widgets
      |
      b.arrow
    |
    li
      a(href="calendar.html")
        i.menu-icon.fa.fa-calendar
        |
        span.menu-text
          | Calendar
          span.badge.badge-transparent.tooltip-error(title="2 Important Events")
            i.ace-icon.fa.fa-exclamation-triangle.red.bigger-130
      |
      b.arrow
    |
    li
      a(href="gallery.html")
        i.menu-icon.fa.fa-picture-o
        |
        span.menu-text  Gallery
      |
      b.arrow
    |
    li
      a.dropdown-toggle(href="#")
        i.menu-icon.fa.fa-tag
        |
        span.menu-text  More Pages
        |
        b.arrow.fa.fa-angle-down
      |
      b.arrow
      |
      ul.submenu
        li
          a(href="profile.html")
            i.menu-icon.fa.fa-caret-right
            | 									User Profile
          |
          b.arrow
        |
        li
          a(href="inbox.html")
            i.menu-icon.fa.fa-caret-right
            | 									Inbox
          |
          b.arrow
        |
        li
          a(href="pricing.html")
            i.menu-icon.fa.fa-caret-right
            | 									Pricing Tables
          |
          b.arrow
        |
        li
          a(href="invoice.html")
            i.menu-icon.fa.fa-caret-right
            | 									Invoice
          |
          b.arrow
        |
        li
          a(href="timeline.html")
            i.menu-icon.fa.fa-caret-right
            | 									Timeline
          |
          b.arrow
        |
        li
          a(href="search.html")
            i.menu-icon.fa.fa-caret-right
            | 									Search Results
          |
          b.arrow
        |
        li
          a(href="email.html")
            i.menu-icon.fa.fa-caret-right
            | 									Email Templates
          |
          b.arrow
        |
        li
          a(href="login.html")
            i.menu-icon.fa.fa-caret-right
            | 									Login & Register
          |
          b.arrow
    |
    li
      a.dropdown-toggle(href="#")
        i.menu-icon.fa.fa-file-o
        |
        span.menu-text
          | Other Pages
          span.badge.badge-primary 5
        |
        b.arrow.fa.fa-angle-down
      |
      b.arrow
      |
      ul.submenu
        li
          a(href="faq.html")
            i.menu-icon.fa.fa-caret-right
            | 									FAQ
          |
          b.arrow
        |
        li
          a(href="error-404.html")
            i.menu-icon.fa.fa-caret-right
            | 									Error 404
          |
          b.arrow
        |
        li
          a(href="error-500.html")
            i.menu-icon.fa.fa-caret-right
            | 									Error 500
          |
          b.arrow
        |
        li
          a(href="grid.html")
            i.menu-icon.fa.fa-caret-right
            | 									Grid
          |
          b.arrow
        |``
        li
          a(href="blank.html")
            i.menu-icon.fa.fa-caret-right
            | 									Blank Page
          |
          b.arrow
  // /.nav-list
  #sidebar-collapse.sidebar-toggle.sidebar-collapse
    i#sidebar-toggle-icon.ace-icon.fa.fa-angle-double-left.ace-save-state(data-icon1="ace-icon fa fa-angle-double-left", data-icon2="ace-icon fa fa-angle-double-right")

</template>
<script type="text/ecmascript-6">
export default {
  data () {
    return {

    }
  },
  components: {
  },
  methods: {

  }
}
</script>