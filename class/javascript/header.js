class Information {
	constructor(link) {
		this.link = link;
		this.identite = new FormData();
		this.req = new XMLHttpRequest();
		this.identite_tab = [
		];
	}
	info() {
		return this.identite_tab; 
	}
	add(info, text){
		this.identite_tab.push([info, text]); 
	}
	push(){
		for(var i = 0 ; i < this.identite_tab.length ; i++){
			console.log(this.identite_tab[i][1]);
			this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);		 
		}		
		this.req.open("POST",this.link);
		this.req.send(this.identite);
		console.log(this.req);	 
	}
}



class Informationx {
	constructor(link) {
		this.link = link;
		this.identite = new FormData();
		this.req = new XMLHttpRequest();
		this.identite_tab = [
		];
	}
	info() {
		return this.identite_tab; 
	}
	add(info, text){
		this.identite_tab.push([info, text]); 
	}
	push(){
		for(var i = 0 ; i < this.identite_tab.length ; i++){
			console.log(this.identite_tab[i][1]);
			this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);		 
		}		
		this.req.open("POST",this.link);
		this.req.send(this.identite);
		console.log(this.req);	 
	}
}
 


function action() {
	
	

var nom1 = document.getElementById("nom1");
var nom2 = document.getElementById("nom2");
var nom3 = document.getElementById("nom3");

var ref1 = document.getElementById("ref1");
var ref2 = document.getElementById("ref2");
var ref3 = document.getElementById("ref3");

var prix1 = document.getElementById("prix1");
var prix2 = document.getElementById("prix2");
var prix3 = document.getElementById("prix3");	



let nom_verif_2=false; 
let ref_verif_2=false; 
let prix_verif_2=false;
let verif_2_final=false;



if(nom1.value=="" || nom2.value==""){
}
else {
	nom_verif_2=true; 
}

if(ref1.value=="" || ref2.value==""  ){
}
else {
	ref_verif_2=true;
}
if(prix1.value=="" || prix2.value=="" ){
}
else {
	prix_verif_2=true; 
}

if(nom_verif_2==true && ref_verif_2==true && prix_verif_2 ==true){
	verif_2_final=true; 
}
else {
	verif_2_final=false; 
}


if(verif_2_final==true){
	if(nom1.value=="" || nom2.value=="" || nom3.value =="" ){
	  
		nom_verif_2=false;
	}
	else {
		 
		nom_verif_2=true; 
	}
	
	
	if(ref1.value=="" || ref2.value=="" || ref3.value =="" ){
	 
		ref_verif_2=false; 
	}
	else {
	 
		ref_verif_2=true;
	}
	if(prix1.value=="" || prix2.value=="" || prix3.value =="" ){
	 
		prix_verif_2=false; 
	}
	else {
		 
		prix_verif_2=true;
	}
	if(nom_verif_2==true && ref_verif_2==true && prix_verif_2==true){
		
		console.log("Form 3 ok "); 





		var ok = new Information("class/php/send_data.php"); // création de la classe 
	ok.add("nom1", nom1.value); // ajout de l'information pour lenvoi 
	ok.add("nom2", nom2.value); // ajout de l'information pour lenvoi 
	ok.add("nom3", nom3.value); // ajout de l'information pour lenvoi 

	ok.add("ref1", ref1.value); // ajout de l'information pour lenvoi 
	ok.add("ref2", ref2.value); // ajout de l'information pour lenvoi 
	ok.add("ref3", ref3.value); // ajout de l'information pour lenvoi 

	ok.add("prix1", prix1.value); // ajout de l'information pour lenvoi 
	ok.add("prix2", prix2.value); // ajout de l'information pour lenvoi 
	ok.add("prix3", prix3.value); // ajout de l'information pour lenvoi 

	console.log(ok.info()); // demande l'information dans le tableau
	ok.push(); // envoie l'information au code pkp 


	setTimeout(function(){ 
		location.reload(); 
	
	}, 300);



	}
	else {
		var ok = new Information("class/php/send_data.php"); // création de la classe 
	ok.add("nom1", nom1.value); // ajout de l'information pour lenvoi 
	ok.add("nom2", nom2.value); // ajout de l'information pour lenvoi 

	ok.add("ref1", ref1.value); // ajout de l'information pour lenvoi 
	ok.add("ref2", ref2.value); // ajout de l'information pour lenvoi 

	ok.add("prix1", prix1.value); // ajout de l'information pour lenvoi 
	ok.add("prix2", prix2.value); // ajout de l'information pour lenvoi 

	console.log(ok.info()); // demande l'information dans le tableau
	ok.push(); // envoie l'information au code pkp 
	setTimeout(function(){ 
		location.reload(); 
	
	}, 300);

	}
	
	}
	else {
		alert("Completer les valeurs") ; 
	}
}






