<style>
   /* start - table */
   table.dataTable th.dt-left,
        table.dataTable td.dt-left {
        text-align: left;
        }
        table.dataTable th.dt-center,
        table.dataTable td.dt-center,
        table.dataTable td.dataTables_empty {
        text-align: center;
        }
        table.dataTable th.dt-right,
        table.dataTable td.dt-right {
        text-align: right;
        }
        table.dataTable th.dt-justify,
        table.dataTable td.dt-justify {
        text-align: justify;
        }
        table.dataTable th.dt-nowrap,
        table.dataTable td.dt-nowrap {
        white-space: nowrap;
        }
        table.dataTable thead th.dt-head-left,
        table.dataTable thead td.dt-head-left,
        table.dataTable tfoot th.dt-head-left,
        table.dataTable tfoot td.dt-head-left {
        text-align: left;
        }
        table.dataTable thead th.dt-head-center,
        table.dataTable thead td.dt-head-center,
        table.dataTable tfoot th.dt-head-center,
        table.dataTable tfoot td.dt-head-center {
        text-align: center;
        }
        table.dataTable thead th.dt-head-right,
        table.dataTable thead td.dt-head-right,
        table.dataTable tfoot th.dt-head-right,
        table.dataTable tfoot td.dt-head-right {
        text-align: right;
        }
        table.dataTable thead th.dt-head-justify,
        table.dataTable thead td.dt-head-justify,
        table.dataTable tfoot th.dt-head-justify,
        table.dataTable tfoot td.dt-head-justify {
        text-align: justify;
        }
        table.dataTable thead th.dt-head-nowrap,
        table.dataTable thead td.dt-head-nowrap,
        table.dataTable tfoot th.dt-head-nowrap,
        table.dataTable tfoot td.dt-head-nowrap {
        white-space: nowrap;
        }
        table.dataTable tbody th.dt-body-left,
        table.dataTable tbody td.dt-body-left {
        text-align: left;
        }
        table.dataTable tbody th.dt-body-center,
        table.dataTable tbody td.dt-body-center {
        text-align: center;
        }
        table.dataTable tbody th.dt-body-right,
        table.dataTable tbody td.dt-body-right {
        text-align: right;
        }
        table.dataTable tbody th.dt-body-justify,
        table.dataTable tbody td.dt-body-justify {
        text-align: justify;
        }
        table.dataTable tbody th.dt-body-nowrap,
        table.dataTable tbody td.dt-body-nowrap {
        white-space: nowrap;
        }
        table.dataTable td.dt-control {
        text-align: center;
        cursor: pointer;
        }
        table.dataTable td.dt-control:before {
        height: 1em;
        width: 1em;
        margin-top: -9px;
        display: inline-block;
        color: white;
        border: 0.15em solid white;
        border-radius: 1em;
        box-shadow: 0 0 0.2em #444;
        box-sizing: content-box;
        text-align: center;
        text-indent: 0 !important;
        font-family: "Courier New", Courier, monospace;
        line-height: 1em;
        content: "+";
        background-color: #31b131;
        }
        table.dataTable tr.dt-hasChild td.dt-control:before {
        content: "-";
        background-color: #d33333;
        }

        /*
        * Table styles
        */
        table.dataTable {
        width: 100%;
        margin: 0 auto;
        clear: both;
        border-collapse: separate;
        border-spacing: 0;
        /*
        * Header and footer styles
        */
        /*
        * Body styles
        */
        }
        table.dataTable thead th,
        table.dataTable tfoot th {
        font-weight: bold;
        }
        table.dataTable thead th,
        table.dataTable thead td {
        padding: 10px 18px;
        border-bottom: 2px solid #D3D3D3;
        }
        table.dataTable thead th:active,
        table.dataTable thead td:active {
        outline: none;
        }
        table.dataTable tfoot th,
        table.dataTable tfoot td {
        padding: 10px 18px 6px 18px;
        border-bottom: 1px solid #0026C8;
        }
        table.dataTable thead .sorting,
        table.dataTable thead .sorting_asc,
        table.dataTable thead .sorting_desc,
        table.dataTable thead .sorting_asc_disabled,
        table.dataTable thead .sorting_desc_disabled {
        cursor: pointer;
        cursor: hand;
        background-repeat: no-repeat;
        background-position: center right;
        }
        table.dataTable thead .sorting {
        background-image: url("../images/sort_both.png");
        }
        table.dataTable thead .sorting_asc {
        background-image: url("../images/sort_asc.png") !important;
        }
        table.dataTable thead .sorting_desc {
        background-image: url("../images/sort_desc.png") !important;
        }
        table.dataTable thead .sorting_asc_disabled {
        background-image: url("../images/sort_asc_disabled.png");
        }
        table.dataTable thead .sorting_desc_disabled {
        background-image: url("../images/sort_desc_disabled.png");
        }
        table.dataTable tbody tr {
        background-color: #ffffff;
        border-radius: 50px;
        }
        table.dataTable tbody tr.selected {
        background-color: #b0bed9;
        }
        table.dataTable tbody th,
        table.dataTable tbody td {
        padding: 7px 10px;
        text-align: left;
        vertical-align: middle;
        line-height: 15px;
        font-size: 13px;
        border-bottom: 1px solid #D3D3D3
        }
        table.dataTable.row-border tbody th,
        table.dataTable.row-border tbody td,
        table.dataTable.display tbody th,
        table.dataTable.display tbody td {
        border-top: 1px solid #ddd;
        }
        table.dataTable.row-border tbody tr:first-child th,
        table.dataTable.row-border tbody tr:first-child td,
        table.dataTable.display tbody tr:first-child th,
        table.dataTable.display tbody tr:first-child td {
        border-top: none;
        }
        table.dataTable.cell-border tbody th,
        table.dataTable.cell-border tbody td {
        border-top: 1px solid #ddd;
        border-right: 1px solid #ddd;
        }
        table.dataTable.cell-border tbody tr th:first-child,
        table.dataTable.cell-border tbody tr td:first-child {
        border-left: 1px solid #ddd;
        }
        table.dataTable.cell-border tbody tr:first-child th,
        table.dataTable.cell-border tbody tr:first-child td {
        border-top: none;
        }
        table.dataTable.stripe tbody tr.odd,
        table.dataTable.display tbody tr.odd {
        background-color: #f9f9f9;
        }
        table.dataTable.stripe tbody tr.odd.selected,
        table.dataTable.display tbody tr.odd.selected {
        background-color: #acbad4;
        }
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
        background-color: #f6f6f6;
        }
        table.dataTable.hover tbody tr:hover.selected,
        table.dataTable.display tbody tr:hover.selected {
        background-color: #aab7d1;
        }
        table.dataTable.order-column tbody tr > .sorting_1,
        table.dataTable.order-column tbody tr > .sorting_2,
        table.dataTable.order-column tbody tr > .sorting_3,
        table.dataTable.display tbody tr > .sorting_1,
        table.dataTable.display tbody tr > .sorting_2,
        table.dataTable.display tbody tr > .sorting_3 {
        background-color: #fafafa;
        }
        table.dataTable.order-column tbody tr.selected > .sorting_1,
        table.dataTable.order-column tbody tr.selected > .sorting_2,
        table.dataTable.order-column tbody tr.selected > .sorting_3,
        table.dataTable.display tbody tr.selected > .sorting_1,
        table.dataTable.display tbody tr.selected > .sorting_2,
        table.dataTable.display tbody tr.selected > .sorting_3 {
        background-color: #acbad5;
        }
        table.dataTable.display tbody tr.odd > .sorting_1,
        table.dataTable.order-column.stripe tbody tr.odd > .sorting_1 {
        background-color: #f1f1f1;
        }
        table.dataTable.display tbody tr.odd > .sorting_2,
        table.dataTable.order-column.stripe tbody tr.odd > .sorting_2 {
        background-color: #f3f3f3;
        }
        table.dataTable.display tbody tr.odd > .sorting_3,
        table.dataTable.order-column.stripe tbody tr.odd > .sorting_3 {
        background-color: whitesmoke;
        }
        table.dataTable.display tbody tr.odd.selected > .sorting_1,
        table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_1 {
        background-color: #a6b4cd;
        }
        table.dataTable.display tbody tr.odd.selected > .sorting_2,
        table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_2 {
        background-color: #a8b5cf;
        }
        table.dataTable.display tbody tr.odd.selected > .sorting_3,
        table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_3 {
        background-color: #a9b7d1;
        }
        table.dataTable.display tbody tr.even > .sorting_1,
        table.dataTable.order-column.stripe tbody tr.even > .sorting_1 {
        background-color: #fafafa;
        }
        table.dataTable.display tbody tr.even > .sorting_2,
        table.dataTable.order-column.stripe tbody tr.even > .sorting_2 {
        background-color: #fcfcfc;
        }
        table.dataTable.display tbody tr.even > .sorting_3,
        table.dataTable.order-column.stripe tbody tr.even > .sorting_3 {
        background-color: #fefefe;
        }
        table.dataTable.display tbody tr.even.selected > .sorting_1,
        table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_1 {
        background-color: #acbad5;
        }
        table.dataTable.display tbody tr.even.selected > .sorting_2,
        table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_2 {
        background-color: #aebcd6;
        }
        table.dataTable.display tbody tr.even.selected > .sorting_3,
        table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_3 {
        background-color: #afbdd8;
        }
        table.dataTable.display tbody tr:hover > .sorting_1,
        table.dataTable.order-column.hover tbody tr:hover > .sorting_1 {
        background-color: #eaeaea;
        }
        table.dataTable.display tbody tr:hover > .sorting_2,
        table.dataTable.order-column.hover tbody tr:hover > .sorting_2 {
        background-color: #ececec;
        }
        table.dataTable.display tbody tr:hover > .sorting_3,
        table.dataTable.order-column.hover tbody tr:hover > .sorting_3 {
        background-color: #efefef;
        }
        table.dataTable.display tbody tr:hover.selected > .sorting_1,
        table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_1 {
        background-color: #a2aec7;
        }
        table.dataTable.display tbody tr:hover.selected > .sorting_2,
        table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_2 {
        background-color: #a3b0c9;
        }
        table.dataTable.display tbody tr:hover.selected > .sorting_3,
        table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_3 {
        background-color: #a5b2cb;
        }
        table.dataTable.no-footer {
        border-bottom: 1px solid #111;
        }
        table.dataTable.nowrap th,
        table.dataTable.nowrap td {
        white-space: nowrap;
        }
        table.dataTable.compact thead th,
        table.dataTable.compact thead td {
        padding: 4px 17px;
        }
        table.dataTable.compact tfoot th,
        table.dataTable.compact tfoot td {
        padding: 4px;
        }
        table.dataTable.compact tbody th,
        table.dataTable.compact tbody td {
        padding: 4px;
        }

        table.dataTable th,
        table.dataTable td {
        box-sizing: content-box;
        }

        /*
        * Control feature layout
        */
        .dataTables_length label {
        font-size: 0;
        line-height: 0;
        color: transparent;
        }
        .dataTables_length label::before {
        content: none;
        }
        .dataTables_wrapper {
        position: relative;
        clear: both;
        }
        .dataTables_wrapper .dataTables_length {
        float: left;
        }
        .dataTables_wrapper .dataTables_length select {
        border: 1px solid #aaa;
        width: 90px;
        border-radius: 15px;
        padding-left: 10px;
        background-color: transparent;
        }
        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: left;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #aaa;
            width: 500px;
            border-radius: 15px;
            background-color: transparent;
        }

        .dataTables_wrapper .dataTables_info {
        clear: both;
        float: left;
        padding-top: 0.755em;
        }
        .dataTables_wrapper .dataTables_paginate {
        float: right;
        text-align: right;
        padding-top: 0.25em;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
        box-sizing: border-box;
        display: inline-block;
        min-width: 1.5em;
        padding: 0.5em 1em;
        margin-left: 2px;
        text-align: center;
        text-decoration: none !important;
        cursor: pointer;
        cursor: hand;
        color: #333 !important;
        border: 1px solid transparent;
        border-radius: 15px;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        color: #333 !important;
        border: 1px solid #979797;
        background-color: white;
        background: -webkit-gradient(
            linear,
            left top,
            left bottom,
            color-stop(0%, white),
            color-stop(100%, #dcdcdc)
        );
        /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, white 0%, #dcdcdc 100%);
        /* Chrome10+,Safari5.1+ */
        background: -moz-linear-gradient(top, white 0%, #dcdcdc 100%);
        /* FF3.6+ */
        background: -ms-linear-gradient(top, white 0%, #dcdcdc 100%);
        /* IE10+ */
        background: -o-linear-gradient(top, white 0%, #dcdcdc 100%);
        /* Opera 11.10+ */
        background: linear-gradient(to bottom, white 0%, #dcdcdc 100%);
        /* W3C */
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
        cursor: default;
        color: #666 !important;
        border: 1px solid transparent;
        background: transparent;
        box-shadow: none;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        color: white !important;
        border: 1px solid #111;
        background-color: #585858;
        background: -webkit-gradient(
            linear,
            left top,
            left bottom,
            color-stop(0%, #585858),
            color-stop(100%, #111)
        );
        /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, #585858 0%, #111 100%);
        /* Chrome10+,Safari5.1+ */
        background: -moz-linear-gradient(top, #585858 0%, #111 100%);
        /* FF3.6+ */
        background: -ms-linear-gradient(top, #585858 0%, #111 100%);
        /* IE10+ */
        background: -o-linear-gradient(top, #585858 0%, #111 100%);
        /* Opera 11.10+ */
        background: linear-gradient(to bottom, #585858 0%, #111 100%);
        /* W3C */
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:active {
        outline: none;
        background-color: #2b2b2b;
        background: -webkit-gradient(
            linear,
            left top,
            left bottom,
            color-stop(0%, #2b2b2b),
            color-stop(100%, #0c0c0c)
        );
        /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
        /* Chrome10+,Safari5.1+ */
        background: -moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
        /* FF3.6+ */
        background: -ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
        /* IE10+ */
        background: -o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
        /* Opera 11.10+ */
        background: linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);
        /* W3C */
        box-shadow: inset 0 0 3px #111;
        }
        .dataTables_wrapper .dataTables_paginate .ellipsis {
        padding: 0 1em;
        }

        .dataTables_wrapper .dataTables_processing {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 40px;
        margin-left: -50%;
        margin-top: -25px;
        padding-top: 20px;
        text-align: center;
        font-size: 1.2em;
        background-color: white;
        background: -webkit-gradient(
            linear,
            left top,
            right top,
            color-stop(0%, rgba(255, 255, 255, 0)),
            color-stop(25%, rgba(255, 255, 255, 0.9)),
            color-stop(75%, rgba(255, 255, 255, 0.9)),
            color-stop(100%, rgba(255, 255, 255, 0))
        );
        background: -webkit-linear-gradient(
            left,
            rgba(255, 255, 255, 0) 0%,
            rgba(255, 255, 255, 0.9) 25%,
            rgba(255, 255, 255, 0.9) 75%,
            rgba(255, 255, 255, 0) 100%
        );
        background: -moz-linear-gradient(
            left,
            rgba(255, 255, 255, 0) 0%,
            rgba(255, 255, 255, 0.9) 25%,
            rgba(255, 255, 255, 0.9) 75%,
            rgba(255, 255, 255, 0) 100%
        );
        background: -ms-linear-gradient(
            left,
            rgba(255, 255, 255, 0) 0%,
            rgba(255, 255, 255, 0.9) 25%,
            rgba(255, 255, 255, 0.9) 75%,
            rgba(255, 255, 255, 0) 100%
        );
        background: -o-linear-gradient(
            left,
            rgba(255, 255, 255, 0) 0%,
            rgba(255, 255, 255, 0.9) 25%,
            rgba(255, 255, 255, 0.9) 75%,
            rgba(255, 255, 255, 0) 100%
        );
        background: linear-gradient(
            to right,
            rgba(255, 255, 255, 0) 0%,
            rgba(255, 255, 255, 0.9) 25%,
            rgba(255, 255, 255, 0.9) 75%,
            rgba(255, 255, 255, 0) 100%
        );
        }
        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_processing,
        .dataTables_wrapper .dataTables_paginate {
        color: #333;
        }
        .dataTables_wrapper .dataTables_scroll {
        clear: both;
        }
        .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody {
        margin-top: -1px;
        -webkit-overflow-scrolling: touch;
        }
        .dataTables_wrapper
        .dataTables_scroll
        div.dataTables_scrollBody
        > table
        > thead
        > tr
        > th,
        .dataTables_wrapper
        .dataTables_scroll
        div.dataTables_scrollBody
        > table
        > thead
        > tr
        > td,
        .dataTables_wrapper
        .dataTables_scroll
        div.dataTables_scrollBody
        > table
        > tbody
        > tr
        > th,
        .dataTables_wrapper
        .dataTables_scroll
        div.dataTables_scrollBody
        > table
        > tbody
        > tr
        > td {
        vertical-align: middle;
        }
        .dataTables_wrapper
        .dataTables_scroll
        div.dataTables_scrollBody
        > table
        > thead
        > tr
        > th
        > div.dataTables_sizing,
        .dataTables_wrapper
        .dataTables_scroll
        div.dataTables_scrollBody
        > table
        > thead
        > tr
        > td
        > div.dataTables_sizing,
        .dataTables_wrapper
        .dataTables_scroll
        div.dataTables_scrollBody
        > table
        > tbody
        > tr
        > th
        > div.dataTables_sizing,
        .dataTables_wrapper
        .dataTables_scroll
        div.dataTables_scrollBody
        > table
        > tbody
        > tr
        > td
        > div.dataTables_sizing {
        height: 0;
        overflow: hidden;
        margin: 0 !important;
        padding: 0 !important;
        }
        .dataTables_wrapper.no-footer .dataTables_scrollBody {
        border-bottom: 1px solid #111;
        }
        .dataTables_wrapper.no-footer div.dataTables_scrollHead table.dataTable,
        .dataTables_wrapper.no-footer div.dataTables_scrollBody > table {
        border-bottom: none;
        }
        .dataTables_wrapper:after {
        visibility: hidden;
        display: block;
        content: "";
        clear: both;
        height: 0;
        }

        @media screen and (max-width: 767px) {
        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_paginate {
            float: none;
            text-align: center;
        }
        .dataTables_wrapper .dataTables_paginate {
            margin-top: 0.5em;
        }
        }
        @media screen and (max-width: 767px) {
        .dataTables_wrapper .dataTables_filter {
            float: none;
            text-align: end;
        }
        .dataTables_wrapper .dataTables_length {
            float: none;
            text-align: start;
        }
        .dataTables_wrapper .dataTables_filter {
            margin-top: 0.5em;
        }
        }

        /* end of table */

    .table-size {
        width: 50%;
    }

    .bold-address {
    font-weight: bold;
    font-size: 15px;
    text-align: left;
    line-height: 1px;
    }

    .bold-date {
        font-weight: bold;
        text-align: left;
        line-height: 5px;
    }

    .bold-addressee {
        font-weight: bold;
        font-size: 24px;
        line-height: 20px;
    }

    .labels-address {
        color: #9F9F9F;
    }

    .labels-addressee {
        color: #9F9F9F;
        margin-bottom: 10px;
    }

    .labelsdate {
        color: #9F9F9F;
        text-align: left;
        line-height: 20px;
        padding-top: 5px;
    }
    
    .highlight {
        background: linear-gradient(90deg, #0026C8, #2C54FF); 
        border-radius: 10px;
        color: #FFFFFF;
        font-size: 19px;
        padding: 4px 6px;
    }

    .abbrev {
        border: 1px;
        font-size: 31px;
        font-family: 'ABC Diatype Bold', sans-serif;
        background: linear-gradient(45deg, #0026C8, #2C54FF);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .secondary {
        color: #909090;
        font-size: 20px;
    }

    .tracking {
    padding: 11px;
    color: #9F9F9F;
    }   

    .rounded-container {
        border: 1px solid #ccc; 
        border-radius: 20px; 
        padding-top: 15px;
        padding-bottom: 15px;
        padding-right: 0px;
        padding-left: 15px; 
        background-color: #ffffff; 
    }

    .custom-line {
    border: 90px; 
    margin-top: 20px; 
    }

    .form-control {
        border-radius: 15px;
    }

    .table-size {
    width: 100%;
    border-collapse: collapse; /* Ensure borders collapse properly */
    }

    .table-size thead {
        border-bottom: 2px solid #303030;
        padding: 5px;
    }

    .rrt-cell {
        position: relative;
    }

    .text-center{
        border-bottom: 1px;
    }  

    .table-size tbody tr {
        border-radius: 10px; 
    }

    .hover-row:hover {
        background: #D3D3D3;
        color: #FFFFFF;
        border-radius: 100px;
    }

    .caret {
        margin-right: 5px;
        display: none;
    }

    .hover-row:hover .caret {
        display: inline;
    }
    .rounded-entries .rounded-entry {
        border-radius: 15px; 
        padding: 7px; 
        background-color: #FFFFFF;
        }

    #flashMessage.alert-primary {
        background-color:#0D6EFD; 
        color: #fff;
        text-align: center; 
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600; 
        position: relative; /* Add relative positioning for overlay */
        z-index: 50;
        border-radius: 15px !important;
    }
    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.2); /* Adjust the opacity as needed */
        display: none; /* Initially hidden */
        z-index: 40; /* Below flash message */
    }

    .custom-header{
        background-color: #BB2D3B;
    }
    .text-color {
        color: #BB2D3B;
    }
    .modal-title {
    color: #ffffff;
    }
    #example {
        font-size: 14px;
    }
    .regular-text td {
    font-weight: normal;
    }
    .textStyle{
        font-weight: normal;
    }
    .table-wrapper th {
        border-radius: 0px;
        overflow: hidden;
    }

    .text-center {
        border-radius: 50px;
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
    }

    .custom-table th,
    .custom-table td {
        padding: 1px;
        text-align: left;
    }

    .custom-table th {
        background-color: #f2f2f2;
    }

    .custom-table tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }

    .custom-table tbody tr:hover {
        background-color: #f0f0f0;
    }

    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .btn-warning{
        font-size: 14px;
        color: #fff;
        padding: 8px; 
        border: none; 
        border-radius: 15px;
        background: #FCBE00;
        outline: none; 
        position: relative; 
        transition: all 0.4s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0; /* Start from fully transparent */
        }
        to {
            opacity: 1; /* Fade in to fully opaque */
        }
    }

    .btn-warning:hover {
        color: #fff;
        border-radius: 100px;
        background: #FCBE00;
    }

    .btn-warning:hover::after {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px; 
        right: -5px; 
        bottom: -5px; 
        border: 2px solid #FCBE00; 
        border-radius: 50px;
        animation: fadeIn 0.4s forwards; 
    }

    .fa-pen {
        font-size: 12px;
        margin-right: 5px;
    }

    .custom-search-input,
    .custom-filter-select {
        width: 500px;
        padding: 5px;
        font-size: 16px; 
        border-radius: 11px; 
        border: 1px solid #ccc; 
        box-shadow: none; 
    }

    .search-bar-container,
    .filter-container {
        margin-bottom: 20px; 
    }
    #example {
        font-size: 14px;
    }

    /* Add rounded corners to table rows on hover and change background color to blue */
    #example tbody tr:hover {
        border-radius: 10px;
        background: #EAEAEA;
        color: #000;
    }
    .btn-sm:hover{
        background-color: #BB2D3B;    }

    .display-6 {
        color: #505050;
        font-size: 30px;
        font-weight: 500;
    }
    .counter-display {
        border: 1px solid blue; 
        border-radius: 40px; 
        color: #0026C8; 
        font-size: 18px; 
        font-weight: bold;
        display: inline-block; /* Ensure it's inline-block so it adjusts to content width */
        padding: 8px 15px; /* Adjust padding as needed */
        white-space: nowrap; /* Prevent line breaks */
    }

    .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
    }

        /* Adjust the alignment of the icon and text */
    .btn .align-icon {
        vertical-align: middle; /* Align the icon vertically in the middle */
        margin-right: 2px; /* Add some space between the icon and text */
    }

    .btn .align-text {
        vertical-align: middle; /* Align the text vertically in the middle */
    }


</style>
<div class="mssg position-fixed top-6 start-50 translate-middle-x h-5 w-1/4 z-50">
    <div class="mssg">
        @if(session('flash_mssg'))
            <div id="flashMessage" class="alert alert-primary" role="alert">
                <p>{{ session('flash_mssg') }}</p>
            </div>
        @endif
    </div>
</div>

<div id="overlay"></div><!-- Add overlay div -->
<div class="row mb-5 align-items-center">
    <div class="col-md-4 col-sm-6">
        <h1 class="display-6">Addressee List</h1>
    </div>
    <div class="col-md-2 col-sm-6 my-2">
        <div class="counter-display text-center">{{$count}} Records</div>
    </div>
</div>
<div class="mt-5" style="border: 1px solid #D3D3D3; border-radius: 30px; overflow: auto; padding: 20px;" >
    <table class="table table-size mt-8" id="example">
        <thead class="text-center">
            <tr>
                <th scope="col-items">Items</th>
                <th scope="col">Abbrev</th>
                <th scope="col">Department Name</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">ZIP Code</th>
                <th scope="col">Province</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @if ($addresseeAll->isEmpty())
                <tr class="border-b">
                    <td class="textStyle" colspan="8">No Addressee Record Found</td>
                </tr>
            @else
                @foreach ($addresseeAll as $index => $addressee)
                    <tr class="hover-row">
                        <th scope="row-item">{{ $index + 1 }}</th>
                        <th scope="row-item">{{ $addressee->abbrev }}</th>
                        <th class="textStyle">{{ $addressee->name_primary }}</th>
                        <th class="textStyle" scope="row-item">{{ $addressee->address }}</th>
                        <th class="textStyle" scope="row-item">{{ $addressee->city }}</th>
                        <th class="textStyle" scope="row-item">{{ $addressee->zip}}</th>
                        <th class="textStyle" scope="row-item">{{ $addressee->province }}</th>
                        <td>
                            <a href="{{ url('/update-addressee/'.$addressee->id) }}" class="btn btn-warning whitespace-nowrap">
                                <span class="material-symbols-outlined align-icon">draft_orders</span>
                                <span class="align-text">Update</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#example').dataTable({
            "info": false,
            "responsive": true,
            "language": {
                "search": "" },
            "scrollX": true,    // Enable horizontal scrolling
            "fixedHeader": true, // Enable fixed header (optional, adds a fixed header when scrolling)
            "columnDefs": [
                { responsivePriority: 1, targets: 0 }, // Set priority for columns to determine visibility on smaller screens
                { responsivePriority: 2, targets: 5 }  // Adjust targets as per your requirement
            ]
        });
        $('.dataTables_filter input').attr('placeholder', 'Search');
        $('#2').css('padding-top', '1px');
        $('.dataTables_length label').contents().filter(function() {
                return this.nodeType === 3; // Filter out text nodes
        }).remove();
        $('.dataTables_filter label').contents().filter(function() {
            return this.nodeType === 3; // Filter out text nodes
        }).remove();
    });

</script> 