<script type="text/javascript">
    $(document).ready(function() {

        //--------------------------------------------- SECTION 1 --------------------------------------------
        $('form').attr('autocomplete', 'off');

        // AUTO NUMBER TAMBAHKAN JUGA PADA BAGIAN SAVE UTAMA. (CEK BARIS 74)
        $("#kode_tanggal").change(function() {
            var tgl = $('#kode_tanggal').val().replace(/-/g, '');
            $.ajax({
                url: "<?php base_url(); ?>ijentrayek/autonumber_kode",
                type: "POST",
                data: {
                    "data": $('#kode_tanggal').val()
                },
                dataType: "JSON",
                success: function(data) {
                    var count = Number(data[0].num_rows);
                    var c = count + 1;
                    y = (c > 9) ? c : '0' + c;
                    var counter = y;
                    var year = tgl.substr(0, 8);
                    $('#noijin_trayek').val("DIT" + year + counter).focusout();
                },
                error: function() {}
            });
        });


        // $("#kode_nip").focusout(function() {
        //     var kode_nip = $('#kode_nip').val();
        //     $.ajax({
        //         url: '<?php echo base_url(); ?>index.php/angkutan/ijentrayek/cek_kode',
        //         method: "POST",
        //         dataType: "json",
        //         data: {
        //             'kode_nip': kode_nip
        //         },
        //         success: function(data) {
        //             // console.log(data);
        //             if (data.status == "exist") {
        //                 $.alert.open('Data Ijin Trayek', 'No. Ijin Trayek <b>"' + kode_nip + '"</b> sudah ada. Silahkan cek <b>View Tab</b>.', {
        //                     OK: "OK"
        //                 }, function(button) {
        //                     if (button == 'OK') {
        //                         setTimeout(function() {
        //                             $("#kode_nip").val("").focus();
        //                         }, 1);
        //                     } else {}
        //                 });
        //             } else if (data.status == "inactive") {
        //                 $.alert.open('Data Ijin Trayek', 'No. Ijin Trayek <b>"' + kode_nip + '"</b> sudah ada, tetapi <b>tidak aktif</b>.', {
        //                     OK: "OK"
        //                 }, function(button) {
        //                     if (button == 'OK') {
        //                         setTimeout(function() {
        //                             $("#kode_nip").val("").focus();
        //                         }, 1);
        //                     } else {}
        //                 });
        //             } else if (data.status == "none") {} else {}
        //         },
        //         error: function() {
        //             $.alert.open('Data Ijin Trayek', '<center>Koneksi eror !</center>', {
        //                 OK: "OK",
        //             }, function(button) {
        //                 if (button == 'OK') {
        //                     location.reload();
        //                 } else {}
        //             });
        //         }
        //     });

        // });

        $("#save").click(function() {
            var tgl = $('#kode_tanggal').val().replace(/-/g, '');
            $.ajax({
                url: "<?php base_url(); ?>ijentrayek/autonumber_kode",
                type: "POST",
                data: {
                    "data": $('#kode_tanggal').val()
                },
                dataType: "JSON",
                success: function(data) {
                    var count = Number(data[0].num_rows);
                    var c = count + 1;
                    y = (c > 9) ? c : '0' + c;
                    var counter = y;
                    var year = tgl.substr(0, 8);
                    $('#noijin_trayek').val("DIT" + year + counter).focusout();

                    // $("#form1").on('submit', (function(e) {
                    // e.preventDefault();
                    var data = $("#form1").serialize();

                    if ($("#kode_tanggal").val() == '') {
                        setTimeout(function() {
                            $("#kode_tanggal").focus();
                        }, 1);
                    } else if ($("#noijin_trayek").val() == '') {
                        setTimeout(function() {
                            $("#noijin_trayek").focus();
                        }, 1);
                    } else if ($("#kode_diberikan").val() == '') {
                        setTimeout(function() {
                            $("#kode_diberikan").focus();
                        }, 1);
                    } else if ($("#kode_alamat").val() == '') {
                        setTimeout(function() {
                            $("#kode_alamat").focus();
                        }, 1);
                    } else if ($("#select_no_kend").val() == '') {
                        setTimeout(function() {
                            $("#select_no_kend").focus();
                        }, 1);
                    } else if ($("#kode_daya").val() == '') {
                        setTimeout(function() {
                            $("#kode_daya").focus();
                        }, 1);
                    } else if ($("#select_pd_trayek").val() == '') {
                        setTimeout(function() {
                            $("#select_pd_trayek").focus();
                        }, 1);
                    } else if ($("#trayek_read").val() == '') {
                        setTimeout(function() {
                            $("#trayek_read").focus();
                        }, 1);
                    } else if ($("#rutelintas_read").val() == '') {
                        setTimeout(function() {
                            $("#rutelintas_read").focus();
                        }, 1);
                    } else if ($("#rutelintas_kembali_read").val() == '') {
                        setTimeout(function() {
                            $("#rutelintas_kembali_read").focus();
                        }, 1);
                    } else if ($("#kode_tanggal_mulai").val() == '') {
                        setTimeout(function() {
                            $("#kode_tanggal_mulai").focus();
                        }, 1);
                    } else if ($("#kode_tanggal_akhir").val() == '') {
                        setTimeout(function() {
                            $("#kode_tanggal_akhir").focus();
                        }, 1);
                    }

                    $("#form1").validate({
                        rules: {
                            kode_tanggal: 'required',
                            noijin_trayek: 'required',
                            kode_diberikan: 'required',
                            kode_alamat: 'required',
                            // select_no_kend: 'required',
                            kode_daya: 'required',
                            select_pd_trayek: 'required',
                            select_rute_brkt: 'required',
                            select_rute_kembali: 'required',
                            kode_tanggal_mulai: 'required',
                            kode_tanggal_akhir: 'required',
                        },
                        comment: {
                            required: true
                        }
                    }).form();
                    if ($("#form1").valid()) {
                        $.ajax({
                            url: '<?php echo base_url(); ?>index.php/angkutan/ijentrayek/entry_data',
                            method: "POST",
                            dataType: "json",
                            data: data,
                            cache: false,
                            processData: false,
                            success: function(data) {
                                if (data == "success") {
                                    $('#grid_tab_view').trigger('reloadGrid');
                                    $.alert.open('Data Ijin Trayek', '<center>Data berhasil disimpan. </center>', {
                                        OK: "OK"
                                    }, function(button) {
                                        if (button == 'OK') {
                                            $("#form1")[0].reset();
                                            $('#grid_tab_view').trigger('reloadGrid');
                                        } else {}
                                    });
                                } else {}
                            },
                            error: function() {
                                $.alert.open('Data Ijin Trayek', '<center>Data gagal disimpan.</center>', {
                                    OK: "OK",
                                }, function(button) {
                                    if (button == 'OK') {
                                        location.reload();
                                    } else {}
                                });
                            }
                        });
                    }
                    // else{
                    // 	$.alert.open('Data Ijin Trayek','Please complete the form.');
                    // }
                },
                error: function() {}
            });
        })

        $("#save1").click(function() {
            var data = $("#form2").serialize();
            if ($("#form2").valid()) {
                coba = JSON.stringify(jQuery("#grid_detail_item").getDataIDs());
                obj = JSON.parse(coba);
                panjang = obj.length;
                for (i = 0; i < panjang; i++) {
                    coba = JSON.stringify(jQuery("#grid_detail_item").getDataIDs());
                    obj = JSON.parse(coba);

                    var data_detail = JSON.parse(JSON.stringify(jQuery("#grid_detail_item").getRowData(obj[i])));
                    $.ajax({
                        url: '<?php echo base_url() ?>index.php/angkutan/ijentrayek/entry_data',
                        method: "POST",
                        dataType: "json",
                        data: data_detail,
                        success: function(data) {
                            $.alert.open('Master Data Ijen Trayek', '<center>Data Telah Tersimpan </center>', {
                                OK: "OK"
                            }, function(button) {
                                if (button == 'OK') {
                                    $("#form2")[0].reset();
                                    // $('#search_cwo_type, #search_vendor, #search_pic').val(null).trigger("change");
                                    jQuery("#grid_detail_item").jqGrid("clearGridData");
                                    // $('#grid_view_header').trigger('reloadGrid');

                                    // jQuery("#grid_view_detail").jqGrid('setGridParam', {
                                    //     datatype: 'json',
                                    //     url: '<?php echo base_url(); ?>index.php/angkutan/bengkel/grid_view_detail?search_nomor_pangkalan=' + "",
                                    // }).jqGrid('setCaption', 'Detail Pangkalan Ojek :').trigger("reloadGrid", [{
                                    //     page: 0
                                    // }]);
                                } else {}
                            });
                        },
                        error: function() {
                            $.alert.open('Master Data Ijen Trayek', '<center>Failed to save</center>', {
                                OK: "OK",
                            }, function(button) {
                                if (button == 'OK') {
                                    location.reload();
                                } else {}
                            });
                        }
                    });
                }

            }
        });

        //--------------------------------------------- SECTION 2 --------------------------------------------

        function format_lintas(cellvalue, options, rowObject) {
            if (cellvalue != '') {
                var nilai = Number(cellvalue);
                return nilai;
                // return nilai + " Km";
            } else {
                return '';
            }
        }

        $("#fileexcel").change(function(e) {
            var fileName = e.target.files[0].name;
            var filesize = e.target.files[0].size;
            // $("#filenamepdf").val(fileName);
            if (filesize < 0) {
                alert('Error');
                document.getElementById("uploadFileDoc").value = "";
                document.getElementById("fileexcel").value = "";
                document.getElementById("sts_doc_uploadcek").checked = false;
                return false;
            } else {
                document.getElementById("uploadFileDoc").value = this.value;
                document.getElementById("sts_doc_uploadcek").checked = true;
            }

            var file = e.target.files[0];
            // input canceled, return
            if (!file) return;

            var FR = new FileReader();
            FR.onload = function(e) {

                /* convert data to binary string */
                var data = new Uint8Array(e.target.result);
                var arr = new Array();
                for (var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
                var bstr = arr.join("");

                /* Call XLSX */
                var workbook = XLSX.read(bstr, {
                    type: "binary"
                });

                /* DO SOMETHING WITH workbook HERE */
                var first_sheet_name = workbook.SheetNames[0];
                /* Get worksheet */
                var worksheet = workbook.Sheets[first_sheet_name];
                var myData = XLSX.utils.sheet_to_json(worksheet, {
                    raw: true
                });

                for (i = 0; i < myData.length; i++) {
                    coba = JSON.stringify(jQuery("#grid_detail_item").getDataIDs());
                    obj = JSON.parse(coba);
                    var panjang = obj.length;


                    panjanglistsum = panjang + 1
                    jQuery("#grid_detail_item").jqGrid('addRowData', panjanglistsum, myData[i]);

                }

                // coba = JSON.stringify(jQuery("#grid_detail_item").getDataIDs());
                // obj = JSON.parse(coba);
                // var panjanglistsum = obj.length;



                // for(var i=0;i<myData.length;i++) {
                // 	$("#grid_detail_item").jqGrid('addRowData', i, myData[i]);
                // }

            };
            FR.readAsArrayBuffer(file);
        });
        $("#formatexcel").click(function() {
            window.open("<?php echo base_url(); ?>assets/sample_excel/sampleijentrayek.xlsx");
        });


        function excelDate(cellvalue, options, rowObject) {
            var date = new Date(Math.round((cellvalue - (25567 + 1)) * 86400 * 1000));
            var converted_date = date.toISOString().split('T')[0];
            return converted_date;
        }

        $("#search_noijin_trayek").keyup(function() {
            setTimeout(function() {
                var text = $("#search_noijin_trayek").val();
                var postdata = $("#grid_tab_view").jqGrid('getGridParam', 'postData');
                $.extend(postdata, {
                    filters: 'kode_nip',
                    searchField: 'kode_nip',
                    searchOper: 'bw',
                    search_noijin_trayek: text,
                });
                $("#grid_tab_view").jqGrid('setGridParam', {
                    search: text.length > 0,
                    postData: postdata
                });
                $("#grid_tab_view").trigger("reloadGrid", [{
                    page: 0
                }]);
            }, 25);
        });

        $.lastSelectedRow = null;
        $("#grid_tab_view").jqGrid({
            url: '<?php echo base_url(); ?>index.php/angkutan/ijentrayek/grid_view',
            datatype: "json",
            height: 'auto',
            width: 800,
            shrinkToFit: false,
            rownumbers: true,
            colModel: [{
                    label: 'Lastupdate',
                    name: 'lastupdate',
                    index: 'lastupdate',
                    editable: false,
                    width: 100,
                    align: "right",
                    hidden: true,
                    key: true
                },
                {
                    label: 'Tanggal',
                    name: 'kode_tanggal',
                    index: 'kode_tanggal',
                    editable: true,
                    width: 150,
                },
                {
                    label: 'No. Ijin Trayek',
                    name: 'noijin_trayek',
                    index: 'no_ijin_trayek',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Diberikan Kepada',
                    name: 'kode_diberikan',
                    index: 'kode_diberikan',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Alamat',
                    name: 'kode_alamat',
                    index: 'kode_alamat',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Nomor Kendaraan',
                    name: 'select_no_kend',
                    index: 'select_no_kend',
                    editable: true,
                    width: 150
                },
                {
                    label: 'No. Uji',
                    name: 'nouji_read',
                    index: 'nouji_read',
                    editable: true,
                    width: 100
                },
                {
                    label: 'Merk',
                    name: 'merk_read',
                    index: 'merk_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Tahun Pembuatan',
                    name: 'thnpem_read',
                    index: 'thnpem_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'No. Mesin',
                    name: 'nomes_read',
                    index: 'nomes_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'No. Rangka',
                    name: 'norangka_read',
                    index: 'norangka_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Daya Angkut',
                    name: 'kode_daya',
                    index: 'kode_daya',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Kode Trayek',
                    name: 'select_pd_trayek',
                    index: 'select_pd_trayek',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Nama Trayek',
                    name: 'trayek_read',
                    index: 'trayek_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Rute Berangkat',
                    name: 'rutelintas_read',
                    index: 'rutelintas_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Rute Kembali',
                    name: 'rutelintas_kembali_read',
                    index: 'rutelintas_kembali_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Tanggal Mulai',
                    name: 'kode_tanggal_mulai',
                    index: 'kode_tanggal_mulai',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Sampai Tanggal',
                    name: 'kode_tanggal_akhir',
                    index: 'kode_tanggal_akhir',
                    editable: true,
                    width: 150
                },
            ],
            editurl: "<?php echo base_url(); ?>index.php/angkutan/ijentrayek/edit",
            rowNum: 10,
            rowList: [10, 20, 30, 100],
            caption: "Display Data Ijin Trayek",
            viewrecords: true,
            sortname: 'no_ijin_trayek',
            sortorder: "asc",
            pager: 'pager_tab_view'
        });
        jQuery("#grid_tab_view").jqGrid('navGrid', '#pager_tab_view', {
            view: false,
            edit: false,
            add: false,
            del: false,
            search: false,
            refreshtext: 'Reload',
        });
        jQuery("#grid_tab_view").jqGrid('inlineNav', "#pager_tab_view", {
            edit: true,
            add: false,
            save: true,
            edittext: "Edit",
            savetext: "Save",
            canceltext: "Cancel",
        });

        $.lastSelectedRow = null;
        $("#grid_detail_item").jqGrid({
            // url: '<?php echo base_url(); ?>index.php/contoh/cwo/grid_detail_item',
            datatype: 'json',
            // data: mydata,
            height: 'auto',
            width: 900,
            shrinkToFit: false,
            // mtype: "GET",
            rownumbers: true,
            // enabletoolstips: true,
            colModel: [{
                    label: 'Lastupdate',
                    name: 'lastupdate',
                    index: 'lastupdate',
                    editable: false,
                    width: 100,
                    align: "right",
                    hidden: true,
                    key: true
                },
                {
                    label: 'Tanggal',
                    name: 'kode_tanggal',
                    index: 'kode_tanggal',
                    editable: true,
                    width: 150,
                    formatter: excelDate
                },
                {
                    label: 'No. Ijin Trayek',
                    name: 'noijin_trayek',
                    index: 'no_ijin_trayek',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Diberikan Kepada',
                    name: 'kode_diberikan',
                    index: 'kode_diberikan',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Alamat',
                    name: 'kode_alamat',
                    index: 'kode_alamat',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Nomor Kendaraan',
                    name: 'select_no_kend',
                    index: 'select_no_kend',
                    editable: true,
                    width: 150
                },
                {
                    label: 'No. Uji',
                    name: 'nouji_read',
                    index: 'nouji_read',
                    editable: true,
                    width: 100
                },
                {
                    label: 'Merk',
                    name: 'merk_read',
                    index: 'merk_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Tahun Pembuatan',
                    name: 'thnpem_read',
                    index: 'thnpem_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'No. Mesin',
                    name: 'nomes_read',
                    index: 'nomes_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'No. Rangka',
                    name: 'norangka_read',
                    index: 'norangka_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Daya Angkut',
                    name: 'kode_daya',
                    index: 'kode_daya',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Kode Trayek',
                    name: 'select_pd_trayek',
                    index: 'select_pd_trayek',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Nama Trayek',
                    name: 'trayek_read',
                    index: 'trayek_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Rute Berangkat',
                    name: 'rutelintas_read',
                    index: 'rutelintas_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Rute Kembali',
                    name: 'rutelintas_kembali_read',
                    index: 'rutelintas_kembali_read',
                    editable: true,
                    width: 150
                },
                {
                    label: 'Tanggal Mulai',
                    name: 'kode_tanggal_mulai',
                    index: 'kode_tanggal_mulai',
                    editable: true,
                    width: 150,
                    formatter: excelDate
                },
                {
                    label: 'Sampai Tanggal',
                    name: 'kode_tanggal_akhir',
                    index: 'kode_tanggal_akhir',
                    editable: true,
                    width: 150,
                    formatter: excelDate
                },
            ],
            rowNum: 10,
            rowList: [10, 20, 30, 100],
            caption: "Detail Item",
            viewrecords: true,
            sortname: 'no_ijin_trayek',
            sortorder: "asc",
            pager: 'pager_detail_item',
            beforeSelectRow: function(rowid) {
                if ($("#grid_detail_item").jqGrid("getGridParam", "selrow") === rowid) {
                    $("#grid_detail_item").jqGrid("resetSelection");
                } else {
                    return true;
                }
            }
            // 'cellEdit': true,
            // 'cellsubmit' : 'clientArray',
            // editurl: 'clientArray'
        });
        jQuery("#grid_detail_item").jqGrid('navGrid', "#pager_detail_item", {
            view: false,
            edit: false,
            add: false,
            del: false,
            search: false,
            refreshtext: 'Reload',
        });
        jQuery("#grid_detail_item").jqGrid('inlineNav', "#pager_detail_item", {
            edit: false,
            add: false,
            save: false,
            cancel: false,
            edittext: "Edit ",
            savetext: "Save",
            canceltext: "Cancel",
        });

        $("#grid_detail_item").navButtonAdd("#pager_detail_item", {
            caption: "Delete",
            title: "Delete Selected Data",
            buttonicon: "ui-icon ui-icon-trash",
            onClickButton: function() {
                var gr = jQuery("#grid_detail_item").jqGrid('getGridParam', 'selrow');
                var noijin_trayek = $('#grid_detail_item').getCell(gr, 'noijin_trayek');
                if (gr != null) {
                    $.alert.open('Master Ijen Trayek', '<center>Hapus Nomor Ijin Trayek dengan nomor <b>"' + noijin_trayek + '"</b> ?</center> ', {
                        OK: "OK",
                        NO: "NO"
                    }, function(button) {
                        if (button == 'OK') {
                            var rowId = jQuery("#grid_detail_item").jqGrid('getGridParam', 'selrow');
                            $('#grid_detail_item').jqGrid('delRowData', rowId);
                        } else {}
                    });
                } else {
                    $.alert.open('Master Ijen Trayek', '<center>Select Row to Delete</center>', {
                        OK: "OK",
                    }, function(button) {
                        // var rowId = jQuery("#grid_detail_item").jqGrid('getGridParam', 'selarrrow');
                        // for (  var i = rowId.length-1; i>=0; i--) {
                        // 	$('#grid_detail_item').delRowData(rowId[i]);
                        // }
                    });
                }
            },
            position: "last"
        });


        $("#delete").click(function() {
            var gr = jQuery("#grid_tab_view").jqGrid('getGridParam', 'selrow');
            var kode_noijintrayek = $('#grid_tab_view').getCell(gr, 'noijin_trayek');
            var lastupdate = $('#grid_tab_view').getCell(gr, 'lastupdate');
            if (gr != null) {
                $.alert.open('Data Ijin Trayek', '<center>Hapus No. Ijin Trayek <b>"' + kode_noijintrayek + '"</b> ?</center>', {
                    OK: "OK",
                    NO: "NO"
                }, function(button) {
                    if (button == 'OK') {
                        $.ajax({
                            url: '<?php echo base_url(); ?>index.php/angkutan/ijentrayek/edit',
                            method: 'POST',
                            dataType: "json",
                            data: {
                                'lastupdate': lastupdate,
                                oper: 'del'
                            },
                            success: function(data) {
                                // console.log(data);
                                if (data == "success") {
                                    $('#grid_tab_view').trigger('reloadGrid');
                                    $.alert.open('Data Ijin Trayek', '<center>Data berhasil dihapus.</center>', {
                                        OK: "OK"
                                    }, function(button) {
                                        if (button == 'OK') {} else {}
                                    });
                                } else {}
                            },
                            error: function() {
                                $.alert.open('Data Ijin Trayek', '<center>Data gagal dihapus.</center>', {
                                    OK: "OK"
                                }, function(button) {
                                    if (button == 'OK') {
                                        location.reload();
                                    } else {}
                                });
                            }
                        });
                    } else {}
                });
            } else {
                $.alert.open('Data Ijin Trayek', '<center>Pilih baris yang akan dihapus.</center>', {
                    OK: "OK",
                }, function(button) {

                });
            }
        });

        $("#exit1, #exit2").click(function() {
            $.alert.open('confirm', '<b>Apakah anda yakin ingin keluar?', function(button) {
                if (button == 'yes') {
                    location.href = '<?php echo base_url(); ?>index.php/welcome/home';
                } else if (button == 'no') {} else {}
            })
        });


        $('#select_no_kend').select2({
            placeholder: 'Cari No. Kendaraan',
            allowClear: true,
            theme: 'classic',
            width: "100%",
            ajax: {
                url: '<?php echo base_url("index.php/angkutan/ijentrayek/find_no_kend") ?>',
                dataType: 'json',
                data: function(params) {
                    var query = {
                        search: params.term,
                        page: params.page || 1
                    }
                    return query;
                },
                processResults: function(data, params) {
                    params.page = params.page || 1;
                    // console.log(data.count_filtered);
                    return {
                        results: data.results,
                        pagination: {
                            more: (params.page * 10) < data.count_filtered
                        }
                    }
                }
            }
        }).on('change', function(e) {
            var select_no_kend = $("#select_no_kend").val();
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/angkutan/ijentrayek/find_no_kend_detail',
                method: "POST",
                dataType: "json",
                data: {
                    'select_no_kend': select_no_kend
                },
                success: function(data) {
                    $("#nouji_read").val(data[0].no_uji).focusout();
                    $("#merk_read").val(data[0].merk_kendaraan).focusout();
                    $("#thnpem_read").val(data[0].thn_pembuatan).focusout();
                    $("#nomes_read").val(data[0].no_mesin).focusout();
                    $("#norangka_read").val(data[0].no_rangka).focusout();
                }
            });
        }).on('select2:clearing', function(e) {
            $('#select_no_kend').val(null).trigger('change');
            $("#nouji_read").val("");
            $("#merk_read").val("");
            $("#thnpem_read").val("");
            $("#nomes_read").val("");
            $("#norangka_read").val("");
        });

        $('#select_pd_trayek').select2({
            placeholder: 'Cari Trayek',
            allowClear: true,
            theme: 'classic',
            width: "100%",
            ajax: {
                url: '<?php echo base_url("index.php/angkutan/ijentrayek/find_pd_trayek") ?>',
                dataType: 'json',
                data: function(params) {
                    var query = {
                        search: params.term,
                        page: params.page || 1
                    }
                    return query;
                },
                processResults: function(data, params) {
                    params.page = params.page || 1;
                    // console.log(data.count_filtered);
                    return {
                        results: data.results,
                        pagination: {
                            more: (params.page * 10) < data.count_filtered
                        }
                    }
                }
            }
        }).on('change', function(e) {
            var select_pd_trayek = $("#select_pd_trayek").val();
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/angkutan/ijentrayek/find_pd_trayek_detail',
                method: "POST",
                dataType: "json",
                data: {
                    'select_pd_trayek': select_pd_trayek
                },
                success: function(data) {
                    $("#trayek_read").val(data[0].trayek_pp).focusout();
                    $("#rutelintas_read").val(data[0].rute_berangkat).focusout();
                    $("#rutelintas_kembali_read").val(data[0].rute_kembali).focusout();
                }
            });
        }).on('select2:clearing', function(e) {
            $('#select_pd_trayek').val(null).trigger('change');
            $("#trayek_read").val("");
            $("#rutelintas_read").val("");
            $("#rutelintas_kembali_read").val("");
        });
        //-------------------------------------------- SCRIB CLASS -------------------------------------------
        $(".dateymd").val("").datepicker({
            dateFormat: "yy-mm-dd",
            changeYear: true,
            changeMonth: true,
            onClose: function(dateText, inst) {
                $('.dateymd').focusout() //Added to remove focus from datepicker input box on selecting date
            }
        }).inputmask("y-m-d", {
            "oncomplete": function() {},
            "oncleared": function() {},
            "clearIncomplete": true
        });

        $(".datey").val("").datepicker({
            dateFormat: "yy",
            changeYear: true,
            changeMonth: true,
            onClose: function(dateText, inst) {
                $('.datey').focusout() //Added to remove focus from datepicker input box on selecting date
            }
        }).inputmask("y", {
            "oncomplete": function() {},
            "oncleared": function() {},
            "clearIncomplete": true
        });

        $(".dateymdnow").val("").datepicker({
            dateFormat: "yy-mm-dd",
            changeYear: true,
            changeMonth: true,
            onClose: function(dateText, inst) {
                $('.dateymdnow').focusout() //Added to remove focus from datepicker input box on selecting date
            }
        }).inputmask("y-m-d", {
            "oncomplete": function() {},
            "oncleared": function() {},
            "clearIncomplete": true
        }).datepicker("setDate", new Date()).change();

        $(".dateymdhm").val("").datetimepicker({
            dateFormat: "yy-mm-dd HH-mm",
            changeYear: true,
            changeMonth: true,
            onClose: function(dateText, inst) {
                $('.dateymdhm').focusout() //Added to remove focus from datepicker input box on selecting date
            }
        }).inputmask("y-m-d h-m", {
            "oncomplete": function() {},
            "oncleared": function() {},
            "clearIncomplete": true
        });

        $(".dateym").val("").datepicker({
            dateFormat: "yy-mm",
            changeYear: true,
            changeMonth: true,
            onClose: function(dateText, inst) {
                $('.dateym').focusout() //Added to remove focus from datepicker input box on selecting date
            }
        }).inputmask("y-m", {
            "oncomplete": function() {},
            "oncleared": function() {}
        });

        //-------------------------------------------- END SCRIPT -------------------------------------------
    });
</script>
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }
</style>

<div class="row">
    <div id="formx">
        <div class="row">
            <div class="twelve columns">
                <div class="ui-jqgrid-titlebar ui-widget-header ui-corner-tl ui-corner-tr ui-helper-clearfix">
                    <h6>&nbsp;<img src="<?php echo base_url(); ?>images/crud/home.png">&nbsp;Data Ijin Trayek</h6>
                </div>
                <hr>
                <div class="section-container tabs" data-section="tabs">
                    <section>
                        <p id="section1" class="title" data-section-title><a href="#section1"><i>Entry Data</i></a></p>
                        <div class="content" data-section-content>
                            <form id="form1" action="" method="post">
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Tanggal <span style="color: red;font-size: 22px;">*</span> :</span></label>
                                    </div>
                                    <div class="large-3 columns">
                                        <input class="dateymdnow" type="text" placeholder=" YYYY-MM-DD " name="kode_tanggal" id="kode_tanggal" tabindex="2" />
                                    </div>
                                    <div class="large-1 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Nomor Ijen Trayek <span style="color: red;font-size: 22px;">*</span> :</span></label>
                                    </div>
                                    <div class="large-3 columns">
                                        <input type="text" style="background:#DCDCDC" name="noijin_trayek" id="noijin_trayek" tabindex="2" readonly />
                                    </div>
                                    <div class="large-1 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Diberikan Kepada <span style="color: red;font-size: 22px;">*</span> :</span></label>
                                    </div>
                                    <div class="large-6 columns">
                                        <input type="text" name="kode_diberikan" id="kode_diberikan" tabindex="2" />
                                    </div>
                                    <div class="large-1 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Alamat <span style="color: red;font-size: 22px;">*</span> :</label>
                                    </div>
                                    <div class="large-6 columns">
                                        <textarea type="text" name="kode_alamat" id="kode_alamat" tabindex="7"></textarea>
                                    </div>
                                    <div class="large-3 columns">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">No. Kendaraan <span style="color: red;font-size: 22px;">*</span> :</label>
                                    </div>
                                    <div class="large-4 columns">
                                        <select name="select_no_kend" id="select_no_kend" tabindex="3"></select>
                                    </div>
                                    <div class="large-1 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">No. Uji :</label>
                                    </div>
                                    <div class="large-4 columns">
                                        <input type="text" style="background:#DCDCDC" name="nouji_read" id="nouji_read" readonly />
                                    </div>
                                    <div class="large-1 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Merk :</label>
                                    </div>
                                    <div class="large-4 columns">
                                        <input type="text" style="background:#DCDCDC" name="merk_read" id="merk_read" readonly />
                                    </div>
                                    <div class="large-3 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Tahun Pembuatan :</label>
                                    </div>
                                    <div class="large-3 columns">
                                        <input type="text" style="background:#DCDCDC" name="thnpem_read" id="thnpem_read" readonly />
                                    </div>
                                    <div class="large-1 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">No. Mesin :</label>
                                    </div>
                                    <div class="large-4 columns">
                                        <input type="text" style="background:#DCDCDC" name="nomes_read" id="nomes_read" readonly />
                                    </div>
                                    <div class="large-1 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">No Rangka :</label>
                                    </div>
                                    <div class="large-4 columns">
                                        <input type="text" style="background:#DCDCDC" name="norangka_read" id="norangka_read" readonly />
                                    </div>
                                    <div class="large-1 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Daya Angkut <span style="color: red;font-size: 22px;">*</span> :</span></label>
                                    </div>
                                    <div class="large-4 columns">
                                        <input type="text" name="kode_daya" id="kode_daya" tabindex="2" />
                                    </div>
                                    <div class="large-1 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Pada Trayek <span style="color: red;font-size: 22px;">*</span> :</label>
                                    </div>
                                    <div class="large-4 columns">
                                        <select name="select_pd_trayek" id="select_pd_trayek" tabindex="3"></select>
                                    </div>
                                    <div class="large-1 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Trayek :</label>
                                    </div>
                                    <div class="large-6 columns">
                                        <input type="text" style="background:#DCDCDC" name="trayek_read" id="trayek_read" readonly />
                                    </div>
                                    <div class="large-3 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Rute Berangkat :</label>
                                    </div>
                                    <div class="large-6 columns">
                                        <input type="text" style="background:#DCDCDC" name="rutelintas_read" id="rutelintas_read" readonly />
                                    </div>
                                    <div class="large-3 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Rute Kembali :</label>
                                    </div>
                                    <div class="large-6 columns">
                                        <input type="text" style="background:#DCDCDC" name="rutelintas_kembali_read" id="rutelintas_kembali_read" readonly />
                                    </div>
                                    <div class="large-3 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Tanggal Berlaku Mulai <span style="color: red;font-size: 22px;">*</span> :</span></label>
                                    </div>
                                    <div class="large-3 columns">
                                        <input class="dateymdnow" type="text" placeholder=" YYYY-MM-DD " name="kode_tanggal_mulai" id="kode_tanggal_mulai" tabindex="2" />
                                    </div>
                                    <div class="large-1 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Sampai Tanggal <span style="color: red;font-size: 22px;">*</span> :</span></label>
                                    </div>
                                    <div class="large-3 columns">
                                        <input class="dateymdnow" type="text" placeholder=" YYYY-MM-DD " name="kode_tanggal_akhir" id="kode_tanggal_akhir" tabindex="2" />
                                    </div>
                                    <div class="large-1 columns">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-2 columns">
                                        <label></label>
                                    </div>
                                    <div class="large-10 columns">
                                        <br>
                                        <a href="javascript:void(0);" id="save" class="btnx" style="padding: 9px 17px; font-size: 14px;" tabindex="8">Simpan</a>
                                        <a href="javascript:void(0);" id="exit1" class="btnx" style="padding: 9px 17px; font-size: 14px;" tabindex="9">Keluar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>

                    <section hidden="true">
                        <p id="section2" class="title" data-section-title><a href="#section2"><i>Entry Data by Excel</i></a></p>
                        <div class="content" data-section-content>
                            <form id="form2">

                                <div class="row">
                                    <div class="large-3 columns">
                                        <label class="right inline"><span class="radius secondary label">Import Data Excel (.xml or .xmls) :</span></label>
                                    </div>
                                    <div class="large-5 columns">
                                        <div class="custom-file-upload">
                                            <input id="uploadFileDoc" name="uploadFileDoc" placeholder="No File Chosen" disabled="disabled" />
                                            <div class="fileUpload ">
                                                <span class="btnx">Choose File</span>
                                                <input type="file" class="upload" id="fileexcel" name="fileexcel" accept=".xls, .xlsx" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-1 columns">
                                        <label class="right inline"><span class="radius secondary label">Status Upload :</label>

                                    </div>
                                    <div class="large-1 columns">
                                        <label class="container">
                                            <input type="checkbox" id="sts_doc_uploadcek" readonly disabled="disabled" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="large-4 columns">
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="large-12 columns">
                                        <center>
                                            <table id="grid_detail_item"></table>
                                            <div id="pager_detail_item"></div>
                                        </center>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="large-2 columns">
                                        <label></label>
                                    </div>
                                    <div class="large-10 columns">
                                        <br>
                                        <a href="javascript:void(0);" id="formatexcel" type="submit" class="btnx" style="padding: 9px 17px; font-size: 14px;" tabindex="6">Format Excel</a>
                                        <a href="javascript:void(0);" id="save1" class="btnx" style="padding: 9px 17px; font-size: 14px;" tabindex="8">Simpan</a>
                                        <a href="javascript:void(0);" id="exit1" class="btnx" style="padding: 9px 17px; font-size: 14px;" tabindex="9">Keluar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>

                    <section>
                        <p id="section3" class="title" data-section-title><a href="#section3"><i>View</i></a></p>
                        <div class="content" data-section-content>

                            <div class="row">
                                <div class="large-12 columns">
                                    <div class="large-4 columns">
                                        <label class="right inline"><span class="radius secondary label">Search No. Ijin Trayek : </label>
                                    </div>
                                    <div class="large-3 columns">
                                        <input type="text" id="search_noijin_trayek" class='iblue' name="search_noijin_trayek" tabindex="1" />
                                    </div>
                                    <hr>
                                    <div class="large-1 columns"></div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="large-12 columns">
                                    <center>
                                        <table id="grid_tab_view"></table>
                                        <div id="pager_tab_view"></div>
                                    </center>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <div class="row">
                                <div class="large-2 columns">
                                    <label></label>
                                </div>
                                <div class="large-10 columns">
                                    <br>
                                    <a href="javascript:void(0);" id="delete" class="btnx" style="padding: 9px 17px; font-size: 14px;">Hapus</a>
                                    <a href="javascript:void(0);" id="exit2" class="btnx" style="padding: 9px 17px; font-size: 14px;">Keluar</a>
                                </div>
                            </div>
                        </div>

                </div>
                </section>
            </div>
        </div>
    </div>
</div>
</div>

<style>
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked~.checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }

    .fileUpload {
        position: relative;
        overflow: hidden;
        margin-top: -24px;
        margin-left: 180px;
    }

    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
</style>