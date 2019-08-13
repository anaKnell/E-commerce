<div class="container m-auto rounded " style="background-color:#f5f0ea">
	
{foreach from=$categories key=row item=value}

<div class="row m-4 border-bottom">
	<div class="col-7 m-4">
		<h2 class="p-2" style="font-family: 'Shadows Into Light', cursive; text-align:center;">{$value->Name}</h2>
		<p class="p-2">{$value->Text}</p>
		<a class="btn border rounded" href="?page=Produits&id_cat={$value->id_cat}" role="button" style="color:#bd7344">Voir notre sélection</a>
	</div>
	<div class="col-3 m-2">
		<img src="{$value->Img}" alt="image category" class="rounded">
	</div>
</div>
{/foreach}
</div>