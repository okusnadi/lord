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
              table#dynamic-table.table.table-striped.table-bordered.table-hover
                thead
                  tr
                    th.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    th Domain
                    |
                    th Price
                    |
                    th.hidden-480 Clicks
                    |
                    th
                      i.ace-icon.fa.fa-clock-o.bigger-110.hidden-480
                      | 															Update
                    |
                    th.hidden-480 Status
                    |
                    th
                |
                tbody
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") app.com
                    |
                    td $45
                    |
                    td.hidden-480 3,330
                    |
                    td Feb 12
                    |
                    td.hidden-480
                      span.label.label-sm.label-warning Expiring
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") base.com
                    |
                    td $35
                    |
                    td.hidden-480 2,595
                    |
                    td Feb 18
                    |
                    td.hidden-480
                      span.label.label-sm.label-success Registered
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") max.com
                    |
                    td $60
                    |
                    td.hidden-480 4,400
                    |
                    td Mar 11
                    |
                    td.hidden-480
                      span.label.label-sm.label-warning Expiring
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") best.com
                    |
                    td $75
                    |
                    td.hidden-480 6,500
                    |
                    td Apr 03
                    |
                    td.hidden-480
                      span.label.label-sm.label-inverse.arrowed-in Flagged
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") pro.com
                    |
                    td $55
                    |
                    td.hidden-480 4,250
                    |
                    td Jan 21
                    |
                    td.hidden-480
                      span.label.label-sm.label-success Registered
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") team.com
                    |
                    td $40
                    |
                    td.hidden-480 3,200
                    |
                    td Feb 09
                    |
                    td.hidden-480
                      span.label.label-sm.label-inverse.arrowed-in Flagged
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") up.com
                    |
                    td $95
                    |
                    td.hidden-480 8,520
                    |
                    td Feb 22
                    |
                    td.hidden-480
                      span.label.label-sm.label-info.arrowed.arrowed-righ Sold
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") view.com
                    |
                    td $45
                    |
                    td.hidden-480 4,100
                    |
                    td Mar 12
                    |
                    td.hidden-480
                      span.label.label-sm.label-success Registered
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") nice.com
                    |
                    td $38
                    |
                    td.hidden-480 3,940
                    |
                    td Feb 12
                    |
                    td.hidden-480
                      span.label.label-sm.label-info.arrowed.arrowed-righ Sold
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") fine.com
                    |
                    td $25
                    |
                    td.hidden-480 2,983
                    |
                    td Apr 01
                    |
                    td.hidden-480
                      span.label.label-sm.label-warning Expiring
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") good.com
                    |
                    td $50
                    |
                    td.hidden-480 6,500
                    |
                    td Feb 02
                    |
                    td.hidden-480
                      span.label.label-sm.label-inverse.arrowed-in Flagged
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") great.com
                    |
                    td $55
                    |
                    td.hidden-480 6,400
                    |
                    td Feb 24
                    |
                    td.hidden-480
                      span.label.label-sm.label-success Registered
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") shine.com
                    |
                    td $25
                    |
                    td.hidden-480 2,200
                    |
                    td Apr 01
                    |
                    td.hidden-480
                      span.label.label-sm.label-inverse.arrowed-in Flagged
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") rise.com
                    |
                    td $42
                    |
                    td.hidden-480 3,900
                    |
                    td Feb 01
                    |
                    td.hidden-480
                      span.label.label-sm.label-info.arrowed.arrowed-righ Sold
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") above.com
                    |
                    td $35
                    |
                    td.hidden-480 3,420
                    |
                    td Mar 12
                    |
                    td.hidden-480
                      span.label.label-sm.label-warning Expiring
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") share.com
                    |
                    td $30
                    |
                    td.hidden-480 3,200
                    |
                    td Feb 11
                    |
                    td.hidden-480
                      span.label.label-sm.label-info.arrowed.arrowed-righ Sold
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") fair.com
                    |
                    td $35
                    |
                    td.hidden-480 3,900
                    |
                    td Mar 26
                    |
                    td.hidden-480
                      span.label.label-sm.label-inverse.arrowed-in Flagged
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") year.com
                    |
                    td $48
                    |
                    td.hidden-480 3,990
                    |
                    td Feb 15
                    |
                    td.hidden-480
                      span.label.label-sm.label-warning Expiring
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") day.com
                    |
                    td $55
                    |
                    td.hidden-480 5,600
                    |
                    td Jan 29
                    |
                    td.hidden-480
                      span.label.label-sm.label-info.arrowed.arrowed-righ Sold
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") light.com
                    |
                    td $40
                    |
                    td.hidden-480 3,100
                    |
                    td Feb 17
                    |
                    td.hidden-480
                      span.label.label-sm.label-success Registered
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") sight.com
                    |
                    td $58
                    |
                    td.hidden-480 6,100
                    |
                    td Feb 19
                    |
                    td.hidden-480
                      span.label.label-sm.label-inverse.arrowed-in Flagged
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") right.com
                    |
                    td $50
                    |
                    td.hidden-480 4,400
                    |
                    td Apr 01
                    |
                    td.hidden-480
                      span.label.label-sm.label-warning Expiring
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
                  |
                  tr
                    td.center
                      label.pos-rel
                        input.ace(type="checkbox")
                        |
                        span.lbl
                    |
                    td
                      a(href="#") once.com
                    |
                    td $20
                    |
                    td.hidden-480 1,400
                    |
                    td Apr 04
                    |
                    td.hidden-480
                      span.label.label-sm.label-info.arrowed.arrowed-righ Sold
                    |
                    td
                      .hidden-sm.hidden-xs.action-buttons
                        a.blue(href="#")
                          i.ace-icon.fa.fa-search-plus.bigger-130
                        |
                        a.green(href="#")
                          i.ace-icon.fa.fa-pencil.bigger-130
                        |
                        a.red(href="#")
                          i.ace-icon.fa.fa-trash-o.bigger-130
                      |
                      .hidden-md.hidden-lg
                        .inline.pos-rel
                          button.btn.btn-minier.btn-yellow.dropdown-toggle(data-toggle="dropdown", data-position="auto")
                            i.ace-icon.fa.fa-caret-down.icon-only.bigger-120
                          |
                          ul.dropdown-menu.dropdown-only-icon.dropdown-yellow.dropdown-menu-right.dropdown-caret.dropdown-close
                            li
                              a.tooltip-info(href="#", data-rel="tooltip", title="View")
                                span.blue
                                  i.ace-icon.fa.fa-search-plus.bigger-120
                            |
                            li
                              a.tooltip-success(href="#", data-rel="tooltip", title="Edit")
                                span.green
                                  i.ace-icon.fa.fa-pencil-square-o.bigger-120
                            |
                            li
                              a.tooltip-error(href="#", data-rel="tooltip", title="Delete")
                                span.red
                                  i.ace-icon.fa.fa-trash-o.bigger-120
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
export default {
  name: 'app',
  components: {
    breadcrumb
  }
}
</script>
