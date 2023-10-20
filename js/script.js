onload(initialize());

function initialize() {
    document.getElementById("filter").onkeyup = filterRows;
}


function filterRows() {
    var filter = document.getElementById("filter").value.toLowerCase();
}

    if (filter == "") {
        $('.users tr').each(function (i, row) {
            if (i > 0) {
                $(row).show();
            }
        });
    } else {
        $('.users tr').each(function (i, row) {

            if (i > 0) {
                var $row = $(row);
                var name = $row.find('td:nth-child(1)').text().toLowerCase();
                var email = $row.find('td:nth-child(2)').text().toLowerCase();

                if (name.indexOf(filter) >= 0 || email.indexOf(filter) >= 0) {
                    $row.show();
                } else {
                    $row.hide();
                }
            }
        });

}

function clearInputField() {
    var inputField = document.getElementById("search");
    inputField.value = "";
}