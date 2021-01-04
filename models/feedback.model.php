<?php

function getFeedbacks($itemId) {
    $itemId = checkValue($itemId);
    return getResponseArray("SELECT * FROM feedbacks WHERE item_id={$itemId} ORDER BY date");

}


function leaveFeedback($itemId, $text, $user) {
    $itemId = checkValue($itemId);
    $user = checkValue($user);
    $text = checkValue($text);

    return getResponse("INSERT INTO feedbacks (item_id, feedback_text, username) VALUES ({$itemId}, '{$text}', '{$user}')");
}
