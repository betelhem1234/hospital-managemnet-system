
var submit=document.getElementById("submit");
submit.addEventListner("click",displaydetails);
var row=1;

function displayDetails(){
	 var first_name=document.getElementById(first_name).value;
	 var last_name=document.getElementById(last_name).value;
	  var age=document.getElementById(age).value;
	   
	    var phone_number=document.getElementById(phone_number).value;
		var email_address=document.getElementById(email_address).value;
		
		if(!first_name|| !email_address || ){
			alert("please fill the boxes");
			return;
			
		}
		var display=document.getElementById("display");
		var cell1=newRow.insertcell(0);
		var cell2=newRow.insertcell(1);
		var cell3=newRow.insertcell(2);
		var cell4=newRow.insertcell(3);
		var cell5=newRow.insertcell(4);
		var cell6=newRow.insertcell(5);
		row++;
		
		cell1.innerHtml=first_name;
		cell1.innerHtml=last_name;
		cell1.innerHtml=age;	
		cell1.innerHtml=phone_number;	
		cell1.innerHtml=email_Address;	
		
		
}