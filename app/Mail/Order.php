<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class Order extends Mailable
{
    use Queueable, SerializesModels;

    protected array $formData;
    protected Collection $products;
    protected int $total;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct ($formData, $products, $total)
    {
        $this->formData = $formData;
        $this->total = $total;
        $this->products = $products;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build ()
    {
        return $this->view('front.mail.order')
            ->from('berdygulov1997@yandex.kz', 'TI Organic Web site')
            ->subject('Заказ отправлен')
            ->with([
                'formData' => $this->formData,
                'products' => $this->products,
                'total'    => $this->total,
            ]);
    }
}
