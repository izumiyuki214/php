<?php
function text($score1,$score2,$score3)
{
    $total = $score1+$score2+$score3;
    if ($total > 210) {
        $text = "合格";
    }else {
        $text = "不合格";
    }
    return "合計点は" . $total . "なので" . $text . "です";
}

echo text(60,61,90);