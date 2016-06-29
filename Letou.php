<?php

function getNumber($letouNum, $letouCount){
    return $letouNum[rand(0,$letouCount)];
}

// 樂透號碼 1~49
for($i = 1; $i <= 49; $i++){
    $letou[] = $i;
}

// 選出6個號碼
for ($i = 1; $i <= 6; $i++){
    
    // 取得一個號碼
    $open[] = getNumber($letou, count($letou)-1);
    $key = array_search($open[$i-1], $letou); // 取得選出號碼的鍵值
    
    // 將陣列最後一個數值取代$letou[$key]中的數值
    $letou[$key] = $letou[count($letou)-1]; 
    
    // 移除陣列最後一個
    unset($letou[count($letou)-1]); 
    
}

natsort($open);

foreach($open as $value){
    echo substr($value+100,1,2) . "<br>";
}


?>
