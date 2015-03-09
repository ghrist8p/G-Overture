<div class="messagesWrapper">
    <div id="conversations">
        <hr/>
        {conversations}
        <div class="conversation" status="{status}">
            <div class="topic">
                {topic}
            </div>
            <hr/>
            <div class="messages">
                {conversation}
                <div class="{type}" title="date sent: {dateSent}">
                    <p>{author}:<br/>{message}</p>
                </div>
                {/conversation}
            </div>
            <hr/>
            <div class="answer">
                
            </div>
            <hr/>

        </div>
        {/conversations}
    </div>
    <!--<div><hr class="verticalRule" /></div>-->
    <div id="notes">
        <hr/>
        {notes}
        <div class="note" title="date sent: {dateSent}">
            <p>{author}:<br/>{message}</p>
        </div>
        <hr/>
        {/notes}
    </div>
</div>
