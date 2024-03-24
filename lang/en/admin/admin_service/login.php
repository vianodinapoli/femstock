<?php
/**
 * Provides translations for my login and reset password page.
 */
return [
    /*login.blade.php page*/
    'login_header'                       => 'Entra',
    'email'                              => 'Email',
    'email_placeholder'                  => 'Digite o email',
    'required_email'                     => 'Email obrigatório',
    'password'                           => 'Senha',
    'password_placeholder'               => 'Inserir Senha',
    'required_password'                  => 'Senha Obrigatória!',
    'forgot_password'                    => 'Esqueceu a senha?',
    'remember_me'                        => 'Lembrar-me',
    'login_button'                       => 'Entrar',
    /*login controller*/
    'login_failed'                       => 'Acesso Negado, Tente novamente',
    /*enter_email.blade.php page*/
    'reset_header'                       => 'Repor a senha',
    'reset_password_button'              => 'Repor a senha',
    'back_to_login'                      => 'Voltar a entrar',
    /*forgot password controller*/
    'reset_email_sent_success'           => 'Check your inbox for password reset link!',
    'reset_email_send_fail'              => 'Email não existe!',
    /*EmailResetLink*/
    'reset_email_subject'                => 'Password reset is requested for your account!',
    /*send_email.blade.php*/
    'reset_email_reset_message_header'   => 'You have requested to reset your password',
    'reset_email_reset_message_body'     => 'To reset your password, click the following link and follow the instructions.',
    'reset_email_password_button'        => 'Repor a senha',
    /*reset.blade.php*/
    'reset_title'                        => 'Repor a senha',
    'password_confirmation_reset_button' => 'Repor a senha',
    'password_confirmation'              => 'Confirmar senha',
];
