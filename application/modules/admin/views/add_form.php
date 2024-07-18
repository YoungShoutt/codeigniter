<script type="text/javascript">
    function maxdigit() {
        var digit = $('#digit').val();
        document.getElementById('id1').maxLength = digit;
        document.getElementById('id2').maxLength = digit;
        document.getElementById('id3').maxLength = digit;
        document.getElementById('id4').maxLength = digit;
    }

    function convertDataURIToBinary(dataURI) {
        var BASE64_MARKER = ';base64,';
        var base64Index = dataURI.indexOf(BASE64_MARKER) + BASE64_MARKER.length;
        var base64 = dataURI.substring(base64Index);
        var raw = window.atob(base64);
        var rawLength = raw.length;
        var array = new Uint8Array(new ArrayBuffer(rawLength));

        for (i = 0; i < rawLength; i++) {
            array[i] = raw.charCodeAt(i);
        }
        return array;
    }

    function previewFile() {
        var preview = document.querySelector("#canvas");
        var file = document.querySelector('#fileDrawing').files[0];
        console.log(file);
        var reader = new FileReader();
        reader.addEventListener("load", function() {
            var binaryImg = convertDataURIToBinary(reader.result);
            var blob = new Blob([binaryImg], {
                type: file.type
            });
            blobURL = window.URL.createObjectURL(blob);
            console.log(reader.result);
            $("#inputFileBase64").val(reader.result);
            //$("#inputPictBase64").val(reader.result);

        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }

    }

    function previewFile() {
        var preview = document.querySelector("#canvas");
        var file = document.querySelector('#fileDrawing2').files[0];
        console.log(file);
        var reader = new FileReader();
        reader.addEventListener("load", function() {
            var binaryImg = convertDataURIToBinary(reader.result);
            var blob = new Blob([binaryImg], {
                type: file.type
            });
            blobURL = window.URL.createObjectURL(blob);
            console.log(reader.result);
            $("#inputFileBase642").val(reader.result);
            //$("#inputPictBase64").val(reader.result);

        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }

    }

    function formatterPdf(cellvalue, options, rowObject) {
        if (cellvalue) {
            var html = "<a class='fancybox' data-fancybox-type='iframe' rel='gallery2' href='<?php echo base_url(); ?>" + cellvalue + "' title=''><b>[Pdf]</b></a>";
            return html;
        } else {
            return '';
        }

    }

    function edit(id) {
        $.ajax({
            url: '<?php echo base_url(); ?>index.php/admin/add_form/read',
            data: {
                id: id
            },
            type: 'post',
            dataType: "json",
            success: function(data) {
                $('#firstModal').foundation('reveal', 'open');
                $("#id").val(id);
                $("#sort").val(data[0].urut);
                $("#parent").val(data[0].is_parent);
                $("#title").val(data[0].title);
                $("#url").val(data[0].module_name);
                document.getElementById('id').readOnly = true;
                document.getElementById("id1").style.display = "";
                document.getElementById("id").style.background = "#DCDCDC";
            }
        })

    }

    function hapus(id) {
        $.alert.open('Customer', '<center>Delete id:' + id + ' </center>', {
            OK: "Delete",
            Cancel: "Cancel"
        }, function(button) {
            if (button == 'OK') {
                $.ajax({
                    url: '<?php echo base_url(); ?>index.php/admin/add_form/delete',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.status == "success") {
                            $.alert.open('Customer', '<center>Succesfully Deleted </center>', {
                                OK: "OK",
                            }, function(button) {
                                if (button == 'OK') {} else {}
                            });
                            jQuery("#list2").trigger("reloadGrid");
                        }
                    }
                });

            } else {}
        });
    }

    function add_new(id, pos) {
        if (pos == 1) {
            $('#firstModal').foundation('reveal', 'open');
            $("#parent_id").val("0");
            document.getElementById("grup_1").style.display = "";
            document.getElementById("id1").style.display = "none";
        } else if (pos == 2) {
            $('#firstModal').foundation('reveal', 'open');
            document.getElementById("grup_1").style.display = "none";
            $("#parent_id").val(id);
            $("#grup1").val($("#search_grup").val());
            document.getElementById("id1").style.display = "none";

        } else if (pos == 3) {
            $('#firstModal').foundation('reveal', 'open');
            document.getElementById("grup_1").style.display = "none";
            $("#parent_id").val(id);
            $("#grup1").val($("#search_grup").val());
            document.getElementById("id1").style.display = "none";

        } else if (pos == 4) {
            $('#firstModal').foundation('reveal', 'open');
            document.getElementById("grup_1").style.display = "none";
            $("#parent_id").val(id);
            $("#grup1").val($("#search_grup").val());
            document.getElementById("id1").style.display = "none";

        }


    }



    $(document).ready(function() {
        $("#grup").select2({
            placeholder: 'Search Grup',
            allowClear: true,
            theme: 'classic',
            width: "resolve",
            ajax: {
                url: '<?php echo base_url("index.php/admin/add_form/find") ?>',
                dataType: 'json',
                data: function(params) {
                    var query = {
                        search: params.term,
                        field1: 'id',
                        field2: 'title',
                        table: 'dyn_groups',
                        page: params.page || 1,
                        type: 'public'
                    }
                    return query;
                },
                processResults: function(data, params) {
                    params.page = params.page || 1;
                    console.log(data.count_filtered);
                    return {
                        results: data.results,
                        pagination: {
                            more: (params.page * 10) < data.count_filtered
                        }
                    }
                }
            }
        }).change(function() {
            $("#grup1").val($("#grup").val());
        });
        $("#search_grup").select2({
            placeholder: 'Search Grup',
            allowClear: true,
            theme: 'classic',
            width: "resolve",
            ajax: {
                url: '<?php echo base_url("index.php/admin/add_form/find") ?>',
                dataType: 'json',
                data: function(params) {
                    var query = {
                        search: params.term,
                        field1: 'id',
                        field2: 'title',
                        table: 'dyn_groups',
                        page: params.page || 1,
                        type: 'public'
                    }
                    return query;
                },
                processResults: function(data, params) {
                    params.page = params.page || 1;
                    console.log(data.count_filtered);
                    return {
                        results: data.results,
                        pagination: {
                            more: (params.page * 10) < data.count_filtered
                        }
                    }
                }
            }
        }).change(function() {
            var text = $("#search_grup").val();
            var postdata = $("#list2").jqGrid('getGridParam', 'postData');
            $.extend(postdata, {
                search_grup: text,
            });
            $("#list2").jqGrid('setGridParam', {
                search: text.length > 0,
                postData: postdata
            });
            $("#list2").trigger("reloadGrid", [{
                page: 0
            }]);

        });

        $("#form1")[0].reset();
        $("#simpanadd").click(function() {
            var data = $("#add").serialize();
            $("#add").validate({
                rules: {
                    sort: "required",
                    parent: "required",
                    title: "required",
                    url: "required",
                    parent_id: "required",
                    grup1: "required",
                }
            }).form();
            if ($('#add').valid()) {
                $.ajax({
                    url: '<?php echo base_url(); ?>index.php/admin/add_form/simpanadd',
                    data: data,
                    type: 'post',
                    dataType: "json",
                    success: function(data) {
                        if (data.status == "success") {
                            $.alert.open('Customer', '<center>Data Successfully Saved </center>', {
                                OK: "OK"
                            }, function(button) {
                                if (button == 'OK') {
                                    $('#add')[0].reset();
                                    $('#firstModal').foundation('reveal', 'close');
                                    jQuery("#list2").trigger("reloadGrid");
                                } else {}
                            });
                        }
                    }
                })

            }
        });

        $("#list2").jqGrid({
            url: '<?php echo base_url(); ?>index.php/admin/add_form/listtree1',
            datatype: "json",
            width: 900,
            height: '300',
            shrinkToFit: false,
            rownumbers: true,
            colNames: ['ID', 'Sort', 'Title', 'Url', 'Is Parent'],
            colModel: [{
                    name: 'id',
                    index: 'id',
                    key: true,
                    editable: false,
                    width: 60
                },
                {
                    name: 'sort',
                    index: 'sort',
                    editable: true,
                    width: 60
                },

                {
                    name: 'title',
                    index: 'title',
                    editable: true,
                    width: 200
                },
                {
                    name: 'url',
                    index: 'url',
                    editable: true,
                    width: 315
                },
                {
                    name: 'is_parent',
                    index: 'is_parent',
                    editable: true,
                    width: 60,
                    edittype: "select",
                    editoptions: {
                        value: "1:YES;0:NO"
                    },
                },
            ],
            rowNum: 10,
            rowList: [10, 20, 30, 100],
            caption: "Sub Menu 1",
            viewrecords: true,
            sortname: 'urut',
            sortorder: "asc",
            pager: 'divPager2',
            ondblClickRow: editRow,
            editurl: '<?php echo base_url(); ?>index.php/admin/add_form/editlist',
            subGrid: true,
            subGridRowExpanded: function(subgrid_id, row_id) {
                var subgrid_table_id, pager_id;
                subgrid_table_id = subgrid_id + "_t";
                pager_id = "p_" + subgrid_table_id;
                $("#" + subgrid_id).html("<table id='" + subgrid_table_id + "' class='scroll'></table><div id='" + pager_id + "' class='scroll'></div>");
                jQuery("#" + subgrid_table_id).jqGrid({
                    url: '<?php echo base_url(); ?>index.php/admin/add_form/listtree2?id=' + row_id,
                    datatype: "json",
                    width: 820,
                    height: '300',
                    shrinkToFit: false,
                    rownumbers: true,
                    colNames: ['ID', 'Sort', 'Title', 'Url', 'Is Parent'],
                    colModel: [{
                            name: 'id',
                            index: 'id',
                            // key: true,
                            editable: false,
                            width: 60
                        },
                        {
                            name: 'sort',
                            index: 'sort',
                            editable: true,
                            width: 60
                        },

                        {
                            name: 'title',
                            index: 'title',
                            editable: true,
                            width: 200
                        },
                        {
                            name: 'url',
                            index: 'url',
                            editable: true,
                            width: 315
                        },
                        {
                            name: 'is_parent',
                            index: 'is_parent',
                            editable: true,
                            width: 60,
                            edittype: "select",
                            editoptions: {
                                value: "1:YES;0:NO"
                            },
                        },
                    ],
                    rowNum: 20,
                    pager: pager_id,
                    sortname: 'urut',
                    sortorder: "asc",
                    caption: 'Sub Menu 2',
                    height: '100%',
                    subGrid: true,
                    ondblClickRow: editRow,
                    editurl: '<?php echo base_url(); ?>index.php/admin/add_form/editlist',
                    subGridRowExpanded: function(subgrid_id, row_id) {
                        var subgrid_table_id, pager_id;
                        subgrid_table_id = subgrid_id + "_t";
                        pager_id = "p_" + subgrid_table_id;
                        $("#" + subgrid_id).html("<table id='" + subgrid_table_id + "' class='scroll'></table><div id='" + pager_id + "' class='scroll'></div>");
                        jQuery("#" + subgrid_table_id).jqGrid({
                            url: '<?php echo base_url(); ?>index.php/admin/add_form/listtree2?id=' + row_id,
                            datatype: "json",
                            width: 750,
                            height: '300',
                            shrinkToFit: false,
                            rownumbers: true,
                            colNames: ['ID', 'Sort', 'Title', 'Url', 'Is Parent'],
                            colModel: [{
                                    name: 'id',
                                    index: 'id',
                                    // key: true,
                                    editable: false,
                                    width: 60
                                },
                                {
                                    name: 'sort',
                                    index: 'sort',
                                    editable: true,
                                    width: 60
                                },

                                {
                                    name: 'title',
                                    index: 'title',
                                    editable: true,
                                    width: 200
                                },
                                {
                                    name: 'url',
                                    index: 'url',
                                    editable: true,
                                    width: 315
                                },
                                {
                                    name: 'is_parent',
                                    index: 'is_parent',
                                    editable: true,
                                    width: 60,
                                    edittype: "select",
                                    editoptions: {
                                        value: "1:YES;0:NO"
                                    },
                                },
                            ],
                            rowNum: 20,
                            pager: pager_id,
                            sortname: 'urut',
                            caption: 'Sub Menu 3',
                            sortorder: "asc",
                            height: '100%',
                            ondblClickRow: editRow,
                            editurl: '<?php echo base_url(); ?>index.php/admin/add_form/editlist',

                        });
                        jQuery("#" + subgrid_table_id).jqGrid('navGrid', "#" + pager_id, {
                            edit: false,
                            add: false,
                            del: false,
                            search: false,
                            refresh: false,
                        });
                        $("#" + subgrid_table_id).navButtonAdd("#" + pager_id, {
                            caption: "Add New",
                            title: "Click here to add Add New",
                            buttonicon: "ui-icon-plusthick",
                            onClickButton: function() {
                                var pos = 3;
                                var id = row_id;
                                add_new(id, pos)
                            },
                            position: "first"
                        });
                        $("#" + subgrid_table_id).navButtonAdd("#" + pager_id, {
                            caption: "Delete",
                            title: "Click here to Delete",
                            buttonicon: "ui-icon-plusthick",
                            onClickButton: function() {
                                var gr = jQuery("#" + subgrid_table_id).jqGrid('getGridParam', 'selrow');
                                var id = $("#" + subgrid_table_id).getCell(gr, 'id');
                                hapus(id);
                            },
                            position: "last"
                        });
                        $("#" + subgrid_table_id).navButtonAdd("#" + pager_id, {
                            caption: "Edit",
                            title: "Click here to Edit",
                            buttonicon: "ui-icon-plusthick",
                            onClickButton: function() {
                                $.alert.open('Customer', '<center>Double Click List For Edit </center>', {
                                    OK: "OK",
                                }, function(button) {
                                    if (button == 'OK') {} else {}
                                });
                            },
                            position: "last"
                        });
                        var lastSelection;

                        function editRow(id) {
                            if (id && id !== lastSelection) {
                                var grid = $("#" + subgrid_table_id);
                                grid.jqGrid('restoreRow', lastSelection);
                                grid.jqGrid('editRow', id, {
                                    keys: true,
                                    onEnter: function(rowid, options, event) {
                                        if (confirm("Save the row with ID: " + rowid) === true) {
                                            $(this).jqGrid("saveRow", rowid, options);
                                        }
                                    }
                                });
                                lastSelection = id;
                            }
                        }
                    }
                });
                var lastSelection;

                function editRow(id) {
                    if (id && id !== lastSelection) {
                        var grid = $("#" + subgrid_table_id);
                        grid.jqGrid('restoreRow', lastSelection);
                        grid.jqGrid('editRow', id, {
                            keys: true,
                            onEnter: function(rowid, options, event) {
                                if (confirm("Save the row with ID: " + rowid) === true) {
                                    $(this).jqGrid("saveRow", rowid, options);
                                }
                            }
                        });
                        lastSelection = id;
                    }
                }
                jQuery("#" + subgrid_table_id).jqGrid('navGrid', "#" + pager_id, {
                    edit: false,
                    add: false,
                    del: false,
                    search: false,
                    refresh: false,
                });
                $("#" + subgrid_table_id).navButtonAdd("#" + pager_id, {
                    caption: "Add New",
                    title: "Click here to add Add New",
                    buttonicon: "ui-icon-plusthick",
                    onClickButton: function() {
                        var pos = 2;
                        var id = row_id;
                        add_new(id, pos)
                    },
                    position: "first"
                });
                $("#" + subgrid_table_id).navButtonAdd("#" + pager_id, {
                    caption: "Delete",
                    title: "Click here to Delete",
                    buttonicon: "ui-icon-plusthick",
                    onClickButton: function() {
                        var gr = jQuery("#" + subgrid_table_id).jqGrid('getGridParam', 'selrow');
                        var id = $("#" + subgrid_table_id).getCell(gr, 'id');
                        hapus(id);
                    },
                    position: "last"
                });
                $("#" + subgrid_table_id).navButtonAdd("#" + pager_id, {
                    caption: "Edit",
                    title: "Click here to Edit",
                    buttonicon: "ui-icon-plusthick",
                    onClickButton: function() {
                        $.alert.open('Customer', '<center>Double Click List For Edit </center>', {
                            OK: "OK",
                        }, function(button) {
                            if (button == 'OK') {} else {}
                        });
                    },
                    position: "last"
                });
            }
        });
        var lastSelection;

        function editRow(id) {
            if (id && id !== lastSelection) {
                var grid = $("#list2");
                grid.jqGrid('restoreRow', lastSelection);
                grid.jqGrid('editRow', id, {
                    keys: true,
                    onEnter: function(rowid, options, event) {
                        if (confirm("Save the row with ID: " + rowid) === true) {
                            $(this).jqGrid("saveRow", rowid, options);
                        }
                    }
                });
                lastSelection = id;
            }
        }
        jQuery("#list2").jqGrid('navGrid', "#divPager2", {
            edit: false,
            add: false,
            del: false,
            search: false,
            refresh: false
        });
        $("#list2").navButtonAdd("#divPager2", {
            caption: "Add New",
            title: "Click here to add Add New",
            buttonicon: "ui-icon-plusthick",
            onClickButton: function() {
                var pos = 1;
                var id = 0;
                add_new(id, pos)
            },
            position: "first"
        });
        $("#list2").navButtonAdd("#divPager2", {
            caption: "Delete",
            title: "Click here to Delete",
            buttonicon: "ui-icon-plusthick",
            onClickButton: function() {
                var gr = jQuery("#list2").jqGrid('getGridParam', 'selrow');
                var id = $('#list2').getCell(gr, 'id');
                hapus(id);
            },
            position: "last"
        });
        $("#list2").navButtonAdd("#divPager2", {
            caption: "Edit",
            title: "Click here to Edit",
            buttonicon: "ui-icon-plusthick",
            onClickButton: function() {
                $.alert.open('Customer', '<center>Double Click List For Edit </center>', {
                    OK: "OK",
                }, function(button) {
                    if (button == 'OK') {} else {}
                });
            },
            position: "last"
        });
        $("#searchmenu").keyup(function() {
            setTimeout(function() {
                var text = $("#searchmenu").val();
                var postdata = $("#list2").jqGrid('getGridParam', 'postData');
                $.extend(postdata, {
                    title: text,
                });
                $("#list2").jqGrid('setGridParam', {
                    search: text.length > 0,
                    postData: postdata
                });
                $("#list2").trigger("reloadGrid", [{
                    page: 1
                }]);
            }, 25);
        });



    });
</script>

<div class="row">
    <div class="row">
        <div id="formx">
            <div class="ui-jqgrid-titlebar ui-widget-header ui-corner-tl ui-corner-tr ui-helper-clearfix">
                <h6>&nbsp;<img src="<?php echo base_url(); ?>images/crud/home.png">&nbsp;Coba </h6>
            </div>
            <hr>
            <div class="section-container tabs" data-section="tabs">
                <section>
                    <p id="panel1" class="title" data-section-title><a href="#panel1"><b>Entry data</b></a></p>
                    <div class="content" data-section-content>
                        <form id="form1" action="" method="post">
                            <div class="row">
                                <div class="large-2 columns">
                                    <label class="right inline"><span class="radius secondary label">Grup :</label>

                                </div>
                                <div class="large-2 columns">
                                    <select name="search_grup" id="search_grup" style="width: 100%">
                                    </select>
                                </div>
                                <div class="large-2 columns">
                                    <label class="right inline"><span class="radius secondary label">Title Menu :</label>
                                </div>
                                <div class="large-2 columns">
                                    <input type="text" id="searchmenu" class='iblue' name="searchmenu">
                                </div>
                                <div class="large-4 columns">
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                    <center>
                                        <table id="list2"></table>
                                    </center>
                                    <div id="divPager2"></div>
                                    <br>
                                    <hr>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
<div id="firstModal" class="reveal-modal medium" style="display: none" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
    <div id="formx">
        <form id="add">
            <div class="row">
                <div class="large-12 columns">
                    <div class="row" id="id1">
                        <div class="large-3 columns">
                            <label for="itemCode" class="right inline">ID</label>
                        </div>
                        <div class="large-4 columns">
                            <input type="text" id="id" name="id">
                        </div>
                        <div class="large-2 columns"></div>
                    </div>
                    <div class="row" id="grup_1">
                        <div class="large-3 columns">
                            <label for="itemCode" class="right inline">Group</label>
                        </div>
                        <div class="large-4 columns">
                            <select name="grup" id="grup" style="width: 100%">
                            </select>
                        </div>
                        <div class="large-2 columns"></div>
                    </div>
                    <div class="row">
                        <div class="large-3 columns">
                            <label for="itemCode" class="right inline">Sort</label>
                        </div>
                        <div class="large-1 columns">
                            <input type="number" id="sort" name="sort">
                        </div>
                        <div class="large-6 columns"></div>
                    </div>
                    <div class="row">
                        <div class="large-3 columns">
                            <label for="itemCode" class="right inline">Is parent?</label>
                        </div>
                        <div class="large-4 columns">
                            <select name="parent" id="parent" style="width: 100%">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="large-2 columns"></div>
                    </div>
                    <div class="row">
                        <div class="large-3 columns">
                            <label for="itemCode" class="right inline">Title</label>
                        </div>
                        <div class="large-3 columns">
                            <input type="text" id="title" name="title">
                        </div>
                        <div class="large-6 columns"></div>
                    </div>
                    <div class="row">
                        <div class="large-3 columns">
                            <label for="itemCode" class="right inline">Url</label>
                        </div>
                        <div class="large-3 columns">
                            <input type="text" id="url" name="url">
                        </div>
                        <div class="large-6 columns"></div>
                    </div>
                    <div class="row">
                        <div class="large-3 columns">
                            <input type="text" id="parent_id" name="parent_id" style="display:none;">
                            <input type="text" id="grup1" name="grup1" style="display:none;">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="large-3 columns"></div>
                        <div class="large-9 columns">
                            <a href="javascript:void(0)" id="simpanadd" class="btnx" style="padding: 9px 17px; font-size: 14px; ">Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>