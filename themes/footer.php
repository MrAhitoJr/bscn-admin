</div>
</body>
<script src="https://kit.fontawesome.com/1eec2efa50.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/jqc-1.12.4/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.js">
</script>
<script>
$(document).ready(function() {
    var t = $('#subscribers_list').DataTable({
        stateSave: true,
        responsive: true,
        info: "true",
        dom: 'Blfrtip',
        buttons: {
            "dom": {
                "button": {
                    "tag": "button",
                    "className": "exportBtn _btn"
                }
            },
            "buttons": ['excelHtml5', 'print']
        },
        lengthMenu: [
            [10, 25, 50, 100, 1000, -1],
            [10, 25, 50, 100, 1000, 'All']
        ],
        "language": {
            processing: '<br/><br/><br/><br/>'
        },
        scrollY: "820px",
        scrollCollapse: true,
        columnDefs: [{
            "className": "dt-center",
            "targets": "_all"

        }, {
            searchable: false,
            orderable: false,
            targets: [0, 11],
        }, ],
        order: [
            [1, 'asc']
        ],
        processing: true,
        serverSide: true,
        ajax: "../include/fetch.inc.php",

    });

    t.on('order.dt search.dt', function() {
        let i = 1;
        t.cells(null, 0, {
            search: 'applied',
            order: 'applied'
        }).every(function(cell) {
            this.data(i++);
        });
    }).draw();

});

function reloadTD() {
    $('#subscribers_list').DataTable().ajax.reload()
}
function showOpts(a){
    // alert("vieW"+a);
    $(".vieW"+a).addClass("viewOpt");
}

window.onclick = function(e) {
    if (!e.target.matches('.sett')) {
        var myDropdown = document.getElementById("vieWList");
        // if (myDropdown.classList.contains('viewOpt')) {
            myDropdown.classList.remove('viewOpt');
        // }
    }
}
</script>

</html>
