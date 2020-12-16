$(document).ready(function() {
	
	// Call ajax
	const ajax = new XMLHttpRequest();
	const method = "GET";
	const url = "sender.php";
	const asynchronous = true;
	let data;

	ajax.open(method, url, asynchronous);

	// Sending request
	ajax.send();

	// Receiving response from sender.php
	ajax.onreadystatechange = function() {
	    if(this.readyState == 4 && this.status == 200) {
	        // Converting JSON back to array
	        data = JSON.parse(this.responseText);
	        console.log(data);
	        renderTable(data);
	    }
	}

	function renderTable(data) {
		// html value for tbody
	    let html = "";
	    for(let i = 0; i < data.length; i++) {
	        html += "<tr>";
	        html += "<td>" + data[i].emp_name + "</td>";
	        html += "<td>" + data[i].birth_date + "</td>";
	        html += "<td>" + data[i].gender + "</td>";
	        html += "<td>" + data[i].hire_date + "</td>";
	        html += "<td>" + data[i].title + "</td>";
	        html += "<td>" + data[i].dept_name + "</td>";
	        html += "<td>" + data[i].salary + "</td>";
	        html += "<td><a href='employee.php?emp_no=" + data[i].emp_no + "'>Edit</a></td>";
	        html += "</tr>";
	    }

	    $('#data').append(html);
	    addDataTable();
	}

	function addDataTable() {
		$('#datatable').css("display","table");
		$('#loading').css("display","none");

	    let table = $('#datatable').DataTable({
	    	"lengthMenu": [[10, 20], [10, 20]],
	    	columns: [
    			null,
    			null,
    			{ orderable: false },
    			null,
    			null,
    			null,
    			{ orderable: false },
    			{ orderable: false }
  			],
	    	"bSortClasses": false
	    });
	    
	}
	
} );
