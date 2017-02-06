/*********************************************************************************************************************
 * Post login (Crew)
 *********************************************************************************************************************/
$("#postChatRoom").click(function () {
    var user_id1 = $("#user_id1").val();
    var user_id2 = $("#user_id2").val();

    $.ajax({
        url: 'chatrooms/postChatRoom',
        type: 'GET',
        data: {
            "_token": token,
            "chatroom_status": 1,
            "chatroom_type": 1,
            "notes": 'testing chatroom',
            "user_id1": user_id1,
            "user_id2": user_id2
        },
        cache: false,
        success: function(response)
        {
            console.log("//// Post Chatroom:");
            console.log(response);
        }
    });

});