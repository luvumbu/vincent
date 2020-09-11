var header = new Vue({
	el: '#header',
	data: {
		connexion_button_class: "display_none",
		mail: "mail",
		password: "password", 
		value_mail:"",
		value_password:""
	},
	methods: {
		connexion_button: function () {
			console.log("Connexion button");
		},

		mail_key: function () {
			var mmon_mail = document.getElementById(this.mail);
			var mmon_password = document.getElementById(this.password);
			console.log(mmon_password.value.length);
			if (mmon_mail.value.length >2 && mmon_password.value.length > 2) {
		 
				var ok = new Informationx("class/php/mydata.php");


				if(mmon_mail.value=="ndenga" && mmon_password.value=="123"){
					console.log(ok.info()); // demande l'information dans le tableau
					ok.push(); // envoie l'information au code pkp 		
		
					setTimeout(function(){ 
						document.location.reload(true);
					
					}, 300);
				}


    if(mmon_mail.value=="jpp@asporquet.fr" && mmon_password.value=="c03m06l17"){
			console.log(ok.info()); // demande l'information dans le tableau
			ok.push(); // envoie l'information au code pkp 		

			setTimeout(function(){ 
				document.location.reload(true);
			
			}, 300);
		}
				
			}

		} , 
		
	}
})


