var section = new Vue({
	el: '#section',
	data: {

	},
	methods: {
		click_plus:function(){
			this.ajax("selector0","class/php/add_data.php"); 
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