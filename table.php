<head>
<style type='text/css'>
body {
  background: #069;
}

div.material-table {
  padding: 0;
}

div.material-table .hiddensearch {
  padding: 0 14px 0 24px;
  border-bottom: solid 1px #DDDDDD;
  display: none;
}

div.material-table .hiddensearch input {
  margin: 0;
  border: transparent 0 !important;
  height: 48px;
  color: rgba(0, 0, 0, .84);
}

div.material-table .hiddensearch input:active {
  border: transparent 0 !important;
}

div.material-table table {
  table-layout: fixed;
}

div.material-table .table-header {
  height: 64px;
  padding-left: 24px;
  padding-right: 14px;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  display: flex;
  -webkit-display: flex;
  border-bottom: solid 1px #DDDDDD;
}

div.material-table .table-header .actions {
  display: -webkit-flex;
  margin-left: auto;
}

div.material-table .table-header .btn-flat {
    min-width: 36px;
    padding: 0 8px;
}

div.material-table .table-header input {
  margin: 0;
  height: auto;
}

div.material-table .table-header i {
  color: rgba(0, 0, 0, 0.54);
  font-size: 24px;
}

div.material-table .table-footer {
  height: 56px;
  padding-left: 24px;
  padding-right: 14px;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-justify-content: flex-end;
  justify-content: flex-end;
  -webkit-align-items: center;
  align-items: center;
  font-size: 12px !important;
  color: rgba(0, 0, 0, 0.54);
}

div.material-table .table-footer .dataTables_length {
  display: -webkit-flex;
  display: flex;
}

div.material-table .table-footer label {
  font-size: 12px;
  color: rgba(0, 0, 0, 0.54);
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row
  /* works with row or column */
  
  flex-direction: row;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

div.material-table .table-footer .select-wrapper {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row
  /* works with row or column */
  
  flex-direction: row;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

div.material-table .table-footer .dataTables_info,
div.material-table .table-footer .dataTables_length {
  margin-right: 32px;
}

div.material-table .table-footer .material-pagination {
  display: flex;
  -webkit-display: flex;
  margin: 0;
}

div.material-table .table-footer .material-pagination li:first-child {
  margin-right: 24px;
}

div.material-table .table-footer .material-pagination li a {
  color: rgba(0, 0, 0, 0.54);
}

div.material-table .table-footer .select-wrapper input.select-dropdown {
  margin: 0;
  border-bottom: none;
  height: auto;
  line-height: normal;
  font-size: 12px;
  width: 40px;
  text-align: right;
}

div.material-table .table-footer select {
  background-color: transparent;
  width: auto;
  padding: 0;
  border: 0;
  border-radius: 0;
  height: auto;
  margin-left: 20px;
}

div.material-table .table-title {
  font-size: 20px;
  color: #000;
}

div.material-table table tr td {
  padding: 0 0 0 56px;
  height: 48px;
  font-size: 13px;
  color: rgba(0, 0, 0, 0.87);
  border-bottom: solid 1px #DDDDDD;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

div.material-table table tr td a {
  color: inherit;
}

div.material-table table tr td a i {
  font-size: 18px;
  color: rgba(0, 0, 0, 0.54);
}

div.material-table table tr {
  font-size: 12px;
}

div.material-table table th {
  font-size: 12px;
  font-weight: 500;
  color: #757575;
  cursor: pointer;
  white-space: nowrap;
  padding: 0;
  height: 56px;
  padding-left: 56px;
  vertical-align: middle;
  outline: none !important;
}

div.material-table table th.sorting_asc,
div.material-table table th.sorting_desc {
  color: rgba(0, 0, 0, 0.87);
}

div.material-table table th.sorting:after,
div.material-table table th.sorting_asc:after,
div.material-table table th.sorting_desc:after {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 16px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  word-wrap: normal;
  -webkit-font-feature-settings: 'liga';
  -webkit-font-smoothing: antialiased;
  content: "arrow_back";
  -webkit-transform: rotate(90deg);
  display: none;
  vertical-align: middle;
}

div.material-table table th.sorting:hover:after,
div.material-table table th.sorting_asc:after,
div.material-table table th.sorting_desc:after {
  display: inline-block;
}

div.material-table table th.sorting_desc:after {
  content: "arrow_forward";
}

div.material-table table tbody tr:hover {
  background-color: #EEE;
}

div.material-table table th:first-child,
div.material-table table td:first-child {
  padding: 0 0 0 24px;
}

div.material-table table th:last-child,
div.material-table table td:last-child {
  padding: 0 14px 0 0;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

</head>

<div class="row">
  <div id="admin" class="col s12">
    <div class="card material-table">
      <div class="table-header">
        <span class="table-title">Material DataTable</span>
        <div class="actions">         
          <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
        </div>
      </div>
      <table id="datatable">
        <thead>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th>test</th>
            <th>test</th>
            <th>test</th>
            <th>test</th>
            <th>test date</th>
            <th>test</th>
          </tr>
          <tr>
            <th>salim</th>
            <th>test</th>
            <th>test</th>
            <th>test</th>
            <th>test date</th>
            <th>test</th>
          </tr>
        </tbody>


      </table>
    </div>
  </div>
</div>

<script type='text/javascript'>
    (function(window, document, undefined) {

var factory = function($, DataTable) {
  "use strict";

  $('.search-toggle').click(function() {
    if ($('.hiddensearch').css('display') == 'none')
      $('.hiddensearch').slideDown();
    else
      $('.hiddensearch').slideUp();
  });

  /* Set the defaults for DataTables initialisation */
  $.extend(true, DataTable.defaults, {
    dom: "<'hiddensearch'f'>" +
      "tr" +
      "<'table-footer'lip'>",
    renderer: 'material'
  });

  /* Default class modification */
  $.extend(DataTable.ext.classes, {
    sWrapper: "dataTables_wrapper",
    sFilterInput: "form-control input-sm",
    sLengthSelect: "form-control input-sm"
  });

  /* Bootstrap paging button renderer */
  DataTable.ext.renderer.pageButton.material = function(settings, host, idx, buttons, page, pages) {
    var api = new DataTable.Api(settings);
    var classes = settings.oClasses;
    var lang = settings.oLanguage.oPaginate;
    var btnDisplay, btnClass, counter = 0;

    var attach = function(container, buttons) {
      var i, ien, node, button;
      var clickHandler = function(e) {
        e.preventDefault();
        if (!$(e.currentTarget).hasClass('disabled')) {
          api.page(e.data.action).draw(false);
        }
      };

      for (i = 0, ien = buttons.length; i < ien; i++) {
        button = buttons[i];

        if ($.isArray(button)) {
          attach(container, button);
        } else {
          btnDisplay = '';
          btnClass = '';

          switch (button) {

            case 'first':
              btnDisplay = lang.sFirst;
              btnClass = button + (page > 0 ?
                '' : ' disabled');
              break;

            case 'previous':
              btnDisplay = '<i class="material-icons">chevron_left</i>';
              btnClass = button + (page > 0 ?
                '' : ' disabled');
              break;

            case 'next':
              btnDisplay = '<i class="material-icons">chevron_right</i>';
              btnClass = button + (page < pages - 1 ?
                '' : ' disabled');
              break;

            case 'last':
              btnDisplay = lang.sLast;
              btnClass = button + (page < pages - 1 ?
                '' : ' disabled');
              break;

          }

          if (btnDisplay) {
            node = $('<li>', {
                'class': classes.sPageButton + ' ' + btnClass,
                'id': idx === 0 && typeof button === 'string' ?
                  settings.sTableId + '_' + button : null
              })
              .append($('<a>', {
                  'href': '#',
                  'aria-controls': settings.sTableId,
                  'data-dt-idx': counter,
                  'tabindex': settings.iTabIndex
                })
                .html(btnDisplay)
              )
              .appendTo(container);

            settings.oApi._fnBindAction(
              node, {
                action: button
              }, clickHandler
            );

            counter++;
          }
        }
      }
    };

    // IE9 throws an 'unknown error' if document.activeElement is used
    // inside an iframe or frame. 
    var activeEl;

    try {
      // Because this approach is destroying and recreating the paging
      // elements, focus is lost on the select button which is bad for
      // accessibility. So we want to restore focus once the draw has
      // completed
      activeEl = $(document.activeElement).data('dt-idx');
    } catch (e) {}

    attach(
      $(host).empty().html('<ul class="material-pagination"/>').children('ul'),
      buttons
    );

    if (activeEl) {
      $(host).find('[data-dt-idx=' + activeEl + ']').focus();
    }
  };

  /*
   * TableTools Bootstrap compatibility
   * Required TableTools 2.1+
   */
  if (DataTable.TableTools) {
    // Set the classes that TableTools uses to something suitable for Bootstrap
    $.extend(true, DataTable.TableTools.classes, {
      "container": "DTTT btn-group",
      "buttons": {
        "normal": "btn btn-default",
        "disabled": "disabled"
      },
      "collection": {
        "container": "DTTT_dropdown dropdown-menu",
        "buttons": {
          "normal": "",
          "disabled": "disabled"
        }
      },
      "print": {
        "info": "DTTT_print_info"
      },
      "select": {
        "row": "active"
      }
    });

    // Have the collection use a material compatible drop down
    $.extend(true, DataTable.TableTools.DEFAULTS.oTags, {
      "collection": {
        "container": "ul",
        "button": "li",
        "liner": "a"
      }
    });
  }

}; // /factory

// Define as an AMD module if possible
if (typeof define === 'function' && define.amd) {
  define(['jquery', 'datatables'], factory);
} else if (typeof exports === 'object') {
  // Node/CommonJS
  factory(require('jquery'), require('datatables'));
} else if (jQuery) {
  // Otherwise simply initialise as normal, stopping multiple evaluation
  factory(jQuery, jQuery.fn.dataTable);
}

})(window, document);

/*
$(document).ready(function() {
$('#datatable').dataTable({
  "ajax": 'https://gist.githubusercontent.com/heiswayi/7fde241975ed8a80535a/raw/ff1caaeaf62bd6740ab7cafcd61f1215de173379/datatables-data.json',
  "oLanguage": {
    "sStripClasses": "",
    "sSearch": "",
    "sSearchPlaceholder": "Enter any keyword here to filter...",
    "sInfo": "_START_ -_END_ of _TOTAL_",
    "sLengthMenu": '<span>Rows per page:</span><select class="browser-default">' +
      '<option value="10">10</option>' +
      '<option value="20">20</option>' +
      '<option value="30">30</option>' +
      '<option value="40">40</option>' +
      '<option value="50">50</option>' +
      '<option value="-1">All</option>' +
      '</select></div>'
  },
  bAutoWidth: false
});
});
*/

$(document).ready(function() {
    $('#datatable').dataTable();
});
</script>

