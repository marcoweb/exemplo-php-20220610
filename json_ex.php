<?php
$vetor = [
    [
        "id" => 1,
        "nome" => "UM"
    ],
    [
        "id" => 2,
        "nome" => "DOIS"
    ],
];
?>
<h1>String</h1>
<pre>
    <?= implode(';' , $vetor) ?>
</pre>

<h1>JSON<h1>
<pre>
    <?= json_encode($vetor) ?>
</pre>