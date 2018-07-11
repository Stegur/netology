<?php
if (!empty($_POST)) {
    if (array_key_exists('age', $_POST)) {
        $options = [
            'options' => [
                'min_range' => 18,
                'max_range' => 90
            ]
        ];
        $validate = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT, $options);
        if ($validate) {
            echo 'Возраст: ' . $validate;
        } else {
            echo 'Данные введены неверно';
        }
    }
}
echo htmlspecialchars($_POST['name']);
echo $_POST['surname'];
?>
