<?php

return [

    /*
    |--------------------------------------------------------------------------
    | System Messages
    |--------------------------------------------------------------------------
    */

    'register' => [
        'error' => 'Houve um erro na tentativa de registro, tente novamente mais tarde.',
        'success' => 'Sua Conta foi criada com sucesso.',
        'confirm' => 'Sua conta foi confirmada com sucesso.',
        'confirm_error' => 'Seu usuário já foi ativado anteriormente.',
    ],
    'auth' => [
        'invalid_data' => 'Dados inválidos.',
        'invalid_data_try_again' => 'Dados inválidos. Tente Novamente.',
        'unverified_user' => 'Email ainda não verificado, você deve confirmar sua conta para logar.',
        'passport_error' => 'Problemas no servidor de autenticação (passport). Tente Novamente mais tarde.',
        'logout_success' => 'Você deslogou com sucesso.'
    ],
    'user_forgot_password' => [
        'success' => 'Foi enviado um email de recuperação.',
    ],
    'user_reset_password' => [
        'success' => 'Sua senha foi criada com sucesso.',
        'mail_token_invalid' => 'O token enviado é inválido.'
    ]

];
