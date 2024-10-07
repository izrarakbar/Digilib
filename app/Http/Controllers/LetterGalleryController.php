<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Letter;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LetterGalleryController extends Controller
{
    public function incoming(Request $request): View
    {
        return view('pages.gallery.incoming', [
            'data' => Attachment::incoming()->render($request->search),
            'search' => $request->search,
        ]);
    }

    public function outgoing(Request $request): View
    {
        return view('pages.gallery.outgoing', [
            'data' => Attachment::outgoing()->render($request->search),
            'search' => $request->search,
        ]);
    }

    public function perdir(Request $request): View
    {
        return view('pages.gallery.perdir', [
            'data' => Attachment::perdir()->render($request->search),
            'search' => $request->search,
        ]);
    }

    public function kpts(Request $request): View
    {
        return view('pages.gallery.kpts', [
            'data' => Attachment::kpts()->render($request->search),
            'search' => $request->search,
        ]);
    }

    public function pemberitahuan(Request $request): View
    {
        return view('pages.gallery.pemberitahuan', [
            'data' => Attachment::pemberitahuan()->render($request->search),
            'search' => $request->search,
        ]);
    }

    public function opaktag(Request $request): View
    {
        return view('pages.gallery.pakta', [
            'data' => Attachment::pakta()->render($request->search),
            'search' => $request->search,
        ]);
    }
    
    public function notulen(Request $request): View
    {
        return view('pages.gallery.notulen', [
            'data' => Attachment::notulen()->render($request->search),
            'search' => $request->search,
        ]);
    }
}
