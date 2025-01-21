import DataTable from 'datatables.net-dt';
 
import DataTable from 'datatables.net-dt';
import 'datatables.net-responsive-dt';
let table = new DataTable('#users-table',{
    responsive : true
});

$(document).ready(function () {
    $('#users-table').DataTable();
})

alert('ok');