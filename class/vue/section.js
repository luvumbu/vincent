var section = new Vue({
	el: '#section',
	data: {

	},
	methods: {
		click_plus:function(){
			this.ajax("selector0","class/php/add_data.php"); 
		} , 
		click_folder:function(){
			this.ajax("selector0","class/php/select_list.php"); 
		} , 
		ajax: function(id,source) {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById(id).innerHTML =
					this.responseText;
				}
			};
			xhttp.open("GET", source, true);
			xhttp.send();
		} , 
 
	}
})



 function ajax(id,source) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById(id).innerHTML =
			this.responseText;
		}
	};
	xhttp.open("GET", source, true);
	xhttp.send();
}


function click_selection(_this)
{
 
var select = new Information("class/php/click_selection.php"); // création de la classe 
select.add("id", _this.id); // ajout de l'information pour lenvoi  
console.log(select.info()); // demande l'information dans le tableau
select.push(); // envoie l'information au code pkp 
setTimeout(function(){ 
	ajax("selector0","class/php/click_selection_all.php"); 
}, 300);
}