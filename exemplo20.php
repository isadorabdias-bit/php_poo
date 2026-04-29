<?php

interface INotificador{
    public function enviar($destinatario, $mensagem);
}

// Implementar: email
class NotificadorEmail implements INotificador{
    public function enviar($destinatario, $mensagem)
    {
        echo "Enviando email para $destinatario: $mensagem";
    }
}

// Implementar: SMS
class NotificadorSMS implements INotificador{
    public function enviar($destinatario, $mensagem)
    {
        echo "Enviando SMS para $destinatario: $mensagem";
    }
}

// Implementar: Whatsapp
class NotificadorWhatsapp implements INotificador{
    public function enviar($destinatario, $mensagem)
    {
        echo "Enviando Whatsapp para $destinatario: $mensagem";
    }
}

// Classe que usa a interface
class SistemaDeNotificacao{
    private $notificador;

    public function __construct(INotificador $notificador)
    {
        $this->notificador = $notificador;
    }

    public function notificar($destinatario, $mensagem)
    {
        $this->notificador->enviar($destinatario, $mensagem);
    }
}   
$sistemaEmail = new SistemaDeNotificacao(new NotificadorEmail());
$sistemaSMS = new SistemaDeNotificacao(new NotificadorSMS());
$sistemaWhatsapp = new SistemaDeNotificacao(new NotificadorWhatsapp());

$sistemaEmail->notificarUsuario("joao@email.com", "Seu pedido foi confirmado!");
$sistemaSMS->notificarUsuario("17997651234", "Seu pedido foi confirmado!");
$sistemaWhatsapp->notificarUsuario("17997651234", "Seu pedido foi confirmado!");