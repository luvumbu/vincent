var section = new Vue({
	el: '#section',
	data: {
		plus: "",
		folder: "",
		search: "",
		addproduit: "display_none",
		search:"display_none",
		folder:"display_none",
		produit_nom:"display_none",
		produit_ref:"display_none",
		liste_produit_nom:"display_none",
		liste_produit_ref:"display_none"
	},
	methods: {
	
		ajax: function(id,link){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById(id).innerHTML =
					this.responseText;
				}
			};
			xhttp.open("GET", link, true);
			xhttp.send();
		},
		alldisplay: function() {
			this.folder="display_none";
			this.search="display_none";
			this.addproduit = "display_none";
			this.produit_ref="display_none";
			this.folder="display_none";
			this.liste_produit="display_none";
			this.produit_nom="display_none";	
			this.liste_produit_nom="display_none";	
			this.liste_produit_ref="display_none";	
		},
		click_plus: function () {
			this.alldisplay();
			this.addproduit = "";

		},
		click_produit_nom:function() {
			this.alldisplay();
			this.folder="options2 select2";			
			this.produit_nom="options2";
		//	this.ajax("produit_nom","view/section/produit_nom.php");
		this.liste_produit_nom="liste_produit_nom";
					
		},
		click_produit_ref:function() {
			this.alldisplay();
			this.folder="options2 select2";		
			this.	produit_ref	="options2";	
			//this.ajax("produit_ref","view/section/produit_ref.php");	
			this.liste_produit_ref="liste_produit_nom";		
			
		},

		click_folder: function () {
			this.alldisplay();
			this.liste_produit="select2 options2";		 
      this.folder="options2 select2";
		
		},

		click_search: function () {
			this.alldisplay();
			this.liste_produit="select2 options2";		 
			this.search="";			 
		},
		produit_nom_s: function(moi) {

	
		
			console.log(moi.target.id);
		},

		valider: function () {
			
			var ok = new Information("class/php/send_data.php"); // création de la classe 
			var ref_1 = document.getElementById("ref1");
			var ref_2 = document.getElementById("ref2");
			var ref_3 = document.getElementById("ref3");

			var fab_1 = document.getElementById("fab1");
			var fab_2 = document.getElementById("fab2");
			var fab_3 = document.getElementById("fab3");

			var prix_1 = document.getElementById("prix1");
			var prix_2 = document.getElementById("prix2");
			var prix_3 = document.getElementById("prix3");

			var verif = false;
			var verif2 = false;
			var verif3 = false;
			if (ref_1.value != "" && ref_2.value != "" && ref_3.value != "") {
				verif = true;
				if (fab_1.value != "" && fab_2.value != "" && fab_3.value != "") {
					verif2 = true;
				} else {
					alert("comleter le nom du fabricant");
				}
				if (prix_1.value != "" && prix_2.value != "" && prix_3.value != "") {
					verif3 = true;
				} else {
					alert("comleter le prix");
				}
				if (verif2 == true && verif3 == true) {
					/* Lors que toutes les valeurs sont ok */

					ok.add("fab1", fab_1.value); // ajout de l'information pour lenvoi 
					ok.add("ref1", ref_1.value); // ajout de l'information pour lenvoi 
					ok.add("prix1", prix_1.value); // ajout de l'information pour lenvoi 

					ok.add("fab2", fab_2.value); // ajout de l'information pour lenvoi 
					ok.add("ref2", ref_2.value); // ajout de l'information pour lenvoi 
					ok.add("prix2", prix_2.value); // ajout de l'information pour lenvoi 

					ok.add("fab3", fab_3.value); // ajout de l'information pour lenvoi 
					ok.add("ref3", ref_3.value); // ajout de l'information pour lenvoi 
					ok.add("prix3", prix_3.value); // ajout de l'information pour lenvoi 

					//	console.log(ok.info()); // demande l'information dans le tableau
					ok.push(); // envoie l'information au code pkp 
				}
			}
			if (verif == true) {

			} else {
				if (ref_1.value != "" && ref_2.value != "") {
					if (fab_1.value != "" && fab_2.value != "") {
						verif2 = true;
					} else {
						alert("Completer nom du fabricant");
						verif2 = false;
					}
					if (prix_1.value != "" && prix_2.value != "") {
						verif3 = true;
					} else {
						alert("Completer le prix");
						verif3 = false;
					}
					if (verif2 == true && verif3 == true) {

						ok.add("fab1", fab_1.value); // ajout de l'information pour lenvoi 
						ok.add("ref1", ref_1.value); // ajout de l'information pour lenvoi 
						ok.add("prix1", prix_1.value); // ajout de l'information pour lenvoi 

						ok.add("fab2", fab_2.value); // ajout de l'information pour lenvoi 
						ok.add("ref2", ref_2.value); // ajout de l'information pour lenvoi 
						ok.add("prix2", prix_2.value); // ajout de l'information pour lenvoi 
						//	console.log(ok.info()); // demande l'information dans le tableau
						ok.push(); // envoie l'information au code pkp 
					}

				} else {
					alert("Impossible d'envoyer le formulaire completer les tableau");
				}
			}

		}
	}
})