<script type="text/javascript">
    $(document).ready(function() {
        $("#urut").inputmask({
            mask: "99",
            "placeholder": ""
        });
        $('#title').keyup(function() {
            this.value = this.value.toUpperCase();
        });
        $("#id").inputmask({
            mask: "AAAAAAAA",
            "placeholder": ""
        });
        $("#id").click(function() {
            var grup = $("#grup").val();
            var urut = $("#urut").val();
            $("#id").val(grup + "-" + urut);
        });
        $("#simpan").click(function() {
            var data = $("#test").serialize();
            $("#test").validate({
                rules: {
                    grup: "required",
                    parent_id: "required",
                    parent: "required",
                    urut: "required",
                    title: "required",
                    module_name: "required"

                }
            }).form();
            if ($('#test').valid()) {
                $.ajax({
                    url: '<?php echo base_url(); ?>index.php/admin/add_form/add_form',
                    data: data,
                    processData: false,
                    type: 'POST',
                    dataType: "json",
                    success: function(data) {}
                })

                alert('Data Berhasil Di Update');

                location.reload();
            }
        });
        $.lastSelectedRow = null;
        $("#list2").jqGrid({
            url: '<?php echo base_url(); ?>index.php/admin/add_form/grid2',
            datatype: "json",
            height: "auto",
            width: 690,
            shrinkToFit: false,
            mtype: "GET",
            rownumbers: true,
            colNames: ['Id',
                'Urut',
                'Grup',
                'Parent id',
                'Parent',
                'Title'
            ],
            colModel: [{
                    name: 'id',
                    index: 'id',
                    editable: false,
                    key: true,
                    width: 120,
                    editoptions: {
                        size: "20",
                        maxlength: "30"
                    }
                },
                {
                    name: 'urut',
                    index: 'urut',
                    editable: true,
                    width: 50,
                    editoptions: {
                        size: "20",
                        maxlength: "30"
                    }
                },
                {
                    name: 'grup_id',
                    index: 'grup_id',
                    editable: true,
                    width: 100,
                    edittype: "select",
                    editoptions: {
                        size: "20",
                        value: "<?php foreach ($title as $daftar) {  ?><?= $daftar->urut ?>:<?= $daftar->title ?>;<?php } ?>",
                        maxlength: "30"
                    }
                },
                {
                    name: 'parent_id',
                    index: 'parent_id',
                    editable: true,
                    width: 100,
                    editoptions: {
                        size: "20",
                        maxlength: "30"
                    }
                },
                {
                    name: 'is_parent',
                    index: 'is_parent',
                    editable: true,
                    width: 40,
                    edittype: "select",
                    editoptions: {
                        value: "1:YES;0:NO"
                    },
                },
                {
                    name: 'title',
                    index: 'title',
                    editable: true,
                    width: 250,
                    editoptions: {
                        size: "20",
                        maxlength: "30"
                    }
                },
            ],
            rowNum: 7,
            rowList: [15, 30, 60, 90, 120],
            sortname: 'id',
            sortorder: "asc",
            mtype: "GET",
        });
        $("#list3").jqGrid({
            url: '<?php echo base_url(); ?>index.php/admin/add_form/grid3',
            datatype: "json",
            height: "auto",
            width: 700,
            shrinkToFit: false,
            mtype: "GET",
            rownumbers: true,
            colNames: ['Id',
                'Urut',
                'Grup',
                'Parent id',
                'Parent',
                'Title'
            ],
            colModel: [{
                    name: 'id',
                    index: 'id',
                    editable: false,
                    key: true,
                    width: 120,
                    editoptions: {
                        size: "20",
                        maxlength: "30"
                    }
                },
                {
                    name: 'urut',
                    index: 'urut',
                    editable: true,
                    width: 50,
                    editoptions: {
                        size: "20",
                        maxlength: "30"
                    }
                },
                {
                    name: 'grup_id',
                    index: 'grup_id',
                    editable: true,
                    width: 100,
                    edittype: "select",
                    editoptions: {
                        size: "20",
                        value: "<?php foreach ($title as $daftar) {  ?><?= $daftar->urut ?>:<?= $daftar->title ?>;<?php } ?>",
                        maxlength: "30"
                    }
                },
                {
                    name: 'parent_id',
                    index: 'parent_id',
                    editable: true,
                    width: 100,
                    editoptions: {
                        size: "20",
                        maxlength: "30"
                    }
                },
                {
                    name: 'is_parent',
                    index: 'is_parent',
                    editable: true,
                    width: 40,
                    edittype: "select",
                    editoptions: {
                        value: "1:YES;0:NO"
                    },
                },
                {
                    name: 'title',
                    index: 'title',
                    editable: true,
                    width: 250,
                    editoptions: {
                        size: "20",
                        maxlength: "30"
                    }
                },
            ],
            rowNum: 5,
            rowList: [15, 30, 60, 90, 120],
            sortname: 'id',
            sortorder: "asc",
            mtype: "GET",
            onSelectRow: editRow,
            pager: '#pager3',
        });

        $("#list").jqGrid({
            url: '<?php echo base_url(); ?>index.php/admin/add_form/grid',
            datatype: "json",
            height: "auto",
            width: 1215,
            shrinkToFit: false,
            mtype: "GET",
            rownumbers: true,
            colNames: ['Id',
                'Urut',
                'Grup',
                'Parent id',
                'Parent',
                'Title',
                'Module Name'

            ],
            colModel: [{
                    name: 'id',
                    index: 'id',
                    editable: false,
                    key: true,
                    width: 120,
                    editoptions: {
                        size: "20",
                        maxlength: "30"
                    }
                },
                {
                    name: 'urut',
                    index: 'urut',
                    editable: true,
                    width: 100,
                    editoptions: {
                        size: "20",
                        maxlength: "30"
                    }
                },
                {
                    name: 'grup_id',
                    index: 'grup_id',
                    editable: true,
                    width: 100,
                    edittype: "select",
                    editoptions: {
                        size: "20",
                        value: "<?php foreach ($title as $daftar) {  ?><?= $daftar->urut ?>:<?= $daftar->title ?>;<?php } ?>",
                        maxlength: "30"
                    }
                },
                {
                    name: 'parent_id',
                    index: 'parent_id',
                    editable: true,
                    width: 200,
                    editoptions: {
                        size: "20",
                        maxlength: "30"
                    }
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
                {
                    name: 'title',
                    index: 'title',
                    editable: true,
                    width: 250,
                    editoptions: {
                        size: "20",
                        maxlength: "30"
                    }
                },
                {
                    name: 'module_name',
                    index: 'module_name',
                    editable: true,
                    width: 275
                },
            ],
            rowNum: 15,
            rowList: [15, 30, 60, 90, 120],
            sortname: 'id',
            sortorder: "asc",
            mtype: "GET",
            ondblClickRow: editRow,
            pager: '#pager',

            editurl: '<?php echo base_url(); ?>index.php/admin/add_form/edit',
        });
        jQuery("#list").jqGrid('navGrid', '#pager', {
            view: false,
            edit: false,
            add: false,
            del: true,
            search: false,
            viewtext: 'View',
            refreshtext: 'Reload',
        });
        var lastSelection;

        function editRow(id) {
            if (id && id !== lastSelection) {
                var grid = $("#list");
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

        $("#filter").change(function(e) {
            var text = $("#filter").val();
            var postdata = $("#list").jqGrid('getGridParam', 'postData');
            $.extend(postdata, {
                filters: '',
                searchField: 'grup_id',
                searchOper: 'bw',
                searchString: text
            });
            $("#list").jqGrid('setGridParam', {
                search: text.length > 0,
                postData: postdata
            });
            $("#list").trigger("reloadGrid", [{
                page: 1
            }]);
        });
        $("#search_1").keyup(function() {
            setTimeout(function() {
                var text = $("#search_1").val();
                var a = text.substring(-6, 2);
                var postdata = $("#list").jqGrid('getGridParam', 'postData');
                $.extend(postdata, {
                    filters: '',
                    searchField: 'title',
                    searchOper: 'bw',
                    title: text,
                });
                $("#list").jqGrid('setGridParam', {
                    search: text.length > 0,
                    postData: postdata
                });
                $("#list").trigger("reloadGrid", [{
                    page: 1
                }]);
            }, 25);
        });
        $("#grup").change(function(e) {
            var text = $("#grup").val();
            var postdata = $("#list2").jqGrid('getGridParam', 'postData');
            $.extend(postdata, {
                filters: '',
                searchField: 'grup_id',
                searchOper: 'bw',
                searchString: text
            });
            $("#list2").jqGrid('setGridParam', {
                search: text.length > 0,
                postData: postdata
            });
            $("#list2").trigger("reloadGrid", [{
                page: 1
            }]);
        });
        $("#parent_title").keyup(function() {
            setTimeout(function() {
                var text = $("#parent_title").val();
                var a = text.substring(-6, 2);
                var postdata = $("#list2").jqGrid('getGridParam', 'postData');
                $.extend(postdata, {
                    filters: '',
                    searchField: 'title',
                    searchOper: 'bw',
                    parent: text,
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
        $("#parent_id").keyup(function() {
            var text = $("#parent_id").val();
            var postdata = $("#list3").jqGrid('getGridParam', 'postData');
            $.extend(postdata, {
                filters: '',
                searchField: 'parent_id',
                searchOper: 'bw',
                parent_id: text
            });
            $("#list3").jqGrid('setGridParam', {
                search: text.length > 0,
                postData: postdata
            });
            $("#list3").trigger("reloadGrid", [{
                page: 1
            }]);
            var a = text.substring(-6, 2);
            var postdata = $("#list2").jqGrid('getGridParam', 'postData');
            $.extend(postdata, {
                filters: '',
                searchField: 'title',
                searchOper: 'bw',
                parent_id: text,
            });
            $("#list2").jqGrid('setGridParam', {
                search: text.length > 0,
                postData: postdata
            });
            $("#list2").trigger("reloadGrid", [{
                page: 1
            }]);

        });
    });
</script>
<style>
    .row {
        max-width: 1500px;
    }

    ._poto_circle {
        display: block;
        width: 150px;
        height: 150px;
        margin: 1em auto;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        -webkit-border-radius: 99em;
        -moz-border-radius: 99em;
        border-radius: 99em;
        border: 5px solid #eee;
        box-shadow: 0 3px 2px rgba(0, 0, 0, 0.3);
    }
</style>


<div class="row">
    <div class="large-12 columns">
        <div class="ui-widget-header">
            <h6>&nbsp;<img src="<?php echo base_url(); ?>stylesheets/Home_t.ico" width="25px">&nbsp;MANAJEMEN MENU</h6>
        </div>


        <div class="section-container tabs" data-section="tabs">

            <section>
                <p id="panel1" class="title" data-section-title><a href="#panel1"><i>Entry data</i></a></p>
                <div class="content" data-section-content>
                    <div class="row">
                        <form id="test">
                            <div class="large-5 columns">
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Grup</label>
                                    </div>
                                    <div class="large-5 columns">
                                        <select name="grup" id="grup" class="nine large-10 columns " tabindex="4">
                                            <option value=''></option>
                                            <?php foreach ($title as $daftar) { ?>
                                                <option value=<?= $daftar->urut ?>><?= $daftar->title ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="large-2 columns">
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Parent Title</label>
                                    </div>
                                    <div class="large-3 columns">
                                        <input type="text" id="parent_title" name="parent_title">
                                    </div>
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Parent id</label>
                                    </div>
                                    <div class="large-3 columns">
                                        <input type="text" id="parent_id" name="parent_id" value="0">
                                    </div>
                                </div>
                                <hr />
                                <div class="row">

                                    <div class="large-2 columns">
                                        <label></label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Title</label>
                                    </div>
                                    <div class="large-4 columns">
                                        <input type="text" id="title" name="title">
                                    </div>
                                    <div class="large-2 columns">
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">URL</label>
                                    </div>
                                    <div class="large-6 columns">
                                        <input type="text" id="module_name" name="module_name" value="#">
                                    </div>
                                    <div class="large-1 columns">
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Order</label>
                                    </div>
                                    <div class="large-3 columns">
                                        <input type="text" id="urut" name="urut">
                                    </div>
                                    <div class="large-2 columns">
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Parent?</label>
                                    </div>
                                    <div class="large-3 columns">
                                        <select name="parent" id="parent" class="nine large-10 columns " tabindex="4">
                                            <option value=''></option>
                                            <option value='1'>YES</option>
                                            <option value='0'>NO</option>
                                        </select>
                                    </div>
                                    <div class="large-2 columns">
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">.</div>
                                    <div class="large-6 columns">
                                        <a href="javascript:void(0);" type="button" class="bts bts-rounded bts-primary" id="simpan">Simpan</a>
                                    </div>
                                    <div class="large-3 columns">
                                    </div>

                                </div>

                            </div>
                        </form>
                        <div class="large-7 columns">
                            <div class="row">
                                <div class="large-2 columns">
                                    <label class="right inline"><span class="radius secondary label">Parent</label>
                                </div>
                            </div>
                            <div class="row">
                                <center>
                                    <table id="list2"></table>
                                </center>
                            </div>
                            <div class="row">
                                <div class="large-2 columns">
                                    <label class="right inline"><span class="radius secondary label">Child</label>
                                </div>
                            </div>
                            <div class="row">
                                <center>
                                    <table id="list3"></table>
                                </center>
                                <div id="pager3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <p id="panel2" class="title" data-section-title><a href="#panel2"><i>View</i></a></p>
                <div class="content" data-section-content>

                    <div class="row">
                        <div class="large-2 columns">
                            <label class="right inline"><span class="radius secondary label">Grup</label>
                        </div>
                        <div class="large-2 columns">
                            <select name="filter" id="filter" class="nine large-10 columns " tabindex="4">
                                <option value=''></option>
                                <?php foreach ($title as $daftar) { ?>
                                    <option value=<?= $daftar->urut ?>><?= $daftar->title ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="large-1 columns">
                            <label class="right inline"><span class="radius secondary label">Title</label>

                        </div>
                        <div class="large-2 columns">
                            <input type="text" id="search_1" name="search_1">
                        </div>
                        <div class="large-4 columns"><label></label>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <center>
                            <table id="list"></table>
                        </center>
                        <div id="pager"></div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>