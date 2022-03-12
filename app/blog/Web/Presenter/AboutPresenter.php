<?php

declare(strict_types=1);

namespace Blog\Web\Presenter;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Pandawa\Component\Presenter\NameablePresenterInterface;
use Pandawa\Component\Presenter\NameablePresenterTrait;
use Pandawa\Component\Presenter\PresenterInterface;

/**
 * @author  Arif Setianto <arifsetiantoo@gmail.com>
 */
final class AboutPresenter implements PresenterInterface, NameablePresenterInterface
{
    use NameablePresenterTrait;

    public function render(Request $request)
    {
        return view('blog-web::pages.about');
    }
}