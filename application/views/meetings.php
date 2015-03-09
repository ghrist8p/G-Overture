<div id="meetings">
    <hr/>
    {meetings}
        <div class="meeting">
            <div class="meetingDetails">
                <p>Meeting with {personMet} <br/> {dateMeeting} @ {meetingLoc}</p>
            </div>
            <div class="meetingStatus">
                <img  class="status" src="assets/img/{status}.svg" alt="{status}"/>
            </div>
        </div>
        <hr/>
    {/meetings}
</div>
