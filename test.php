<?php
function makeUserNo()
{
    $userNo = rand(10,22);
    return $userNo;
}
print_r(makeUserNo());
