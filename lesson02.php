﻿<?php

$score =39; 

if ($score >= 80) {
    echo("80点以上は「優」です。");

} else if ($score >= 60) {
    echo("60点以上は「良」です。");

}else if ($score >= 40) {
    echo("40点以上は「可」です。");

}else {
    echo("40点以下は「不可」です。");
}

//動作確認
//100、80点どちらも「80点以上は「優」です。」表示確認済。
//79、60点どちらも「60点以上は「良」です。」表示確認済。
//40点は「40点以上は「可」です。」表示確認済。
//0、39点は「"40点以下は「不可」です。」表示確認済。

// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、下記のフォーマットで出力するプログラムを作ってください。
// ○○点は「○」です。

//いくつかのケースで動作確認を行ってください。
?>