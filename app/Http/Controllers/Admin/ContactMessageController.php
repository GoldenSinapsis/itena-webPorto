<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactMessageController extends Controller
{
    /**
     * GET /admin/messages
     */
    public function index(): View
    {
        $messages = ContactMessage::query()
            ->latest()
            ->paginate(10);

        return view('admin.messages.index', compact('messages'));
    }

    /**
     * GET /admin/messages/{message}
     */
    public function show(ContactMessage $message): View
    {
        $message->markAsRead();

        return view('admin.messages.show', compact('message'));
    }

    /**
     * DELETE /admin/messages/{message}
     */
    public function destroy(ContactMessage $message): RedirectResponse
    {
        $message->delete();

        return redirect()
            ->route('admin.messages.index')
            ->with('success', 'Pesan berhasil dihapus.');
    }
}
