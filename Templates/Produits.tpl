<div class="row justify-content-around rounded m-4" style="background-color:#f5f0ea">           
    {foreach from=$products key=k item=value }
        <div class="card d-flex border m-3" style="background-color:#f5f0ea">
            <div>
                <img class="card-img-top" src="{$value->Img}" alt="Card image cap" style=" height:20rem;">
            </div>
            <div class="card-body" style="background-color:#ede2d5">
                <h5 class="card-title" style="font-family: 'Shadows Into Light', cursive; text-align:center;">{$value->Name}</h5>
                <a href="?page=vueProduit&id_product={$value->id}" class="btn rounded" style="color:#bd7344">Voir plus</a>
            </div>
        </div>
    {/foreach}
</div>
