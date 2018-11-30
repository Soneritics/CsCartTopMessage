{assign var="soneriticstopmessage" value=soneritics_get_top_message()}

{if $soneriticstopmessage}
    <div class="soneritics-top-message">
        {$soneriticstopmessage nofilter}
    </div>
{/if}