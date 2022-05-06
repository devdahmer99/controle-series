<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NovaSerie extends Mailable
{
    use Queueable, SerializesModels;

    public $temporadas;
    public $qtdEpisodios;
    public $episodios;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($temporadas, $qtdEpisodios, $episodios)
    {
        $this->temporadas = $temporadas;
        $this->qtdEpisodios = $qtdEpisodios;
        $this->episodios = $episodios;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.serie.nova-serie');
    }
}
