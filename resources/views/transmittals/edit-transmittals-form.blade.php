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
        border-bottom: 3px solid #0026C8;
        }
        table.dataTable thead th:active,
        table.dataTable thead td:active {
        outline: none;
        }
        table.dataTable tfoot th,
        table.dataTable tfoot td {
        padding: 10px 18px 6px 18px;
        border-top: 1px solid #909090;
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
        background-color: #FFFFFF;
        border-bottom: 1px solid #D3D3D3;
        border-radius: 50px;
        }
        
        table.dataTable tbody tr.selected {
        background-color: #b0bed9;
        }
        table.dataTable tbody th,
        table.dataTable tbody td {
        padding: 8px 10px;
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
        .dataTables_wrapper {
        position: relative;
        clear: both;
        }
        .dataTables_wrapper .dataTables_length {
        float: left;
        margin-bottom: 30px;
        }
        .dataTables_wrapper .dataTables_length select {
        border: 1px solid #aaa;
        width: 80px;
        border-radius: 15px;
        /* padding-left: 10px; */
        background-color: transparent;
        }
        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #aaa;
            width: 500px;
            border-radius: 15px;
            background-color: transparent;
        }

        .dataTables_wrapper .dataTables_filter input::placeholder {
            /* Set an empty string as the placeholder */
            content: '';
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
        @media screen and (max-width: 640px) {
        .dataTables_wrapper .dataTables_length{
            float: none;
            text-align: start;
        }
        .dataTables_wrapper .dataTables_filter {
            float: none;
            text-align: end;
        }
        .dataTables_wrapper .dataTables_filter {
            margin-top: 0.5em;
        }
        }

    /* end - table */

    .custom-border {
        border: 2px solid #333; /* Change #333 to the desired dark color code */
        padding: 20px;
        margin-left: 5px;
        max-width: 540px;
    }

    .container {
        position: relative;
        max-width: 200px;
        margin-left: 5px;
        margin-right: 20px;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .exit-button {
        position: absolute;
        top: 20px;
        right: 10px;
        cursor: pointer;
        font-size: 18px;
        color: #333;
    }    

    .tracking {
        width: 20px;
    }

    .form-control {
        border-radius: 15px;
    }


    .btn {
        border-radius: 15px;
    }

    .btn-secondary {
        border: 1px solid #EE1A2E;
        border-radius: 15px;
        color: #EE1A2E;
        align-items: center;
        justify-content: center;
    }

    .btn-secondary:hover {
        border: 1px solid #EE1A2E;
        background: #EE1A2E;
        color: #fff;
    }

    .fa-angle-left {
        margin-right: 10px;
        margin-left: 10px;
        font-size: 25px;
        color: #909090;
    }

    .fa-angle-left:hover {
        color: #0026C8;
        border: 1px solid #0026C8;
        border-radius: 15px;
        padding: 2px;
        font-size: 20px;
    }

    .display-6 {
        color: #909090;
        font-size: 30px;
        font-weight: 500;
    }

    .fa-circle-xmark {
        font-size: 13px;
        padding-right: 5px;
        padding-top: 3px;
        padding-bottom: 3px;
    }

    #flashMessage.alert-primary {
        background-color: #0D6EFD; 
        color: #fff;
        text-align: center; 
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600; 
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
        z-index: 50; /* Ensure flash message is above overlay */
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
    .btn-warning {
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
    .btn-warning:hover {
        color: #fff;
        border-radius: 50px;
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
    .btn-submit {
        font-size: 14px;
        color: #fff;
        padding: 8px; 
        border: none; 
        border-radius: 15px;
        background: #0026C8;
        outline: none; 
        position: relative; 
        transition: all 0.4s ease;
    }
    .btn-submit:hover {
        color: #fff;
        border-radius: 50px;
        background: #0026C8;
    }
    .btn-submit:hover::after {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px; 
        right: -5px; 
        bottom: -5px; 
        border: 2px solid #0026C8; 
        border-radius: 50px;
        animation: fadeIn 0.4s forwards; 
    }
    .btn-danger {
        font-size: 14px;
        color: #fff;
        padding: 8px; 
        border: none; 
        border-radius: 15px;
        background: #EE1A2E;
        outline: none; 
        position: relative; 
        transition: all 0.4s ease;
    }
    .btn-danger:hover {
        color: #fff;
        border-radius: 50px;
        background: #EE1A2E;
    }
    .btn-danger:hover::after {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px; 
        right: -5px; 
        bottom: -5px; 
        border: 2px solid #EE1A2E; 
        border-radius: 50px;
        animation: fadeIn 0.4s forwards; 
    }
    .custom-header{
        background-color: #0026C8;
    }
    .modal-title {
    color: #ffffff;
    }
    .counter-display {
        border: 1px solid blue; 
        border-radius: 40px; 
        color: #0026C8; 
        font-size: 18px; 
        font-weight: bold;
        display: inline-block; /* Ensure it's inline-block so it adjusts to content width */
        padding: 6px 15px; /* Adjust padding as needed */
        white-space: nowrap; /* Prevent line breaks */
    }
</style>
<div id="overlay"></div>
<div class="row mt-2 align-items-center">
    <div class="d-flex col-md-8 col-lg-5 col-sm-6 align-items-center"> <!-- Added align-items-center -->
        <a href="{{ url('/tracer') }}"><i class="fa-solid fa-angle-left"></i></a>
        <h1 class="display-6 ml-3">Update Transmittal</h1>
    </div>

    <div class="col-md-2 col-sm-6 col-lg-3">
        <div class="counter-display text-center">{{$count}} Records</div>
    </div>
</div>


<div class="mssg position-fixed top-8 start-50 translate-middle-x w-1/4 z-50">
    <div class="mssg">
        @if(session('success'))
            <div id="flashMessage" class="alert alert-primary" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif
    </div>
</div>

<!-- @if (session('success'))
    <div class="alert alert-success mt-5">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger mt-5">
        {{ session('error') }}
    </div>
@endif -->

{{-- this form for update  --}}
<form action="{{ url('transmittals/'. $records->id. '/update') }}" method="POST" class="p-3 needs-validation" onsubmit="submitForm()">
    @csrf
    @method("PATCH")
    <div class="row mt-4">
        <div class="col-lg-2 col-md-3 my-2">
            <input value="{{ $records->date }}" type="date" name="date_posted" id="date_posted" class="form-control rounded-md text-19" style="border-color:#a0aec0;" required readonly>
        </div>
        <div class="col-lg-3 col-md-3 my-2">
            <div class="input-group">
                <input value="{{ $records->mailTrackNum }}" placeholder="Mail Tracking Number" type="text" name="mail_tn" id="mail_tn" class="form-control tracking rounded-md text-19" style="border-color:#a0aec0;" required disabled>
                <button id="editIcon" class="btn btn-outline-secondary" type="button">
                    <i class="fa-solid fa-pen"></i>
                </button>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 my-2">
            <input class="form-control" list="datalistOptions" id="addresseeDataList" placeholder="Addressee" value="{{ old('addresseeDataList', $addressee->abbrev . ' - ' . $addressee->name_primary) }}" required>
            <datalist id="datalistOptions">
                <option value="Add New Addressee"></option>
            </datalist>
            <input class="form-control" type="hidden" name="receiver" id="receiver" value="{{ $addressee->id }}">
            <div id="popover-content" class="mt-2 text-danger" style="display: none;">
                Invalid Addressee. <a href="#" onclick="openModal()" class="underline-link">Click here</a> to add new addressee.
            </div>
        </div>
    </div>
    <div class="text-end mt-2">
        <button type="submit" class="btn btn-warning mr-2">Update</button>
        <button type="button" class="btn btn-submit" data-bs-toggle="modal" data-bs-target="#newRRRModal">Add RRR TN</button>
    </div>
</form>

<div class="content my-5">
    <table class="table table-size hover" id="returnCardsTable" style="border: 1px solid #D3D3D3; border-radius: 30px; overflow: auto; padding: 20px;">
        <thead class="text-center">
        <tr>
            <th scope="col">Items</th>
            <th scope="col">RRR Tracking Numbers</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody class="text-center">
            @if ($rrr_tn->isEmpty())
                <tr>
                    <th>Empty Record</th>
                    <td>No RRRTN Found</td>
                    <td>------</td>
                </tr>
            @else
                @foreach ($rrr_tn as $index => $rrt)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $rrt->returncard }}</td>
                        <td>
                            <form method="POST" action="{{ route('return.destroy', $rrt->id) }}" accept-charset="UTF-8">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-secondary whitespace-nowrap" onclick="return confirm('Confirm delete? {{ $rrt->returncard }}')">
                                    <i class="fa-solid fa-circle-xmark"></i>Remove</button>   
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
</div>

<!--  modal for creating new addressee-->
<div class="modal fade" id="newAddresseeModal" tabindex="-1" role="dialog" aria-labelledby="newAddresseeModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="newAddresseeModalLabel">Add New Addressee</h5>
        </div>
        <div class="mssg">
            @if(session('record_added'))
            
                <div class="alert alert-primary" role="alert">
                    <p>{{ session('record_added') }}</p>
                </div>
                <script>
                    $(document).ready(function () {
                        $('#newAddresseeModal').modal('show');
                    });
                </script>
            @endif
        </div>
        <form action="/add_addressee" method="post">
            @csrf
            <div class="modal-body">
                <!-- Add your form fields for adding a new addressee here -->
                <!-- Example: -->
                <input type="text" name="nameAbbrev" id="nameAbbrev" class="form-control mb-2" placeholder="Addressee Abbreviation" required>
                <input type="text" name="namePrimary" id="namePrimary" class="form-control mb-2" placeholder="Addressee Name Line 1" required>
                <input type="text" name="nameSecondary" id="nameSecondary" class="form-control mb-2" placeholder="Addressee Name Line 2">
                <input type="text" name="address" id="address" class="form-control mb-2" placeholder="Floor/Bldg/Street/Barangay ">
                <input type="text" name="city" id="city" class="form-control mb-2" placeholder="City/Municipality" required>
                <input type="text" name="zip" id="zip" class="form-control mb-2" placeholder="Zip Code" required>
                <input type="text" name="province" id="province" class="form-control mb-2" placeholder="Province"   required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" onclick="closeModal()">Close</button>
                <button type="submit" class="btn btn-outline-primary" onclick="saveAddresee()">Save Addressee</button>
            </div>
        </form>
    </div>
</div>
</div>

<!-- modal for add RRR TN -->
<div class="modal fade" id="newRRRModal" tabindex="-1" aria-labelledby="newRRRModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header custom-header">
            <h5 class="modal-title" id="newRRRModalLabel">New RRR Tracking Number</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="returnForm" action="/addReturn" method="POST">
            @csrf
            <div class="row d-flex">
                <div class="col-10 mx-0">
                    <div class="relative mb-2.5 ms-2 mt-3">
                        <input type="text" name="rrr_tn" id="rrr_tn" class="text-dark form-control block px-3 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"/>
                        <input type="text" value="{{ $records->mailTrackNum }}" class="" id="last-barcode" placeholder="Transmittal_Barcode" name="truckNumMail" hidden>
                        <label for="rrr_tn" class="absolute text-sm text-indigo-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">RRR Tracking Number/s</label>
                    </div>
                </div>
                <div class="col-2 mx-0 mt-3">
                    <button type="button" id="add" class="rounded-full btn-sm text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium px-2.5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" onclick="addTN()">Add</button>
                </div>
            </div>
            <div class="row mt-2 m-2">
                <div class="col">
                    <div class="custom-border font-md rounded-md" id="rrr_div" style="border-color:#a0aec0;">
                        <div id="rrrtn_error" class="text-danger mt-2"></div>
                        <input type="hidden" name="rrr_tns" id="rrr_tns_input">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="submitForm()" class="btn btn focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save changes</button>
            </div>
        </form>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="newAddresseeModal" tabindex="-1" role="dialog" aria-labelledby="newAddresseeModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="newAddresseeModalLabel">Add New Addressee</h5>
        </div>
        <div class="mssg">
            @if(session('record_added'))
            
                <div class="alert alert-primary" role="alert">
                    <p>{{ session('record_added') }}</p>
                </div>
                <script>
                    $(document).ready(function () {
                        $('#newAddresseeModal').modal('show');
                    });
                </script>
            @endif
        </div>
        <form action="/add_addressee" method="post">
            @csrf
            <div class="modal-body">
                <!-- Add your form fields for adding a new addressee here -->
                <!-- Example: -->
                <input type="text" name="nameAbbrev" id="nameAbbrev" class="form-control mb-2" placeholder="Addressee Abbreviation" required>
                <input type="text" name="namePrimary" id="namePrimary" class="form-control mb-2" placeholder="Addressee Name Line 1" required>
                <input type="text" name="nameSecondary" id="nameSecondary" class="form-control mb-2" placeholder="Addressee Name Line 2">
                <input type="text" name="address" id="address" class="form-control mb-2" placeholder="Floor/Bldg/Street/Barangay ">
                <input type="text" name="city" id="city" class="form-control mb-2" placeholder="City/Municipality" required>
                <input type="text" name="zip" id="zip" class="form-control mb-2" placeholder="Zip Code" required>
                <input type="text" name="province" id="province" class="form-control mb-2" placeholder="Province"   required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" onclick="closeModal()">Close</button>
                <button type="submit" class="btn btn-outline-primary" onclick="saveAddresee()">Save Addressee</button>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        if ($('#flashMessage').length > 0) {
            $('#overlay').fadeIn('slow');
        }

        setTimeout(function() {
            $('#flashMessage').fadeOut('slow');
            $('#overlay').fadeOut('slow');
        }, 700);
    });

    $(document).ready(function() {
    // Initially, disable the input field
    $('#mail_tn').prop('disabled', true);

    // Flag to track if the input field is being edited
    var isEditing = false;

        // When the edit icon is clicked
        $('#editIcon').click(function() {
            // Enable the input field for editing
            $('#mail_tn').prop('disabled', false);
            // Focus on the input field
            $('#mail_tn').focus();
            // Set editing flag to true
            isEditing = true;
        });

        // When the user clicks outside the input field or the edit icon
        $(document).click(function(e) {
            if (!$(e.target).closest('#mail_tn').length && !$(e.target).closest('#editIcon').length) {
                // If not currently editing and input field is empty, disable it
                if (!isEditing && $('#mail_tn').val() === '') {
                    $('#mail_tn').prop('disabled', true);
                }
                // Reset editing flag
                isEditing = false;
            }
        });

        // When submitting the form
        $('form').submit(function() {
            // Re-enable the input field before form submission
            $('#mail_tn').prop('disabled', false);
        });
    });

    // edit button - end //

    $(document).ready(function() {
        $('#returnCardsTable').DataTable({
            "info": false,
            "responsive": true,
            "language": {
            "search": "" }
        });

        $('.dataTables_filter input').attr('placeholder', 'Search');
        $('.dataTables_length label').contents().filter(function() {
            return this.nodeType === 3; // Filter out text nodes
        }).remove();
        $('.dataTables_filter label').contents().filter(function() {
            return this.nodeType === 3; // Filter out text nodes
        }).remove();

    });

    
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('addresseeDataList').addEventListener('input', handleAddresseeDataListInput);
        fetchAddressees();
    });
    function handleAddresseeDataListInput() {
        console.log("function called");
        var addresseeVal = document.getElementById('receiver');
        var popUp = document.getElementById('popover-content');
        var tn = document.getElementById('mail_tn');
        var selectedValue = this.value;


        if (selectedValue === 'Add New Addressee') {
            $('#newAddresseeModal').modal('show');
            this.value = '';
        } else {
            var selectedOption = document.querySelector('#datalistOptions option[value="' + selectedValue + '"]');
            
            if (selectedOption) {
                var selectedId = selectedOption.id;
                var selectedAddressee = addressees.find(addressee => addressee.id == selectedId);
                addresseeVal.value = selectedId;
                popUp.style.display = 'none';
            } else {
                popUp.style.display = 'block';
            }

            if (!selectedOption & selectedValue == '') {
                popUp.style.display = 'none';
            }
        }
    }
    function closeModal() {
        $('#newAddresseeModal').modal('hide');
        $('#confirmationModal').modal('hide');
    }

    function openModal() {
        $('#newAddresseeModal').modal('show');
    }

    function saveNewAddressee() {
        $('#newAddresseeModal').modal('hide');
    }

    function fetchAddressees() {
        fetch('/get-addressees')
            .then(response => response.json())
            .then(populateAddresseesDatalist)
            .catch(error => console.error('Error fetching addressees:', error));
    }

    function populateAddresseesDatalist(data) {
        const datalist = document.getElementById('datalistOptions');
        addressees = data.addressees;

        addressees.forEach(addressee => {
            const option = document.createElement('option');
            option.value = `${addressee.abbrev} - ${addressee.name_primary}`;
            option.id = addressee.id;
            datalist.appendChild(option);
        });
    }

    // var rrr_tn_value = document.getElementById("rrr_tn");
    document.getElementById("rrr_tn").addEventListener("keypress", function (event) {
        if (event.key === "Enter") {
            event.preventDefault();
            addTN();
        }
    });

    function addTN() {
        var rrr_tnInput = document.getElementById('rrr_tn');
        var rrr_tnsInput = document.getElementById('rrr_tns_input');
        var rrrtn_error = $('#rrrtn_error');
        
        // Reset error message
        rrrtn_error.text('');

        if (rrr_tnInput.value.trim() === "") {
            // Handle empty input
            return;
        }

        var rrr_tn = rrr_tnInput.value.trim();
        var rrr_tns = JSON.parse(rrr_tnsInput.value || '[]');

        // Check if the tracking number already exists
        if (rrr_tns.includes(rrr_tn)) {
            rrrtn_error.text('Tracking number already added');
            return;
        }

        rrr_tns.push(rrr_tn);
        rrr_tnInput.value = ''; // Clear input
        rrr_tnsInput.value = JSON.stringify(rrr_tns);

        // Display added RRR tracking number
        var rrr_div = document.getElementById('rrr_div');
        var new_rrr_span = document.createElement('span');
        new_rrr_span.textContent = rrr_tn;
        new_rrr_span.className = 'badge bg-info text-dark mx-1 my-1';
        rrr_div.appendChild(new_rrr_span);
    }
    

    function submitForm() {
        // Submit the form
        document.getElementById('returnForm').submit();
    }

</script>