<?php
class CifraCesar
{
    public function criptografa($textoNormal, $chave = 42)
    {
        return $this->executar($textoNormal, $chave);
    }

    public function decriptografa($textoCriptografado, $chave = -42)
    {
        return $this->executar($textoCriptografado, -$chave);
    }

    protected function executar($str, $chave)
    {
        return implode('', array_map(function ($caracter) use ($chave) {
            return $this->embaralha($caracter, $chave);
        }, str_split($str)));
    }

    protected function embaralha($caracter, $embaralhar)
    {
        $embaralhar = $embaralhar % 25;
        $ascii = ord($caracter);
        $embaralhado = $ascii + $embaralhar;
        if ($ascii >= 65 && $ascii <= 90) {
            return chr($this->wrapUppercase($embaralhado));
        }
        if ($ascii >= 97 && $ascii <= 122) {
            return chr($this->wrapLowercase($embaralhado));
        }
        return chr($ascii);
    }

    protected function wrapUppercase($ascii)
    {
        if ($ascii < 65) {
            $ascii = 91 - (65 - $ascii);
        }

        if ($ascii > 90) {
            $ascii = ($ascii - 90) + 64;
        }
        return $ascii;
    }

    protected function wrapLowercase($ascii)
    {
        if ($ascii < 97) {
            $ascii = 123 - (97 - $ascii);
        }

        if ($ascii > 122) {
            $ascii = ($ascii - 122) + 96;
        }
        return $ascii;
    }
}
