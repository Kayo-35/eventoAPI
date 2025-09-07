<?php
class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return mb_strlen($value, "UTF-8") >= $min &&
            mb_strlen($value, "UTF-8") <= $max;
    }
    public static function email($email): bool
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public static function senha(string $password): bool
    {
        //Caracteres especiais
        $caracteres = [
            "!",
            "@",
            "#",
            "$",
            "%",
            "^",
            "&",
            "*",
            "(",
            ")",
            "-",
            "_",
            "+",
            "=",
            "[",
            "]",
            "{",
            "}",
            "\\",
            "|",
            ";",
            ":",
            "'",
            "\"",
            ",",
            "<",
            ".",
            ">",
            "/",
            "?",
            "`",
            "~",
        ];

        //Quantifica caracteres da senha, eliminando espaços indevidos
        $password = trim($password);
        $qtCaracteres = strlen($password);

        //Quantidade de caracteres únicos da senha
        $caracteresSenha = count_chars($password, 3);

        //Verifica se existe algum caractere único mandatório na senha
        foreach ($caracteres as $caractere) {
            $especial = strpos($password, $caractere);
            if ($especial !== false) {
                break;
            }
        }
        //Verifica a existência de ao menos um único caractere maisculo na string
        $array = str_split($caracteresSenha);
        $letters = array_filter($array, function ($value) use ($caracteres) {
            return !is_numeric($value) && !in_array($value, $caracteres);
        });

        $upper = false; //Em caso da senha não ter sido fornecida com caracteres especiais
        foreach ($letters as $letter) {
            $upper = $letter == strtoupper($letter);
            if ($upper === true) {
                break;
            }
        }
        //Verifica se a quantidade de caracteres únicos é ao menos 4, se possui ao menos 8 caracteres de extensão e se possui algum caractere especial.
        if (
            strlen($caracteresSenha) < 4 ||
            $qtCaracteres < 8 ||
            $especial === false ||
            $upper === false
        ) {
            return false;
        }
        return true;
    }
}
?>
