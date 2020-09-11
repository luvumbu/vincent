<div id="addproduit" v-bind:class="addproduit">
	<div class="inputs">
		<div>
			<div>
				Nom
			</div>
			<div>
				<input type="text" placeholder="Nom du produit" id="nom1">
				<input type="text" placeholder="Nom du produit" id="nom2">
				<input type="text" placeholder="Nom du produit" id="nom3">
			</div>
		</div>
		<div>
			<div>
				Réf
			</div>
			<div>
				<input type="text" placeholder="Réference produit" id="ref1">
				<input type="text" placeholder="Réference produit" id="ref2">
				<input type="text" placeholder="Réference produit" id="ref3">
			</div>
		</div>

		<div>
			<div>
				Prix
			</div>
			<div>
				<input type="number" placeholder="Prix du produit" id="prix1">
				<input type="number" placeholder="Prix du produit" id="prix2">
				<input type="number" placeholder="Prix du produit" id="prix3">
			</div>
		</div>
	</div>
	<div class="valider"onclick="action()">
		Valider
	</div>
</div>
