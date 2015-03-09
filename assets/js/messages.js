$( function()
{
    $("div.conversation[status='closed']>div.answer").next("hr").remove();
    $("div.conversation[status='closed']>div.answer").remove();
} );